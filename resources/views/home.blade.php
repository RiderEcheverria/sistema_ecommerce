@extends('layouts.admin')
@section('title', 'Informacion de Home')
@section('contenido')
<div class="main-panel">          
    <div class="content-wrapper">
        <div class="page-header">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item">
                  <a href="">Panel administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Home</li>
            </ol>
        </div>
        <div class="row">
        <div class="col-12">
         <div class="card">
            <div class="card-body">
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <img src="{{asset('melody/images/HOME.PNG')}} "alt="" width="100%"> 
                </div>
            </div>
         </div>               
        </div>               
    </div>               
@endsection