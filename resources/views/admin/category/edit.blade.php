@extends('layouts.admin')
@section('title', 'Gestion de categorias')
@section('contenido')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Editar categoria
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-custom">
                    <li class="breadcrumb-item"> <a href="">Panel administrador</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('categories.index') }}"> Categorias</a></li>

                    <li class="breadcrumb-item active" aria-current="page">Editar categoria</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <h4 class="card-title"> Editar categoria</h4>
                                        </div>
                                        {!! Form::model($category, ['route' => ['categories.update', $category], 'method' => 'PUT']) !!}
                                        <div class="form-group">
                                            <label for="name">Nombre</label>
                                            <input type="text" name="name" id="name"
                                            value="{{ $category->name }}" class="form-control" placeholder="Nombre"
                                            required onkeypress="return soloLetras(event)" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="name">Descripcion</label>
                                            <input type="text" name="description" id="description"
                                            value="{{ $category->description }}" class="form-control" placeholder="Nombre"
                                            required onkeypress="return soloLetras(event)" />
                                        </div>
                                        <button type="submit" class="btn btn-dark mr-2">Actualizar</button>
                                        <a href="{{ route('categories.index') }}" class="btn btn-dark mr-2"> Cancelar</a>
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
            especiales = [46],
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
