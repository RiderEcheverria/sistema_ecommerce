@extends('layouts.admin')
@section('title', 'Informacion de repartidores')
@section('contenido')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <i class="fa fa-user"></i> {{ $dealer->name }}
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-custom">
                    <li class="breadcrumb-item">
                        <a href="">Panel administrador</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('dealers.index') }}">
                            Repartidores</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $dealer->name }} </li>
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
                <h3> {{ $dealer->name }}</h3>
            </div>
            <br />
            <div class="list-group">
                <button type="button" class="list-group-item list-group-item-action active">
                    Sobre repartidor
                </button>    
                <button type="button" class="list-group-item list-group-item-action">Historial de entregas</button>
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
                            {{ $dealer->name }}
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
                            {{ $dealer->nit }}
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
                            {{ $dealer->celular }}
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
                            {{ $dealer->email }}
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
                            {{ $dealer->address }}
                        </p>
                    </a>
                </li>
            </ul>
        </div>
        <br />
        <div lass="card-footer text-mited">
            <a href="{{ route('dealers.index') }}"
                class="btn btn-primary mr-2
                 float-right">
                Regresar
            </a>
        </div>
    </div>
@endsection