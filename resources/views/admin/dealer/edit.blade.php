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
                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Nombre</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="name" id="name" value="{{ $dealer->name }}"
                                                    class="form-control" placeholder="" required>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Ubicacion </label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="address" id="address"
                                                    value="{{ $dealer->address }}" class="form-control" placeholder="" required>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Numero NIT</label>
                                                <div class="col-sm-9">
                                                    <input type="number" name="nit" id="nit" value="{{ $dealer->nit }}"
                                                    class="form-control" placeholder="" required>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Correo electronoco </label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="email" id="email" value="{{ $dealer->email }}"
                                                    class="form-control" placeholder="" required>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Numero de contacto</label>
                                                <div class="col-sm-9">
                                                    <input type="number" name="celular" id="celular"
                                                    value="{{ $dealer->celular }}" class="form-control" placeholder="" required>
                                                </div>
                                              </div>
                                            </div>    
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

