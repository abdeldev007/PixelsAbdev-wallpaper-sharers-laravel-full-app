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
     
 <!-- .nav-menu -->
 @include('include.navbar')
 <div id="app"   >
    <div  style="margin-top: 200px;" class="container  " >
        

        <div class="row ">
            <div  class="profile-img prof col-md-2"  >
                <div class="user-block">
                    <img
                      class="img-circle img-bordered-sm"
                      src="/img/profile.png"
                      alt="user image"
                    />
                 
                   
                  </div>
         
            </div>
            <div class="col-md-10 "   >
              <h3  class="profile-text "> {{$user->name}} </a>
              
                <a href="/" style="margin-bottom: 15px;" class="btn btn-primary bg-green">Follow</a>
              <div class="row">
                
                <div class="col-md-3">
                  <a href="">
                    <h5><i class="fas fa-like"></i> 23K followers</h5>  
                  </a>
              
                </div>
                <div class="col-md-3">
                  <a href="">
                    <h5>23K Likes</h5>  
                  </a>
                </div>
              </div>
                
             </div>
        </div>
    
    </div>

     <post  user_id= {{$user->id}}></post>


</body>