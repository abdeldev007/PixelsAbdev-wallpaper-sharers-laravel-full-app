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
<script>
  function hideNewPostModal(){
    $("#createPostModal").modal("hide");
  }
  function showModal(){
    $("#createPostModal").modal("show");
  }
</script>
</head>
<body>
     
 <!-- .nav-menu -->
 @include('include.navbar')
 <div id="app"   >
    <div  style="margin-top: 100px;" class="container  " >
        

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
                @if (Auth::User()!=null)
                @if (Auth::User()->id!=$user->id)
                <a href="/" style="margin-bottom: 15px;" class="btn btn-primary bg-green">Follow</a>
                @else 
                <a href="/" style="margin-bottom: 15px;" class="btn btn-primary bg-yellow">Edit</a>
               <a onClick="showModal()" style="margin-bottom: 15px;" class="btn btn-primary bg-yellow">New Post</a>

                @endif
                @else
                <a href="/" style="margin-bottom: 15px;" class="btn btn-primary bg-green">Follow</a>
                @endif             
                <h6><i class="fas fa-location"></i> Agadir , Morocco <i class="fas fa-hd"></i> reccadev</h6>
                
             </div>
             <div class="container">
              <ul style="margin-top: 30px" class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link active" href="#">{{count($user->posts)}} Photos</a>
                </li>
                <li class="nav-item">
                  <a style="color: grey" class="nav-link " href="#">2 Followers</a>
                </li>
                <li class="nav-item">
                  <a style="color: grey" class="nav-link " href="#">2 Following</a>
                </li>
                <li class="nav-item">
                  <a style="color: grey" class="nav-link " href="#">2 likes</a>
                </li>
                
              </ul>
             </div>
             
        </div>
    
    </div>

     <post  user_id= {{$user->id}}></post>
    @include('../include.post.CreatePostModal')
</body>