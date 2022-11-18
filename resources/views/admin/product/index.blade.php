@extends('layouts.admin')
@section('title','Informacion de productos')
@section('contenido')
<div class="main-panel">          
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">
          Productos
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item">
                  <a href="">Panel administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Productos</li>
            </ol>
        </nav>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Productos</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <div id="order-listing_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_length" id="order-listing_length">
                                    <label>Ver
                                        <select name="order-listing_length" aria-controls="order-listing" class="form-control">
                                            <option value="5">5</option>
                                            <option value="10">10</option>
                                            <option value="15">15</option>
                                        </select> 
                                    </label>
                                </div>
                            </div>
                        <div class="col-sm-12 col-md-6">
                            <div id="order-listing_filter" class="dataTables_filter">
                                <label>
                                    <span class="btn btn-primary">Buscar</span>
                                    <input type="search" class="form-control" placeholder="Search" aria-controls="order-listing">
                                </label>
                                <div class="btn-group">
                                    <a class="nav-link" href="{{ route('products.create') }}">
                                        <span id="exampleModal-2" class="btn btn-primary">+ Agregar nuevo</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="products_listing" class="table">
                                <thead>
                                    <tr>
                                      <th>Id</th>
                                      <th>Nombre</th>
                                      <th>Imagen</th>
                                      <th>Categoria</th>
                                      <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($products as $product)
                                    <tr>
                                        <th scope="row">{{$product->id}}</th>
                                        <td>  {{$product->name}} </td>
                                        <td>  <img src="{{asset('image/'.$product->image)}}" alt="sample" class="rounded mw-200"></td>
                                        <td>{{$product->category->name}}</td>
                                        <td style="width: 20%;">
                                      {!! Form::open(['route'=>['products.destroy',$product],'method'=>'DELETE']) !!}
                                      <a class="btn btn-outline-primary" href="{{route('products.show',$product)}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                          <a class="btn btn-outline-info" href="{{route('products.edit',$product)}}" title="Editar">
                                              <i class="far fa-edit"></i>
                                          </a>
                                          <button class="btn btn-outline-danger delete-confirm"
                                          type="submit"  title="Eliminar">
                                              <i class="far fa-trash-alt"></i>
                                          </button> 
                                      {!! Form::close() !!} 
                                          </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            <table>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="dataTables_paginate paging_simple_numbers" id="order-listing_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous disabled" id="order-listing_previous">
                                    <a href="#" aria-controls="order-listing" data-dt-idx="0" tabindex="0" class="page-link">Anterior</a>
                                </li>
                                <li class="paginate_button page-item active">
                                    <a href="#" aria-controls="order-listing" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                </li>
                                <li class="paginate_button page-item ">
                                    <a href="#" aria-controls="order-listing" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                                </li>
                                <li class="paginate_button page-item next" id="order-listing_next">
                                    <a href="#" aria-controls="order-listing" data-dt-idx="3" tabindex="0" class="page-link">próximo</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




