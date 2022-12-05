@extends('layouts.admin')
@section('title', 'Informacion de marcas')
@section('contenido')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h6>
                Listado de marcas
            </h6>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-custom">
                    <li class="breadcrumb-item">
                        <a href="">Panel administrador</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Marcas</li>
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
                                                        <a href="{{ route('brands.index') }}" class="btn btn-dark">
                                                            <i class="fas fa-undo-alt"></i>
                                                        </a>
                                                        <a href="{{ route('brands.create') }}" class="btn btn-dark ">
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
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($brands as $brand)
                                                <tr>
                                                    <th scope="row">{{ $brand->id }}</th>
                                                    <td> {{ $brand->name }} </td>
                                                    <td style="width: 20%;">
                                                        {!! Form::open(['route' => ['brands.destroy', $brand], 'method' => 'DELETE']) !!}
                                                        <a class="btn btn-outline-info"
                                                            href="{{ route('brands.edit', $brand) }}" title="Editar">
                                                            <i class="far fa-edit"></i>
                                                        </a>
                                                         <a href="#" class="btn btn-outline-danger" data-toggle="modal" data-target="#modal-delete-user{{$brand->id}}"><i class="far fa-trash-alt"></i></a>  
                                                    </td>
                                                    @include('admin.brand.modal.delete')
                                                    {!! Form::close() !!}
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    <table>
                                </div>
                            </div>
                        <div class="row">
                    <div class="col-lg-12">
                    {!! $brands->links() !!}
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
