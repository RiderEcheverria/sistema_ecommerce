@extends('layouts.admin')
@section('title', 'Informacion de proveedores')
@section('contenido')
<div class="main-panel">          
    <div class="content-wrapper">
      <div class="page-header">
        <h6 >
            Listado de proveedores
        </h6>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item">
                  <a href="{{ route('home') }}">Panel administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Proveedores</li>
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
                                              <input name="buscar-nombre"  class="form-control mr-sm-2" type="search" 
                                              placeholder="Busqueda por nombre" aria-label="Search"  onkeypress="return soloLetras(event)" />
                                              <button class="btn btn-dark" type="submit">
                                                <i class="fas fa-search"></i>
                                              </button>                                           
                                                <a href="{{ route('providers.index')}}" class="btn btn-dark">
                                                    <i class="fas fa-undo-alt"></i>
                                                </a>
                                                <a href="{{ route('providers.create')}}"  class="btn btn-dark ">
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
                                        <th>Ubicacion</th>
                                        <th>Correo electronico</th>
                                        <th>Numero de NIT</th>
                                        <th>Telefono/Celular</th>
                                        <th>Acciones</th>
                                      </tr>
                                </thead>
                                <tbody >
                                    @foreach ($providers as $provider)
                                        <tr>
                                            <th scope="row">{{ $provider->id }}</th>
                                            <td>{{$provider->name}}</td>
                                            <td>{{$provider->address}}</td>
                                            <td>{{$provider->email}}</td>
                                            <td>{{$provider->nit}}</td>
                                            <td>{{$provider->celular}}</td>
                                            <td style="width: 20%;">
                                              {!! Form::open(['route'=>['providers.destroy',$provider],'method'=>'DELETE']) !!}
                                                  <a class="btn btn-outline-warning" href="{{route('providers.show',$provider)}}">
                                                  <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                  <a class="btn btn-outline-info" href="{{route('providers.edit',$provider)}}"
                                                   title="Editar">
                                                  <i class="far fa-edit"></i></a>
                                                  <a href="#" class="btn btn-outline-danger" data-toggle="modal" data-target="#modal-delete-user{{$provider->id}}"><i class="far fa-trash-alt"></i></a>  
                                            </td>
                                            @include('admin.provider.modal.delete')
                                            {!! Form::close() !!}
                                        </tr>
                                    @endforeach      
                                </tbody>
                            <table>
                        </div>
                    </div>
                <div class="row">  
            <div class="col-lg-12">
         {!! $providers->links() !!}
        </div>
    </div>               
@endsection
{{--  validacion de letras  --}}
<script>
    function soloLetras(e) {
      var key = e.keyCode || e.which,
        tecla = String.fromCharCode(key).toLowerCase(),
        letras = " áéíóúabcdefghijklmnñopqrstuvwxyz",
        especiales = [46],
        tecla_especial = false;
  
      for (var i in especiales) {
        if (key == especiales[i]) {
          tecla_especial = true;
          break;
        }
      }
  
      if (letras.indexOf(tecla) == -1 && !tecla_especial) {
        return false;
      }
    }
   </script>