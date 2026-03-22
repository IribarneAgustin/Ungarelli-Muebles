<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Repair;
use App\Models\Client;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use Illuminate\Mail\Mailable;

class RepairController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['sendBackupEmail']]);
    }

    public function index()
    {
        $query = DB::table('repairs')
            ->join('clients', 'repairs.clientId', '=', 'clients.id')
            ->select('repairs.*', 'clients.name as client_name')
            ->orderBy('repairs.created_at', 'desc');

        if (request('search')) {
            $search = request('search');
            $query->where(function($q) use ($search) {
                $q->where('clients.name', 'like', '%' . $search . '%')
                  ->orWhere('repairs.description', 'like', '%' . $search . '%')
                  ->orWhere('repairs.job', 'like', '%' . $search . '%');
            });
        }

        $repairs = $query->paginate(50)->withQueryString();
        return view('repair.index', ['repairs' => $repairs]);

    }


    public function create(Request $request)
    {
        $clientId = $request->get('clientId');
        return view('repair.create', ['clientId' => $clientId]);
    }

    public function store(Request $request)
    {
        $repair = new Repair();
        $repair->clientId = $request->get('clientId');
        $repair->job = $request->get('job');
        $repair->comments = $request->get('comments');
        $repair->price = $request->get('price');
        $repair->status = $request->get('status');
        $repair->description = $request->get('description');
        $repair->paymentSign = $request->get('paymentSign');

        $repair->save();
        $this->updateRepairsCache();
        return $this->show($request->get('clientId'));
    }

    public function show($clientId)
    {
        $repairs = Repair::where('clientId', $clientId)
            ->orderBy('created_at', 'desc')
            ->get();
        $client = Client::findOrFail($clientId);

        $statusList = ["En espera", "En proceso", "En tapicería", "Terminada", "Entregada", "Herrero", "No se hace"];
        return view('repair.show', ['repairs' => $repairs, 'client' => $client])->with("statusList", $statusList);
    }

    private function baseQuery()
    {
        $query = DB::table('repairs')
            ->join('clients', 'repairs.clientId', '=', 'clients.id')
            ->select('repairs.*', 'clients.name as client_name')
            ->orderBy('repairs.created_at', 'desc');

        if (request('search')) {
            $search = request('search');
            $query->where(function($q) use ($search) {
                $q->where('clients.name', 'like', '%' . $search . '%')
                  ->orWhere('repairs.description', 'like', '%' . $search . '%')
                  ->orWhere('repairs.job', 'like', '%' . $search . '%');
            });
        }
        return $query;
    }

    public function listInProcess()
    {
        $repairs = $this->baseQuery()->where('repairs.status', 'En proceso')->paginate(50)->withQueryString();
        return view('repair.index', ['repairs' => $repairs]);
    }
    public function listInSmith()
    {
        $repairs = $this->baseQuery()->where('repairs.status', 'Herrero')->paginate(50)->withQueryString();
        return view('repair.index', ['repairs' => $repairs]);
    }
    public function listInTapestry()
    {
        $repairs = $this->baseQuery()->where('repairs.status', 'En tapicería')->paginate(50)->withQueryString();
        return view('repair.index', ['repairs' => $repairs]);
    }
    public function listOnHold()
    {
        $repairs = $this->baseQuery()->where('repairs.status', 'En espera')->paginate(50)->withQueryString();
        return view('repair.index', ['repairs' => $repairs]);
    }
    public function listFinished()
    {
        $repairs = $this->baseQuery()->where('repairs.status', 'Terminada')->paginate(50)->withQueryString();
        return view('repair.index', ['repairs' => $repairs]);
    }

    public function listAllButDelivered()
    {
        $repairs = $this->baseQuery()->where('repairs.status', '!=', 'Entregada')->paginate(50)->withQueryString();
        return view('repair.index', ['repairs' => $repairs]);
    }

    public function edit($id)
    {
        $repair = Repair::find($id);
        return view('repair.edit', ['repair' => $repair]);
    }

    public function update(Request $request, $id)
    {
        $repair = Repair::find($id);

        $repair->description = $request->get('description');
        $repair->paymentSign = $request->get('paymentSign');
        $repair->comments = $request->get('comments');
        $repair->price = $request->get('price');
        $repair->job = $request->get('job');


        $repair->save();
        $this->updateRepairsCache();

        return $this->show($repair->clientId);
    }

    public function destroy($id)
    {
        $repair = Repair::find($id);
        $repair->delete();
        $this->updateRepairsCache();
        return $this->show($repair->clientId);
    }

    public function changeStatus(Request $request)
    {

        $repair = Repair::find($request->get('id'));
        $repair->status = $request->get('status');
        $repair->save();
        $this->updateRepairsCache();
        return $this->show($repair->clientId);
    }

    
