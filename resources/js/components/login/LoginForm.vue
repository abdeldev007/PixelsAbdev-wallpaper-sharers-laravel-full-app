
  <template>
  <form  @submit.prevent="createUser()">
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
      <div class="modal-footer">   </div>
           <div class="row">
      <div class="col-6 mt-2">
        <input
          class="form-check-input"
          type="checkbox"
          value=""
          aria-label="Checkbox for following text input"
        />
        <a>i agree to the terms</a>
      </div>
      <!-- /.col -->
      <div class="col-6">
        <button type="submit" class="btn btn-primary btn-block">
          Register
        </button>
      </div>
      <!-- /.col -->
 
      </div>
    </div>

  </form>
</template>

<script>
export default {
  data() {
    return {
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
    newModal() {
      this.form.reset();
      $("#addNew").modal("show");
    },
    createUser() {
      this.$Progress.start();
      this.form
        .post( route('register'))
        .then(() => {
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

  mounted() {
    console.log("Component mounted.");
  },
};
</script>
