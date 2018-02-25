<template>
<main class="admin-panel">
	<div class="pattern">
		<header class="panel-head text-center">
			<h4>Admin panel v 1.0</h4>
		</header>
		<div class="container">
			<section class="tools-list row">
				<div class="tools-list__links col-md-4">
					<ul class="nav flex-column text-center">
					  <li class="list-item">
					    <router-link to="/" class="tools-list__link">Home</router-link>
					  </li>
					  <li class="list-item">
					    <router-link to="/npc-new" class="tools-list__link">NewNPC</router-link>
					  </li>
					  <li class="list-item">
					    <router-link to="/npc-new" class="tools-list__link">ListNPC</router-link>
					  </li>
					  <li class="list-item">
					    <router-link to="/npc-new" class="tools-list__link">EditUser</router-link>
					  </li>
					</ul>
				</div>
				<div class="tools-list__links col-md-4">
					<ul class="nav flex-column text-center">
					  <li class="list-item">
					    <router-link to="/" class="tools-list__link">Home</router-link>
					  </li>
					  <li class="list-item">
					    <router-link to="/npc-new" class="tools-list__link">NewNPC</router-link>
					  </li>
					  <li class="list-item">
					    <router-link to="/npc-new" class="tools-list__link">NewQuest</router-link>
					  </li>
					  <li class="list-item">
					    <router-link to="/npc-new" class="tools-list__link">EditUser</router-link>
					  </li>
					</ul>
				</div>
				<div class="tools-list__links col-md-4">
					<ul class="nav flex-column text-center">
					  <li class="list-item">
					    <router-link to="/" class="tools-list__link">Home</router-link>
					  </li>
					  <li class="list-item">
					    <router-link to="/npc-new" class="tools-list__link">NewNPC</router-link>
					  </li>
					  <li class="list-item">
					    <router-link to="/npc-new" class="tools-list__link">NewQuest</router-link>
					  </li>
					  <li class="list-item">
					    <router-link to="/npc-new" class="tools-list__link">EditUser</router-link>
					  </li>
					</ul>
				</div>
			</section>
		</div>
	</div>
</main>
</template>

<script>
export default {
  data () {
    return {
      msg:'test',
    }
  },
}
</script>

<style lang="scss">
.panel-head{
	padding:15px 0;
}
.list-item{
	margin:20px 0;
}
.tools-list{
	padding:5% 0;
	&__link{
		color:#bea771;
		padding:12px 36px;
		background:#1b1b1b;
		transition:0.7s;
	}
	&__link:hover{
		color:#bea771;
		text-shadow:0px 0px 4px #bea771;
		text-decoration:none;
	}
}
</style>