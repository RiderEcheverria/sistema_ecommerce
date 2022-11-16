@extends('layouts.admin')

@section('title','Gestion de productos')
@section('styles')

@endsection

@section('preference')


@section('contenido')






 <div class="content-wrapper">
  <div class="page-header">
      <h3 class="page-title">
        Detalles de categorías
          {{-- Detalles de categoría {{$category->name}} --}}
      </h3>
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-custom">
              <li class="breadcrumb-item"><a href="">Panel administrador</a></li>
              {{-- {{route('home')}} --}}
              <li class="breadcrumb-item"><a href="">Categorías</a></li>
              {{-- {{route('categories.index')}} --}}
              <li class="breadcrumb-item active" aria-current="page"></li>
              {{-- {{$category->name}} --}}
          </ol>
      </nav>
  </div>
  <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
              <div class="card-body">
                  <div class="d-flex justify-content-between">
                      <h4 class="card-title">Productos de</h4>
                      {{-- {{$category->name}} --}}
                  </div>
                  <div class="table-responsive">
                      <table id="products_listing" class="table">
                          <thead>
                              <tr>
                                  <th>Id</th>
                                  <th>Nombre</th>
                                  <th>Precio de venta</th>
                                  <th>Stock</th>
                                  <th>Estado</th>
                                  <th>Acciones</th>
                              </tr>
                          </thead>
                          <tbody>
                              {{-- @foreach ($products as $product)
                              <tr>
                                  <th scope="row">{{$product->id}}</th>
                                  <td>
                                      <a target="_blank" title="Vista previa" href="{{route('web.product_details',$product)}}">{{$product->name}}</a>
                                  </td>
                                  <td>{{$product->sell_price}}</td>
                                  <td>{{$product->stock}}</td>
                                  <td class="second_td">
                                      <a 
                                      href="#"
                                      id="username" 
                                      class="editable"
                                      data-type="select" 
                                      data-pk="{{$product->id}}" 
                                      data-url="{{url("/update_product_status/$product->id")}}" 
                                      data-title="Estado"
                                      data-value="{{ $product->status }}"
                                      >{{$product->product_status()}}
                                      </a>
                                  </td>
                                  <td>
                                      {!! Form::open(['route'=>['products.destroy',$product], 'method'=>'DELETE']) !!}
                                      <a class="btn btn-outline-info" title="Editar" href="{{route('products.edit', $product)}}">
                                          <i class="far fa-edit"></i>
                                      </a>
                                      <button type="submit" class="btn btn-outline-danger delete-confirm"
                                      data-name="{{ $product->name }}" title="Eliminar">
                                          <i class="far fa-trash-alt"></i>
                                      </button>
                                      {!! Form::close() !!}
                                  </td>
                              </tr>
                              @endforeach --}}
                          </tbody>
                      </table>
                  </div>
              </div>
              <div class="card-footer text-muted">
                  {{-- <a href="{{ URL::previous() }}" class="btn btn-light float-right"> --}}
                      Regresar
                  </a>
              </div>
            </div>
      </div>
  </div>
</div>
@endsection

@endsection



@section('scripts')

{!!Html::script('melody/../../js/data-table.js')!!}
{{-- <script src="../../js/data-table.js"></script> --}}
@endsection


















