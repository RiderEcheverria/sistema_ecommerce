@extends('layouts.admin')
@section('title', 'Informacion de presonas')
@section('contenido')
<div class="main-panel">          
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">
            Listado de personas
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
                                            </div> 
                                            <div>
                                               <h6>Busqueda por apellido</h6>
                                              <input name="buscar-apellido" class="form-control mr-sm-2" type="search" placeholder="" aria-label="Search">
                                              <button class="btn btn-primary" type="submit">
                                                <i class="fas fa-search"></i>
                                              </button>                                           
                                                <a href="{{ route('personas.index')}}" class="btn btn-primary">
                                                    <i class="fas fa-undo-alt"></i>
                                                </a>
                                                <a href="{{ route('personas.create')}}"  class="btn btn-primary ">
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
                                <tbody >
                                    @foreach ($personas as $persona)
                                        <tr>    
                                            <th scope="row">{{ $persona->id }}</th>
                                            <td > {{ $persona->name }} </td>
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
            <div class="col-lg-12">
         {!! $personas->links() !!}
        </div>
    </div>               
@endsection






