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
                                        <div class="form-group">
                                            <label for="name">Nombre</label>
                                            <input type="text" name="name" id="name" class="form-control"
                                                placeholder="Nombre" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="ci">Nummero CI</label>
                                            <input type="text" name="ci" id="ci" class="form-control"
                                                placeholder="ci" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="address">Ubicacion</label>
                                            <input type="text" class="form-control" name="address" id="address"
                                                aria-describedby="helpId" placeholder="" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Numero de contacto</label>
                                            <input type="text" name="phone" id="phone" class="form-control"
                                                placeholder="Celilar/Telefono" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Correo electronoco</label>
                                            <input type="email" class="form-control" name="email" id="email"
                                                aria-describedby="emailHelpId" placeholder="@.gmail.com" required>
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