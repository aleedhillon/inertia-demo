<template>
  <Head>
    <title>Create User</title>
  </Head>

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-4 offset-4">
        <form @submit.prevent="createUser">
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input
              type="text"
              name="name"
              class="form-control"
              placeholder="enter your name"
              autocomplete="off"
              v-model="form.name"
            />
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input
              type="email"
              name="email"
              class="form-control"
              placeholder="enter your email"
              autocomplete="off"
              v-model="form.email"
            />
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input
              type="password"
              name="password"
              class="form-control"
              v-model="form.password"
            />
          </div>
          <div class="mb-3">
            <input type="submit" value="Create" class="btn btn-success" />
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      form: {
        name: "",
        email: "",
        password: "",
      },
    };
  },
  methods: {
    createUser() {
        this.$inertia.post('/users', this.form);
    },
  },
};
</script>