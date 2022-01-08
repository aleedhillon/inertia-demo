<template>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Inertia Demo</a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <NavLink href="/" component="Welcome">Home</NavLink>
          </li>
          <li class="nav-item">
            <NavLink href="/users" component="Users">Users</NavLink>
          </li>
          <li class="nav-item">
            <NavLink href="/settings" component="Settings">Settings</NavLink>
          </li>
          <li class="nav-item">
            <NavBtnLink href="/logout" method="post">Logout</NavBtnLink>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>

<script>
import NavLink from "./NavLink.vue";
import NavBtnLink from "./NavBtnLink.vue";
export default {
  name: "Nav",
  components: {
    NavLink,
    NavBtnLink
  },
};
</script>