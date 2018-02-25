<template>
	<b-navbar toggleable="md" type="dark" variant="dark">
	<div class="container">
	<b-navbar-toggle target="nav_collapse"></b-navbar-toggle>
	<b-collapse is-nav id="nav_collapse">
		<b-navbar-nav class="mx-auto w-100 justify-content-center">
			<b-nav-item href="#"><router-link class="my-link" to="npc-new">
			NewNpc</router-link></b-nav-item>
			<b-nav-item href="#"><router-link class="my-link" to="npcs">
			Npcs</router-link></b-nav-item>
			<b-nav-item href="#"><router-link class="my-link" to="/">
			Index</router-link></b-nav-item>
			<b-nav-item href="#"><router-link class="my-link" to="npcs">
			Npcs</router-link></b-nav-item>
			<b-nav-item href="#"><router-link class="my-link" to="npcs">
			Npcs</router-link></b-nav-item>
		</b-navbar-nav>
		<!-- Right aligned nav items -->
		
	</b-collapse>
	</div>
	</b-navbar>
</template>

<script>
export default {
  name: 'Navbar',
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.my-link{
	padding: 0 .8rem;
	text-decoration: none;
}
.bg-dark{
  background: transparent !important;
}
.fa{
	font-size: 26px;
	margin-right: 5px;
	
}
.fa-github-square{
	color:white;
}

</style>
