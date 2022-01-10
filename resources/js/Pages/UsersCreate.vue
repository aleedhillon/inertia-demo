<template>
  <Head>
    <title>Create User</title>
  </Head>

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-4 offset-4">
        <form @submit.prevent="createUser" class="needs-validation" :class="{ 'was-validated': wasValidated }" novalidate>
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input
              type="text"
              name="name"
              class="form-control"
              :class="{ 'is-invalid': errors.name }"
              placeholder="enter your name"
              autocomplete="off"
              v-model="form.name"
              @input="delete errors.name"
              required
            />
            <div class="invalid-feedback">{{ errors.name || 'Name is required' }}</div>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input
              type="email"
              name="email"
              class="form-control"
              :class="{ 'is-invalid': errors.email }"
              placeholder="enter your email"
              autocomplete="off"
              v-model="form.email"
              @input="delete errors.email"
              required
            />
            <div class="invalid-feedback">{{ errors.email || "Email is required" }}</div>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input
              type="password"
              name="password"
              class="form-control"
              :class="{ 'is-invalid': errors.password }"
              v-model="form.password"
              @input="delete errors.password"
              required
            />
            <div class="invalid-feedback">{{ errors.password || "Password is required" }}</div>
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
  props: {
    errors: Object,
  },
  data() {
    return {
      form: {
        name: "",
        email: "",
        password: "",
      },
      wasValidated: false
    };
  },
  methods: {
    createUser(e) {
      if (e.target.checkValidity()) {
        this.$inertia.post("/users", this.form);
        this.wasValidated = false;
      } else {
        this.wasValidated = true;
      }
    },
  },
};
</script>