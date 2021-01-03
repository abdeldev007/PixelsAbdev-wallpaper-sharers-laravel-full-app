        <!-- Modal-- Login-->
  <div
        class="modal fade"
        id="createPostModal"
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
                  <a > Add New Post </a>
                </span>
               
              </div>
     
                 <button
                 onclick="hideNewPostModal()"
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
                      @include('include.post.newPostForm')                                      
 
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>