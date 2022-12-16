<?php

namespace App\Http\Controllers;

use App\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PersonaController extends Controller
{

    public function index(Request $request)
    {
        abort_if(Gate::denies('persona_index'), 403);
        $nombre = $request->get('buscar-nombre');
        
        $cedula = $request->get('buscar-cedula');
       
        $personas = Persona::nombres($nombre)->cedulas($cedula)->paginate(5);
        
        return view('admin.persona.index', compact('personas'));
    }
    
    public function create()
    {
        abort_if(Gate::denies('persona_create'), 403);
        $persona = new Persona();
        return view('admin.persona.create', compact('persona'));
    }


    public function store(Request $request)
    {
        'Alert'::toast('Exito Se ha registrado una nueva persona', 'success');
        request()->validate(Persona::$rules);
        $persona = Persona::create($request->all());
        return redirect()->route('personas.index')
            ->with('success', 'Persona created successfully.');
    }


    public function show($id)
    {
        abort_if(Gate::denies('persona_show'), 403);
        $persona = Persona::find($id);

        return view('admin.persona.show', compact('persona'));
    }


    public function edit($id)
    {
        abort_if(Gate::denies('persona_edit'), 403);
        $persona = Persona::find($id);

        return view('admin.persona.edit', compact('persona'));
    }


    public function update(Request $request, Persona $persona)
    {
        'Alert'::toast('Exito Se ha actualizado el registro', 'success');
        request()->validate(Persona::$rules);
        $persona->update($request->all());
        return redirect()->route('personas.index')
            ->with('success', 'Persona updated successfully');
    }


    public function destroy($id)
    {
        abort_if(Gate::denies('persona_destroy'), 403);
        'alert'()->success('Exito','Se ha eliminado el registro.');
        $persona = Persona::find($id)->delete();
        return redirect()->route('personas.index')
            ->with('success', 'Persona deleted successfully');
    }
}