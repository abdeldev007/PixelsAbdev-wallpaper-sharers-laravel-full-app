<template>
  <div>
    <section  >
      <div class="row "  >
   
        <div v-for="i in cols" :key="i" class="column">
          <div v-if="i === 1">
            <div
              class="post-container"
              v-for="post in posts.slice(0, posts.length / 3)"
              :key="post.id"
            >
              <div class="post-hover-banner">
                <div class="row">
                     <div class="col-2  ">
                     <a   :href="'/profile/'+post.user.id">
                        <img 
                      class=" img-circle img-bordered-sm"
                      :src="post.image"
                      alt="user image"
                    />
                     </a>
                   
                 </div>
                   <div class="col-6">
                      
                 <div class="direct-chat-text">
          <a  :href="'/profile/'+post.user.id">   {{post.user.name}} </a>

                  </div>
                    
                  </div>
                  
                   <div class="col-1 m-1">
                   <a  :download="post.title"   href="/img/profile.png" class="  btn btn-outline-warning  ">
                  <i class="fas fa-download"> </i>   
                  </a> 
                  </div>
                   
                   <div class="col-1 m-1" >
                 <button @click="likeButtonClicked" class="btn btn-outline-warning  ">
                  <i class="fas fa-thumbs-up"> </i>   
                  </button> 
                  
                  </div>
               
                </div>
              </div>
              <a href="" data-toggle="modal" @click="newModal(post, post.user)">
                <img :src="post.image" />
              </a>
            </div>
          </div>
          <div v-else-if="i === 2">
            <div
              class="post-container"
              v-for="post in posts.slice(
                posts.length / 3,
                (2 * posts.length) / 3
              )"
              :key="post.id"
            >
                  <div class="post-hover-banner">
                <div class="row">
                     <div class="col-2">
                        <a  :href="'/profile/'+post.user.id">
                    <img
                      class="img-circle img-bordered-sm"
                      :src="post.image"
                      alt="user image"
                    />
                        </a>
                 </div>
                   <div class="col-6">
                     
                 <div class="direct-chat-text">
                             <a  :href="'/profile/'+post.user.id">   {{post.user.name}} </a>

                  </div>
                  </div>
                    
                   <div class="col-1 m-1">
                   <a download="w3logo"  :href="post.image" class="  btn btn-outline-warning  ">
                  <i class="fas fa-download"> </i>   
                  </a> 
                  </div>
                   
                   <div class="col-1 m-1" >
                   <button @click="likeButtonClicked" class="btn btn-outline-warning  ">
                  <i class="fas fa-thumbs-up"> </i>   
                  </button> 
                  
                  </div>
                </div>
              </div>
              <a href="" data-toggle="modal" @click="newModal(post, post.user)">
                <img :src="post.image" />
              </a>
            </div>
          </div>
          <div v-else>
            <div
              class="post-container"
              v-for="post in posts.slice((2 * posts.length) / 3, posts.length)"
              :key="post.id"
            >
                   <div class="post-hover-banner">
                <div class="row">
                     <div class="col-2">
                    <img
                      class="img-circle img-bordered-sm"
                      :src="post.image"
                      alt="user image"
                    />
                 </div>
                   <div class="col-6">
                 <div class="direct-chat-text">
               <a  :href="'/profile/'+post.user.id">   {{post.user.name}} </a>

                  </div>
                  </div>
   
                   <div class="col-1 m-1">
                   <a download="w3logo"  :href="post.image" class="  btn btn-outline-warning  ">
                  <i class="fas fa-download"> </i>   
                  </a> 
                  </div>
                   
                   <div class="col-1 m-1" >
                                <button @click="likeButtonClicked" class="btn btn-outline-warning  ">
                  <i class="fas fa-thumbs-up"> </i>   
                  </button> 
                  
                  </div>
                </div>
              </div>
              <a href="" data-toggle="modal" @click="newModal(post, post.user)">
                <img :src="post.image" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>  
<image-clicked-modal :post= " this.post "  :user= " this.user " ></image-clicked-modal>

 <div class="container mt-5">
      <div class="row justify-content-center">
        <!-- Portfolio Grid
      <section class=" " id="portfolio">
        <div class="container">
          <div class="row">
            <div
              v-for="post in posts"
              :key="post.id"
              class="col-lg-4 col-sm-6 coloumn"
            >
              <div class="card portfolio-item">
                <a
                  class="portfolio-link"
                  data-toggle="modal"
                  @click="newModal(post,post.user)"
                >
                  <div class="portfolio-hover">
                    <div class="portfolio-hover-content">
                      <i class="fas fa-plus fa-3x"></i>
                      <div class="row"></div>
                    </div>
                  </div>
                  <img
                    class="img-fluid"
                    src=" /img/portfolio/06-thumbnail.jpg"
                    alt=""
                  />
                </a>
                <div class="portfolio-caption">
                  <div class="portfolio-caption-heading">{{ post.title }}</div>
                  <div class="portfolio-caption-subheading text-muted">
                    {{ post.email }}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>-->
   
      </div>
      <link href="/css/style.css" rel="stylesheet" />
    </div>
  </div>
</template>

<script>
 import ImageClickedModal from './ImageClickedModal.vue';
export default {
  components: { ImageClickedModal },
   props: ["user_id" ],

  data() {
    return {
      index: 0,
      editMode: false,
     
      posts: [],
      cols: [1, 2, 3],
      i: 1,
      post: {
        tags: "",
      },
      user: {},
      str: "",
    };
  },
  methods: {
     onDownload(post) {
              axios({
                    url: post.image,
                    method: 'GET',
                    responseType: 'blob',
                }).then((response) => {
                     var fileURL = window.URL.createObjectURL(new Blob([response.data]));
                     var fileLink = document.createElement('a');

                     fileLink.href = fileURL;
                     fileLink.setAttribute('download', post.title+'.jpg');
                     document.body.appendChild(fileLink);

                     fileLink.click();
                       console.log(post.image);
                }).catch(()=>{
                    console.log("error" );
                });
          },
    newModal(post, user) {
      this.user = user;
      this.post = post;
      $("#postModal").modal("show");
    },
    likeButtonClicked( ) {
    
      $("#createAccountModal").modal("show");
    },
    splitStr(str) {
      return str.split(",");
    },
    hideModal() {
      $("#postModal").modal("hide");
    },
  },
  created() {
    if(this.user_id==="0"){
    axios.get("/api/post").then(({ data }) => (this.posts = data.data));
    }else {
       axios.get("/api/post/user/"+this.user_id).then(({ data }) => (this.posts = data.data));
    }
  },
};
</script>
