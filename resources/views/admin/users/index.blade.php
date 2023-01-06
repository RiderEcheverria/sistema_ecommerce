@extends('layouts.admin')
@section('title', 'Usuarios del sistema')
@section('contenido')
<div class="main-panel">          
    <div class="content-wrapper">
      <div class="page-header">
        <ol class="breadcrumb breadcrumb-custom">
            <li class="breadcrumb-item">
              <a href="{{ route('home') }}">Panel administrador</a></li>
            <li class="breadcrumb-item active" aria-current="page">Usuarios del sistema</li>
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
                                            <a href="{{ route('users.index')}}" class="btn btn-dark">
                                                <i class="fas fa-undo-alt"></i>
                                           
                                            </a>
                                            @can('user_create')
                                            <a href="{{ route('users.create')}}"  class="btn btn-dark ">
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
                                        <th>Email</th>
                                        <th>Roles</th>
                                        <th>Creado en</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody >
                                    @foreach ($users as $user)
                                        <tr>    
                                            <th scope="row">{{$user->id}}</th>
                                        <td>
                                        <a href="{{route('users.show',$user)}}">{{$user->name}}</a>
                                        </td>
                                        <td>{{$user->email}}</td>
                                        <td>
                                          @forelse ($user->roles as $role)
                                            <span class="badge badge-info">{{ $role->name }}</span>
                                          @empty
                                            <span class="badge badge-danger">No roles</span>
                                          @endforelse
                                        </td> 
                                        <td class="text-primary">{{ $user->created_at}}</td>  
                                        {!! Form::open(['route' => ['users.delete', $user], 'method' => 'DELETE'])!!}             
                                            <td style="width: 20%;">
                                              @can('user_show')
                                                <a class="btn btn-outline-warning"
                                                    href="{{ route('users.show', $user) }}">
                                                    <i class="fa fa-eye"
                                                        aria-hidden="true"></i></a>
                                              @endcan
                                              @can('user_edit')
                                                <a class="btn btn-outline-info"
                                                    href="{{ route('users.edit', $user) }}"
                                                    title="Editar">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                @endcan
                                                @can('user_destroy')
                                                <a href="#" class="btn btn-outline-danger" data-toggle="modal" data-target="#modal-delete-user{{$user->id}}"><i class="far fa-trash-alt"></i></a>  
                                                @endcan
                                                {{--  <a href="#" class="btn btn-outline-danger" data-toggle="modal" data-target="#modal-delete-edit{{$user->id}}"><i class="far fa-trash-alt"></i></a>    --}}
                                                {{--  <a href="#" class="btn btn-outline-danger" data-toggle="modal" data-target="#modal-delete-edit{{$user->id}}"><i class="far fa-trash-alt"></i></a>    --}}
                                            </td>
                                            {{--  @include('admin.user.modalEdit.edit')  --}}
                                            @include('admin.users.modal.delete')
                                            {!! Form::close() !!}
                                            
                                        </tr>  
                                    @endforeach      
                                </tbody>
                            <table>
                        </div>
                    </div>
                <div class="row">  
            <div class="col-lg-12">
         {!! $users->links() !!}
         
        </div>
    </div>               
@endsection
@section('scripts')
<script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.bootstrap4.min.js"></script>
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
