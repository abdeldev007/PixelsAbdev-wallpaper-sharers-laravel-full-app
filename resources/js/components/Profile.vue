<template>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <!-- Widget: user widget style 1 -->
        <div class="card card-widget widget-user">
          <!-- Add the bg color to the header using any of the bg-* classes -->
          <div
            class="widget-user-header bg-black"
            style="
              height: 300px;
              background: url('/img/cover.png') center center;
            "
          >
            <h3 class="widget-user-username">Elizabeth Pierce</h3>
            <h5 class="widget-user-desc">Web Designer</h5>
          </div>
          <div class="widget-user-image" style="margin-top: 150px">
            <img class="img-circle" src="/img/profile.png" alt="User Avatar" />
          </div>
          <div class="card-footer">
            <div class="row">
              <div class="col-sm-4 border-right">
                <div class="description-block">
                  <h5 class="description-header">3,200</h5>
                  <span class="description-text">LIKES</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-4 border-right">
                <div class="description-block">
                  <h5 class="description-header">13,000</h5>
                  <span class="description-text">FOLLOWERS</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-4">
                <div class="description-block">
                  <h5 class="description-header">35</h5>
                  <span class="description-text">POSTS</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
        </div>
        <!-- /.widget-user -->

        <!-- /.col -->
        <div class="card col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="m-2">
                <a
                  class="btn btn-secondary"
                  href="#activity"
                  data-toggle="tab"
                  aria-expanded="false"
                  >Activity</a
                >
              </li>
              <li class="m-2">
                <a
                  class="btn btn-secondary"
                  href="#settings"
                  data-toggle="tab"
                  aria-expanded="true"
                  >Settings</a
                >
              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane" id="activity">
                <!-- Post -->

                <!-- Portfolio Grid-->
                <section class="page-section bg-light" id="portfolio">
                  <div class="container">
                    <div class="text-center">
                      <h2 class="section-heading text-uppercase">Portfolio</h2>
                      <h3 class="section-subheading text-muted">
                        Lorem ipsum dolor sit amet consectetur.
                      </h3>
                    </div>
                    <div class="row">
                      <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                          <a
                            class="portfolio-link"
                            data-toggle="modal"
                            href="#portfolioModal1"
                          >
                            <div class="portfolio-hover">
                              <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                              </div>
                            </div>
                            <img
                              class="img-fluid"
                              src=" /img/portfolio/01-thumbnail.jpg"
                              alt=""
                            />
                          </a>
                          <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Threads</div>
                            <div
                              class="portfolio-caption-subheading text-muted"
                            >
                              Illustration
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                          <a
                            class="portfolio-link"
                            data-toggle="modal"
                            href="#portfolioModal2"
                          >
                            <div class="portfolio-hover">
                              <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                              </div>
                            </div>
                            <img
                              class="img-fluid"
                              src=" /img/portfolio/02-thumbnail.jpg"
                              alt=""
                            />
                          </a>
                          <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Explore</div>
                            <div
                              class="portfolio-caption-subheading text-muted"
                            >
                              Graphic Design
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                          <a
                            class="portfolio-link"
                            data-toggle="modal"
                            href="#portfolioModal3"
                          >
                            <div class="portfolio-hover">
                              <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                              </div>
                            </div>
                            <img
                              class="img-fluid"
                              src=" /img/portfolio/03-thumbnail.jpg"
                              alt=""
                            />
                          </a>
                          <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Finish</div>
                            <div
                              class="portfolio-caption-subheading text-muted"
                            >
                              Identity
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <div class="portfolio-item">
                          <a
                            class="portfolio-link"
                            data-toggle="modal"
                            href="#portfolioModal4"
                          >
                            <div class="portfolio-hover">
                              <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                              </div>
                            </div>
                            <img
                              class="img-fluid"
                              src=" /img/portfolio/04-thumbnail.jpg"
                              alt=""
                            />
                          </a>
                          <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Lines</div>
                            <div
                              class="portfolio-caption-subheading text-muted"
                            >
                              Branding
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <div class="portfolio-item">
                          <a
                            class="portfolio-link"
                            data-toggle="modal"
                            href="#portfolioModal5"
                          >
                            <div class="portfolio-hover">
                              <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                              </div>
                            </div>
                            <img
                              class="img-fluid"
                              src=" /img/portfolio/05-thumbnail.jpg"
                              alt=""
                            />
                          </a>
                          <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">
                              Southwest
                            </div>
                            <div
                              class="portfolio-caption-subheading text-muted"
                            >
                              Website Design
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-sm-6">
                        <div class="portfolio-item">
                          <a
                            class="portfolio-link"
                            data-toggle="modal"
                            href="#portfolioModal6"
                          >
                            <div class="portfolio-hover">
                              <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                              </div>
                            </div>
                            <img
                              class="img-fluid"
                              src=" /img/portfolio/06-thumbnail.jpg"
                              alt=""
                            />
                          </a>
                          <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Window</div>
                            <div
                              class="portfolio-caption-subheading text-muted"
                            >
                              Photography
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Modal 1-->
                  </div>
                </section>

                <!-- /.post -->
              </div>

              <div class="tab-pane active" id="settings">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label"
                      >Name</label
                    >

                    <div class="col-sm-10">
                      <input
                        type="email"
                        class="form-control"
                        id="inputName"
                        placeholder="Name"
                      />
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label"
                      >Email</label
                    >

                    <div class="col-sm-10">
                      <input
                        type="email"
                        class="form-control"
                        id="inputEmail"
                        placeholder="Email"
                      />
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label"
                      >Name</label
                    >

                    <div class="col-sm-10">
                      <input
                        v-model="form.name"
                        type="text"
                        class="form-control"
                        id="inputName"
                        placeholder="Name"
                      />
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label"
                      >Experience</label
                    >

                    <div class="col-sm-10">
                      <textarea
                        v-model="form.about"
                        class="form-control"
                        id="inputExperience"
                        placeholder="Experience"
                      ></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label"
                      >Skills</label
                    >

                    <div class="col-sm-10">
                      <input
                        type="text"
                        class="form-control"
                        id="inputSkills"
                        placeholder="Skills"
                      />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" /> I agree to the
                          <a href="#">terms and conditions</a>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">
                        Submit
                      </button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->

        <!-- /.row -->
      </div>
      <div
        class="modal fade"
        id="portfolioModal2"
        tabindex="-1"
        role="dialog"
        aria-hidden="false"
      >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="addNewLabel">Add New</h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <div class="modal-body">
                    <!-- Project Details Go Here-->
                    <h2 class="text-uppercase">Project Name</h2>
                    <p class="item-intro text-muted">
                      Lorem ipsum dolor sit amet consectetur.
                    </p>
                    <img
                      class="img-fluid d-block mx-auto"
                      src=" /img/portfolio/01-full.jpg"
                      alt=""
                    />
                    <p>
                      Use this area to describe your project. Lorem ipsum dolor
                      sit amet, consectetur adipisicing elit. Est blanditiis
                      dolorem culpa incidunt minus dignissimos deserunt repellat
                      aperiam quasi sunt officia expedita beatae cupiditate,
                      maiores repudiandae, nostrum, reiciendis facere nemo!
                    </p>
                    <ul class="list-inline">
                      <li>Date: January 2020</li>
                      <li>Client: Threads</li>
                      <li>Category: Illustration</li>
                    </ul>
                    <button
                      class="btn btn-primary"
                      data-dismiss="modal"
                      type="button"
                    >
                      <i class="fas fa-times mr-1"></i>
                      Close Project
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
      form: new Form({
        id: "",
        name: "",
        email: "",
        password: "",
        about: "",
        image: "",
        role: "",
      }),
    };
  },
  methods: {
    newtModal(user) {
 
 
      $("#postModal").modal("show");
      this.form.fill(user);
    },
  },
  created() {
    axios.get("api/profile").then(({ data }) => this.form.fill(data));
  },
};
</script>
