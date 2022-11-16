@extends('layouts.admin')

@section('title','Registrar proveedores')
@section('styles')

@endsection

@section('preference')


@section('contenido')
<div class="content-wrapper">
  <div class="page-header">
      <h3 class="page-title">
        Registro de proveedores
      </h3>
      <nav aria-label="breadcrumb">
        
          <ol class="breadcrumb breadcrumb-custom">
              <li class="breadcrumb-item"> <a href="">Panel administrador</a></li>
              <li class="breadcrumb-item"><a href="{{route('providers.index')}}">  Proveedores</a></li>
            
              <li class="breadcrumb-item active" aria-current="page">  Registro de proveedores</li>
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
                    <h4 class="card-title">Registro de proveedores</h4>  
                </div>
   
           
       
            <br/>
               {!! Form::open(['route'=>'providers.store','method'=>'POST'])!!}
               
               @include('admin.provider._form')
               <button type="submit" class="btn btn-primary mr-2">Registrar</button>
               <a href="{{route('providers.index')}}"  class="btn btn-primary mr-2"> Cancelar</a>
               {!! Form::close()!!}
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
</div>
</div>
</div>
@endsection

@section('scripts')
{!!Html::script('melody/../../js/data-table.js')!!}


@endsection




