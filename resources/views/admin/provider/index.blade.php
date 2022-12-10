@extends('layouts.admin')
@section('title', 'Informacion de proveedores')
@section('contenido')
<div class="main-panel">          
    <div class="content-wrapper">
      <div class="page-header">
        <ol class="breadcrumb breadcrumb-custom">
          <li class="breadcrumb-item">
            <a href="{{ route('home') }}">Panel administrador</a></li>
          <li class="breadcrumb-item active" aria-current="page">Proveedores</li>
      </ol>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="card">
                <div class="card-body">
                <div class="table-responsive">
                    <div id="order-listing_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">  
                        <div class="row">
                            <div class="col-sm-12 ">
                                <div class="dataTables_length" id="order-listing_length">
                                  <form class="form-inline">            
                                    <div>
                                      <input class="form-control mr-sm-2 light-table-filter" data-table="order-table"
                                    type="text" placeholder="Busqueda por nombre" onkeypress="return soloLetras(event)">                                                                    
                                        <a href="{{ route('providers.index')}}" class="btn btn-dark">
                                            <i class="fas fa-undo-alt"></i>
                                        </a>
                                        <a href="{{ route('providers.create')}}"  class="btn btn-dark ">
                                            + Agregar nuevo
                                        </a>
                                    </div>                           
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="products_listing" class="table order-table ">  
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Ubicación</th>
                                        <th>Correo electronico</th>
                                        <th>Número de NIT</th>
                                        <th>Celular</th>
                                        <th>Estado</th>
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
                                            <td id="resp{{ $provider->id }}">                                              
                                              @if($provider->estatus == 1)
                                              <label class="badge badge-success badge-pill">Activo</label>
                                                  @else
                                              <label class="badge badge-danger badge-pill">Inactivo</label>
                                              @endif
                                        </td>
                                            <td style="width: 20%;">           
                                                  <a class="btn btn-outline-warning" href="{{route('providers.show',$provider)}}">
                                                  <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                  <a class="btn btn-outline-info" href="{{route('providers.edit',$provider)}}"
                                                   title="Editar">
                                                  <i class="far fa-edit"></i></a>
                                                  <a href="#" class="btn btn-outline-danger" data-toggle="modal" data-target="#modal-delete-edit{{$provider->id}}"><i class="far fa-trash-alt"></i></a>  
                                            </td>
                                            @include('admin.provider.modalDelete.delete')
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
   <script type="text/javascript">
    (function(document) {
      'use strict';

      var LightTableFilter = (function(Arr) {

        var _input;

        function _onInputEvent(e) {
          _input = e.target;
          var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
          Arr.forEach.call(tables, function(table) {
            Arr.forEach.call(table.tBodies, function(tbody) {
              Arr.forEach.call(tbody.rows, _filter);
            });
          });
        }

        function _filter(row) {
          var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
          row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
        }

        return {
          init: function() {
            var inputs = document.getElementsByClassName('light-table-filter');
            Arr.forEach.call(inputs, function(input) {
              input.oninput = _onInputEvent;
            });
          }
        };
      })(Array.prototype);

      document.addEventListener('readystatechange', function() {
        if (document.readyState === 'complete') {
          LightTableFilter.init();
        }
      });

    })(document);
    </script> 
   