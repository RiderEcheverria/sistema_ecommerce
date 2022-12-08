@extends('layouts.admin')
@section('title', 'Informacion de presonas')
@section('contenido')
<div class="main-panel">          
    <div class="content-wrapper">
      <div class="page-header">
        <ol class="breadcrumb breadcrumb-custom">
            <li class="breadcrumb-item">
              <a href="{{ route('home') }}">Panel administrador</a></li>
            <li class="breadcrumb-item active" aria-current="page">Personas</li>
        </ol>
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
                                              {{--  <h6>Busqueda por nombre</h6>  --}}
                                              
                                              <input name="buscar-nombre"  class="form-control mr-sm-2" type="search" 
                                               placeholder="Busqueda por nombre" aria-label="Search"  onkeypress="return soloLetras(event)" />
                                            {{--  </div> 
                                            <div>
                                               <h6>Busqueda por cedula</h6>
                                              <input name="buscar-cedula" class="form-control mr-sm-2" type="search" placeholder="Busqueda por cedula" aria-label="Search">  --}}
                                              <button class="btn btn-dark" type="submit">
                                                <i class="fas fa-search"></i>
                                              </button>                                           
                                                <a href="{{ route('personas.index')}}" class="btn btn-dark">
                                                    <i class="fas fa-undo-alt"></i>
                                                </a>
                                                <a href="{{ route('personas.create')}}"  class="btn btn-dark ">
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
                                        {{--  <th>Creado en</th>  --}}
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
                                            {{--  <td>{{ $persona->created_at}}</td>  --}}
                                            <td id="resp{{ $persona->id }}">                                              
                                                  @if($persona->estatus == 1)
                                                  <label class="badge badge-success badge-pill">Activo</label>
                                                      @else
                                                  <label class="badge badge-danger badge-pill">Inactivo</label>
                                                  @endif
                                            </td>
                                            <td style="width: 20%;">
                                                <a class="btn btn-outline-warning"
                                                    href="{{ route('personas.show', $persona) }}">
                                                    <i class="fa fa-eye"
                                                        aria-hidden="true"></i></a>
                                                <a class="btn btn-outline-info"
                                                    href="{{ route('personas.edit', $persona) }}"
                                                    title="Editar">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                <a href="#" class="btn btn-outline-danger" data-toggle="modal" data-target="#modal-delete-edit{{$persona->id}}"><i class="far fa-trash-alt"></i></a>  
                                                {{--  <a href="#" class="btn btn-outline-danger" data-toggle="modal" data-target="#modal-delete-edit{{$persona->id}}"><i class="far fa-trash-alt"></i></a>    --}}
                                            </td>
                                            {{--  @include('admin.persona.modalEdit.edit')  --}}
                                            @include('admin.persona.modalDelete.delete')
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
{{--  validacion de letras  --}}
 <script>
    function soloLetras(e) {
      var key = e.keyCode || e.which,
        tecla = String.fromCharCode(key).toLowerCase(),
        letras = " áéíóúabcdefghijklmnñopqrstuvwxyz",
        especiales = [0],
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





