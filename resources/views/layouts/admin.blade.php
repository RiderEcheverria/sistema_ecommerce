<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <script src="https://kit.fontawesome.com/5fd09c0ca8.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- plugins:css -->

    {!! Html::style('melody/vendors/iconfonts/font-awesome/css/all.min.css') !!}
    {!! Html::style('melody/vendors/css/vendor.bundle.base.css') !!}
    {!! Html::style('melody/vendors/css/vendor.bundle.addons.css') !!}
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    {!! Html::style('melody/css/style.css') !!}
    <!-- endinject -->
    @yield('styles')
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('http://www.urbanui.com/') }}" />
    <link rel="shortcut icon" href={{ asset('melody/../images/favicon.png') }} />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
</head>

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <center><img src="{{ asset('melody/images/1.png') }} "alt="" width="68px"></center>


                {{-- <a class="navbar-brand brand-logo" href="../../index-2.html"><img src="../../images/logo.svg" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="../../index-2.html"><img src="../../images/logo-mini.svg" alt="logo"/></a> --}}
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" style="color: aliceblue" type="button"
                    data-toggle="minimize">
                    <span class="fas fa-bars"></span>
                </button>
                <ul class="navbar-nav">
                    <li class="nav-item nav-search d-none d-md-flex">
                        <div class="nav-link">
                            {{--  <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-search"></i>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="Search" aria-label="Search">
              </div>  --}}
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item d-none d-lg-flex">
                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" style="color: aliceblue" href="#"
                            data-toggle="dropdown" id="profileDropdown">
                            <h6 style="color: aliceblue"> {{ Auth::user()->name }} </h6>
                            <img src="{{ asset('melody/images/faces/face5.jpg') }}" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            {{--  <a class="dropdown-item">
                <i class="fas fa-cog text-dark"></i>
                Settings
              </a>  --}}
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">

                                <i class="fas fa-power-off text-dark"></i>
                                {{ __('Cerrar sesión') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="fas fa-bars"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <!-- partial:../../partials/_sidebar.html -->
        @include('layouts._nav')
        <!-- partial -->
        <!-- main-panel ends -->
        @yield('contenido')
        <!-- partial -->
        <!-- container-scroller -->
        <!-- plugins:js -->

        {!! Html::script('melody/vendors/js/vendor.bundle.base.js') !!}
        {!! Html::script('melody/vendors/js/vendor.bundle.addons.js') !!}
        <!-- endinject -->
        <!-- Plugin js for this page-->
        <!-- End plugin js for this page-->
        <!-- inject:js -->

        {!! Html::script('melody/js/off-canvas.js') !!}
        {!! Html::script('melody/js/hoverable-collapse.js') !!}
        {!! Html::script('melody/js/misc.js') !!}
        {!! Html::script('melody/js/settings.js') !!}
        {!! Html::script('melody/js/todolist.js') !!}
        <!-- endinject -->
        <!-- Custom js for this page-->
        {!! Html::script('melody/js/dashboard.js') !!}
        {!! Html::script('melody/js/dropify.js') !!}
        <script src={{ asset('//cdn.jsdelivr.net/npm/sweetalert2@11') }}></script>
        @yield('scripts')
        <!-- End custom js for this page-->
</body>
<!-- Mirrored from www.urbanui.com/melody/template/pages/tables/data-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:08:41 GMT -->

</html>
