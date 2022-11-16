<!DOCTYPE html>
<html lang="en">


<head>
 
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
  <!-- plugins:css -->
  @yield('styles')
  {!!Html::style('melody/vendors/iconfonts/font-awesome/css/all.min.css')!!}
  {!!Html::style('melody/vendors/css/vendor.bundle.base.css')!!}
  {!!Html::style('melody/vendors/css/vendor.bundle.addons.css')!!}
  
  <script src="https://kit.fontawesome.com/5fd09c0ca8.js" crossorigin="anonymous"></script>
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  {!!Html::style('melody/css/style.css')!!}

  <!-- endinject -->
  <link rel="shortcut icon" href="http://www.urbanui.com/" />
</head>
<body> 
@yield('preference')

  <!-- partial -->
  @include('layouts._nav')
  <div class="main-panel">
    
    <div class="content-wrapper">
      <div class="page-header">
        @yield('contenido')

    

  <!-- plugins:js -->
  @section('scripts')
  {!!Html::script('melody/vendors/js/vendor.bundle.base.js')!!}
  {!!Html::script('melody/vendors/js/vendor.bundle.addons.js')!!}
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  {!!Html::script('melody/js/off-canvas.js')!!}
  {!!Html::script('melody/js/hoverable-collapse.js')!!}
  {!!Html::script('melody/js/misc.js')!!}
  {!!Html::script('melody/js/settings.js')!!}
  {!!Html::script('melody/js/todolist.js')!!}
  <!-- endinject -->
  <!-- Custom js for this page-->

  {!!Html::script('melody/js/dashboard.js')!!}
  {!!Html::script('melody/js/dropify.js')!!}
  <!-- End custom js for this page-->
</body>


</html>
