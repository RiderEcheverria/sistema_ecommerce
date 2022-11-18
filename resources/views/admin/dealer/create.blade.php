@extends('layouts.admin')
@section('title', 'Registrar repartidores')
@section('contenido')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Registro de repartidores
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-custom">
                    <li class="breadcrumb-item"> <a href="">Panel administrador</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('dealers.index') }}"> Proveedores</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Registro de repartidores</li>
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
                                            <h4 class="card-title">Registro de repartidores</h4>
                                        </div>
                                        <br />
                                        {!! Form::open(['route' => 'dealers.store', 'method' => 'POST']) !!}
                                        @include('admin.dealer.form')
                                        <button type="submit" class="btn btn-primary mr-2">Registrar</button>
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