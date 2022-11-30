@extends('layouts.admin')
@section('title', 'Gestion de repartidores')
@section('contenido')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Editar repartidor
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-custom">
                    <li class="breadcrumb-item"> <a href="{{ route('home') }}">Panel administrador</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('dealers.index') }}"> Repartidor</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Editar repartidor</li>
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
                                        {!! Form::model($dealer, ['route' => ['dealers.update', $dealer], 'method' => 'PUT']) !!}
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <div class="col-sm-9">
                                                        <h6>Nombre</h6>
                                                        <input type="text" name="name" id="name"
                                                            value="{{ $dealer->name }}" class="form-control" placeholder=""
                                                            required onkeypress="return soloLetras(event)" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <div class="col-sm-9">
                                                        <h6>Ubicacion</h6>
                                                        <input type="text" name="address" id="address"
                                                            value="{{ $dealer->address }}" class="form-control"
                                                            placeholder="" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <div class="col-sm-9">
                                                        <h6>Numero de NIT</h6>
                                                        <input type="number" name="nit" id="nit"
                                                            value="{{ $dealer->nit }}" class="form-control" placeholder=""
                                                            required
                                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" ng-model="number" 
                                                            onKeyPress="if(this.value.length==12) return false;" min="0" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <div class="col-sm-9">
                                                        <h6>Correo electronico</h6>
                                                        <input type="text" name="email" id="email"
                                                            value="{{ $dealer->email }}" class="form-control" placeholder=""
                                                            required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <div class="col-sm-9">
                                                        <h6>Numero de contacto</h6>
                                                        <input type="number" name="celular" id="celular"
                                                            value="{{ $dealer->celular }}" class="form-control"
                                                            placeholder="" required
                                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" ng-model="number" 
                                                            onKeyPress="if(this.value.length==8) return false;" min="0" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <button type="submit" class="btn btn-dark mr-2">Actualizar</button>
                                        <a href="{{ route('dealers.index') }}" class="btn btn-dark mr-2"> Cancelar</a>
                                        {!! Form::close() !!}
                                    </div>
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