@extends('layouts.admin')
@section('title', 'Informacion de categorias')
@section('contenido')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    Listado de categorias
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-custom">
                        <li class="breadcrumb-item">
                            <a href="">Panel administrador</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Categorias</li>
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
                                                                aria-label="Search" onkeypress="return soloLetras(event)" />
                                                            <button class="btn btn-dark" type="submit">
                                                                <i class="fas fa-search"></i>
                                                            </button>
                                                            <a href="{{ route('categories.index') }}" class="btn btn-dark">
                                                                <i class="fas fa-undo-alt"></i>
                                                            </a>
                                                            <a href="{{ route('categories.create') }}"
                                                                class="btn btn-dark ">
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
                                                    <th>Descripcion</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($categories as $category)
                                                    <tr>
                                                        <th scope="row">{{ $category->id }}</th>
                                                        <td>{{ $category->name }}</td>
                                                        <td>{{ $category->description }}</td>

                                                        <td style="width: 20%;">
                                                            {!! Form::open(['route' => ['categories.destroy', $category], 'method' => 'DELETE']) !!}
                                                            <a class="btn btn-outline-info"
                                                                href="{{ route('categories.edit', $category) }}"
                                                                title="Editar">
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
                                        {!! $categories->links() !!}
                                    </div>
                                </div>
                            @endsection
                            {{--  validacion de letras  --}}
                            <script>
                                function soloLetras(e) {
                                    var key = e.keyCode || e.which,
                                        tecla = String.fromCharCode(key).toLowerCase(),
                                        letras = " áéíóúabcdefghijklmnñopqrstuvwxyz",
                                        especiales = [46],
                                        tecla_especial = false;

                                    for (var i in especiales) {
                                        if (key == especiales[i]) {
                                            tecla_especial = true;
                                            break;
                                        }
                                    }

                                    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
                                        return false;
                                    }
                                }
                            </script>