private function clientsCache()    {
        // Check if the clients data is already cached
        if (Cache::has('clients_data')) {
            $clients = Cache::get('clients_data');
        }
        else {
            // Clients data is not cached, retrieve it from the database
            $clients = Client::all()->toArray(); // Convert the collection to an array
            Cache::put('clients_data', $clients, 43200); // Cache the clients data for 12 hours
        }

        return collect($clients);    }

    private function getRepairsCache()
    {

        if (Cache::has('repairs_data')) {
            $repairs = Cache::get('repairs_data');
        }
        else {
            $repairs = Repair::orderBy('created_at', 'desc')->get();
            Cache::put('repairs_data', $repairs, 43200); // Cache data for 12 hours
        }

        return $repairs;

    }

    private function updateRepairsCache()
    {

        Cache::forget('repairs_data');
        $repairs = Repair::orderBy('created_at', 'desc')->get();
        Cache::put('repairs_data', $repairs, 43200); // Cache the clients data for 12 hours
    }


    public function sendBackupEmail()
    {
        $repairs = DB::table('repairs')
            ->join('clients', 'repairs.clientId', '=', 'clients.id')
            ->where('repairs.created_at', '>=', now()->subWeek())
            ->select(
            'repairs.id',
            'repairs.clientId',
            'clients.name as client_name',
            'clients.phone as client_phone',
            'repairs.created_at',
            'repairs.description',
            'repairs.job',
            'repairs.price',
            'repairs.comments',
            'repairs.status',
            'repairs.paymentSign'
        )
            ->get();

        // Datos para la vista del email
        $data = [
            'subject' => 'Backup semanal de reparaciones',
            'message' => 'Adjunto un excel con las reparaciones de la última semana.',
            'name' => 'Respaldo semanal',
            'email' => 'contacto@ungarellimuebles.com.ar',
        ];

        // Iniciar contenido del CSV
        $csvContent = "\"Cliente\",\"Teléfono\",\"Fecha\",\"Descripción\",\"Trabajo\",\"Precio\",\"Comentarios\",\"Estado\",\"Seña\"\n";

        // Agregar cada fila
        foreach ($repairs as $repair) {
            $csvContent .= "\"{$repair->client_name}\",\"{$repair->client_phone}\",\"{$repair->created_at}\",\"{$repair->description}\",\"{$repair->job}\",{$repair->price},\"{$repair->comments}\",\"{$repair->status}\",\"{$repair->paymentSign}\"\n";
        }

        $email = new class($data, $csvContent) extends Mailable {
            public $subject;
            public $contact;
            public $csvContent;

            public function __construct($contact, $csvContent)
            {
                $this->contact = $contact;
                $this->csvContent = $csvContent;
                $this->subject = $contact['subject'] ?? 'Backup';
            }

            public function build()
            {
                return $this->view('email.contact')
                ->with('contact', $this->contact)
                ->attachData($this->csvContent, 'reparaciones_backup.csv', [
                'mime' => 'text/csv',
                ])
                ->subject($this->subject);
            }
        };

        // Enviar email
        Mail::to('goungarelli@yahoo.com.ar')->send($email);

        return response()->json(['message' => 'Email enviado correctamente']);
    }

}
