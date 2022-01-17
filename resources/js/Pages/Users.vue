<template>
  <Head>
    <title>Users</title>
    <meta
      type="description"
      content="This is an inertia users page"
      head-key="description"
    />
  </Head>
  <h2 class="display-2">Users</h2>

  <div class="container">
    <Link class="btn btn-primary" href="/users/create">Create Users</Link>
    <div class="row">
      <div class="col-md-6 offset-3">
        <input
          type="text"
          class="form-control"
          v-model="search"
          placeholder="search users..."
        />
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 my-3" v-for="user in users.data" :key="user.id">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">{{ user.name }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ user.email }}</h6>
            <p class="card-text">Joined On: {{ user.created_at }}</p>
          </div>
        </div>
      </div>
    </div>
    <Pagination :links="users.links" class="mt-5"></Pagination>
  </div>
</template>

<script>
import Pagination from "../Shared/Pagination.vue";
import debounce from "lodash/debounce";
export default {
  components: {
    Pagination,
  },
  props: {
    users: Object,
    filters: Object,
  },
  data() {
    return {
      search: this.filters.q,
    };
  },
  watch: {
    search: debounce(function (value) {
      console.log('user is being searched...');
      this.$inertia.get(
        "/users",
        {
          q: value,
        },
        {
          preserveState: true,
          replace: true,
        }
      );
    }, 500),
  },
};
</script>