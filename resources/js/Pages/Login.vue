<template>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-4 offset-4 border-dark border-1">
        <form @submit.prevent="login">
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input
              type="email"
              class="form-control"
              id="email"
              :class="{ 'is-invalid': errors.email }"
              v-model="form.email"
            />
            <div class="invalid-feedback">
              {{ errors.email || "Name is required" }}
            </div>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input
              type="password"
              class="form-control"
              id="password"
              v-model="form.password"
            />
          </div>
          <div class="mb-3 form-check">
            <input
              type="checkbox"
              class="form-check-input"
              id="remember"
              v-model="form.remember"
            />
            <label class="form-check-label" for="remember"
              >Check me out</label
            >
          </div>
          <input type="submit" class="btn btn-primary" value="Login" />
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  layout: null,
  props: {
    errors: Object,
  },
  data() {
    return {
      form: this.$inertia.form({
        email: "",
        password: "",
        remember: false,
      }),
    };
  },
  methods: {
    login() {
      this.form.post("/login");
    },
  },
};
</script>