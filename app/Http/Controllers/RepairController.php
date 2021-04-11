<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Repair;
use App\Models\Client;

class RepairController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $repairs = Repair::orderBy('created_at', 'desc')->get();
        $clients = Client::all();
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

        return $this->show($request->get('clientId'));
    }

    public function show($clientId)
    {
        $repairs = Repair::orderBy('created_at','desc')->get();
        $client = Client::find($clientId);

        $statusList = ["En espera", "En proceso", "En tapicería", "Terminada", "Entregada"];
        return view('repair.show', ['repairs' => $repairs], ['client' => $client])->with("statusList", $statusList);
    }

    public function listInProcess()
    {

        $repairs = Repair::all()->where('status', 'En proceso');
        $clients = Client::all();
        return view('repair.index', ['repairs' => $repairs], ['clients' => $clients]);
    }
    public function listInTapestry()
    {

        $repairs = Repair::all()->where('status', 'En tapicería');
        $clients = Client::all();
        return view('repair.index', ['repairs' => $repairs], ['clients' => $clients]);
    }
    public function listOnHold()
    {

        $repairs = Repair::all()->where('status', 'En espera');
        $clients = Client::all();
        return view('repair.index', ['repairs' => $repairs], ['clients' => $clients]);
    }
    public function listFinished()
    {

        $repairs = Repair::all()->where('status', 'Terminada');
        $clients = Client::all();
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

   
}
