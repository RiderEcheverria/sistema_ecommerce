
   <div   class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_settings-panel.html -->
      <div  class="theme-setting-wrapper">
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
      <div  id="right-sidebar" class="settings-panel">
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
          <div class="tab-pane fade show active scroll-wrapper ps" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
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
                    <i class="input-helper"></i></label>
                  </div>
                  <i class="remove fa fa-times-circle"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    <i class="input-helper"></i></label>
                  </div>
                  <i class="remove fa fa-times-circle"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    <i class="input-helper"></i></label>
                  </div>
                  <i class="remove fa fa-times-circle"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked="">
                      Schedule meeting for next week
                    <i class="input-helper"></i></label>
                  </div>
                  <i class="remove fa fa-times-circle"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked="">
                      Project review
                    <i class="input-helper"></i></label>
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
          <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
            </div>           
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image">
                <img src="{{asset('melody/images/faces/face5.jpg')}}" alt="image">

              </div>
              <div class="profile-name" >
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
        <li class="nav-item">
          <a class="nav-link" href="index-2.html">
            <i class="fa-solid fa-house menu-icon"></i>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <i class="fa-solid fa-badge-check"></i>
        <li class="nav-item">
       
          <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
            <i class="fa-solid fa-users menu-icon" ></i>
          
            <span class="menu-title">Usuarios</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="tables">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item " > <a class="nav-link" href="{{route('users.index')}}">Users</a></li>
              <li class="nav-item"> <a class="nav-link" href="melody/pages/tables/data-table.html">Roles</a></li>           
          </div>
        </li>
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
          <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="true" aria-controls="page-layouts">
            <i class="fa-solid fa-layer-group menu-icon"></i>
            <span class="menu-title">Inventario</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="page-layouts">
            <ul class="nav flex-column sub-menu">
              {{-- <li class="nav-item "> <a class="nav-link" href="#">Inventario</a></li> --}}
              <li class="nav-item"> <a class="nav-link" href="{{route('products.index')}}">Productos</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{route('categories.index')}}">Categorias</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{route('brands.index')}}">Marcas</a></li>
             
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
     

