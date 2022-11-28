@extends('layouts.admin')
@section('title', 'Registrar personas')

@section('contenido')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Registro de personas
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-custom">
                    <li class="breadcrumb-item"> <a href="">Panel administrador</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('personas.index') }}"> Personas</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Registro de personas</li>
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
                                            <h4 class="card-title">Registro de personas</h4>
                                        </div>
                                        <br />
                                        {!! Form::open(['route' => 'personas.store','method' => 'POST']) !!}
                                        @include('admin.persona.form')
                                        <button type="submit" class="btn btn-primary mr-2">Registrar</button>
                                        <a href="{{ route('personas.index') }}" class="btn btn-primary mr-2"> Cancelar</a>
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
<script type="text/javascript">
    function valideKey(evt) {
      // code is the decimal ASCII representation of the pressed key.
      var code = evt.which ? evt.which : evt.keyCode;
  
      if (code == 8) {
        // backspace.
        return true;
      } else if (code >= 48 && code <= 57) {
        // is a number.
        return true;
      } else {
        // other keys.
        return false;
      }
    }
</script>


