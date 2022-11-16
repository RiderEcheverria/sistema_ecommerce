@extends('layouts.admin')

@section('title', 'Gestion de clientes')
@section('styles')
@endsection
@section('preference')
@section('contenido')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Editar cliente
            </h3>
            <nav aria-label="breadcrumb">

                <ol class="breadcrumb breadcrumb-custom">
                    <li class="breadcrumb-item"> <a href="">Panel administrador</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('clients.index') }}"> Clientes</a></li>

                    <li class="breadcrumb-item active" aria-current="page">Editar cliente</li>
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
                                            <h4 class="card-title"> Editar cliente</h4>
                                        </div>

                                        {!! Form::model($client, ['route' => ['clients.update', $client], 'method' => 'PUT']) !!}

                                        {{-- 'name',
                                      'ci',  
                                      'address',
                                      'phone',
                                      'email', --}}


                                        <div class="form-group">
                                            <label for="name">Nombre</label>
                                            <input type="text" name="name" id="name" value="{{ $client->name }}"
                                                class="form-control" placeholder="" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Numero de CI</label>
                                            <input type="text" name="ci" id="ci" value="{{ $client->ci }}"
                                                class="form-control" placeholder="" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Direcion</label>
                                            <input type="text" name="address" id="address"
                                                value="{{ $client->address }}" class="form-control" placeholder="" required>
                                        </div>


                                        <div class="form-group">
                                            <label for="name">Numro de contacto</label>
                                            <input type="text" name="phone" id="phone" value="{{ $client->phone }}"
                                                class="form-control" placeholder="" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Correo electronico</label>
                                            <input type="text" name="email" id="email" value="{{ $client->email }}"
                                                class="form-control" placeholder="" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">Actualizar</button>
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
@section('scripts')
@endsection
