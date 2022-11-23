<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Purchase\StoreRequest;
use App\Http\Requests\Purchase\UpdateRequest;
use App\Provider;
use App\Product;
use App\Purchase;
use Carbon\Carbon;
use App\PurchaseDetails;
use Illuminate\Support\Facades\Auth;

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
        // dd($request);
        // Auth::user()->id;
        $purchase = Purchase::create($request->all()+[
            'user_id'=>Auth::user()->id,
            'purchase_date'=>Carbon::now('America/La_Paz'),
           
           
        ]);

        foreach ($request->product_id as $key => $product) {
            $results[] = array("product_id"=>$request->product_id[$key],
            "quantity"=>$request->quantity[$key], "price"=>$request->price[$key]);
        }
      
        // dd($request);
        $purchase->purchaseDetails()->createMany($results);      
        return redirect()->route('purchases.index');
       
     

    }

    
    public function show(Purchase $purchase)
    {

        $subtotal= 0;
        $purchaseDetails = $purchase->purchaseDetails;
        foreach($purchaseDetails as $purchaseDetail) {
       
            $subtotal += $purchaseDetail->quantity * $purchaseDetail->price;
        }
       
        return view('admin.purchase.show', compact('purchase','purchaseDetails','subtotal'));
    }

   
    public function edit(Purchase $purchase)
    {
        // $providers = Provider::get();
        // return view('admin.purchase.show', compact('purchase'));
    }

    
    public function update(UpdateRequest $request, Purchase $purchase)
    {
        $purchase->update($request->all());
        return redirect()->route('purchases.index');
    }

    
    public function destroy(Purchase $Purchase)
    {
        $Purchase->delete();
        return redirect()->route('purchases.index');
    }
}