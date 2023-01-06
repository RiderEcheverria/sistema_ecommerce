@extends('layouts.admin')
@section('title', 'Registrar Inventario')
@section('contenido')
    <div class="content-wrapper">
        <div class="page-header">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"> <a href="{{ route('home') }}">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{ route('inventarios.index') }}"> Inventarios</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Registro de inventario</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 ">
                                <div class="card">
                                    {!! Form::open(['route' => 'inventarios.store', 'method' => 'POST', 'files' => true]) !!}
                                    <div class="card-body">                                
                                        <div class="card-body">
                                            <div class="form-row">
                                                {{--  <div class="form-group col-md-8">
                                                    <div class="form-group">
                                                        <label for="category_id">Productos</label>
                                                        <select class="form-control" name="product_id" id="product_id">
                                                        @foreach ($products as $product)
                                                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    </div>
                                                </div>  --}}
                                                <div class="form-group col-md-8">
                                                    <div class="form-group">
                                                        <label for="category_id">Productos</label>
                                                        <select class="form-control" name="product_id" id="product_id">
                                                        @foreach ($purchaseDetails as $purchaseDetail)
                                                            <option value="{{ $purchaseDetail->id }}">Nombre: {{ $purchaseDetail->product->name }} Precio de compra: {{ $purchaseDetail->price }} Cantidad: {{ $purchaseDetail->quantity }}</option>
                                                        @endforeach
                                                    </select>
                                                    </div>
                                                </div>
                                                
                                                {{--  <div class="form-group row ">
                                                    <h6>Detalles de compra</h6>
                                                    <div class="table-responsive col-md-12">
                                                        <table id="detalles" class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Producto</th>
                                                                    <th>Precio de compra(Bs)</th>
                                                                    <th>Cantidad</th>
                                                                    <th>SubTotal (Bs)</th>
                                                                </tr>
                                                            </thead>
                                                           
                                                            <tbody>
                                                                @foreach ($purchaseDetails as $purchaseDetail)
                                                                    <tr>
                                                                        <td>{{ $purchaseDetail->product->name }}</td>
                                                                        <td>Bs {{ $purchaseDetail->price }}</td>
                                                                        <td>{{ $purchaseDetail->quantity }}</td>
                                                                        <td>Bs
                                                                            {{ number_format($purchaseDetail->quantity * $purchaseDetail->price, 2) }}
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>  --}}
                                               
                                            </div>
                                            <br>
                                            <div class="form-row">               
                                                <div class="form-group col-md-4">
                                                    <div class="form-group">
                                                        <label for="precio_compra">Precio de compra</label>
                                                        <input type="number" class="form-control" name="precio_compra" id="precio_compra" aria-describedby="helpId"
                                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" ng-model="number" 
                                                        onKeyPress="if(this.value.length==8) return false;"  min="1" max="99999999" />
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <div class="form-group">
                                                        <label for="precio_venta">Precio de venta</label>
                                                        <input type="number" class="form-control" name="precio_venta" id="precio_venta" aria-describedby="helpId"
                                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" ng-model="number" 
                                                        onKeyPress="if(this.value.length==8) return false;"  min="1" max="99999999" />
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <div class="form-group">
                                                        <label for="codigo">Codigo</label>
                                                        <input type="number" class="form-control" name="codigo" id="codigo" aria-describedby="helpId"
                                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" ng-model="number" 
                                                        onKeyPress="if(this.value.length==8) return false;"  min="1" max="99999999" />
                                                    </div>
                                                </div> 
                                                {{--  <div class="form-group col-md-4">
                                                    <div class="form-group">
                                                        <label for="stock">Stock</label>
                                                        <input type="number" class="form-control" name="stock" id="stock" aria-describedby="helpId"
                                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" ng-model="number" 
                                                        onKeyPress="if(this.value.length==8) return false;" min="1" max="99999999" />
                                                    </div>
                                                </div>  --}}
                                            </div>
                                            {{--  @include('admin.purchase._form1')  --}}
                                            <br>

                                            <button type="submit" class="btn btn-dark mr-2">Registrar</button>
                                            <a href="{{ route('inventarios.index') }}" class="btn btn-dark mr-2"> Cancelar</a>
                                        </div>
                                       
                                    </div>
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
        {!! Form::close() !!}
    </div>
@endsection
