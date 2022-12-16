<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use App\Http\Requests\Client\StoreRequest;
use App\Http\Requests\Client\UpdateRequest;
use Illuminate\Support\Facades\Gate;

class ClientController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('cliente_index'), 403);
        $nombre = $request->get('buscar-nombre');
        
        $cedula = $request->get('buscar-cedula');
       
        $clients = Client::nombres($nombre)->cedula($cedula)->paginate(5);
        
        return view('admin.client.index', compact('clients'));
      
    }

   
    public function create()
    {
        abort_if(Gate::denies('cliente_create'), 403);
        $client = new Client();
        return view('admin.client.create', compact('client'));       
    }

    
    public function store(StoreRequest $request)
    {
        'Alert'::toast('Exito Se ha registrado un nuevo cliente', 'success');
        Client::create($request->all());
        return redirect()->route('clients.index');

    }

    
    public function show(Client $client)
    {
        abort_if(Gate::denies('cliente_show'), 403);
        return view('admin.client.show', compact('client'));
    }

   
    public function edit(Client $client)
    {
        abort_if(Gate::denies('cliente_edit'), 403);
        return view('admin.client.edit', compact('client'));
    }

    
    public function update(UpdateRequest $request, Client $client)
    {
        'Alert'::toast('Exito Se ha actualizado el registro', 'success');
        $client->update($request->all());
        return redirect()->route('clients.index');
    }

    
    public function destroy(Client $client)
    {
        abort_if(Gate::denies('cliente_destroy'), 403);
        'alert'()->success('Exito','Se ha eliminado el registro.');
        $client->delete();
        return redirect()->route('clients.index');
    }
}