@extends('layouts.admin')

@section('title','Informacion de producto')
@section('styles')

@endsection

@section('preference')


@section('contenido')
<div class="content-wrapper">
  <div class="page-header">
      <h3 class="page-title">
        <i class="fa fa-user"></i> {{$product->name}}
      </h3>
      <nav aria-label="breadcrumb">
        
          <ol class="breadcrumb breadcrumb-custom">
              <li class="breadcrumb-item">
                <a href="">Panel administrador</a></li>
          
              <li class="breadcrumb-item active"   aria-current="page"><a href="{{route('products.index')}}">  producto</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{$product->name}} </li>
          </ol>
      </nav>
  </div>
  <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between">
                    
                </div>
                <div class="row">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-lg-4">
                              <div class="border-bottom text-center pb-6">
                                
                                <img src="{{asset('image/'.$product->image)}}" alt="sample" class="rounded mw-100"> 
                                <h3> {{$product->name}}</h3>                       
                              </div>
                             
                              {{-- 'code',
                              'name',          
                              'image',
                              'status',//estado
                              'category_id',//categoria  --}}
                              <br/>
          
                              <div class="py-4">
                                <p class="clearfix">
                                  <span class="float-left">
                                 
                                </p>                              
                                <p class="clearfix">
                                  <span class="float-left">
                                  Categoria
                                  </span>
                                  <span class="float-right text-muted">
                                    <a >
                                      {{$product->category->name}}</a>
                                   
                                  </span>
                                </p>
                                
                               
                              </div>                                    
                            </div>
          
          
          
                            <div class="col-lg-7 pl-lg-6">
                              <div class="d-flex justify-content-between">
                                <h4>Informacion de producto</h4>
                                
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
                                   <b> Codigo</b>
                                   <p class="text-muted">
                                    {{$product->code}}
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
                                     <b> Nombre</b>
                                      <p class="text-muted">
                                       {{$product->name}}
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
                                      <b>Nombre de imagen</b>
                                   <p class="text-muted">
                                    {{$product->image}}
                                    </p>
                                    </a>
                                  </li>
                               
                                </ul>
                              </div>
                              <br/>
                              <div lass="card-footer text-mited">
                                <a href="{{route('products.index')}}"  class="btn btn-primary mr-2
                                float-right"> Regresar</a>
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
  </div>
</div>

@endsection



@section('scripts')



@endsection
