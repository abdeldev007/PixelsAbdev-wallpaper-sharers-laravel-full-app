        <!-- Modal-- Login-->
         <div
          class="modal fade"
          id="createAccountModal"
          tabindex="-1"
          role="dialog"
          aria-hidden="false"
        >
 
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <div class="user-block">
                  <img
                    class="img-circle img-bordered-sm"
                    src="/img/logo.png"
                    alt="user image"
                  />
                  <span class="username">
                    <a > Register </a>
                  </span>
                 
                </div>
       
                   <button
                   onclick="hideRegisterModal()"
                  type="button"
                  class="btn btn-outline-danger"
            
                >
                  <i class="fas fa-times"></i>
                </button>
              </div>
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-lg-12">
                    <div class="modal-body">
                      <!--regiter form Here-->
                        @include('include.loginForm')                                      
                        <div class="social-auth-links text-center">
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
        </div>