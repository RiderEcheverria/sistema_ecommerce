@extends('layouts.admin')

@section('title', 'Registrar productos')
@section('styles')

@endsection

@section('preference')


@section('contenido')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Edicion de productos
            </h3>
            <nav aria-label="breadcrumb">

                <ol class="breadcrumb breadcrumb-custom">
                    <li class="breadcrumb-item"> <a href="">Panel administrador</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('products.index') }}"> Productos</a></li>

                    <li class="breadcrumb-item active" aria-current="page"> Edicion de productos</li>
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
                                            <h4 class="card-title">Edicion de producto</h4>
                                        </div>
                                        <br />
                                        {!! Form::model($product, ['route' => ['products.update', $product], 'method' => 'PUT', 'files' => true]) !!}
                                        {{--           
                                      'code',
                                      'name',
                                      'stock',
                                      'image',
                                      'sell_price',//precio
                                      'status',//estado
                                      'category_id',//categoria
                                      'provider_id',//proveedor --}}

                                        <div class="form-group">
                                            <label for="name">Nombre</label>
                                            <input type="text" name="name" id="name" value="{{ $product->name }}"
                                                class="form-control" placeholder="" aria-describedby="helpId">

                                        </div>

                                        <div class="form-group">
                                            <label for="category_id">Categoria</label>
                                            <select class="form-control" name="category_id" id="category_id">
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}"
                                                        @if ($category->id == $product->category_id) selected @endif>
                                                        {{ $category->name }}</option>
                                                @endforeach

                                            </select>
                                        </div>

                                        <br />
                                        <br />
                                        <div class="col-lg-4 grid-margin stretch-card">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title d-flex">Seleccionar Imagen
                                                        <small class="ml-auto align-self-end">

                                                        </small>
                                                    </h4>

                                                    <div class="dropify-wrapper">
                                                        <div class="dropify-message">
                                                            <span class="file-icon">
                                                            </span>
                                                            <p>Drag and drop a file here or click</p>
                                                            <p class="dropify-error">Ooops, something wrong appended.</p>
                                                        </div>
                                                        <div class="dropify-loader">
                                                        </div>
                                                        <div class="dropify-errors-container">
                                                            <ul>
                                                            </ul>
                                                        </div>
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
                                                                    <p class="dropify-infos-message">Drag and drop or click
                                                                        to replace</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <br />
                                        <br />
                                        <button type="submit" class="btn btn-primary mr-2">Registrar</button>
                                        <a href="{{ route('products.index') }}" class="btn btn-primary mr-2"> Cancelar</a>
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

@section('scripts')


@endsection
