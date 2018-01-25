<template>
 <b-navbar toggleable="md" type="dark" variant="dark">

  <b-navbar-toggle target="nav_collapse"></b-navbar-toggle>

  <b-navbar-brand href="#"><router-link to="/">Gothic-Versus</router-link></b-navbar-brand>

  <b-collapse is-nav id="nav_collapse">

    <b-navbar-nav>
      <b-nav-item href="#"><router-link to="new-npc">NewNpc</router-link></b-nav-item>
      <b-nav-item href="#">Link</b-nav-item>
      <b-nav-item href="#">Link</b-nav-item>  
    </b-navbar-nav>

    <!-- Right aligned nav items -->
    <b-navbar-nav class="ml-auto">

      <b-nav-item-dropdown right>
        <!-- Using button-content slot -->
        <template slot="button-content">
          <em>User</em>
        </template>
        <b-dropdown-item href="#">Profile</b-dropdown-item>
        <b-dropdown-item href="#">Signout</b-dropdown-item>
      </b-nav-item-dropdown>
    </b-navbar-nav>

  </b-collapse>
</b-navbar>

</template>

<script>
export default {
  name: 'Navbar',
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.bg-dark{
  background: #111111 !important;
  z-index: 2;
}
.navbar{
  padding: 2px 15%;
}

@media (max-width: 600px){
  .navbar{
    padding:1px 5%;
  }
}
</style>
