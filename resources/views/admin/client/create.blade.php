@extends('layouts.admin')
@section('title', 'Registrar cliente')
@section('contenido')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Registro de clientes
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-custom">
                    <li class="breadcrumb-item"> <a href="">Panel administrador</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('clients.index') }}">Clientes</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Registro de clientes</li>
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
                                            <h4 class="card-title">Registro de clientes</h4>
                                        </div>
                                        <br />
                                        {!! Form::open(['route' => 'clients.store', 'method' => 'POST']) !!}
                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Nombre</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="name" id="name" class="form-control" 
                                                    placeholder="Nombre" required>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Ubicacion </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="address" id="address"
                                                    aria-describedby="helpId" placeholder="" required>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Numero CI</label>
                                                <div class="col-sm-9">
                                                    <input type="number" name="ci" id="ci" class="form-control"
                                                     placeholder="ci" required>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Correo electronoco </label>
                                                <div class="col-sm-9">
                                                    <input type="email" class="form-control" name="email" id="email"
                                                    aria-describedby="emailHelpId" placeholder="@.gmail.com" required>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Numero de contacto</label>
                                                <div class="col-sm-9">
                                                    <input type="number" name="phone" id="phone" class="form-control"
                                                    placeholder="Celilar/Telefono" required>
                                                </div>
                                              </div>
                                            </div>    
                                          </div>         
                                        <br />
                                        <br />
                                        <button type="submit" class="btn btn-primary mr-2">Registrar</button>
                                        <a href="{{ route('clients.index') }}" class="btn btn-primary mr-2"> Cancelar</a>
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