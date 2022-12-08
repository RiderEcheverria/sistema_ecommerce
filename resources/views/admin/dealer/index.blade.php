@extends('layouts.admin')
@section('title', 'Informacion de repartidores')
@section('contenido')
<div class="main-panel">          
    <div class="content-wrapper">
      <div class="page-header">
        <ol class="breadcrumb breadcrumb-custom">
          <li class="breadcrumb-item">
            <a href="">Panel administrador</a></li>
          <li class="breadcrumb-item active" aria-current="page">Repartidores</li>
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
                                              placeholder="Busqueda por nombre" aria-label="Search" onkeypress="return soloLetras(event)" />
                                              <button class="btn btn-dark" type="submit">
                                                <i class="fas fa-search"></i>
                                              </button>                                           
                                                <a href="{{ route('dealers.index')}}" class="btn btn-dark">
                                                    <i class="fas fa-undo-alt"></i>
                                                </a>
                                                <a href="{{ route('dealers.create')}}"  class="btn btn-dark ">
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
                                        <th>Celular</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>
                                      </tr>
                                </thead>
                                <tbody >
                                    @foreach ($dealers as $dealer)
                                        <tr>
                                            <th scope="row">{{ $dealer->id }}</th>
                                            <td>{{$dealer->name}}</td>
                                            <td>{{$dealer->address}}</td>
                                            <td>{{$dealer->email}}</td>
                                            <td>{{$dealer->nit}}</td>
                                            <td>{{$dealer->celular}}</td>
                                            <td id="resp{{ $dealer->id }}">                                              
                                              @if($dealer->estatus == 1)
                                              <label class="badge badge-success badge-pill">Activo</label>
                                                  @else
                                              <label class="badge badge-danger badge-pill">Inactivo</label>
                                              @endif
                                        </td>
                                            <td style="width: 20%;">
                                              <a class="btn btn-outline-warning" href="{{route('dealers.show',$dealer)}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                  <a class="btn btn-outline-info" href="{{route('dealers.edit',$dealer)}}" title="Editar">
                                                      <i class="far fa-edit"></i>
                                                  </a>
                                                  <a href="#" class="btn btn-outline-danger" data-toggle="modal" data-target="#modal-delete-edit{{$dealer->id}}"><i class="far fa-trash-alt"></i></a>  
                                                </td>
                                            @include('admin.dealer.modalDelete.delete')
                                        </tr>
                                    @endforeach     
                                </tbody>
                            <table>
                        </div>
                    </div>
                <div class="row">  
            <div class="col-lg-12">
         {!! $dealers->links() !!}
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






