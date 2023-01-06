@extends('layouts.admin')
@section('title', 'Informacion de users')
@section('contenido')
<div class="content-wrapper">
    <div class="page-header">
        <ol class="breadcrumb breadcrumb-custom">
            <li class="breadcrumb-item">
                <a href="{{ route('home') }}">Panel administrador</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('users.index') }}">
                    Personas</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $user->name }} </li>
        </ol>
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
                                                <h3> {{ $user->name }}</h3>
                                            </div>
                                            <br />
                                        </div>
                                        <div class="col-lg-7 pl-lg-6">
                                            <div class="d-flex justify-content-between">
                                                <h4>Información del usuario</h4>
                                                <div>
                                                    <div class="d-flex align-items-center">
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="col-md-8">
                                                <div class="card card-user">
                                                  <div class="card-body">
                                                    <table class="table table-bordered table-striped">
                                                      <tbody>
                                                        <tr>
                                                          <th>ID</th>
                                                          <td>{{ $user->id }}
                                                          </td>
                                                        </tr>
                                                        <tr>
                                                          <th>Nombre:</th>
                                                          <td>{{ $user->name }}</td>
                                                        </tr>
                                                        <tr>
                                                          <th>Email:</th>
                                                          <td><span class="badge badge-primary">{{ $user->email }}</span></td>
                                                        </tr>
                                                        <tr>
                                                          {{--  <th>Username</th>  --}}
                                                          {{--  <td>{!! $user->username !!}</td>  --}}
                                                        </tr>
                                                        <tr>
                                                          <th>Creado en:</th>
                                                          
                                                          <td class="text-primary">{{ $user->created_at}}</td>   
                                                        </tr>
                                                        <tr>
                                                            <th>Roles:</th>
                                                            <td>
                                                                @forelse ($user->roles as $role)
                                                                    <span class="badge rounded-pill bg-dark text-white">{{ $role->name }}</span>
                                                                @empty
                                                                    <span class="badge badge-danger bg-danger">No roles</span>
                                                                @endforelse
                                                            </td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                    <br />
                                                    <div lass="card-footer text-mited">
                                                        <a href="{{ route('users.index') }}"
                                                            class="btn btn-dark mr-2
                                                         float-right">
                                                            Regresar
                                                        </a>
                                                    </div>
                                                  </div>
                                                  
                                          
                                        </div>
                                      
                                    @endsection
