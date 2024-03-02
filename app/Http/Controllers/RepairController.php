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
        $repairs = $this->getRepairsCache();
        $clients = $this->clientsCache();
        return view('repair.index', ['repairs' => $repairs], ['clients' => $clients]);

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
        $repairs = $this->getRepairsCache();
        $client = Client::find($clientId);

        $statusList = ["En espera", "En proceso", "En tapicería", "Terminada", "Entregada", "Herrero", "No se hace"];
        return view('repair.show', ['repairs' => $repairs], ['client' => $client])->with("statusList", $statusList);
    }

    public function listInProcess()
    {

        $repairs = Repair::all()->where('status', 'En proceso');
        $clients = $this->clientsCache();
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
        $repairs = Repair::all()->where('status', '!=', 'Entregada');
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

        return collect($clients);
    }

    private function getRepairsCache()
    {

        if (Cache::has('repairs_data')) {
            $repairs = Cache::get('repairs_data');
        } else {
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


}
