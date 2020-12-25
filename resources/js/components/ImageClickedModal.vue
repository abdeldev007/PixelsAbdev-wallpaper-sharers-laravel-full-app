<template>
        <!-- Modal 1-->
        <div
          class="modal fade"
          id="postModal"
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
                    <a href="/profile/1"> {{ user.name }}</a>
                  </span>
                  <span class="description"
                    >Shared publicly - 7:30 PM today</span
                  >
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
                      <h2 class="text-uppercase"></h2>
                      <p class="item-intro text-muted"></p>
                      <img
                        class="img-fluid d-block mx-auto"
                        :src="post.image"
                        alt=""
                      />
                      <p>dd</p>
                      <ul class="list-inline">
                        <li>tags:</li>
                        <a
                          v-for="tag in splitStr(post.tags)"
                          :key="tag"
                          href="#"
                        >
                          <span class="btn btn-xs bg-maroon"> {{ tag }}</span>
                          <i> </i>
                        </a>

                        <li>Category: {{ post.category }}</li>
                      </ul>
             
                     
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
        props: ["post", "user"],
        methods:{
        
    splitStr(str) {
      return str.split(",");
    },
    hideModal() {
      $("#postModal").modal("hide");
    },
  },
        
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
