<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
  
    public function index()
    {
        // abort_if(Gate::denies('role_index'), 403);

        $roles = Role::paginate(5);

        return view('admin.roles.index', compact('roles'));
    }

 
    public function create()
    {
        // abort_if(Gate::denies('role_create'), 403);

        $permissions = Permission::all()->pluck('name', 'id');
        // dd($permissions);
        return view('admin.roles.create', compact('permissions'));
    }

 
    public function store(Request $request)
    {
        'Alert'::toast('Exito Se ha registrado un nuevo rol', 'success');
        $rol = Role::create($request->only('name'));

        // $role->permissions()->sync($request->input('permissions', []));
        $rol->syncPermissions($request->input('permissions', []));

        return redirect()->route('roles.index');
    }

 

    public function edit(Role $role)
    {
        

        return view('admin.roles.edit', compact('role'));
    }

   
   
    public function update(Request $request, Role $role)
    {
        'Alert'::toast('Exito Se ha actualizado el registro', 'success');
        $role->update($request->only('name'));

        return redirect()->route('roles.index');
    }

  
   
}