<?php

namespace App\Http\Controllers;
use App\Product;
use App\Inventario;
use App\Client;
use Illuminate\Http\Request;
use App\PurchaseDetails;
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
      

        // $products= Product::get();
        $purchaseDetails= PurchaseDetails::get();
        // $clientes= Client::get();
        // $inventario = new Inventario();
        $purchase_details= PurchaseDetails::get();
        return view('admin.inventario.create', compact('purchaseDetails'));

      
    }

    
    public function store(Request $request)
    {
        'Alert'::toast('Exito Se ha registrado un nuevo inventario', 'success');
        
        Inventario::create($request->all());
        return redirect()->route('inventario.index');
    }

   
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