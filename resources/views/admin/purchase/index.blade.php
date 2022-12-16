@extends('layouts.admin')
@section('title', 'Informacion de compras')
@section('contenido')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <ol class="breadcrumb breadcrumb-custom">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}">Panel administrador</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Compras</li>
                </ol>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card">
                                <div class="card-body">
                            <div class="table-responsive">
                                <div id="order-listing_wrapper"
                                    class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12 ">
                                            <div class="dataTables_length" id="order-listing_length">
                                                <form class="form-inline">
                                                    <input class="form-control mr-sm-2 light-table-filter" data-table="order-table" type="text" placeholder="Busqueda por nombre" onkeypress="return soloLetras(event)">
                                                     <div>
                                                       <a href="{{ route('purchases.index') }}" class="btn btn-dark">
                                                           <i class="fas fa-undo-alt"></i>
                                                       </a>
                                                       
                                                      @can('purchase_create')
                                                       <a href="{{ route('purchases.create') }}" class="btn btn-dark ">
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
                                                    <th>Camprador</th>
                                                    <th>Proveedor</th>
                                                    <th>Fecha</th>
                                                    <th>Total</th>
                                                    {{--  <th>Estado</th>                               --}}
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($purchases as $purchase)
                                                    <tr>
                                                        <th scope="row">{{ $purchase->id }}</th>
                                                        <td>{{ $purchase->user->name }}</td>
                                                        <td>{{ $purchase->provider->name }}</td>
                                                        <td>{{ $purchase->purchase_date }}</td>
                                                        <td>{{ $purchase->total }}</td>
                                                        {{--  <td>{{$purchase->status}}</td>  --}}
                                                        <td style="width: 20%;">
                                                            {!! Form::open(['route' => ['purchases.destroy', $purchase], 'method' => 'DELETE']) !!}
                                                            @can('purchase_show')
                                                            <a class="btn btn-outline-dark"
                                                                href="{{ route('purchases.show', $purchase) }}">
                                                                <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                @endcan
                                                            {{--  <button class="btn btn-outline-danger delete-confirm"
                                                                type="submit" title="Eliminar">
                                                                <i class="far fa-trash-alt"></i>
                                                            </button>  --}}
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
                        {!! $purchases->links() !!}
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
