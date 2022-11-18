<?php

namespace App\Http\Controllers;

use App\Dealer;
use Illuminate\Http\Request;

class DealerController extends Controller
{

    public function index()
    {
        $dealers = Dealer::paginate();

        return view('admin.dealer.index', compact('dealers'))
            ->with('i', (request()->input('page', 1) - 1) * $dealers->perPage());
    }

 
    public function create()
    {
        $dealer = new Dealer();
        return view('admin.dealer.create', compact('dealer'));
    }

    public function store(Request $request)
    {
        request()->validate(Dealer::$rules);

        $dealer = Dealer::create($request->all());

        return redirect()->route('dealers.index')
            ->with('success', 'Dealer created successfully.');
    }


    public function show($id)
    {
        $dealer = Dealer::find($id);

        return view('admin.dealer.show', compact('dealer'));
    }

    public function edit($id)
    {
        $dealer = Dealer::find($id);

        return view('admin.dealer.edit', compact('dealer'));
    }


    public function update(Request $request, Dealer $dealer)
    {
        request()->validate(Dealer::$rules);

        $dealer->update($request->all());

        return redirect()->route('dealers.index')
            ->with('success', 'Dealer updated successfully');
    }


    public function destroy($id)
    {
        $dealer = Dealer::find($id)->delete();

        return redirect()->route('dealers.index')
            ->with('success', 'Dealer deleted successfully');
    }
}