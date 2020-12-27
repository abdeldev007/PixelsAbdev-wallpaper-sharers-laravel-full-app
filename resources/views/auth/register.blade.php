@extends('layouts.login')

@section('login-content')
 
 <div  class="row  mobile-space ">
<div class="col-md-6">
     
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="user-block">
          <img
            class="img-circle img-bordered-sm"
            src="/img/logo.png"
            alt="user image"
          />
          <span  >
           Register 
          </span>
         
        </div>

 
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="modal-body">
              <!--regiter form Here-->
                @include('include.loginForm')                                      
                <div class="text-center">
                  <p>- OR -</p>
                  <a href="#" class="btn bg-blue  btn-facebook "><i class="fas fa-facebook"></i> Sign up using
                    Facebook</a>
                  <a href="#" class="btn  bg-red  btn-google  "><i class="fas  fa-facebook-squa"></i> Sign up using
                    Google+</a>
                </div>
            
                       
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<div class="col-md-6">
  @include('include.create-account')
</div>
 </div>

 
  



      @endsection
  
