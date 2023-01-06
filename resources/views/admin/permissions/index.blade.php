@extends('layouts.admin')
@section('title', 'Listado de permisos')
@section('contenido')
<div class="main-panel">          
    <div class="content-wrapper">
      <div class="page-header">
        <ol class="breadcrumb breadcrumb-custom">
            <li class="breadcrumb-item">
              <a href="{{ route('home') }}">Panel administrador</a></li>
            <li class="breadcrumb-item active" aria-current="page">Listado de permisos</li>
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
                                            <a href="{{ route('permissions.index')}}" class="btn btn-dark">
                                                <i class="fas fa-undo-alt"></i>
                                            </a>
                                            @can('permission_create')
                                            <a href="{{ route('permissions.create')}}"  class="btn btn-dark ">
                                                + Agregar nuevo
                                            </a>
                                            @endcan
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
                                        <th>Creado en </th>
         
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody >
                                    @foreach ($permissions as $permission)
                                        <tr>    
                                            <th scope="row">{{$permission->id}}</th>
                                          <td>{{$permission->name}}</td>
                                          <td class="text-primary">{{ $permission->created_at}}</td>
                                            <td style="width: 20%;">
                                                {{--  <a class="btn btn-outline-warning"
                                                    href="{{ route('permissions.show', $permission) }}">
                                                    <i class="fa fa-eye"
                                                        aria-hidden="true"></i></a>  --}}
                                                @can('permission_edit')
                                                <a class="btn btn-outline-info"
                                                    href="{{ route('permissions.edit', $permission) }}"
                                                    title="Editar">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                @endcan
                                                {{--  <a href="#" class="btn btn-outline-danger" data-toggle="modal" data-target="#modal-delete-edit{{$permission->id}}"><i class="far fa-trash-alt"></i></a>    --}}
                                                {{--  <a href="#" class="btn btn-outline-danger" data-toggle="modal" data-target="#modal-delete-edit{{$permission->id}}"><i class="far fa-trash-alt"></i></a>    --}}
                                            </td>
                                            {{--  @include('admin.permission.modalEdit.edit')  --}}
                                            {{--  @include('admin.permission.modalDelete.delete')  --}}
                                        </tr>  
                                    @endforeach      
                                </tbody>
                            <table>
                        </div>
                    </div>
                <div class="row">  
            <div class="col-lg-12">
         {!! $permissions->links() !!}
         
        </div>
    </div>               
@endsection
@section('scripts')
<script>
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





