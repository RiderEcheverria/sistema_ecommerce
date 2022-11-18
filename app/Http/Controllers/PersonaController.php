<?php

namespace App\Http\Controllers;

use App\Persona;
use Illuminate\Http\Request;


class PersonaController extends Controller
{
    
    public function index()
    {
        $personas = Persona::paginate();
        return view('admin.persona.index', compact('personas'))
            ->with('i', (request()->input('page', 1) - 1) * $personas->perPage());
    }
   
    public function create()
    {
        $persona = new Persona();
        return view('admin.persona.create', compact('persona'));
    }

   
    public function store(Request $request)
    {
        request()->validate(Persona::$rules);

        $persona = Persona::create($request->all());

        return redirect()->route('personas.index')
            ->with('success', 'Persona created successfully.');
    }

   
    public function show($id)
    {
        $persona = Persona::find($id);

        return view('admin.persona.show', compact('persona'));
    }

  
    public function edit($id)
    {
        $persona = Persona::find($id);

        return view('admin.persona.edit', compact('persona'));
    }

   
    public function update(Request $request, Persona $persona)
    {
        request()->validate(Persona::$rules);

        $persona->update($request->all());

        return redirect()->route('personas.index')
            ->with('success', 'Persona updated successfully');
    }

 
    public function destroy($id)
    {
        $persona = Persona::find($id)->delete();

        return redirect()->route('personas.index')
            ->with('success', 'Persona deleted successfully');
    }
}