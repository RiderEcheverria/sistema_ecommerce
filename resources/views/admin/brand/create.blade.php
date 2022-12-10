@extends('layouts.admin')
@section('title', 'Registrar marcas')
@section('contenido')
    <div class="content-wrapper">
        <div class="page-header">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"> <a href="">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{ route('brands.index') }}"> Productos</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Registro de marcas</li>
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
                                        {!! Form::open(['route' => 'brands.store', 'method' => 'POST', 'files' => true]) !!}
                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group row">
                                                <div class="col-sm-9">
                                                    <h6>Nombre de marca</h6>
                                                    <input type="text" name="name" id="name" class="form-control" 
                                                    placeholder="Escriba una marca" required onkeypress="return soloLetras(event)" />
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <div class="col-sm-9">
                                                      <h6>Estado</h6>
                                                        <select  name="estatus" value="{{ old('estatus', $brand->estatus) }}" 
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
                                        <a href="{{ route('brands.index') }}" class="btn btn-dark mr-2"> Cancelar</a>
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
    {{--  validacion de letras  --}}
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
