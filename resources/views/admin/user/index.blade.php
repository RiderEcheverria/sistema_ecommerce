@extends('layouts.admin')
@section('title', 'Informacion de usuarios')
@section('contenido')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    Listado de usuarios
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-custom">
                        <li class="breadcrumb-item">
                            <a href="">Panel administrador</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Usuarios</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div id="order-listing_wrapper"
                                    class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12 ">
                                            <div class="dataTables_length" id="order-listing_length">
                                                <nav class="navbar navbar-light float-right">
                                                    <form class="form-inline">
                                                        <div>
                                                            <h6>Busqueda por nombre</h6>
                                                            <input name="buscar-nombre" class="form-control mr-sm-2"
                                                                type="search" placeholder="Busqueda por nombre"
                                                                aria-label="Search">
                                                            <button class="btn btn-dark" type="submit">
                                                                <i class="fas fa-search"></i>
                                                            </button>
                                                            <a href="{{ route('users.index') }}" class="btn btn-dark">
                                                                <i class="fas fa-undo-alt"></i>
                                                            </a>
                                                            <a href="{{ route('users.create') }}" class="btn btn-dark ">
                                                                + Agregar nuevo
                                                            </a>
                                                        </div>
                                                    </form>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="products_listing" class="table">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Nombre</th>
                                                    <th>Correo electronico</th>
                                                    <th>Creado en</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $user)
                                                    <tr>
                                                        <th scope="row">{{ $user->id }}</th>
                                                        <td>{{ $user->name }}</td>
                                                        <td>{{ $user->email }}</td>
                                                        <td>{{ $user->created_at }}</td>
                                                        <td style="width: 20%;">
                                                            {!! Form::open(['route' => ['users.destroy', $user], 'method' => 'DELETE']) !!}
                                                            <a class="btn btn-outline-info"
                                                                href="{{ route('users.edit', $user) }}" title="Editar">
                                                                <i class="far fa-edit"></i>
                                                            </a>
                                                            <button class="btn btn-outline-danger delete-confirm"
                                                                type="submit" title="Eliminar">
                                                                <i class="far fa-trash-alt"></i>
                                                            </button>
                                                            {!! Form::close() !!}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        {!! $users->links() !!}
                                    </div>
                                </div>
                            @endsection
