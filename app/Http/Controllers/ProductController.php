<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Brand;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        
        $nombre = $request->get('buscar-nombre');
        $products = Product::nombres($nombre)->paginate(5);
        return view('admin.product.index', compact('products'));
        

    }

   
    public function create()

    {
        $categories = Category::get();

        $brands = Brand::get();

        return view('admin.product.create', compact('categories','brands'));
    }

    
    public function store(StoreRequest $request)
    {

        if($request->hasFile('picture')){
            $file = $request->file('picture');
            $image_name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path("/image"),$image_name);
            // dd($image_name);
        }
      
        $product=Product::create($request->all()+[
            'image'=>$image_name
            // =>$image_name,
        ]);
        $product->update(['code'=>$product->id]);

        return redirect()->route('products.index');

    }

    
    public function show(Product $product)
    {
        return view('admin.product.show', compact('product'));
    }

   
    public function edit(Product $product)
    {
        $categories = Category::get();
        $brands = Brand::get();
        return view('admin.product.edit', compact('product','brands','categories'));
    }
    public function update(UpdateRequest $request, Product $product)
    {


        if($request->hasFile('picture')){
            $file = $request->file('picture');
            $image_name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path("/image"),$image_name);
            // dd($image_name);
        }
        $product->update($request->all()+[
            'image'=>$image_name,
           
        ]);
        return redirect()->route('products.index');
    }
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
    
}