@extends('layouts.admin')
@section('title', 'Registrar producto')
@section('contenido')
    <div class="content-wrapper">
        <div class="page-header">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"> <a href="{{ route('home') }}">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{ route('products.index') }}"> Productos</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Registro de productos</li>
            </ol>
        </div>
        {!! Form::open(['route' => 'products.store', 'method' => 'POST', 'files' => true]) !!}
        <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder=""
                                aria-describedby="helpId" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <textarea class="form-control" name="description" id="description" rows="10"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="category_id">Categoria</label>
                            <select class="form-control" name="category_id" id="category_id">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="brand_id">Marca</label>
                            <select class="form-control" name="brand_id" id="brand_id">
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            {{--  <label for="status">Estado</label>
                            <select name="status" value="{{ old('status', $product->status) }}" class="form-control"
                                id="status">
                                <option value="1">Disponible</option>
                                <option value="0">Agotado</option>
                            </select>  --}}
                            <br>
                            <button type="submit" class="btn btn-dark mr-2">Registrar</button>
                            <a href="{{ route('products.index') }}" class="btn btn-dark mr-2"> Cancelar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Imágen del producto</h4>
                        <div class="dropify-wrapper">
                            <div class="dropify-message">
                                <input type="file" name="picture" id="picture" class="dropify">
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
                    </div>
                </div>
            </div>
        </div> 
        {!! Form::close() !!}
    </div>
@endsection
