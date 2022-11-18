<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
  
    public function index()
    {
        $brands = Brand::paginate();

        return view('admin.brand.index', compact('brands'))
            ->with('i', (request()->input('page', 1) - 1) * $brands->perPage());
    }

    public function create()
    {
        $brand = new Brand();
        return view('admin.brand.create', compact('brand'));
    }

    public function store(Request $request)
    {
        request()->validate(Brand::$rules);

        $brand = Brand::create($request->all());

        return redirect()->route('brands.index')
            ->with('success', 'Brand created successfully.');
    }

    public function show($id)
    {
        $brand = Brand::find($id);

        return view('brand.show', compact('brand'));
    }
    public function edit($id)
    {
        $brand = Brand::find($id);

        return view('admin.brand.edit', compact('brand'));
    }


    public function update(Request $request, Brand $brand)
    {
        request()->validate(Brand::$rules);

        $brand->update($request->all());

        return redirect()->route('brands.index')
            ->with('success', 'Brand updated successfully');
    }

    public function destroy($id)
    {
        $brand = Brand::find($id)->delete();

        return redirect()->route('brands.index')
            ->with('success', 'Brand deleted successfully');
    }
}