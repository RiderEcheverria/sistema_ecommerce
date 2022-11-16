@extends('layouts.admin')

@section('title', 'Registrar repartidores')
@section('styles')

@endsection

@section('preference')


@section('contenido')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Registro de repartidores
            </h3>
            <nav aria-label="breadcrumb">

                <ol class="breadcrumb breadcrumb-custom">
                    <li class="breadcrumb-item"> <a href="">Panel administrador</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('dealers.index') }}"> Proveedores</a></li>

                    <li class="breadcrumb-item active" aria-current="page"> Registro de repartidores</li>
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
                                            <h4 class="card-title">Registro de repartidores</h4>
                                        </div>



                                        <br />
                                        {!! Form::open(['route' => 'dealers.store', 'method' => 'POST']) !!}

                                        @include('admin.dealer.form')
                                        <button type="submit" class="btn btn-primary mr-2">Registrar</button>
                                        <a href="{{ route('dealers.index') }}" class="btn btn-primary mr-2"> Cancelar</a>
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

@section('scripts')
    {!! Html::script('melody/../../js/data-table.js') !!}


@endsection




{{-- 





@extends('layouts.app')

@section('template_title')
    Create Dealer
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Dealer</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('dealers.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('dealer.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection --}}
