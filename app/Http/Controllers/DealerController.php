<?php

namespace App\Http\Controllers;

use App\Dealer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class DealerController extends Controller
{

    public function index(Request $request)
    {
        abort_if(Gate::denies('dealer_index'), 403);
        $nombre = $request->get('buscar-nombre');
        
        $nit = $request->get('buscar-nit');
       
        $dealers = Dealer::nombres($nombre)->nit($nit)->paginate(5);
        
        return view('admin.dealer.index', compact('dealers'));

    }

 
    public function create()
    {
        abort_if(Gate::denies('dealer_create'), 403);
        $dealer = new Dealer();
        return view('admin.dealer.create', compact('dealer'));
    }

    public function store(Request $request)
    {
        'Alert'::toast('Exito Se ha registrado un nuevo repartidor', 'success');
        request()->validate(Dealer::$rules);
        $dealer = Dealer::create($request->all());
        return redirect()->route('dealers.index');
            
    }
    public function show($id)
    {
        abort_if(Gate::denies('dealer_show'), 403);
        $dealer = Dealer::find($id);
        return view('admin.dealer.show', compact('dealer'));
        
    }

    public function edit($id)
    {
        abort_if(Gate::denies('dealer_edit'), 403);
        $dealer = Dealer::find($id);

        return view('admin.dealer.edit', compact('dealer'));
    }


    public function update(Request $request, Dealer $dealer)
    {
        'Alert'::toast('Exito Se ha actualizado el registro', 'success');
        request()->validate(Dealer::$rules);
        $dealer->update($request->all());

        return redirect()->route('dealers.index');
        
    }


    public function destroy($id)
    {
        abort_if(Gate::denies('dealer_destroy'), 403);
        'alert'()->success('Exito','Se ha eliminado el registro.');
        $dealer = Dealer::find($id)->delete();
        return redirect()->route('dealers.index');
           
    }
}