<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UserEditRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        // abort_if(Gate::denies('user_index'), 403);
        $users = User::paginate(5);
      
        return view('admin.users.index', compact('users'));
        
    }

    public function create()
    {
        // abort_if(Gate::denies('user_create'), 403);
        // $roles = Role::all()->pluck('name', 'id');
        // return view('admin.users.create', compact('roles'));


        $user = new User();
        return view('admin.users.create', compact('user'));
    }

    // public function store(UserCreateRequest $request)
    public function store(Request $request)
    {
        // $request->validate([
            
        //     'name' => 'required|min:7|max:8',
        //     'username' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required'
        // ]);
        $user = User::create($request->only('name', 'username', 'email')
            + [
                'password' => bcrypt($request->input('password')),
            ]);

        // $roles = $request->input('roles', []);
        // $user->syncRoles($roles);
        return redirect()->route('users.index', $user->id)->with('success', 'Usuario creado correctamente');
    }

    public function show(User $user)
    {
        // abort_if(Gate::denies('user_show'), 403);
        // $user = User::findOrFail($id);
        // dd($user);
        // $user->load('roles');
        return view('admin.users.show', compact('user'));
    }

    public function edit(User $user)
    {
        // abort_if(Gate::denies('user_edit'), 403);
        
        // $roles = Role::all()->pluck('name', 'id');
        // $user->load('roles');
        // return view('admin.users.edit', compact('user', 'roles'));
        return view('admin.users.edit', compact('user'));
    }

    // public function update(UserEditRequest $request, User $user)
    public function update(Request $request, User $user)
    {
        // $user=User::findOrFail($id);
        $data = $request->only('name', 'username', 'email');
        $password=$request->input('password');
        if($password)
            $data['password'] = bcrypt($password);
        // if(trim($request->password)=='')
        // {
        //     $data=$request->except('password');
        // }
        // else{
        //     $data=$request->all();
        //     $data['password']=bcrypt($request->password);
        // }

        $user->update($data);

        // $roles = $request->input('roles', []);
        // $user->syncRoles($roles);
        return redirect()->route('users.index', $user->id)->with('success', 'Usuario actualizado correctamente');
    }

    public function destroy(User $user)
    {
        // abort_if(Gate::denies('user_destroy'), 403);

        if (auth()->user()->id == $user->id) {
            return redirect()->route('users.index');
        }

        $user->delete();
        return back()->with('succes', 'Usuario eliminado correctamente');
    }
}