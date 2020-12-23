<template>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <!-- Portfolio Grid-->
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
                  @click="newModal(post)"
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
                  <div class="portfolio-caption-heading">{{ post.id }}</div>
                  <div class="portfolio-caption-subheading text-muted">
                    {{ post.email }}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
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
                  <a href="/profile/1">  {{ post.name }}</a>
                  
                </span>
                <span class="description">Shared publicly - 7:30 PM today</span>
              </div>
              <button
                type="button"
                class="btn btn-outline-danger"
                @click="hideModal()"
              > <i class="fas fa-times "></i></button>
            </div>
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-12">
                  <div class="modal-body">
                    <!-- Project Details Go Here-->
                    <h2 class="text-uppercase"></h2>
                    <p class="item-intro text-muted">
                    
                    </p>
                    <img
                      class="img-fluid d-block mx-auto"
                      src=" /img/img2.jpg"
                      alt=""
                    />
                    <p>dd</p>
                    <ul class="list-inline">
                      <li>Date: January 2020</li>
                      <li>Client: Threads</li>
                      <li>Category: {{ post.id }}</li>
                    </ul>
                    <button
                      class="btn btn-primary"
                      data-dismiss="modal"
                      type="button"
                    >
                      <i class="fas fa-times mr-1"></i>
                        DOWNLOAD 
                    </button>
                       <button
                      class="btn btn-primary"
                      data-dismiss="modal"
                      type="button"
                    >
                      <i class="fas fa-times mr-1"></i>
                        LIKE 
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <link href="css/style.css" rel="stylesheet" />
  </div>
</template>

<script>
export default {
  data() {
    return {
      editMode: false,
      posts: {},

      post: {
        id: "",
        name: "",
        email: "",
        password: "",
        about: "",
        image: "",
        role: "",
      },
    };
  },
  methods: {
    newModal(post) {
      this.post = post;
      $("#postModal").modal("show");
      this.form.fill(post);
    },
    hideModal() {
      $("#postModal").modal("hide");
    },
  },
  created() {
    axios.get("api/user").then(({ data }) => (this.posts = data.data));
  },
};
</script>
