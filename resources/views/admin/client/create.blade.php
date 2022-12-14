@extends('layouts.admin')
@section('title', 'Registrar cliente')
@section('contenido')
    <div class="content-wrapper">
        <div class="page-header">
          <ol class="breadcrumb breadcrumb-custom">
            <li class="breadcrumb-item"> <a href="">Panel administrador</a></li>
            <li class="breadcrumb-item"><a href="{{ route('clients.index') }}">Clientes</a></li>
            <li class="breadcrumb-item active" aria-current="page"> Registro de clientes</li>
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
                                        {!! Form::open(['route' => 'clients.store', 'method' => 'POST']) !!}
                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group row">                            
                                                <div class="col-sm-9">
                                                  <h6>Nombre</h6>
                                                    <input type="text" name="name" id="name" class="form-control" 
                                                    placeholder="Escriba un nombre" required onkeypress="return soloLetras(event)" />
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group row">
                                                <div class="col-sm-9">
                                                  <h6>Ubicación</h6>
                                                    <input type="text" class="form-control" name="address" id="address"
                                                    aria-describedby="helpId" placeholder="Escriba una direccion" required>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group row">
                                                <div class="col-sm-9">
                                                  <h6>Número de CI</h6>
                                                    <input type="number" name="ci" id="ci" class="form-control"
                                                    placeholder="Escriba número de cédula"  required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" ng-model="number" 
                                                    onKeyPress="if(this.value.length==8) return false;"  min="10000000" max="99999999" />
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group row">
                                                <div class="col-sm-9">
                                                  <h6>Correo electronico</h6>
                                                    <input type="email" class="form-control" name="email" id="email"
                                                    aria-describedby="emailHelpId"  placeholder="Escriba un gmail valido" required>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group row">
                                                <div class="col-sm-9">
                                                  <h6>Número de contacto</h6>
                                                    <input type="number" name="phone" id="phone" class="form-control"
                                                    placeholder="Escriba un número de contacto" required 
                                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" ng-model="number" 
                                                    onKeyPress="if(this.value.length==8) return false;"  min="60000000" max="79999999"/>
                                                </div>
                                              </div>
                                            </div> 
                                            <div class="col-md-6">
                                              <div class="form-group row">
                                                <div class="col-sm-9">
                                                  <h6>Estado</h6>
                                                  <select  name="estatus" value="{{ old('estatus', $client->estatus) }}" 
                                                      class="form-control" id="exampleSelectGender">          
                                                  <option value="1">Activo</option>
                                                  <option value="0">Inactivo</option>
                                                  </select>
                                                </div>
                                              </div>
                                            </div>   
                                          </div>         
                                        <br />
                                        <br />
                                        <button type="submit" class="btn btn-dark mr-2">Registrar</button>
                                        <a href="{{ route('clients.index') }}" class="btn btn-dark mr-2"> Cancelar</a>
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
