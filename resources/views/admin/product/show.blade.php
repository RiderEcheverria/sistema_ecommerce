@extends('layouts.admin')
@section('title','Informacion del producto')
@section('contenido')
<div class="content-wrapper">
  <div class="page-header">
      <h3 class="page-title">
        Informacion del producto
      </h3>
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-custom">
              <li class="breadcrumb-item">
                <a href="">Panel administrador</a></li>
              <li class="breadcrumb-item active"   aria-current="page"><a href="{{route('products.index')}}">  producto</a></li>
              <li class="breadcrumb-item active" aria-current="page">Informacion del producto </li>
          </ol>
      </nav>
  </div>
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
      <div class="card-body">
       <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-4">
                  <div class="border-bottom text-center pb-6">     
                    <img src="{{asset('image/'.$product->image)}}" alt="sample" class="rounded mw-100"> 
                    <br/>
                    <h4>Nombre del producto</h4>   
                    <br/>                    
                    <h4> {{$product->name}}</h4>                       
                  </div>
                  <br/>
                  <div class="py-4">
                    <p class="clearfix">
                      <span class="float-left">
                    </p>                              
                    <p class="clearfix">
                      <span class="float-left">
                        <b>Categoria</b> 
                      </span>
                      <span class="float-right text-muted">
                        <a >
                          {{$product->category->name}}</a>
                      </span>
                    </p>
                    <p class="clearfix">
                      <span class="float-left">
                        <b>Marca</b> 
                      </span>
                      <span class="float-right text-muted">
                        <a >
                          {{$product->brand->name}}</a>
                      </span>
                    </p>
                    <p class="clearfix">
                      <span class="float-left">
                     <b>Estado</b> 
                      </span>
                      <span class="float-right text-muted">
                              @if($product->status == 1)
                              <label class="badge badge-success badge-pill">Disponible</label>
                              @else
                              <label class="badge badge-danger badge-pill">Agotado</label>
                              @endif
                      </span>
                    </p>
                  </div>                                    
                </div>
                <div class="col-lg-7 pl-lg-6">
                  <div class="d-flex justify-content-between">
                    <h4>Informacion del producto</h4>
                    <div>
                      <div class="d-flex align-items-center">
                      </div>
                    </div>
                  </div>   
                  <div class="mt-2 py-2 border-top border-bottom">  
                    <div class="mb-3">
                      <label for="name"> <b>Descripcion</b></label>
                      <textarea class="form-control" id="description" name="description"
                      rows="35">{{ $product->description }}</textarea>
                  </div>
                  </div>
                  <br/>
                  <div lass="card-footer text-mited">
                    <a href="{{route('products.index')}}"  class="btn btn-primary mr-2
                    float-right"> Regresar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>               
@endsection
