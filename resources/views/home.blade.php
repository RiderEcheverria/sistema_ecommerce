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
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-6 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 >Vetas</h4>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-inline-block pt-3">
                                        <div class="d-md-flex">
                                            <h2 class="mb-0"></h2>
                                            <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                                <i class="far fa-clock text-muted"></i>
                                                <small class=" ml-1 mb-0">Mes actual</small>
                                            </div>
                                        </div>
                                        <small class="text-gray">Compras del sistema.</small>
                                    </div>
                                    <div class="d-inline-block">
                                        <i class="fas fa-chart-pie text-info icon-lg"></i>                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 >Compras</h4>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-inline-block pt-3">
                                        <div class="d-md-flex">
                                            <h2 class="mb-0"></h2>
                                            <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                                <i class="far fa-clock text-muted"></i>
                                                <small class="ml-1 mb-0">Mes actual</small>
                                            </div>
                                        </div>
                                        <small class="text-gray">Ventas del sistema.</small>
                                    </div>
                                    <div class="d-inline-block">
                                        <i class="fas fa-shopping-cart text-danger icon-lg"></i>                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                  {{--  <div class="col-md-4 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body d-flex flex-column">
                          <h4 >
                            <i class="fas fa-chart-pie"></i>
                            Estado de pedidos
                          </h4>
                          <div class="flex-grow-1 d-flex flex-column justify-content-between">
                            <canvas id="sales-status-chart" class="mt-3"></canvas>
                            <div class="pt-4">
                              <div id="sales-status-chart-legend" class="sales-status-chart-legend"></div>
                            </div>
                          </div>
                        </div>
                      </div>  --}}
                  </div>
                  <div class="col-md-8 grid-margin stretch-card">
                      {{--  <div class="card">
                          <div class="card-body">
                              <h4 >
                                  <i class="fas fa-chart-bar"></i>
            
                                  Productos más pedidos
                              </h4>
                              <canvas id="productos_pedidos"></canvas>
                          </div>
                      </div>  --}}
                  </div>
              </div>
                {{--  <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="">
                                    <i class="fas fa-chart-line"></i>
                                    Ventas diarias
                                </h4>
                                <canvas id="ventas_diarias" height="100"></canvas>
                                <div id="orders-chart-legend" class="orders-chart-legend"></div>
                            </div>
                        </div>
                    </div>
                </div>  --}}
                <div class="row">
                    <div class="col-md-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="">
                                    <i class="fas fa-chart-area"></i>
                                    Compras - Meses
                                </h4>
                                <canvas id="compras"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="">
                                    <i class="fas fa-chart-area"></i>
                                    Ventas - Meses
                                </h4>
                                <canvas id="ventas"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                {{--  <div class="row">
                    <div class="col-md-8 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="">
                            <i class="fas fa-table"></i>
                            Pedidos del día
                          </h4>
                          <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>Cliente</th>
                                  <th>Fecha</th>
                                  <th>Monto</th>
                                  <th>Estado</th>
                                </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                    <td class="font-weight-bold"> 
                                    </td>
                                    <td class="text-muted"> 
                                    </td>
                                    <td>    
                                    </td>
                                    <td>
                                      <label class="badge badge- badge-pill"></label>
                                    </td>
                                  </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body d-flex flex-column">
                            <h4 class="">
                              <i class="fas fa-tachometer-alt"></i>
                              Estado de pedios
                            </h4>
                            <p class="card-description">Estado de pedidos del día</p>
                            <div class="flex-grow-1 d-flex flex-column justify-content-between">
                              <canvas id="daily-sales-chart" class="mt-3 mb-3 mb-md-0"></canvas>
                              <div id="daily-sales-chart-legend" class="daily-sales-chart-legend pt-4 border-top"></div>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>  --}}
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="">
                                    <i class="fas fa-table"></i>
                                    Productos más vendidos 
                                </h4>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th>Nombre</th>
                                                <th>Código</th>
                                                <th>Stock</th>
                                                <th>Cantidad vendida</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>tv</td>
                                                <td>0001</td>
                                                <td><strong></strong> 20 Unidades</td>
                                                <td><strong></strong>15 Unidades</td>
                                            </tr> 
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
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

