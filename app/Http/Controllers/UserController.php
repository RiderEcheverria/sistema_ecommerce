<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
   
    public function index(Request $request)
    {
        $nombre = $request->get('buscar-nombre');
       
        $users = User::nombres($nombre)->paginate(5);
        
        return view('admin.user.index', compact('users'));
    }

 
    public function create()
    {
        $users = new User();
        return view('admin.user.create', compact('users'));
    }

  
    public function store(Request $request)
    {
        'Alert'::toast('Exito Se ha registrado un nuevo usuario', 'success');
        request()->validate(User::$rules);

        $users = User::create($request->all());

        return redirect()->route('users.index')
            ->with('success', 'Users created successfully.');
    }

   
    public function edit($id)
    {
        $user = User::find($id);

        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        'Alert'::toast('Exito Se ha actualizado el registro', 'success');
        request()->validate(User::$rules);

        $user->update($request->all());

        return redirect()->route('users.index');
    }


    
    public function show($id)
    {
        $user = User::find($id);

        return view('admin.user.show', compact('user'));
    }

    public function destroy($id)
    {
        'alert'()->success('Exito','Se ha eliminado el registro.');
        $user = User::find($id)->delete();
        return redirect()->route('users.index');

    }
}