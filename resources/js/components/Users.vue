<template>
  <div class="container">
    <div class="row mt-5">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Users</h3>

            <div class="card-tools">
              <button class="btn btn-primary" @click="newModal">
                <i class="fas fa-user-plus"></i>
              </button>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="card-body table-responsive no-padding">
            <table class="table table-hover">
              <tbody>
                <tr class="card-header">
                  <th>ID</th>
                  <th>User</th>
                  <th>Date Created</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>About</th>

                  <th>Action</th>
                </tr>
                <tr v-for="user in users" :key="user.id">
                  <td>{{ user.id }}</td>
                  <td>{{ user.name }}</td>
                  <td>{{ user.created_at | reformatMyDate }}</td>
                  <td>
                    <span class="label label-success">
                      {{ user.email }}
                    </span>
                  </td>
                  <td>
                    {{ user.role | firstLettertoUpperCase }}
                  </td>
                  <td>
                    {{ user.about }}
                  </td>
                  <td>
                    <Button
                      @click="editModal(user)"
                      class="btn btn-outline-success green fa fa-edit"
                    >
                    </Button>
                    |
                    <Button
                      @click="deleteUser(user.id)"
                      class="btn btn-outline-danger red fa fa-trash"
                    >
                    </Button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div
      class="modal fade"
      id="addNew"
      tabindex="1"
      aria-labelledby="addNewLabel"
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
          <form @submit.prevent="editMode ? updateUser() : createUser()">
            <div class="modal-body">
              <div class="modal-body">
                <div class="form-group">
                  <input
                    v-model="form.name"
                    type="text"
                    name="name"
                    placeholder="Name"
                    class="form-control"
                    :class="{ 'is-invalid': form.errors.has('name') }"
                  />
                  <has-error :form="form" field="name"></has-error>
                </div>

                <div class="form-group">
                  <input
                    v-model="form.email"
                    type="email"
                    name="email"
                    placeholder="Email Address"
                    class="form-control"
                    :class="{ 'is-invalid': form.errors.has('email') }"
                  />
                  <has-error :form="form" field="email"></has-error>
                </div>

                <div class="form-group">
                  <textarea
                    v-model="form.about"
                    name="about"
                    id="about"
                    placeholder="About User (Optional)"
                    class="form-control"
                    :class="{ 'is-invalid': form.errors.has('about') }"
                  ></textarea>
                  <has-error :form="form" field="about"></has-error>
                </div>

                <div class="form-group">
                  <select
                    name="role"
                    v-model="form.role"
                    id="role"
                    class="form-control"
                    :class="{ 'is-invalid': form.errors.has('role') }"
                  >
                    <option value="">Select a User Role</option>

                    <option value="User">User</option>
                    <option selected value="Admin">Admin</option>

                    <option value="Author">Author</option>
                  </select>
                  <has-error :form="form" field="role"></has-error>
                </div>

                <div class="form-group">
                  <input
                    v-model="form.password"
                    type="password"
                    name="password"
                    id="password"
                    class="form-control"
                    :class="{ 'is-invalid': form.errors.has('password') }"
                  />
                  <has-error :form="form" field="password"></has-error>
                </div>
              </div>
              <div class="modal-footer">
                <button
                  type="button"
                  class="btn btn-danger"
                  data-dismiss="modal"
                >
                  Close
                </button>
                <button v-show="editMode" type="submit" class="btn btn-success">
                  Update
                </button>
                <button
                  v-show="!editMode"
                  type="submit"
                  class="btn btn-primary"
                >
                  Create
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>
 



 <script>
export default {
  data() {
    return {
      editMode: false,
      users: {},
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
    updateUser() {
      this.$Progress.start();
      this.form
        .put("api/user/" + this.form.id)
        .then(() => {
          Fire.$emit("AfterUserUpdated");
          this.$Progress.finish();
          toast.fire({
            icon: "success",
            title: "User Updated successfully" + this.form.id,
          });
           $("#addNew").modal("hide");
        })
        .catch(() => {
          this.$Progress.fail();
          toast.fire("Error!", "Operation Failed !", "error");
            $("#addNew").modal("hide");
        });
    }, 
    getUsers() {
      axios.get("api/user").then(({ data }) => (this.users = data.data));
    },
    newModal() {
      this.editMode = false;

      this.form.reset();
      $("#addNew").modal("show");
    },
    editModal(user) {
      this.editMode = true;
      this.form.reset();
      $("#addNew").modal("show");
      this.form.fill(user);
    },
    deleteUser(id) {
      swal
        .fire({
          title: "Are you sure?",
          text: "You won't be able to revert this!",
          icon: "warning",
          showCancelButton: true,

          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Yes, delete it!",
        })
        .then((result) => {
          if (result.isConfirmed) {
            this.form
              .delete("api/user/" + id)
              .then(() => {
                Fire.$emit("AfterUserDeleted");

                toast.fire("Deleted!", "User has been deleted.", "success");
              })
              .catch(() => {
                swal.fire("Error!", "Operation Failed !", "error");
              });
          }
        });
    },
    createUser() {
      this.$Progress.start();
      this.form
        .post("api/user")
        .then(() => {
          Fire.$emit("AfterUserCreated");
          this.$Progress.finish();

          $("#addNew").modal("hide");
          toast.fire({
            icon: "success",
            title: "User Created successfully",
          });
        })
        .catch(() => {
          toast.fire({
            icon: "error",
            title: "Please enter a validate Data",
          });
        });
      this.$Progress.finish();
    },
  },
  created() {
    this.getUsers();
    Fire.$on("AfterUserCreated", () => {
      this.getUsers();
    });
    Fire.$on("AfterUserDeleted", () => {
      this.getUsers();
    });
    Fire.$on("AfterUserUpdated", () => {
      this.getUsers();
    });
  },
};
</script>