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
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class PurchaseController extends Controller
{   public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request)
    {    
        abort_if(Gate::denies('purchase_index'), 403);
        $nombre = $request->get('buscar-nombre');
        $purchases = Purchase::nombres($nombre)->paginate(5);
        return view('admin.purchase.index', compact('purchases'));
    }

   
    public function create()
    {
        abort_if(Gate::denies('purchase_create'), 403);
        $providers = Provider::get();
        $products = Product::get();
        return view('admin.purchase.create', compact('providers','products'));
    }

    
    public function store(StoreRequest $request)
    {
        // dd($request);
        // Auth::user()->id;
        'Alert'::toast('Exito Se ha registrado una nueva compra', 'success');
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

        abort_if(Gate::denies('purchase_show'), 403);
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
        'Alert'::toast('Exito Se ha actualizado el registro', 'success');
        $purchase->update($request->all());
        return redirect()->route('purchases.index');
        
    }

    
    public function destroy(Purchase $Purchase)
    {
        abort_if(Gate::denies('purchase_destroy'), 403);
        'alert'()->success('Exito','Se ha eliminado el registro.');
        $Purchase->delete();
        return redirect()->route('purchases.index');
    }
    
    public function pdf(Purchase $purchase)
    {
        // dd($purchase);
        $subtotal= 0;
        $purchaseDetails = $purchase->purchaseDetails;
        foreach($purchaseDetails as $purchaseDetail) {
       
            $subtotal += $purchaseDetail->quantity * $purchaseDetail->price;
        }
        
        $pdf = PDF::loadView('admin.purchase.pdf', compact('purchase', 'subtotal', 'purchaseDetails'));
        return $pdf->download('Reporte_de_compra_'.$purchase->id.'.pdf');
      
        
    }

}