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
 
    <nav id="navbar"  class="  fixed-top  navbar navbar-expand-lg  ">
      <a class="navbar-brand active" href="#">PixelsAbdev</a>
      <button class="btn btn-outline-warning   navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-align-justify  "></i>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">CONTACT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">ABOUT US</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              CATEGORIES
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">CAT1</a>
              <a class="dropdown-item" href="#">CAT2</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">CAT3</a>
            </div>
          </li>
           
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">OK</button>
        </form>
      </div>
    </nav>
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

function scrollFunction() {
 
  if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
  document.getElementById("navbar").style.background="#212529";  
 } else {
 
    document.getElementById("navbar").style.background="rgba(0, 0, 0, 0)";  
 
  }
}
    </script>
</body>
</html>

  