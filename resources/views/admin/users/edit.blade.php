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
                                                    <input type="password" class="form-control" name="password" placeholder="Ingrese la contraseña sólo en caso de modificarla">
                                                    @if ($errors->has('password'))
                                                    <span class="error text-danger" for="input-password">{{ $errors->first('password') }}</span>
                                                  @endif
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <label for="name" class="col-sm-2 col-form-label">Roles</label>
                                                <div class="col-sm-7">
                                                    <div class="form-group">
                                                        <div class="card">
                                                            <div class="card-body"> 
                                                            <div class="tab-pane active" id="profile">
                                                                <table class="table">
                                                                    <tbody>
                                                                        @foreach ($roles as $id => $role)
                                                                        <tr>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <label class="form-check-label">
                                                                                        <input class="checkbox" type="checkbox"
                                                                                            name="roles[]"
                                                                                            value="{{ $id }}" {{ $user->roles->contains($id) ? 'checked' : ''}}
                                                                                        >
                                                                                    </label>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                {{ $role }}
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