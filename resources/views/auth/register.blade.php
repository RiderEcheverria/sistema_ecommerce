<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sistema E-commerce</title>
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
  <link rel="shortcut icon" href="melody/images/favicon.png" />
</head>
<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
          <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
            <div class="row flex-grow">
              <div class="col-lg-6 d-flex align-items-center justify-content-center">
                <div class="auth-form-transparent text-left p-3">
                  <div class="brand-logo">
                  <center><img style="position: center"  src="{{asset('melody/images/1.png')}}" alt="logo"></center>  
                  </div>
                 <center><h4>Sistema E-commerce</h4></center>             
                  @yield('contenido')
                  <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nombre de usuario</label>
                        <div class="input-group">
                          <div class="input-group-prepend bg-transparent">
                            <span class="input-group-text bg-transparent border-right-0">
                              <i class="fa fa-user text-dark"></i>
                            </span>
                          </div>
                          <input id="name" type="text"
                          class="form-control @error('name') is-invalid @enderror" name="name"
                          value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre de usuario" required>
                          @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="email">Correo electrónico</label>
                        <div class="input-group">
                          <div class="input-group-prepend bg-transparent">
                            <span class="input-group-text bg-transparent border-right-0"> 
                              <i class="fa fa-envelope text-dark"></i>
                            </span>
                          </div>
                          <input id="email" type="email"
                          class="form-control @error('email') is-invalid @enderror" name="email"
                          value="{{ old('email') }}" required autocomplete="email"  placeholder="ejemplo@gmail.com" required>
                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="password">Contraseña</label>
                        <div class="input-group">
                          <div class="input-group-prepend bg-transparent">
                            <span class="input-group-text bg-transparent border-right-0">
                              <i class="fa fa-lock text-dark"></i>
                            </span> 
                          </div>
                          <input id="password" type="password"
                          class="form-control @error('password') is-invalid @enderror" name="password"
                          required autocomplete="new-password" placeholder="Contraseña"> 
                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror                  
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="password">Confirmar contraseña </label>
                        <div class="input-group">
                          <div class="input-group-prepend bg-transparent">
                            <span class="input-group-text bg-transparent border-right-0">
                              <i class="fa fa-lock text-dark"></i>
                            </span> 
                          </div>
                          <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar contraseña">  
                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror                  
                        </div>
                      </div>
                    <div class="my-3">
                   <button class="btn btn-block btn-dark btn-lg 
                    font-weight-medium auth-form-btn" type="submit">{{ __('REGISTRARSE') }}</button>
                 </div>
                </form>             
                </div>
                </div>
                <div class="col-lg-6 login-half-bg d-flex flex-row">
                <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2022  <a href=""></a></p>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  {!! Html::script('melody/vendors/js/vendor.bundle.base.js') !!}
  {!! Html::script('melody/vendors/js/vendor.bundle.addons.js') !!}
  <!-- endinject -->
  <!-- inject:js -->
  {!! Html::script('melody/js/off-canvas.js') !!}
  {!! Html::script('melody/js/hoverable-collapse.js') !!}
  {!! Html::script('melody/js/misc.js') !!}
  {!! Html::script('melody/js/settings.js') !!}
  {!! Html::script('melody/js/todolist.js') !!}
  <!-- endinject -->
</body>
</html>
