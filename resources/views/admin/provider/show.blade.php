{{-- @extends('layouts.admin')
@section('title','información del proveedor')
@section('contenido')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            {{$provider->name}}
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li> 
                <li class="breadcrumb-item"><a href="{{route('providers.index')}}">Proveedores</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$provider->name}}</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="border-bottom text-center pb-4">
                                <h3>{{$provider->name}}</h3>
                                <div class="d-flex justify-content-between">
                                </div>
                            </div>      
                            <div class="list-group">
                                <button type="button" class="list-group-item list-group-item-action active">
                                    Sobre proveedor
                                </button>
                                <button type="button"
                                    class="list-group-item list-group-item-action">Productos</button>
                                <button type="button" class="list-group-item list-group-item-action">Registrar
                                    producto</button>    
                            </div>
                        </div>
                        <div class="col-lg-8 pl-lg-5">
                        
                                <div>
                                    <h4>Información de proveedor</h4>
                                </div>
                            
                            <div class="profile-feed">
                                <div class="d-flex align-items-start profile-feed-item">
                                    <div class="form-group col-md-6">
                                        <strong><i class="fab fa-product-hunt mr-1"></i> Nombre</strong>
                                        <p class="text-muted">
                                            {{$provider->name}}
                                        </p>
                                        <hr>
                                        <strong><i class="fas fa-address-card mr-1"></i> Numero de NIT</strong>
                                        <p class="text-muted">
                                            {{$provider->nit}}
                                        </p>
                                        <hr>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <strong>
                                            <i class="fas fa-mobile mr-1"></i>
                                            Teléfono</strong>
                                        <p class="text-muted">
                                            {{$provider->celular}}
                                        </p>
                                        <hr>
                                        <strong><i class="fas fa-envelope mr-1"></i> Correo</strong>
                                        <p class="text-muted">
                                            {{$provider->email}}
                                        </p>
                                        <hr>
                                        <strong><i class="fas fa-map-marked-alt mr-1"></i> Dirección</strong>
                                        <p class="text-muted">
                                            {{$provider->address}}
                                        </p>
                                        <hr>
                                    </div>                                   
                                </div>
                            </div>
                        </div>
                    <div class=" text-muted">
                    <a href="{{route('providers.index')}}" class="btn btn-primary float-right">Regresar</a>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.admin')
@section('title','información del proveedor')
@section('contenido')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <i class="fa fa-user"></i> {{ $provider->name }}
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-custom">
                    <li class="breadcrumb-item">
                        <a href="">Panel administrador</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('providers.index') }}">
                            Repartidores</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $provider->name }} </li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                        </div>
                        <div class="row">
                   <div class="col-12">
               <div class="card">
            <div class="card-body">
        <div class="row">
        <div class="col-lg-4">
            <div class="border-bottom text-center pb-6">
                <h3> {{ $provider->name }}</h3>
            </div>
            <br />
            <div class="list-group">
                <button type="button" class="list-group-item list-group-item-action active">
                    Sobre proveedor
                </button>
                <button type="button"
                    class="list-group-item list-group-item-action">Productos</button>
                <button type="button" class="list-group-item list-group-item-action">Registrar
                    producto</button>    
            </div>
        </div>
        <div class="col-lg-7 pl-lg-6">
            <div class="d-flex justify-content-between">
                <h4>Informacion de repartidor</h4>
            <div>
                <div class="d-flex align-items-center">
                </div>
            </div>
        </div>
           <div class="mt-2 py-2 border-top border-bottom">
            <ul class="nav profile-navbar">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-user"></i>
                        <b> Nombre</b>
                        <p class="text-muted">
                            {{ $provider->name }}
                        </p>
                    </a>
                </li>
            </ul>
        </div>
        <div class="mt-2 py-2 border-top border-bottom">
            <ul class="nav profile-navbar">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-id-card" aria-hidden="true"></i>
                        <b> Numero de NIT</b>
                        <p class="text-muted">
                            {{ $provider->nit }}
                        </p>
                    </a>
                </li>
            </ul>
        </div>
        <div class="mt-2 py-2 border-top border-bottom">
            <ul class="nav profile-navbar">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-phone-square" aria-hidden="true"></i>
                        <b> Numero de contacto</b>
                        <p class="text-muted">
                            {{ $provider->celular }}
                        </p>
                    </a>
                </li>
            </ul>
        </div>
        <div class="mt-2 py-2 border-top border-bottom">
            <ul class="nav profile-navbar">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <b> Correo electronico</b>
                        <p class="text-muted">
                            {{ $provider->email }}
                        </p>
                    </a>
                </li>
            </ul>
        </div>
        <div class="mt-2 py-2 border-top border-bottom">
            <ul class="nav profile-navbar">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-map" aria-hidden="true"></i>
                        <b> Direcion</b>
                        <p class="text-muted">
                            {{ $provider->address }}
                        </p>
                    </a>
                </li>
            </ul>
        </div>
        <br />
        <div lass="card-footer text-mited">
            <a href="{{ route('providers.index') }}"
                class="btn btn-primary mr-2
                 float-right">
                Regresar
            </a>
        </div>
    </div>
@endsection