<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;


class UserController extends Controller
{
   
    public function index(Request $request)
    {
        $nombre = $request->get('buscar-nombre');
       
        $users = Users::nombres($nombre)->paginate(5);
        
        return view('admin.user.index', compact('users'));
    }

 
    public function create()
    {
        $user = new Users();
        return view('admin.user.create', compact('user'));
    }

  
    public function store(Request $request)
    {
        request()->validate(Users::$rules);

        $user = Users::create($request->all());

        return redirect()->route('users.index')
            ->with('success', 'Users created successfully.');
    }

   
    public function edit($id)
    {
        $user = Users::find($id);

        return view('admin.user.edit', compact('user'));
    }

   
    public function update(Request $request, Users $user)
    {
        request()->validate(Users::$rules);

        $user->update($request->all());

        return redirect()->route('users.index')
            ->with('success', 'Users updated successfully');
    }


    public function destroy($id)
    {
        $user = Users::find($id)->delete();

        return redirect()->route('users.index')
            ->with('success', 'Users deleted successfully');
    }
}