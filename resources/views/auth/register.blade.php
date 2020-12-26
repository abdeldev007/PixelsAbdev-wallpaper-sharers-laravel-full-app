@extends('layouts.login')

@section('login-content')
 
 
   
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
   
           <a href="/home"
              type="button"
              class="btn btn-outline-warning "
        
            >
              <i class="fas fa-home"></i>
        </a>
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
                
                    <a href="/login" class="text-center">I already have a membership</a>
                          
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

 
  
@endsection
  
