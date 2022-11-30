@extends('layouts.admin')
@section('title', 'Detalles de compra')
@section('contenido')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Detalles de compra
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-custom">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}">Panel administrador</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('purchases.index') }}">
                            Compras</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detalles de compra</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group row">
                            <div class="col-md-4 text-center">
                                <label class="form-control-label" for="nombre"><strong>Proveedor</strong></label>
                                <p>{{ $purchase->provider->name }}</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <label class="form-control-label" for="num_compra"><strong>Número Compra</strong></label>
                                <p>{{ $purchase->id }}</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <label class="form-control-label" for="num_compra"><strong>Comprador</strong></label>
                                <p>{{ $purchase->user->name }}</p>
                            </div>
                        </div>
                        <br /><br />
                        <div class="form-group row ">
                            <h4 class="card-title ml-3">Detalles de compra</h4>
                            <div class="table-responsive col-md-12">
                                <table id="detalles" class="table">
                                    <thead>
                                        <tr>
                                            <th>Producto</th>
                                            <th>Precio (Bs)</th>
                                            <th>Cantidad</th>
                                            <th>SubTotal (Bs)</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th colspan="3">
                                                <p align="right">SUBTOTAL:</p>
                                            </th>
                                            <th>
                                                <p align="right">Bs {{ number_format($subtotal, 2) }}</p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th colspan="3">
                                                <p align="right">TOTAL IMPUESTO ({{ $purchase->tax }}%):</p>
                                            </th>
                                            <th>
                                                <p align="right">Bs {{ number_format(($subtotal * $purchase->tax) / 100, 2) }}</p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th colspan="3">
                                                <p align="right">TOTAL:</p>
                                            </th>
                                            <th>
                                                <p align="right">Bs {{ number_format($purchase->total, 2) }}</p>
                                            </th>
                                        </tr>

                                    </tfoot>
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
                        </div>
                        <div lass="card-footer text-mited">
                            <a href="{{ route('purchases.index') }}"
                                class="btn btn-dark mr-2
                    float-right"> Regresar</a>
                        </div>
                    </div>

                </div>
            </div>
        @endsection
