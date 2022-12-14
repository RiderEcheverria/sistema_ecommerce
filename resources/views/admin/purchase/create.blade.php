@extends('layouts.admin')
@section('title', 'Gestion de compras')
@section('styles')
    {!! Html::style('select/dist/css/bootstrap-select.min.css') !!}
@section('contenido')
<div class="content-wrapper">
    <div class="page-header">
        <ol class="breadcrumb breadcrumb-custom">
            <li class="breadcrumb-item"> <a href="">Panel administrador</a></li>
            <li class="breadcrumb-item"><a href="{{ route('purchases.index') }}"> Compras</a></li>

            <li class="breadcrumb-item active" aria-current="page"> Registro de compras</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 ">
                            <div class="card">
                                {!! Form::open(['route' => 'purchases.store', 'method' => 'POST']) !!}
                                <div class="card-body">                                
                                    <div class="card-body">
                                        @include('admin.purchase._form1')
                                    </div>
                                    <button type="submit" class="btn btn-dark mr-2">Registrar</button>
                                    <a href="{{ route('purchases.index') }}" class="btn btn-dark mr-2"> Cancelar</a>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
@endsection
@section('scripts')
{!! Html::script('melody/js/alerts.js') !!}
{!! Html::script('melody/js/avgrund.js') !!}
{!! Html::script('select/dist/js/bootstrap-select.min.js') !!}
{!! Html::script('js/sweetalert2.all.min.js') !!}
<script>
    $(document).ready(function() {
        $("#agregar").click(function() {
            agregar();
        });
    });
    var cont = 0;
    total = 0;
    subtotal = [];
    $("#guardar").hide();

    function agregar() {

        product_id = $("#product_id").val();
        producto = $("#product_id option:selected").text();
        quantity = $("#quantity").val();
        price = $("#price").val();
        impuesto = $("#tax").val();

        if (product_id != "" && quantity != "" && quantity > 0 && price != "") {
            subtotal[cont] = quantity * price;
            total = total + subtotal[cont];
            var fila =
                '<tr class="selected" id="fila' + cont +
                '"><td><button type="button" class="btn btn-danger btn-sm" onclick="eliminar(' +
                cont +
                ');"><i class="fa fa-times"></i></button></td> <td><input type="hidden" name="product_id[]" value="' +
                product_id + '">' + producto + '</td> <td> <input type="hidden" id="price[]" name="price[]" value="' +
                price + '"> <input class="form-control" type="number" id="price[]" value="' +
                price + '" disabled> </td>  <td> <input type="hidden" name="quantity[]" value="' +
                quantity + '"> <input class="form-control" type="number" value="' +
                quantity + '" disabled> </td> <td align="right">s/' +
                subtotal[cont] + ' </td></tr>';
            cont++;
            limpiar();
            totales();

            evaluar();
            $('#detalles').append(fila);
        } else {
            Swal.fire({
                type: 'error',
                text: 'Rellene todos los campos del detalle de la compras',
            })
        }
    }

    function limpiar() {
        $("#quantity").val("");
        $("#price").val("");
    }

    function totales() {
        $("#total").html("Bs " + total.toFixed(2));
        total_impuesto = total * impuesto / 100;
        total_pagar = total + total_impuesto;
        $("#total_impuesto").html("Bs " + total_impuesto.toFixed(2));
        $("#total_pagar_html").html("Bs " + total_pagar.toFixed(2));
        $("#total_pagar").val(total_pagar.toFixed(2));
    }

    function evaluar() {
        if (total > 0) {
            $("#guardar").show();
        } else {
            $("#guardar").hide();
        }
    }

    function eliminar(index) {
        total = total - subtotal[index];
        total_impuesto = total * impuesto / 100;
        total_pagar_html = total + total_impuesto;
        $("#total").html("Bs" + total);
        $("#total_impuesto").html("Bs" + total_impuesto);
        $("#total_pagar_html").html("Bs" + total_pagar_html);
        $("#total_pagar").val(total_pagar_html.toFixed(2));
        $("#fila" + index).remove();
        evaluar();
    }
  </script>


@endsection
                


