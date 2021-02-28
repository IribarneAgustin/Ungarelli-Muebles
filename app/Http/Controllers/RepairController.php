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
        $repairs = Repair::all();
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
        $repair->status = $request->get('status');
        $repair->description = $request->get('description');
        //  $repair->paymentSign = $request->get('payment sign');
        $repair->comfirmed = 0;

        $repair->save();

        return $this->show($request->get('clientId'));
    }

    public function show($clientId)
    {
        $repairs = Repair::all();
        $client = Client::find($clientId);
        return view('repair.show', ['repairs' => $repairs], ['client' => $client]);
    }

    public function listInProcess(){
        $repairs = Repair::all()->where('status','En proceso');
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

        $repair->save();

        return $this->show($repair->clientId);
    }

    public function destroy($id)
    {
        $repair = Repair::find($id);
        $repair->delete();
        return $this->show($repair->clientId);
    }
}
