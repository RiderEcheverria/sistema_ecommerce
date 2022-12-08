<?php

namespace App\Http\Controllers;


use App\Provider;
use Illuminate\Http\Request;
use App\Http\Requests\Provider\StoreRequest;
use App\Http\Requests\Provider\UpdateRequest;
class ProviderController extends Controller
{
    public function index(Request $request)
    {
        $nombre = $request->get('buscar-nombre');
        
        $nit = $request->get('buscar-nit');
       
        $providers = Provider::nombres($nombre)->nit($nit)->paginate(5);
        
        return view('admin.provider.index', compact('providers'));
        

    }

   
    public function create()
    {
        $provider = new Provider();
        return view('admin.provider.create', compact('provider'));
         
    }

    
    public function store(StoreRequest $request)
    {
        'Alert'::toast('Exito Se ha registrado un nuevo proveedor', 'success');
        Provider::create($request->all());
        return redirect()->route('providers.index');

    }

    
    public function show(Provider $provider)
    {
        return view('admin.provider.show', compact('provider'));
    }

   
    public function edit(Provider $provider)
    {
        return view('admin.provider.edit', compact('provider'));
    }

    
    public function update(UpdateRequest $request, Provider $provider)
    {
        'Alert'::toast('Exito Se ha actualizado el registro', 'success');
        $provider->update($request->all());
        return redirect()->route('providers.index');
    }

    
    public function destroy(Provider $provider)
    {
        'alert'()->success('Exito','Se ha eliminado el registro.');
        $provider->delete();
        return redirect()->route('providers.index');
    }
}