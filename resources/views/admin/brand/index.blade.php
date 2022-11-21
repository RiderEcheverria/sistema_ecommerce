@extends('layouts.admin')
@section('title', 'Informacion de marcas')
@section('contenido')
<div class="main-panel">          
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Listado de marcas
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-custom">
                    <li class="breadcrumb-item">
                      <a href="">Panel administrador</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Marcas</li>
                </ol>
            </nav>
        </div>
        <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <div id="order-listing_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">  
                        <div class="row">
                            <div class="col-sm-12 ">
                                <div class="dataTables_length" id="order-listing_length">
                                    <nav class="navbar navbar-light float-right">
                                        <form class="form-inline">            
                                            <div>
                                              <h6>Busqueda por nombre</h6>
                                              <input name="buscar-nombre"  class="form-control mr-sm-2" type="search" placeholder="Busqueda por nombre" aria-label="Search">                                   
                                              <button class="btn btn-primary" type="submit">
                                                <i class="fas fa-search"></i>
                                              </button>                                           
                                                <a href="{{ route('brands.index')}}" class="btn btn-primary">
                                                    <i class="fas fa-undo-alt"></i>
                                                </a>
                                                <a href="{{ route('brands.create')}}"  class="btn btn-primary ">
                                                    + Agregar nuevo
                                                </a>
                                            </div>                         
                                        </form>
                                    </nav> 
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
                                        <th>imagen</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($brands as $brand)
                                    <tr>
                                        <th scope="row">{{$brand->id}}</th>
                                        <td>  {{$brand->name}} </td>
                                        <td>  <img src="{{asset('marcas/'.$brand->imagen)}}" alt="sample" class="rounded mw-200"></td> 
                                        <td style="width: 20%;">
                                      {!! Form::open(['route'=>['brands.destroy',$brand],'method'=>'DELETE']) !!}             
                                          <a class="btn btn-outline-info" href="{{route('brands.edit',$brand)}}" title="Editar">
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
            <div class="col-lg-12">
         {!! $brands->links() !!}
        </div>
    </div>               
@endsection
