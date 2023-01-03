<?php

namespace App\Http\Controllers;
use App\Product;
use App\Inventario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
class InventarioController extends Controller
{
   
    public function index()
    {
        $inventarios = Inventario::paginate(5);
        return view('admin.inventario.index', compact('inventarios'));
    }

    
    public function create()
    {
        abort_if(Gate::denies('inventario_create'), 403);
      

        $products= Product::get();
        // $inventario = new Inventario();
        return view('admin.inventario.create', compact('products'));

      
    }

    
    // public function store(Request $request)
    // {
        
    // }

   
    // public function show($id)
    // {
       
    // }

    
    // public function edit($id)
    // {
        
    // }

   
    // public function update(Request $request, $id)
    // {
        
    // }

   
    // public function destroy($id)
    // {
        
    // }
}