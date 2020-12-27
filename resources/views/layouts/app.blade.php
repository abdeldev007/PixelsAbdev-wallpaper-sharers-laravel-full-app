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
      <a href="#about" class="btn-scroll scrollto" title="Scroll Down"><i class="bx bx-chevron-down"></i></a>
      <button type="button"
      onclick="createAccount()" class="btn btn-outline-warning   ">BECOME A SHARER</button>
      
      @include('include.loginFormModal')
      </div>
  </div >
  <!-- End Header -->

    

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script>
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};
function createAccount(){
  $("#createAccountModal").modal("show");
}
function hideRegisterModal(){
  $("#createAccountModal").modal("hide");
}
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

  