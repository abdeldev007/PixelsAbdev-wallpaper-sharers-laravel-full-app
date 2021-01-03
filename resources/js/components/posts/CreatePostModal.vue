<template>
        <!-- Modal 1-->
        <div
          class="modal fade"
          id="createPostModal"
          tabindex="-1"
          role="dialog"
          aria-hidden="false"
        >
        <vue-progress-bar></vue-progress-bar>
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
                  type="button"
                  class="btn btn-outline-danger"
                  @click="hideModal()"
                >
                  <i class="fas fa-times"></i>
                </button>
              </div>
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-lg-12">
                    <div class="modal-body">
                      <!--regiter form Here-->
                      <post-form :user_id= this.user_id></post-form>
                                      
         
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</template>

<script>
import PostForm from './PostForm.vue';
     export default {

  components: { PostForm },
  props: ["user_id" ], 
          
        methods:{
        showModal() {
      $("#createPostModal").modal("show");
    },
    hideModal() {
      $("#createPostModal").modal("hide");
    },
  },
        
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
