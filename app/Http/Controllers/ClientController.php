<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use App\Http\Requests\Client\StoreRequest;
use App\Http\Requests\Client\UpdateRequest;

class ClientController extends Controller
{
    public function index(Request $request)
    {
        $nombre = $request->get('buscar-nombre');
        
        $cedula = $request->get('buscar-cedula');
       
        $clients = Client::nombres($nombre)->cedula($cedula)->paginate(5);
        
        return view('admin.client.index', compact('clients'));
      
    }

   
    public function create()
    {
        return view('admin.client.create');
    }

    
    public function store(StoreRequest $request)
    {
        Client::create($request->all());
        return redirect()->route('clients.index');

    }

    
    public function show(Client $client)
    {
        return view('admin.client.show', compact('client'));
    }

   
    public function edit(Client $client)
    {
        return view('admin.client.edit', compact('client'));
    }

    
    public function update(UpdateRequest $request, Client $client)
    {
        $client->update($request->all());
        return redirect()->route('clients.index');
    }

    
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index');
    }
}