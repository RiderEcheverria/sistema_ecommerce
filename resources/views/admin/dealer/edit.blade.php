@extends('layouts.admin')
@section('title', 'Gestion de repartidores')
@section('contenido')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Editar repartidor
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-custom">
                    <li class="breadcrumb-item"> <a href="">Panel administrador</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('dealers.index') }}"> Repartidor</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Editar repartidor</li>
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
                                            <h4 class="card-title"> Editar repartidor</h4>
                                        </div>
                                        {!! Form::model($dealer, ['route' => ['dealers.update', $dealer], 'method' => 'PUT']) !!}
                                        <div class="form-group">
                                            <label for="name">Nombre</label>
                                            <input type="text" name="name" id="name" value="{{ $dealer->name }}"
                                                class="form-control" placeholder="" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Direcion</label>
                                            <input type="text" name="address" id="address"
                                                value="{{ $dealer->address }}" class="form-control" placeholder="" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Correo electronico</label>
                                            <input type="text" name="email" id="email" value="{{ $dealer->email }}"
                                                class="form-control" placeholder="" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Numero de NIT</label>
                                            <input type="text" name="nit" id="nit" value="{{ $dealer->nit }}"
                                                class="form-control" placeholder="" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Numro de contacto</label>
                                            <input type="text" name="celular" id="celular"
                                                value="{{ $dealer->celular }}" class="form-control" placeholder="" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">Actualizar</button>
                                        <a href="{{ route('dealers.index') }}" class="btn btn-primary mr-2"> Cancelar</a>
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
