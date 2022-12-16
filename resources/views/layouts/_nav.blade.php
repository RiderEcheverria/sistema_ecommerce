<div class="container-fluid page-body-wrapper">
    <!-- partial:../../partials/_settings-panel.html -->
    <div class="theme-setting-wrapper">
        {{--  <div id="settings-trigger"><i class="fas fa-fill-drip"></i></div>  --}}
        <div id="theme-settings" class="settings-panel">
            <i class="settings-close fa fa-times"></i>
            <p class="settings-heading">SIDEBAR SKINS</p>
            <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
            </div>
            <div class="sidebar-bg-options" id="sidebar-dark-theme">
                <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
            </div>
        </div>
    </div>
    <!-- partial -->
    <!-- partial:../../partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item nav-profile">
                <div class="nav-link">
                    <div class="profile-image">
                        <img src="{{ asset('melody/images/faces/face5.jpg') }}" alt="image">

                    </div>
                    <div class="profile-name">
                        <p class="name" style="color: aliceblue">
                            {{ Auth::user()->email }}
                        </p>
                        <p class="designation">
                            {{ Auth::user()->name }}
                        </p>
                    </div>
                </div>
            </li>
            </li>
            {{--  <li class="nav-item">
          <a class="nav-link" href="index-2.html">
            <i class="fa-solid fa-house menu-icon"></i>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>  --}}
         {{--  <i class="fa-solid fa-badge-check"></i>  --}}
         @can('user_index')
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                <i class="fa fa-users menu-icon" ></i>
              <span class="menu-title">Gestión de usuarios</span>
              <i class="menu-arrow"></i>
            </a>
           
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('users.index')}}"><i class="fa fa-user menu-icon"></i>
                    Usuarios</a></li>
                  @endcan
                  @can('role_index')
                <li class="nav-item"> <a class="nav-link" href="{{route('roles.index')}}"><i class="fa fa-user-circle menu-icon"></i>Roles</a></li>
                @endcan
                @can('permission_index')
                <li class="nav-item"> <a class="nav-link" href="{{route('permissions.index')}}"><i class="fa fa-unlock menu-icon"></i>Permisos</a></li>
                
                {{--  <li class="nav-item"> <a class="nav-link" href="pages/icons/themify.html">Themify icons</a></li>  --}}
              </ul>
            </div>
          </li> 
          @endcan   
          @can('persona_index')      
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
            <i class="fa-solid fa-users menu-icon" ></i>
          
            <span class="menu-title">Gestión de personas</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="tables">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item" > <a class="nav-link" href="{{ route('personas.index') }}"><i class="fa fa-user-plus menu-icon"></i>Personas</a></li>
              @endcan   
              @can('cliente_index')  
              <li class="nav-item"> <a class="nav-link" href="{{ route('clients.index') }}"><i class="fa-solid fa-user-tag menu-icon"></i>Clientes</a></li>           
              @endcan   
              @can('provider_index') 
              <li class="nav-item"> <a class="nav-link" href="{{ route('providers.index') }}"><i class="fa-solid fa-truck menu-icon"></i>Proveedores</a></li>           
              @endcan   
              @can('dealer_index') 
              <li class="nav-item"> <a class="nav-link" href="{{ route('dealers.index') }}"><i class="fa-solid fa-truck-fast menu-icon"></i>Repartidores</a></li>           
          </div>
        </li>
        @endcan  
            {{--  <li class="nav-item">

                <a class="nav-link" href="{{ route('personas.index') }}">
                    <i class="fa fa-user-plus menu-icon"></i>
                    <span class="menu-title">Personas</span>
                </a>
            </li>  --}}
            @can('purchase_index') 
            <li class="nav-item">
                <a class="nav-link" href="{{ route('purchases.index') }}">
                    <i class="fa fa-shopping-bag menu-icon" ></i>
                    <span class="menu-title">Gestión de compras</span>
                </a>
            </li>
            @endcan
            {{-- <li class="nav-item">
          
          <a class="nav-link" href="pages/widgets.html">
            <i class="fa fa-shopping-cart  menu-icon"></i>
            <span class="menu-title">Ventas</span>
          </a>
        </li> --}}
            {{--  <li class="nav-item">
          <a class="nav-link" href="pages/widgets.html">
            <i class="fa fa-gift  menu-icon"></i>
            <span class="menu-title">Promociones</span>
          </a>
        </li>  --}}
        @can('product_index')
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="true"
                    aria-controls="page-layouts">
                    <i class="fa-solid fa-layer-group menu-icon"></i>
                    <span class="menu-title">Gestión de inventario</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="page-layouts">
                    <ul class="nav flex-column sub-menu">
                        {{-- <li class="nav-item "> <a class="nav-link" href="#">Inventario</a></li> --}}
                        <li class="nav-item"> <a class="nav-link" href="{{ route('products.index') }}">
                            <i class="fa fa-tags menu-icon"></i>
                            Productos</a>
                        </li>
                        @endcan   
                        @can('category_index') 
                        <li class="nav-item"> <a class="nav-link"
                                href="{{ route('categories.index') }}"><i class="fa fa-tag menu-icon"></i>
                                Categorias</a></li>
                        @endcan   
                        @can('brand_index') 
                        <li class="nav-item"> <a class="nav-link" 
                            href="{{ route('brands.index') }}"><i class="fa fa-tag menu-icon"></i>
                            Marcas</a></li>
                    </ul>
                </div>
            </li>
            @endcan 
            {{-- <li class="nav-item">
          <a class="nav-link" href="pages/documentation.html">
            <i class="far fa-file-alt menu-icon"></i>
            <span class="menu-title">Documentation</span>
          </a>
        </li> --}}
        </ul>
    </nav>
