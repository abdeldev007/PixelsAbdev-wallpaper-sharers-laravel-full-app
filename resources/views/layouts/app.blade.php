<!doctype html>
<html lang="eng">
<head>
    <meta charset="utf-8">
     <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>ABDEV</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!-- Scripts -->
    <script src="{{ asset('/js/app.js') }}" defer></script>
 
 
      <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
 
  <div id="hero" >

 <!-- .nav-menu -->
 
 @include('include.navbar')
    <div class="hero-container">
      <h1>PIXELS ABDEV</h1>
      <h2>The world needs to see your photograph </h2>
      @if (Auth::User()!=null)
          <div style="width: 100%" class="row">
        <div class="col-md-2">
          <a id="nav-links" style="color: rgb(255, 255, 255)  ; width:100% " href="/profile/{{Auth::User()->id}}" class="btn btn-outline-primary   ">PROFILE</a>

        </div>
        <div class="col-md-2">
          <a style="color: rgb(255, 255, 255) ; width:100% " href="/edit/{{Auth::User()->id}}" class="btn btn-outline-primary   ">EDIT</a>

        </div>
        <div class="col-md-3">
          <a style="color: rgb(255, 255, 255)  ; width:100% " href="/register" class="btn btn-outline-primary   ">NEW POST</a>

        </div>
        <div class="col-md-3">
          <a style="color: rgb(255, 255, 255)  ; width:100% " href="/register" class="btn btn-outline-primary   ">FOLLOWERS</a>

        </div>
       
        <div class="col-md-2">
          <a style="color: rgb(255, 255, 255)  ; width:100% " href="/register" class="btn btn-outline-primary   ">DEVELOPER</a>

        </div>
      </div>  
      @else
      <div class="col-md-3">
        <a style="color: chocolate  ; width:100% " href="/register" class="btn btn-outline-primary   ">BECOME A SHARER</a>

      </div>
      @endif
    
      
       </div>
  </div >
  <!-- End Header -->

    

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script>
   
// When the user scrolls down   
window.onscroll = function() {scrollFunction()};
function createAccount(){
  $("#createAccountModal").modal("show");
}
function hideRegisterModal(){
  $("#createAccountModal").modal("hide");
}
document.getElementById("navbar").style.background="rgba(0, 0, 0, 0)";  

function scrollFunction() {
 
  if (document.body.scrollTop > 160 || document.documentElement.scrollTop > 160) {
  document.getElementById("navbar").style.background="#212529";  
 } else {
 
    document.getElementById("navbar").style.background="rgba(0, 0, 0, 0)";  
 
  }
}
 
    </script>
 

 
</body>
</html>

  