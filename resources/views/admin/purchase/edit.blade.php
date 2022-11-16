{{-- @extends('layouts.admin')

@section('title','Gestion de categorias')
@section('styles')

@endsection

@section('preference')


@section('contenido')
<div class="content-wrapper">
  <div class="page-header">
      <h3 class="page-title">
       Editar categoria
      </h3>
      <nav aria-label="breadcrumb">
        
          <ol class="breadcrumb breadcrumb-custom">
              <li class="breadcrumb-item"> <a href="">Panel administrador</a></li>
              <li class="breadcrumb-item"><a href="{{route('categories.index')}}"> Categorias</a></li>
             
              <li class="breadcrumb-item active" aria-current="page">Editar categoria</li>
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
                    <h4 class="card-title">  Editar categoria</h4>  
                </div>

               {!! Form::model($category,['route'=>['categories.update',$category],'method'=>'PUT'])!!}
                


                <div class="form-group">
                    <label for="name" >Nombre</label>
                    <input type="text" name="name" id="name" value="{{$category->name}}"  class="form-control"
                    placeholder="Nombre" required >
                  </div>
                  <div class="mb-3">
                    <label for="name" >Descripcion</label>
                    <textarea class="form-control" id="description" 
                     name="description" rows="3">{{$category->description}}</textarea>
                 </div>
                 

                
               <button type="submit" class="btn btn-primary mr-2">Actualizar</button>
               <a href="{{route('categories.index')}}"  class="btn btn-primary mr-2"> Cancelar</a>
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


@endsection --}}
