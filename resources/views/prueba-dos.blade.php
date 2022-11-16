@extends('layouts.admin')

@section('title','Informacion de proveedores')
@section('styles')


@endsection

@section('preference')


@section('contenido')
<div class="content-wrapper">
  <div class="page-header">
      <h3 class="page-title">
        Nombre de proveedor
        {{-- <i class="fa fa-user"></i> {{$provider->name}} --}}
      </h3>
      <nav aria-label="breadcrumb">
        
          <ol class="breadcrumb breadcrumb-custom">
              <li class="breadcrumb-item">
                <a href="">Panel administrador</a></li>
            
              <li class="breadcrumb-item active"   aria-current="page"><a href="">  Proveedores</a></li>
              {{-- {{route('providers.index')}} --}}
              <li class="breadcrumb-item active" aria-current="page">  Nombre de proveedor </li>
              {{-- {{$provider->name}} --}}
          </ol>
      </nav>
  </div>
  <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between">
                    {{-- <h4 class="card-title">Proveedores</h4> --}}
                    
                   
                    {{-- <div class="btn-group">
                        <a class="nav-link" href="{{route('providers.create')}}">
                            <span class="btn btn-primary">+ Agregar nuevo</span>
                          </a>
                     
                      </div> --}}
                </div>
                <div class="row">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-lg-4">
                              <div class="border-bottom text-center pb-6">
                                <h4>Nombre de proveedor</h4>
                                {{-- <h3> {{$provider->name}}</h3> --}}
                               
                             
                              </div>
                             
                            
                              <br/>
          
                              <div class="btn-group-vertical">
                                <button   type="button" class="btn btn-outline-primary">Nombre de proveedor    </button>
                                <button type="button" class="btn btn-outline-primary">Productos</button>
                                <button type="button" class="btn btn-outline-primary">Registrar producto</button>
                              </div>
                            </div>
          
          
          
                            <div class="col-lg-7 pl-lg-6">
                              <div class="d-flex justify-content-between">
                                <h5>Informacion de proveedor</h5>
                                
                                <div>
                                  
                                  <div class="d-flex align-items-center">
                                    
                                  </div>
                                </div>
                          
                              </div>
                              
                              <div class="mt-2 py-2 border-top border-bottom">
                                <ul class="nav profile-navbar">
                                  <li class="nav-item">
                                    <a class="nav-link" href="#">
                                      <i class="fa fa-user"></i>
                                   <b> Nombre</b>
                                   <p class="text-muted">
                                    {{-- {{$provider->name}} --}}
                                    </p>
                                    </a>
                                  
                                  </li>
                                 
                                </ul>
                              </div>
                              <div class="mt-2 py-2 border-top border-bottom">
                                <ul class="nav profile-navbar">
                                  <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fa fa-id-card" aria-hidden="true"></i>
                                     <b> Numero de NIT</b>
                                      <p class="text-muted">
                                       {{-- {{$provider->nit}} --}}
                                       </p>
                                    </a>
                                  </li>
                               
                                </ul>
                              </div>
                              <div class="mt-2 py-2 border-top border-bottom">
                                <ul class="nav profile-navbar">
                                  <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fa fa-phone-square" aria-hidden="true"></i>
                                      <b> Numero  de contacto</b>
                                   <p class="text-muted">
                                    {{-- {{$provider->celular}} --}}
                                    </p>
                                    </a>
                                  </li>
                               
                                </ul>
                              </div>
                              <div class="mt-2 py-2 border-top border-bottom">
                                <ul class="nav profile-navbar">
                                  <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                      <b> Correo electronico</b>
                                      <p class="text-muted">
                                       {{-- {{$provider->email}} --}}
                                       </p>
                                    </a>
                                  </li>
                               
                                </ul>
                              </div>
                              <div class="mt-2 py-2 border-top border-bottom">
                                <ul class="nav profile-navbar">
                                  <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fa fa-map" aria-hidden="true"></i>
                                      <b> Direcion</b>
                                      <p class="text-muted">
                                       {{-- {{$provider->address}} --}}
                                       </p>
                                    </a>
                                  </li>
                               
                                </ul>
                              </div>
                             
                              
          
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
           
                <div class="row">
                  <div class="col-lg-4 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title d-flex">Dropify
                          <small class="ml-auto align-self-end">
                            <a href="dropify.html" class="font-weight-light" target="_blank">More dropify examples</a>
                          </small>
                        </h4>
                        <div class="dropify-wrapper">
                          <div class="dropify-message">
                            <span class="file-icon">
                              </span>
                               <p>Drag and drop a file here or click</p>
                               <p class="dropify-error">Ooops, something wrong appended.</p>
                              </div>
                              <div class="dropify-loader" style="display: none;">
                              </div>
                              <div class="dropify-errors-container">
                                <ul>
                                  </ul>
                                </div>
                                <input type="file" class="dropify">
                                <button type="button" class="dropify-clear">Remove</button>
                                <div class="dropify-preview" style="display: none;">
                                  <span class="dropify-render">
                                    </span>
                                    <div class="dropify-infos">
                                      <div class="dropify-infos-inner">
                                        <p class="dropify-filename">
                                          <span class="file-icon">
                                            </span>
                                             <span class="dropify-filename-inner">1DESDE ARRIBA.JPG</span>
                                            </p><p class="dropify-infos-message">Drag and drop or click to replace</p>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                      </div>
                    </div>
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



@section('scripts')

@endsection
