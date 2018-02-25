<template>

<article class="container">
	<div class="row">
		<div class="col-md-10 offset-md-1">
			<header><h2>Npcs</h2></header>
			<app-npc v-for="npc in npcs" v-bind:enpc="npc" v-bind:key="npc.id"></app-npc>
			<button class="btn btn--newsletter" v-on:click="getNpc">Get Npc</button>
		</div>
	</div>
</article>

</template>

<script>
import NpcTemplate from './NpcTemplate.vue'
import axios from 'axios';

export default {
	name: 'Npcs',

	data () {
		return {
			msg: 'Welcome to Your Vue.js App',
			npcs:[],
		}
	},

	components: {
		'app-npc': NpcTemplate
	},
	
	methods: {
		getNpc(){
			axios.get('http://127.0.0.1:8000/api/npcs')
				.then(
					response => {
						this.npcs = response.data
					}
				)
				.catch(
					e => {
						console.log(e);
					}
				)
		}
	}
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
