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

    public function create(Request $request)
    {
        $brand = new Brand();
        return view('admin.brand.create');
    }

    public function store(Request $request)
    
    {
        
        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $imagenNombre = time().'_'.$file->getClientOriginalName();
            $file->move(public_path("/marcas"),$imagenNombre);
            // dd($imagenNombre);
        }
      
        $brand=Brand::create($request->all()+[
            'imagen'
            // =>$imagenNombre,
        ]);
        
        return redirect()->route('brands.index');
        
        
        
        
        // request()->validate(Brand::$rules);

        // $brand = Brand::create($request->all());

        // return redirect()->route('brands.index')
        //     ->with('success', 'Brand created successfully.');
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
       
        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $imagenNombre = time().'_'.$file->getClientOriginalName();
            $file->move(public_path("/marcas"),$imagenNombre);
            // dd($imagenNombre);
        }
        $brand->update($request->all()+[
            'imagen'=>$imagenNombre,
            // =>$imagenNombre,
        ]);
        return redirect()->route('brands.index');
       
       
       
       
        // request()->validate(Brand::$rules);

        // $brand->update($request->all());

        // return redirect()->route('brands.index')
        //     ->with('success', 'Brand updated successfully');
    }

    public function destroy($id)
    {
        $brand = Brand::find($id)->delete();

        return redirect()->route('brands.index')
            ->with('success', 'Brand deleted successfully');
    }
}