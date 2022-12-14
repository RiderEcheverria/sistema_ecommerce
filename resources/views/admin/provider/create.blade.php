@extends('layouts.admin')
@section('title','Registrar proveedores')
@section('contenido')
<div class="content-wrapper">
  <div class="page-header">
        <ol class="breadcrumb breadcrumb-custom">
          <li class="breadcrumb-item"> <a href="{{ route('home') }}">Panel administrador</a></li>
          <li class="breadcrumb-item"><a href="{{route('providers.index')}}">  Proveedores</a></li>
          <li class="breadcrumb-item active" aria-current="page">  Registro de proveedores</li>
      </ol>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-12 ">
                <div class="card">
                  <div class="card-body">
                    {!! Form::open(['route'=>'providers.store','method'=>'POST'])!!}
                    @include('admin.provider._form')
                    <button type="submit" class="btn btn-dark mr-2">Registrar</button>
                    <a href="{{route('providers.index')}}"  class="btn btn-dark mr-2"> Cancelar</a>
                    {!! Form::close()!!}
                </div>
              </div>
            </div>
          </div>
       </div>
      </div>
@endsection
   <script>
  function soloLetras(e) {
    var key = e.keyCode || e.which,
      tecla = String.fromCharCode(key).toLowerCase(),
      letras = " áéíóúabcdefghijklmnñopqrstuvwxyz",
      especiales = [0],
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






