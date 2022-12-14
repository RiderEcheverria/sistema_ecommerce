@extends('layouts.admin')
@section('title', 'Registro de roles')

@section('contenido')
    <div class="content-wrapper">
        <div class="page-header">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"> <a href="{{ route('home') }}">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{ route('roles.index') }}"> roles</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Registro de roles</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body"> 
                                        {!! Form::open(['route' => 'roles.store','method' => 'POST']) !!}
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group row">
                                              <div class="col-sm-9">
                                                <h6>Nombre</h6>
                                                  <input type="text" name="name" id="name" class="form-control" 
                                                  placeholder="Escriba un nombre" required  />
                                              </div>
                                            </div>
                                          </div>  
                                        </div>
                                        <br/> 
                                        <button type="submit" class="btn btn-dark mr-2">Registrar</button>
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





