
  <template>
  <form  @submit.prevent="createPost()">
    <div class="modal-body">
      <div class="modal-body">
        <div class="form-group">
          <input
            v-model="form.title"
            type="text"
            name="title"
            placeholder="Title"
            class="form-control"
            :class="{ 'is-invalid': form.errors.has('title') }"
          />
          <has-error :form="form" field="title"></has-error>
        </div>

        <div class="form-group">
           <input
            @input="onFileSelected"
            type="file"
            name="image"
             id="image"
            class="form-control-file"
             :class="{ 'is-invalid': form.errors.has('image') }"
          />
          <has-error :form="form" field="image"></has-error>
        </div>

        <div class="form-group">
          <textarea
            v-model="form.tags"
            name="tags"
            id="tags"
            placeholder="tags User (Optional)"
            class="form-control"
            :class="{ 'is-invalid': form.errors.has('tags') }"
          ></textarea>
          <has-error :form="form" field="tags"></has-error>
        </div>

        <div class="form-group">
          <select
            name="category"
            v-model="form.category"
            id="category"
            class="form-control"
            :class="{ 'is-invalid': form.errors.has('category') }"
          >
            <option value="">Select a User Role</option>

            <option value="User">User</option>
            <option selected value="Admin">Admin</option>

            <option value="Author">Author</option>
          </select>
          <has-error :form="form" field="role"></has-error>
        </div>

        
      </div>
      <div class="modal-footer">   </div>
           <div class="row">
     
      <!-- /.col -->
      <div class="col-12">
        <button type="submit" class="btn btn-primary btn-block">
          New Post
        </button>
      </div>
      <!-- /.col -->
 
      </div>
    </div>

  </form>
</template>

<script>
export default {
   props: ["user_id" ], 
  data() {
    return {
      posts: {},
      form: new Form({
        user_id: this.user_id,
        title: "",
        category: "",
        tags: "",
        image: {},
       }),
    };
  },
  methods: {
       onFileSelected(event) {
            
            this.form.image = event.target.files[0];
        },
    newModal() {
      this.form.reset();
      $("#createPostModal").modal("show");
    },
    createPost() {
      this.$Progress.start();
      this.form
        .post('../api/post')
        .then(() => {
           this.$Progress.finish();

          $("#createPostModal").modal("hide");
          toast.fire({
            icon: "success",
            title: "Post Created successfully",
          });
        })
        .catch((error) => {
        this.$Progress.finish();

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
