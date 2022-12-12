@extends('layouts.admin')
@section('title', 'Gestion de users')
@section('contenido')
    <div class="content-wrapper">
        <div class="page-header">
          <ol class="breadcrumb breadcrumb-custom">
            <li class="breadcrumb-item"> <a href="{{ route('home') }}">Panel administrador</a></li>
            <li class="breadcrumb-item"><a href="{{ route('users.index') }}"> users</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edicion de  user</li>
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
                                        {!! Form::model($user, ['route' => ['users.update', $user], 'method' => 'PUT']) !!}     
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                <div class="col-sm-9">
                                                    <h6>Nombre</h6>
                                                    <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}"
                                                    placeholder="Escriba un nombre" required onkeypress="return soloLetras(event)" />
                                                </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <div class="col-sm-9">
                                                    <h6>Correo electronico</h6>
                                                        <input type="email" class="form-control" name="email" id="email"  aria-describedby="emailHelpId"
                                                        placeholder="Escriba un gmail valido" required value="{{ $user->email }}">
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                <div class="col-sm-9">
                                                    <h6>Contraseña</h6>
                                                    <input type="password" name="password" id="password" class="form-control"
                                                        placeholder="Escriba una contraseña segura " required value="{{ $user->password }}"/>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                            <br/> 
                                        <button type="submit" class="btn btn-dark mr-2">Actualizar</button>
                                        <a href="{{ route('users.index') }}" class="btn btn-dark mr-2"> Cancelar</a>
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