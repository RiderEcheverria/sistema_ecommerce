@extends('layouts.admin')
@section('title', 'Informacion de clientes')
@section('contenido')
    <div class="content-wrapper">
        <div class="page-header">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item">
                    <a href="">Panel administrador</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('clients.index') }}">
                        Clientes</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $client->name }} </li>
            </ol>
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
                                                    <h3> {{ $client->name }}</h3>
                                                </div>
                                                <br />
                                                <div class="list-group">
                                                    <button type="button"
                                                        class="list-group-item list-group-item-action active">
                                                        Sobre cliente
                                                    </button>
                                                    <button type="button"
                                                        class="list-group-item list-group-item-action">Historial de
                                                        compras</button>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 pl-lg-6">
                                                <div class="d-flex justify-content-between">
                                                    <h4>Información del cliente</h4>
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
                                                                    {{ $client->name }}
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
                                                                <b> Número de CI</b>
                                                                <p class="text-muted">
                                                                    {{ $client->ci }}
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
                                                                <b> Número de contacto</b>
                                                                <p class="text-muted">
                                                                    {{ $client->phone }}
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
                                                                    {{ $client->email }}
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
                                                                <b> Ubicación</b>
                                                                <p class="text-muted">
                                                                    {{ $client->address }}
                                                                </p>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <br />
                                                <div lass="card-footer text-mited">
                                                    <a href="{{ route('clients.index') }}"
                                                        class="btn btn-dark mr-2
                                                       float-right">
                                                        Regresar
                                                    </a>
                                                </div>
                                            </div>
                                        @endsection
