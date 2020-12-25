<template>
        <!-- Modal 1-->
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
                    src="/img/profile.png"
                    alt="user image"
                  />
                  <span class="username">
                    <a > Register </a>
                  </span>
                 
                </div>
            
                  <button class="btn btn-outline-primary  ">
                  <i class="fas fa-thumbs-up"> </i>   
                  2
                  </button> 
                    <button class="btn btn-outline-primary  ">
                  <i class="fas fa-download"> </i> 
                  1 
                  </button>    
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
                      <!-- Project Details Go Here-->
                      
             
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</template>

<script>
    export default {
         
        methods:{
        
    splitStr(str) {
      return str.split(",");
    },
    hideModal() {
      $("#createAccountModal").modal("hide");
    },
  },
        
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
