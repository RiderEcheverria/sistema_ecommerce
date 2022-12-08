<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;

class CategoryController extends Controller
{
    
    public function index(Request $request)
    {
        $nombre = $request->get('buscar-nombre');
        $categories = Category::nombres($nombre)->paginate(5);
        return view('admin.category.index', compact('categories'));
        
    }
  
    public function create()
    {
        $category = new Category();
        return view('admin.category.create', compact('category'));
    }

    
    public function store(StoreRequest $request)
    {
        'Alert'::toast('Exito Se ha registrado una nueva categoria', 'success');
        Category::create($request->all());
        return redirect()->route('categories.index');

    }

    
    public function show(Category $category)
    {
        return view('admin.category.show', compact('category'));
    }

   
    public function edit(Category $category)
    {
        $categories = Category::get();
        return view('admin.category.edit', compact('category'));
    }

    
    public function update(UpdateRequest $request, Category $category)
    {
        'Alert'::toast('Exito Se ha actualizado el registro', 'success');
        $category->update($request->all());
        return redirect()->route('categories.index');
    }

    
    public function destroy(Category $category)
    {
        'alert'()->success('Exito','Se ha eliminado el registro.');
        $category->delete();
        return redirect()->route('categories.index');
    }
}