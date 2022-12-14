@extends('layouts.admin')
@section('title', 'Listado de roles')
@section('contenido')
<div class="main-panel">          
    <div class="content-wrapper">
      <div class="page-header">
        <ol class="breadcrumb breadcrumb-custom">
            <li class="breadcrumb-item">
              <a href="{{ route('home') }}">Panel administrador</a></li>
            <li class="breadcrumb-item active" aria-current="page">Listado de roles</li>
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
                                            <a href="{{ route('roles.index')}}" class="btn btn-dark">
                                                <i class="fas fa-undo-alt"></i>
                                            </a>
                                            @can('role_create')
                                            <a href="{{ route('roles.create')}}"  class="btn btn-dark ">
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
                                        {{--  <th> Guard </th>  --}}
                                        <th>Fecha_de_creacion</th>
                                        <th>Permisos </th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody >
                                    @foreach ($roles as $role)
                                    <td>{{ $role->id }}</td>
                                    <td>{{ $role->name }}</td>
                                    {{--  <td>{{ $role->guard_name }}</td>  --}}
                                    <td class="text-primary">{{ $role->created_at}}</td>
                                    <td>
                                      @forelse ($role->permissions as $permission)
                                          <span class="badge badge-info">{{ $permission->name }}</span>
                                      @empty
                                          <span class="badge badge-danger">No permission added</span>
                                      @endforelse
                                    </td>
                                            <td style="width: 20%;">
                                              
                                                {!! Form::open(['route' => ['roles.destroy', $role], 'method' => 'DELETE']) !!}
                                                {{--  <a class="btn btn-outline-warning"
                                                    href="{{ route('roles.show', $role) }}">
                                                    <i class="fa fa-eye"
                                                        aria-hidden="true"></i></a>  --}}
                                              @can('role_show')              
                                               <a href="{{ route('roles.show', $role->id) }}" class="btn btn-outline-warning"><i class="fa fa-eye" aria-hidden="true"></i>  </a>
                                               @endcan
                                               @can('role_edit')
                                               <a class="btn btn-outline-info"
                                                    href="{{ route('roles.edit', $role) }}"
                                                    title="Editar">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                @endcan
                                               
                                                {{--  <form action="{{ route('roles.destroy', $role->id) }}" method="post"
                                                  onsubmit="return confirm('areYouSure')" style="display: inline-block;">
                                                </form>  --}}
                                                @can('role_destroy')
                                                <a href="#" class="btn btn-outline-danger" data-toggle="modal" data-target="#modal-delete-user{{$role->id}}"><i class="far fa-trash-alt"></i></a>  
                                                
                                                {{--  <a href="#" class="btn btn-outline-danger" data-toggle="modal" data-target="#modal-delete-edit{{$role->id}}"><i class="far fa-trash-alt"></i></a>    --}}
                                            </td>
                                            {{--  @include('admin.role.modalEdit.edit')  --}}
                                            @include('admin.roles.modal.delete')
                                             {!! Form::close() !!}
                                             @endcan
                                        </tr>  
                                    @endforeach      
                                </tbody>
                            <table>
                        </div>
                    </div>
                <div class="row">  
            <div class="col-lg-12">
         {!! $roles->links() !!}
         
        </div>
    </div>               
@endsection
{{--  validacion de letras  --}}
<script>
  function soloLetras(e) {
      var key = e.keyCode || e.which,
          tecla = String.fromCharCode(key).toLowerCase(),
          letras = " ??????????abcdefghijklmn??opqrstuvwxyz",
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




