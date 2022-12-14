<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
class PermissionController extends Controller
{
   
    public function index()
    {
        $permissions = Permission::paginate(10);

        return view('admin.permissions.index', compact('permissions'));
    }

   
    public function create()
    {
        return view('admin.permissions.create');
    }

   
    public function store(Request $request)
    {
      
            'Alert'::toast('Exito Se ha registrado un nuevo permiso', 'success');
            Permission::create($request->all());
            return redirect()->route('permissions.index');
    
    }

   
    public function show($id)
    {
        //
    }

    public function edit(Permission $permission)
    {
        

        return view('admin.permissions.edit', compact('permission'));
    }

   
   
    public function update(Request $request, Permission $permission)
    {
        'Alert'::toast('Exito Se ha actualizado el registro', 'success');
        $permission->update($request->only('name'));

        return redirect()->route('permissions.index');
    }

   



    
    public function destroy($id)
    {
        //
    }
}