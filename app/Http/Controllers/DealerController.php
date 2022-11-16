<?php

namespace App\Http\Controllers;

use App\Dealer;
use Illuminate\Http\Request;

/**
 * Class DealerController
 * @package App\Http\Controllers
 */
class DealerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dealers = Dealer::paginate();

        return view('admin.dealer.index', compact('dealers'))
            ->with('i', (request()->input('page', 1) - 1) * $dealers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dealer = new Dealer();
        return view('admin.dealer.create', compact('dealer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Dealer::$rules);

        $dealer = Dealer::create($request->all());

        return redirect()->route('dealers.index')
            ->with('success', 'Dealer created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dealer = Dealer::find($id);

        return view('admin.dealer.show', compact('dealer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dealer = Dealer::find($id);

        return view('admin.dealer.edit', compact('dealer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Dealer $dealer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dealer $dealer)
    {
        request()->validate(Dealer::$rules);

        $dealer->update($request->all());

        return redirect()->route('dealers.index')
            ->with('success', 'Dealer updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $dealer = Dealer::find($id)->delete();

        return redirect()->route('dealers.index')
            ->with('success', 'Dealer deleted successfully');
    }
}
