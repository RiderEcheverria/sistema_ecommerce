<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Purchase\StoreRequest;
use App\Http\Requests\Purchase\UpdateRequest;
use App\Provider;
use App\Product;
use App\Purchase;

class PurchaseController extends Controller
{   public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
        $nombre = $request->get('buscar-nombre');
        $purchases = Purchase::nombres($nombre)->paginate(5);
        return view('admin.purchase.index', compact('purchases'));
    }

   
    public function create()
    {
        $providers = Provider::get();
        $products = Product::get();
        return view('admin.purchase.create', compact('providers','products'));
    }

    
    public function store(StoreRequest $request)
    {
        $purchase = Purchase::create($request->all());
        foreach ($request->product_id as $key => $product) {
            $results[] = array("product_id"=>$request->product_id[$key],
            "quantity"=>$request->quantity[$key], "price"=>$request->price[$key]);
        }
        $purchase->purchaseDatails()->createMany($results);
        return redirect()->route('purchases.index');

    }

    
    public function show(Purchase $purchase)
    {
        return view('admin.purchase.show', compact('purchase'));
    }

   
    public function edit(Purchase $purchase)
    {
        $providers = Provider::get();
        return view('admin.purchase.show', compact('purchase'));
    }

    
    public function update(UpdateRequest $request, Purchase $purchase)
    {
        // $purchase->update($request->all());
        // return redirect()->route('purchases.index');
    }

    
    public function destroy(Purchase $Purchase)
    {
        // $Purchase->delete();
        // return redirect()->route('purchases.index');
    }
}