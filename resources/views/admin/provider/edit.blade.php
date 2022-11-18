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
                    <li class="breadcrumb-item"><a href="{{ route('providers.index') }}"> Categorias</a></li>
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
                                        {!! Form::model($provider, ['route' => ['providers.update', $provider], 'method' => 'PUT']) !!}
                                        <div class="form-group">
                                            <label for="name">Nombre</label>
                                            <input type="text" name="name" id="name"
                                                value="{{ $provider->name }}" class="form-control" placeholder="" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Direcion</label>
                                            <input type="text" name="address" id="address"
                                                value="{{ $provider->address }}" class="form-control" placeholder=""
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Correo electronico</label>
                                            <input type="text" name="email" id="email"
                                                value="{{ $provider->email }}" class="form-control" placeholder="" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Numero de NIT</label>
                                            <input type="text" name="nit" id="nit" value="{{ $provider->nit }}"
                                                class="form-control" placeholder="" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Numro de contacto</label>
                                            <input type="text" name="celular" id="celular"
                                                value="{{ $provider->celular }}" class="form-control" placeholder=""
                                                required>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">Actualizar</button>
                                        <a href="{{ route('providers.index') }}" class="btn btn-primary mr-2"> Cancelar</a>
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
