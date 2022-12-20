@extends('layouts.admin')
@section('title', 'Gestion de roles')
@section('contenido')
    <div class="content-wrapper">
        <div class="page-header">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"> <a href="">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{ route('roles.index') }}"> Roles</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar roles</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 ">
                                <div class="card">
                                    <div class="card-body">
                                        {!! Form::model($role, ['route' => ['roles.update', $role], 'method' => 'PUT', 'files' => true]) !!}
                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group row">
                                                <div class="col-sm-9">
                                                    <h6>Nombre de rol</h6>
                                                    <input type="text" value="{{ $role->name }}" name="name" id="name" class="form-control" 
                                                    placeholder="Escriba un rol" required  />
                                                </div>
                                              </div>
                                            </div>                                    
                                        </div>
                                        <br>
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group row">
                                              <div class="col-sm-9">
                                                <h6>Buscar permisos</h6>
                                                <input class="form-control mr-sm-2 light-table-filter" data-table="order-table"
                                                type="text" placeholder="Busqueda por nombre" onkeypress="return soloLetras(event)">
                                              </div>
                                            </div>
                                          </div>  
                                        </div>
                                        <br/>
                                        <div class="row">
                                            <div class="col-sm-7">
                                              <div class="card">
                                                <div class="card-body"> 
                                                  <div class="tab-pane active" id="profile">
                                                    <table  class="table order-table ">
                                                      <tbody>
                                                        @foreach ($permissions as $id => $permission)
                                                        <tr>
                                                          <td>{{ $id }}</td> 
                                                          <td>
                                                            <div class="form-check">
                                                              <label class="form-check-label">
                                                                <input class="checkbox" type="checkbox" name="permissions[]"
                                                                value="{{ $id }}"  {{ $role->permissions->contains($id) ? 'checked' : '' }}>
                                                              </label>
                                                            </div>
                                                          </td>
                                                          <td>
                                                            {{ $permission }}
                                                          </td>
                                                        </tr>
                                                        @endforeach
                                                      </tbody>
                                                    </table>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          </div>
                                          </div>
                                        <br />
                                        <button type="submit" class="btn btn-dark mr-2">Actualizar</button>
                                        <a href="{{ route('roles.index') }}" class="btn btn-dark mr-2"> Cancelar</a>
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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


