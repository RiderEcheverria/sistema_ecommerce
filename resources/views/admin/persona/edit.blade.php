@extends('layouts.admin')
@section('title', 'Gestion de personas')
@section('contenido')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Editar personas
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-custom">
                    <li class="breadcrumb-item"> <a href="">Panel administrador</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('personas.index') }}"> Personas</a></li>
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
                                        {!! Form::model($persona, ['route' => ['personas.update', $persona], 'method' => 'PUT']) !!}
                                        <div class="form-group">
                                            <label for="name">Nombre</label>
                                            <input type="text" name="name" id="name" value="{{ $persona->name }}"
                                                class="form-control" placeholder="" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="surname">Apellido</label>
                                            <input type="text" name="surname" id="surname"
                                                value="{{ $persona->surname }}" class="form-control" placeholder=""
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Direcion</label>
                                            <input type="text" name="address" id="address"
                                                value="{{ $persona->address }}" class="form-control" placeholder=""
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Correo electronico</label>
                                            <input type="text" name="email" id="email"
                                                value="{{ $persona->email }}" class="form-control" placeholder="" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="name">Numero de CI</label>
                                            <input type="text" name="cedula" id="cedula"
                                                value="{{ $persona->cedula }}" class="form-control" placeholder="" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Numro de contacto</label>
                                            <input type="text" name="celular" id="celular"
                                                value="{{ $persona->celular }}" class="form-control" placeholder=""
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelectGender">Estado</label>
                                              <select  name="estatus" value="{{ old('estatus', $persona->estatus) }}" class="form-control" id="exampleSelectGender">
                                                <option selected>Seleccione el estado</option>
                                                <option value="1">Activo</option>
                                                <option value="0">Inactivo</option>
                                              </select>
                                            </div>
                                        <button type="submit" class="btn btn-primary mr-2">Actualizar</button>
                                        <a href="{{ route('personas.index') }}" class="btn btn-primary mr-2"> Cancelar</a>
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