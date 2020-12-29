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
 
                <post user_id= this.user_id></post>
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
 
      </div>
 
    </div>
    <link href="css/style.css" rel="stylesheet" />
  </div>
</template>

<script>
export default {
     props: ["user_id" ],

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
    
     
  
  },
  created() {
    //axios.get("api/profile").then(({ data }) => this.form.fill(data));
  },
};
</script>
