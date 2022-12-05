<?php

namespace App\Http\Controllers;
use App\Http\Requests\Brand\StoreRequest;
use App\Http\Requests\Brand\UpdateRequest;
use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
  
    public function index(Request $request)
    {
        $nombre = $request->get('buscar-nombre');
       
        $brands = Brand::nombres($nombre)->paginate(5);
        
        return view('admin.brand.index', compact('brands'));
        
       
    }

    public function create()
    {
        return view('admin.brand.create');
    }

    
    public function store(StoreRequest $request)
    {
        'Alert'::toast('Exito Se ha registrado una nueva marca', 'success');
        Brand::create($request->all());
        return redirect()->route('brands.index');

    }

    
    public function show(Brand $brand)
    {
        
    }

   
    public function edit(Brand $brand)
    {
        $brands = Brand::get();
        return view('admin.brand.edit', compact('brand'));
    }

    
    public function update(UpdateRequest $request, Brand $brand)
    {
        'Alert'::toast('Exito Se ha actualizado el registro', 'success');
        $brand->update($request->all());
        return redirect()->route('brands.index');
    }

    
    public function destroy(Brand $brand)
    {
        'alert'()->success('Exito','Se ha eliminado el registro.');
        $brand->delete();
        return redirect()->route('brands.index');
    }

    
}