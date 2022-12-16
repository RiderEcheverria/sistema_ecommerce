<?php

namespace App\Http\Controllers;


use App\Provider;
use Illuminate\Http\Request;
use App\Http\Requests\Provider\StoreRequest;
use App\Http\Requests\Provider\UpdateRequest;
use Illuminate\Support\Facades\Gate;
class ProviderController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('provider_index'), 403);
        $nombre = $request->get('buscar-nombre');
        
        $nit = $request->get('buscar-nit');
       
        $providers = Provider::nombres($nombre)->nit($nit)->paginate(5);
        
        return view('admin.provider.index', compact('providers'));
        

    }

   
    public function create()
    {
        abort_if(Gate::denies('provider_create'), 403);
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
        abort_if(Gate::denies('provider_show'), 403);
        return view('admin.provider.show', compact('provider'));
    }

   
    public function edit(Provider $provider)
    {
        abort_if(Gate::denies('provider_edit'), 403);
        return view('admin.provider.edit', compact('provider'));
    }

    
    public function update(UpdateRequest $request, Provider $provider)
    {
        abort_if(Gate::denies('provider_destroy'), 403);
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