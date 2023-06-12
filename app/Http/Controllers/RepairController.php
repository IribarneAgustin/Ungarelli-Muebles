<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Repair;
use App\Models\Client;
use Illuminate\Support\Facades\Cache;

class RepairController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {   
        // Check if the data is already cached
        if (Cache::has('repair_index_data')) {
            $data = Cache::get('repair_index_data');
        } else {
            // Data is not cached, retrieve it from the database
            $repairs = Repair::orderBy('created_at', 'desc')->get();
            $clients = Client::all();

            // Store the data in the cache
            $data = [
                'repairs' => $repairs,
                'clients' => $clients,
            ];
            Cache::put('repair_index_data', $data, 43200); // Cache for 12 hours
        }

        return view('repair.index', ['repairs' => $data['repairs']], ['clients' => $data['clients']]);
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

        return $this->show($request->get('clientId'));
    }

    public function show($clientId)
    {
        $repairs = Repair::orderBy('created_at','desc')->get();
        $client = Client::find($clientId);

        $statusList = ["En espera", "En proceso", "En tapicería", "Terminada", "Entregada","Herrero", "No se hace"];
        return view('repair.show', ['repairs' => $repairs], ['client' => $client])->with("statusList", $statusList);
    }

    public function listInProcess()
    {

        $repairs = Repair::all()->where('status', 'En proceso');
        $clients =  $this->clientsCache();
        return view('repair.index', ['repairs' => $repairs], ['clients' => $clients]);
    }
    public function listInSmith()
    {

        $repairs = Repair::all()->where('status', 'Herrero');
        $clients = $this->clientsCache();
        return view('repair.index', ['repairs' => $repairs], ['clients' => $clients]);
    }
    public function listInTapestry()
    {

        $repairs = Repair::all()->where('status', 'En tapicería');
        $clients = $this->clientsCache();
        return view('repair.index', ['repairs' => $repairs], ['clients' => $clients]);
    }
    public function listOnHold()
    {

        $repairs = Repair::all()->where('status', 'En espera');
        $clients = $this->clientsCache();
        return view('repair.index', ['repairs' => $repairs], ['clients' => $clients]);
    }
    public function listFinished()
    {

        $repairs = Repair::all()->where('status', 'Terminada');
        $clients = $this->clientsCache();
        return view('repair.index', ['repairs' => $repairs], ['clients' => $clients]);
    }
    
    public function listAllButDelivered()
    {
        $repairs = Repair::all()->where('status', '!=','Entregada');
        $clients = $this->clientsCache();
        return view('repair.index', ['repairs' => $repairs], ['clients' => $clients]);
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

        return $this->show($repair->clientId);
    }

    public function destroy($id)
    {
        $repair = Repair::find($id);
        $repair->delete();
        return $this->show($repair->clientId);
    }

    public function changeStatus(Request $request)
    {

        $repair = Repair::find($request->get('id'));
        $repair->status = $request->get('status');
        $repair->save();
        return $this->show($repair->clientId);
    }
    
    private function clientsCache()
    {
        // Check if the clients data is already cached
        if (Cache::has('clients_data')) {
            $clients = Cache::get('clients_data');
        } else {
        // Clients data is not cached, retrieve it from the database
            $clients = Client::all()->toArray(); // Convert the collection to an array
            Cache::put('clients_data', $clients, 43200); // Cache the clients data for 12 hours
        }

        return $clients;
    }

   
}
