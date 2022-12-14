@extends('layouts.admin')
@section('title', 'Gestion de permisos')
@section('contenido')
    <div class="content-wrapper">
        <div class="page-header">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"> <a href="">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{ route('permissions.index') }}"> Marcas</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar marcas</li>
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
                                        {!! Form::model($permission, ['route' => ['permissions.update', $permission], 'method' => 'PUT', 'files' => true]) !!}
                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group row">
                                                <div class="col-sm-9">
                                                    <h6>Nombre de marca</h6>
                                                    <input type="text" value="{{ $permission->name }}" name="name" id="name" class="form-control" 
                                                    placeholder="Escriba una marca" required  />
                                                </div>
                                              </div>
                                            </div>                                    
                                        </div>
                                        <br />
                                        <br />
                                        <button type="submit" class="btn btn-dark mr-2">Actualizar</button>
                                        <a href="{{ route('permissions.index') }}" class="btn btn-dark mr-2"> Cancelar</a>
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
