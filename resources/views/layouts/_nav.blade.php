<div class="container-scroller">
  <!-- partial:partials/_navbar.html -->
  <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <img src="melody/images/1.png" alt="" width="80px">
      {{-- <a class="navbar-brand brand-logo" href="index-2.html"><img src="melody/images/logo.svg" alt="logo"/></a> --}}
      {{-- <a class="navbar-brand brand-logo-mini" href="index-2.html"><img src="melody/images/logo-mini.svg" alt="logo"/></a> --}}
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="fas fa-bars" style="color: aliceblue"></span>
      </button>
      <ul class="navbar-nav">
        <li class="nav-item nav-search d-none d-md-flex">
          <div class="nav-link">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fas fa-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Search" aria-label="Search">
            </div>
          </div>
        </li>
      </ul>
      <ul class="navbar-nav navbar-nav-right">
        
       
        <li class="nav-item dropdown">
          
        </li>
        <li class="nav-item dropdown">
          
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
            <div class="dropdown-item">
              <p class="mb-0 font-weight-normal float-left">You have 7 unread mails
              </p>
              <span class="badge badge-info badge-pill float-right">View all</span>
            </div>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                  <img src="melody/images/faces/face4.jpg" alt="image" class="profile-pic">
              </div>
              <div class="preview-item-content flex-grow">
                <h6 class="preview-subject ellipsis font-weight-medium">David Grey
                  <span class="float-right font-weight-light small-text">1 Minutes ago</span>
                </h6>
                <p class="font-weight-light small-text">
                  The meeting is cancelled
                </p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                  <img src="melody/images/faces/face2.jpg" alt="image" class="profile-pic">
              </div>
              <div class="preview-item-content flex-grow">
                <h6 class="preview-subject ellipsis font-weight-medium">Tim Cook
                  <span class="float-right font-weight-light small-text">15 Minutes ago</span>
                </h6>
                <p class="font-weight-light small-text">
                  New product launch
                </p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                  <img src="melody/images/faces/face3.jpg" alt="image" class="profile-pic">
              </div>
              <div class="preview-item-content flex-grow">
                <h6 class="preview-subject ellipsis font-weight-medium"> Johnson
                  <span class="float-right font-weight-light small-text">18 Minutes ago</span>
                </h6>
                <p class="font-weight-light small-text">
                  Upcoming board meeting
                </p>
              </div>
            </a>
          </div>
        </li>
        
        <li class="nav-item nav-profile dropdown">
          <a class="nav-link dropdown-toggle" style="color: aliceblue" href="#" data-toggle="dropdown" id="profileDropdown">
            <h6 style="color: aliceblue" >    {{ Auth::user()->name }} </h6>
            {{-- <h6 style="color: aliceblue" >  Admin</h6> --}}
            <img src="melody/images/faces/face5.jpg" alt="profile"/>
          </a>
          
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown" >
            
            <a class="dropdown-item" style="color: rgb(9, 9, 9)">
              
              <i class="fas fa-cog text-primary"></i>
              Settings
            
            </a>
            <div class="dropdown-divider"></div>
            <a   class="dropdown-item"   href="{{ route('logout') }}"  onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            
              <i class="fas fa-power-off text-primary"></i>
            {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
          </div>
          
          
        </li>
        
      </ul>
     
    </div>
  </nav>
  <!-- partial -->
  <div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_settings-panel.html -->
    <div class="theme-setting-wrapper">
      <div id="settings-trigger"><i class="fas fa-fill-drip"></i></div>
      <div id="theme-settings" class="settings-panel">
        <i class="settings-close fa fa-times"></i>
        <p class="settings-heading">SIDEBAR SKINS</p>
        <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
        <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
        <p class="settings-heading mt-2">HEADER SKINS</p>
        <div class="color-tiles mx-0 px-4">
          <div class="tiles primary"></div>
          <div class="tiles success"></div>
          <div class="tiles warning"></div>
          <div class="tiles danger"></div>
          <div class="tiles info"></div>
          <div class="tiles dark"></div>
          <div class="tiles default"></div>
        </div>
      </div>
    </div>
    <div id="right-sidebar" class="settings-panel">
      <i class="settings-close fa fa-times"></i>
      <ul class="nav nav-tabs" id="setting-panel" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
        </li>
      </ul>
      <div class="tab-content" id="setting-content">
        <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
          <div class="add-items d-flex px-3 mb-0">
            <form class="form w-100">
              <div class="form-group d-flex">
                <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task-todo">Add</button>
              </div>
            </form>
          </div>
          <div class="list-wrapper px-3">
            <ul class="d-flex flex-column-reverse todo-list">
              <li>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="checkbox" type="checkbox">
                    Team review meeting at 3.00 PM
                  </label>
                </div>
                <i class="remove fa fa-times-circle"></i>
              </li>
              <li>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="checkbox" type="checkbox">
                    Prepare for presentation
                  </label>
                </div>
                <i class="remove fa fa-times-circle"></i>
              </li>
              <li>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="checkbox" type="checkbox">
                    Resolve all the low priority tickets due today
                  </label>
                </div>
                <i class="remove fa fa-times-circle"></i>
              </li>
              <li class="completed">
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="checkbox" type="checkbox" checked>
                    Schedule meeting for next week
                  </label>
                </div>
                <i class="remove fa fa-times-circle"></i>
              </li>
              <li class="completed">
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="checkbox" type="checkbox" checked>
                    Project review
                  </label>
                </div>
                <i class="remove fa fa-times-circle"></i>
              </li>
            </ul>
          </div>
          <div class="events py-4 border-bottom px-3">
            <div class="wrapper d-flex mb-2">
              <i class="fa fa-times-circle text-primary mr-2"></i>
              <span>Feb 11 2018</span>
            </div>
            <p class="mb-0 font-weight-thin text-gray">Creating component page</p>
            <p class="text-gray mb-0">build a js based app</p>
          </div>
          <div class="events pt-4 px-3">
            <div class="wrapper d-flex mb-2">
              <i class="fa fa-times-circle text-primary mr-2"></i>
              <span>Feb 7 2018</span>
            </div>
            <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
            <p class="text-gray mb-0 ">Call Sarah Graves</p>
          </div>
        </div>
        <!-- To do section tab ends -->
        <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
          <div class="d-flex align-items-center justify-content-between border-bottom">
            <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
            <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
          </div>
          <ul class="chat-list">
            <li class="list active">
              <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
              <div class="info">
                <p>Thomas Douglas</p>
                <p>Available</p>
              </div>
              <small class="text-muted my-auto">19 min</small>
            </li>
            <li class="list">
              <div class="profile"><img src="melody/images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
              <div class="info">
                <div class="wrapper d-flex">
                  <p>Catherine</p>
                </div>
                <p>Away</p>
              </div>
              <div class="badge badge-success badge-pill my-auto mx-2">4</div>
              <small class="text-muted my-auto">23 min</small>
            </li>
            <li class="list">
              <div class="profile"><img src="melody/images/faces/face3.jpg" alt="image"><span class="online"></span></div>
              <div class="info">
                <p>Daniel Russell</p>
                <p>Available</p>
              </div>
              <small class="text-muted my-auto">14 min</small>
            </li>
            <li class="list">
              <div class="profile"><img src="melody/images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
              <div class="info">
                <p>James Richardson</p>
                <p>Away</p>
              </div>
              <small class="text-muted my-auto">2 min</small>
            </li>
            <li class="list">
              <div class="profile"><img src="melody/images/faces/face5.jpg" alt="image"><span class="online"></span></div>
              <div class="info">
                <p>Madeline Kennedy</p>
                <p>Available</p>
              </div>
              <small class="text-muted my-auto">5 min</small>
            </li>
            <li class="list">
              <div class="profile"><img src="melody/images/faces/face6.jpg" alt="image"><span class="online"></span></div>
              <div class="info">
                <p>Sarah Graves</p>
                <p>Available</p>
              </div>
              <small class="text-muted my-auto">47 min</small>
            </li>
          </ul>
        </div>
        <!-- chat tab ends -->
      </div>
    </div>
    <!-- partial -->
    
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item nav-profile">
          <div class="nav-link">
            <div class="profile-image">
              <img src="melody/images/faces/face5.jpg"  alt="image"/>
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
        <li class="nav-item">
          <a class="nav-link" href="index-2.html">
            <i class="fa-solid fa-house menu-icon"></i>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <i class="fa-solid fa-badge-check"></i>
        {{-- <li class="nav-item">
       
          <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
            <i class="fa-solid fa-users menu-icon" ></i>
          
            <span class="menu-title">Usuarios</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="tables">
            <ul class="nav flex-column sub-menu">
             
              <li class="nav-item " > <a class="nav-link" href="melody/pages/tables/data-table.html">Users</a></li>
              <li class="nav-item"> <a class="nav-link" href="melody/pages/tables/data-table.html">Roles</a></li>
              <li class="nav-item"> <a class="nav-link" href="melody/pages/tables/data-table.html">Privilegios</a></li>
              <li class="nav-item"> <a class="nav-link" href="melody/pages/tables/data-table.html">Data table</a></li>
              
          </div>
      
        </li> --}}
        <li class="nav-item">
          
          <a class="nav-link" href="{{route('personas.index')}}">
            <i class="fa fa-user-plus menu-icon"></i>
            <span class="menu-title">Personas</span>
          </a>
        </li>
     
        {{-- <li class="nav-item">
          <a class="nav-link" href="{{route('purchases.index')}}">
            <i class="fa-solid fa-tags menu-icon"></i>
            
            <span class="menu-title">Compras</span>
          </a>
          
        </li> --}}
        {{-- <li class="nav-item">
          
          <a class="nav-link" href="pages/widgets.html">
            <i class="fa fa-shopping-cart  menu-icon"></i>
            <span class="menu-title">Ventas</span>
          </a>
        </li> --}}
        <li class="nav-item">
          
          <a class="nav-link" href="pages/widgets.html">
            <i class="fa fa-gift  menu-icon"></i>
            <span class="menu-title">Promociones</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
            <i class="fa-solid fa-layer-group menu-icon"></i>
            <span class="menu-title">Inventario</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="page-layouts">
            <ul class="nav flex-column sub-menu">
              {{-- <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="#">Inventario</a></li> --}}
              <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="{{route('products.index')}}">Productos</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{route('categories.index')}}">Categorias</a></li>
              <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="{{route('brands.index')}}">Marcas</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('clients.index')}}">
            <i class="fa-solid fa-user-tag menu-icon"></i>
            <span class="menu-title">Clientes</span>
          </a>
        
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('providers.index')}}">
            <i class="fa-solid fa-truck menu-icon"></i>
            <span class="menu-title">Proveedores</span>
          </a>
          {{-- <i class="fa-solid fa-truck"></i> --}}
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('dealers.index')}}">
            <i class="fa-solid fa-truck-fast menu-icon"></i>
            <span class="menu-title">Repartidores</span>
          </a>
          {{-- <i class="fa-solid fa-truck-fast"></i> --}}
        </li>
       
        {{-- <li class="nav-item">
          <a class="nav-link" href="pages/documentation.html">
            <i class="far fa-file-alt menu-icon"></i>
            <span class="menu-title">Documentation</span>
          </a>
        </li> --}}
      </ul>
    </nav>
    <!-- partial -->
  
