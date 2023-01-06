@extends('layouts.admin')
@section('title', 'Informacion de rol')
@section('contenido')
<div class="content-wrapper">
    <div class="page-header">
        <ol class="breadcrumb breadcrumb-custom">
            <li class="breadcrumb-item">
                <a href="{{ route('home') }}">Panel administrador</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('roles.index') }}">
                    Roles</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $role->name }} </li>
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
                                      <div class="card-header card-header-primary">
                                        <h4 class="card-title">Roles</h4>
                                        <p class="card-category">Vista detallada del rol: {{ $role->name }}</p>
                                      </div>
                                      <!--End header-->
                                      <!--Body-->
                                      <div class="card-body">
                                        <div class="row">
                                          <!-- first -->
                                            <div class="card card-user">
                                              <div class="card-body">
                                                <p class="card-text">
                                                  <div class="author">
                                                    <div class="block block-one"></div>
                                                    <div class="block block-two"></div>
                                                    <div class="block block-three"></div>
                                                    <div class="block block-four"></div>
                                                    <a>
                                                        <img src="{{ asset('melody/images/faces/face5.jpg') }}"  width="80 px" alt="image">               
                                                      <h5 class="title mt-3">Rol: {{ $role->name }}</h5>
                                                    </a>
                                                    <p class="description">
                                                      {{--  {{ _('Ceo/Co-Founder') }} <br>  --}}
                                                      {{ $role->guard_name }} <br>
                                                      <td class="text-primary">{{ $role->created_at}}</td>
                                                    </p>
                                                  </div>
                                                </p>
                                                <div class="card-description">
                                                  @forelse ($role->permissions as $permission)
                                                      <span class="badge rounded-pill bg-dark text-white">{{ $permission->name }}</span>
                                                  @empty
                                                      <span class="badge badge-danger bg-danger">No permissions</span>
                                                  @endforelse
                                                </div>
                                              </div>
                                              <div class="card-footer">
                                                <div class="button-container">
                                                <a href="{{ route('roles.edit', $role) }}" class="btn btn-dark mr-2"> Editar</a>
                                                <a href="{{ route('roles.index') }}" class="btn btn-dark mr-2"> Regresar</a>
                                                </div>
                                              </div>
                                            </div> 
                                    @endsection
