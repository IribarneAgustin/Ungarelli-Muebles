<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $clients = Client::all();
        return view('client.index', ['clients' => $clients]);
    }

    public function create()
    {
        return view('client.create');
    }

    public function store(Request $request)
    {
        $client = new Client();

        $client->name = $request->get('name');
        $client->phone = $request->get('phone');
        $client->timestamps = false;

        if ($request->email) {
            $client->email =  $request->get('email');
        }

        $client->save();

        return redirect('/clients');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $client = Client::find($id);
        return view('client.edit', ['client' => $client]);
    }

    public function update(Request $request, $id)
    {
        $client = Client::find($id);

        $client->name = $request->get('name');
        $client->phone = $request->get('phone');
        $client->timestamps = false;
        $client->email =  $request->get('email');


        $client->save();

        return redirect('/clients');
    }

    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();
        return redirect('/clients')->with('delete', 'ok');
    }
}
