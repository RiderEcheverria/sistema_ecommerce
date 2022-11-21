@extends('layouts.admin')
@section('title', 'Registrar marcas')
@section('contenido')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Registro de marcas
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-custom">
                    <li class="breadcrumb-item"> <a href="">Panel administrador</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('brands.index') }}"> Productos</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Registro de marcas</li>
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
                                            <h4 class="card-title">Registro de marcas</h4>
                                        </div>
                                        <br/>
                                        {!! Form::open(['route' => 'brands.store', 'method' => 'POST', 'files' => true]) !!}
                                        <div class="form-group">
                                            <label for="name">Nombre</label>
                                            <input type="text" name="name" id="name" class="form-control"
                                                placeholder="" aria-describedby="helpId" required>
                                        </div>             
                                        <div class="dropify-wrapper">
                                            <div class="dropify-message">
                                                <input type="file" name="imagen" id="imagen" class="dropify">
                                                <button type="button" class="dropify-clear">Remove</button>
                                                <div class="dropify-preview">
                                                    <span class="dropify-render">
                                                    </span>
                                                    <div class="dropify-infos">
                                                        <div class="dropify-infos-inner">
                                                            <p class="dropify-filename">
                                                                <span class="file-icon">
                                                                </span>
                                                                <span class="dropify-filename-inner">
                                                                </span>
                                                            </p>
                                                            <p class="dropify-infos-message">Drag and drop or click to
                                                                replace</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br />
                                        <br />
                                        <button type="submit" class="btn btn-primary mr-2">Registrar</button>
                                        <a href="{{ route('brands.index') }}" class="btn btn-primary mr-2"> Cancelar</a>
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

