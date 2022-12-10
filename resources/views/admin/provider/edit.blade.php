@extends('layouts.admin')
@section('title', 'Gestion de proveedores')
@section('contenido')
    <div class="content-wrapper">
        <div class="page-header">
          <ol class="breadcrumb breadcrumb-custom">
            <li class="breadcrumb-item"> <a href="">Panel administrador</a></li>
            <li class="breadcrumb-item"><a href="{{ route('providers.index') }}"> Proveedores</a></li>
            <li class="breadcrumb-item active" aria-current="page">Editar proveedores</li>
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
                                        {!! Form::model($provider, ['route' => ['providers.update', $provider], 'method' => 'PUT']) !!}
                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group row">
                                                <div class="col-sm-9">
                                                  <h6>Nombre</h6>
                                                    <input type="text" name="name" id="name"
                                                    value="{{ $provider->name }}" class="form-control" required 
                                                    onkeypress="return soloLetras(event)" />
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group row">
                                                <div class="col-sm-9">
                                                  <h6>Ubicación</h6>
                                                    <input type="text" name="address" id="address"
                                                    value="{{ $provider->address }}" class="form-control" placeholder=""
                                                    required>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group row">
                                                <div class="col-sm-9">
                                                  <h6>Número de NIT</h6>
                                                    <input type="number" name="nit" id="nit" value="{{ $provider->nit }}"
                                                    class="form-control" placeholder="" required
                                                    ng-model="number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" ng-model="number" 
                                                    onKeyPress="if(this.value.length==12) return false;" min="100000000000" max="999999999999" />
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group row">
                                                <div class="col-sm-9">
                                                  <h6>Correo electronico</h6>
                                                    <input type="email" name="email" id="email"
                                                    value="{{ $provider->email }}" class="form-control" placeholder="" required>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group row">
                                                <div class="col-sm-9">
                                                  <h6>Número de contacto</h6>
                                                    <input type="number" name="celular" id="celular"
                                                    value="{{ $provider->celular }}" class="form-control" placeholder=""
                                                    required ng-model="number" 
                                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" ng-model="number" 
                                                    onKeyPress="if(this.value.length==8) return false;" min="60000000" max="79999999" />
                                                </div>
                                              </div>
                                            </div> 
                                            <div class="col-md-6">
                                              <div class="form-group row">
                                                <div class="col-sm-9">
                                                  <h6>Estado</h6>
                                                  <select  name="estatus" value="{{ old('estatus', $provider->estatus) }}" class="form-control" id="exampleSelectGender">
                                                      <option selected>Seleccione el estado</option>
                                                      <option value="1">Activo</option>
                                                      <option value="0">Inactivo</option>
                                                    </select>
                                                </div>
                                              </div>
                                            </div>   
                                          </div> 
                                          <br>  
                                        <button type="submit" class="btn btn-dark mr-2">Actualizar</button>
                                        <a href="{{ route('providers.index') }}" class="btn btn-dark mr-2"> Cancelar</a>
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
