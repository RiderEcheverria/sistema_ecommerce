@extends('layouts.admin')
@section('title', 'Informacion de presonas')
@section('contenido')
<div class="main-panel">          
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">
          Personas
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item">
                  <a href="">Panel administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Personas</li>
            </ol>
        </nav>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Personas</h4>
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
                                    <a class="nav-link" href="{{ route('personas.create') }}">
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
                                        <th>Apellido</th>
                                        <th>Cedula</th>
                                        <th>Direccion</th>
                                        <th>Email</th>
                                        <th>Celular</th>
                                        <th>Creado en</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($personas as $persona)
                                        <tr> 
                                            <th scope="row">{{ $persona->id }}</th>
                                            <td> {{ $persona->name }} </td>
                                            <td>{{ $persona->surname }} </td>
                                            <td>{{ $persona->cedula }}</td>
                                            <td>{{ $persona->address }}</td>
                                            <td>{{ $persona->email }}</td>
                                            <td>{{ $persona->celular }}</td>
                                            <td>{{ $persona->created_at}}</td>
                                            <td id="resp{{ $persona->id }}">
                                                <br>
                                                  @if($persona->estatus == 1)
                                                  <button type="button"  class="btn btn-sm btn-success">Activo</button>
                                                      @else
                                                  <button type="button" class="btn btn-sm btn-danger">Inactivo</button>
                                                  @endif
                                              </td>
                                              <td style="width: 20%;">
                                                {!! Form::open(['route' => ['personas.destroy', $persona], 'method' => 'DELETE']) !!}
                                                <a class="btn btn-outline-primary"
                                                    href="{{ route('personas.show', $persona) }}">
                                                    <i class="fa fa-eye"
                                                        aria-hidden="true"></i></a>
                                                <a class="btn btn-outline-info"
                                                    href="{{ route('personas.edit', $persona) }}"
                                                    title="Editar">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                <button
                                                    class="btn btn-outline-danger delete-confirm"
                                                    type="submit"
                                                    title="Eliminar">
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
                        <div class="dataTables_paginate paging_simple_numbers" 
                        id="order-listing_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous 
                                disabled" id="order-listing_previous">
                                    <a href="#" aria-controls="order-listing"
                                     data-dt-idx="0" tabindex="0" class="page-link">Anterior</a>
                                </li>
                                <li class="paginate_button page-item active">
                                    <a href="#" aria-controls="order-listing"
                                    data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                </li>
                                <li class="paginate_button page-item ">
                                    <a href="#" aria-controls="order-listing" 
                                    data-dt-idx="2" tabindex="0" class="page-link">2</a>
                                </li>
                                <li class="paginate_button page-item next" id="order-listing_next">
                                    <a href="#" aria-controls="order-listing"
                                    data-dt-idx="3" tabindex="0" class="page-link">próximo</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection