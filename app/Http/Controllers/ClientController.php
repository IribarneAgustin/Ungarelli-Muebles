<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Cache;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $clients = $this->clientsCache();
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
            $client->email = $request->get('email');
        }

        $client->save();
        $this->updateClientsCache();

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
        $client->email = $request->get('email');


        $client->save();
        $this->updateClientsCache();

        return redirect('/clients');
    }

    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();
        $this->updateClientsCache();
        return redirect('/clients')->with('delete', 'ok');
    }

    private function clientsCache()
    {
        // Check if the clients data is already cached
        if (Cache::has('clients_data')) {
            $clients = Cache::get('clients_data');
        } else {
            // Clients data is not cached, retrieve it from the database
            $clients = Client::all();
            Cache::put('clients_data', $clients, 43200); // Cache the clients data for 12 hours
        }

        return $clients;
    }

    private function updateClientsCache()
    {

        Cache::forget('clients_data');
        $clients = Client::all();
        Cache::put('clients_data', $clients, 43200); // Cache the clients data for 12 hours
    }


}
