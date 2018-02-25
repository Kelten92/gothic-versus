<template>
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<section class="row">
				<div class="col-md-12">
					<header class="npc__header">
						<h2 class="important">{{ npc.name }}</h2>
					</header>
				</div>
			</section>
			<section class="row">
				<div class="col-md-5">
					<img v-if="errors" :src="imgUrl" class="npc__img">
					<img :src="npc.avatar" class="npc__img">
				</div>
				<div class="col-md-7">
					<table class="table">
						<thead>
							<tr>
								<th colspan="4" style="text-align:center">Skills</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">Lvl</th>
								<td>{{ npc.lvl }}</td>
							</tr>
							<tr>
								<th scope="row">Health</th>
								<td>{{ npc.health }}</td>
							</tr>
							<tr>
								<th scope="row">Strength</th>
								<td>{{ npc.strength }}</td>
							</tr>
							<tr>
								<th scope="row">Dexterity</th>
								<td>{{ npc.dexterity }}</td>
							</tr>
							<tr>
								<th scope="row">Mana</th>
								<td>{{ npc.mana }}</td>
							</tr>
							<tr>
								<th scope="row">One handed weapons</th>
								<td>{{ npc.one_handed }}%</td>
							</tr>
							<tr>
								<th scope="row">Two handed weapons</th>
								<td>{{ npc.two_handed }}%</td>
							</tr>
							<tr>
								<th scope="row">Weapon</th>
								<td>{{ npc.weapon_id }}</td>
							</tr>
							<tr>
								<th scope="row">Armor</th>
								<td>{{ npc.armor_id }}</td>
							</tr>
						</tbody>
					</table>
				</div>
			</section>
			<section class="row">
				<div class="col-md-12">
					<p class="article__body npc__descryption">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quam risus, dictum ac aliquet quis, commodo id dui. Aliquam lorem tellus, tempus eu ornare quis, tempus quis leo. Duis nec aliquet sem. Donec purus tellus, laoreet id mi quis, cursus lobortis sapien. Maecenas aliquam ipsum vitae ipsum imperdiet tincidunt. Vestibulum malesuada facilisis odio vel tristique. Sed commodo orci quis lobortis mattis. Vivamus cursus vehicula tortor et blandit. Nunc mattis nisl at bibendum dapibus. Morbi faucibus enim ut quam malesuada consectetur. </p>
				</div>
			</section>
		</div>
	</div>
</div>
</template>

<script>
import axios from 'axios';

	export default {
		props: ['id'],

		data () {
    		return {
      			npc:[],
      			errors: false,
      			imgUrl: require('../../assets/unknow.jpg'),
    		}
  		},

		methods: {
    		getNpc(){
      			axios.get('http://127.0.0.1:8000/api/npcs/' + this.id)
        			.then(
          				response => {
            				this.npc = response.data
          				}
        			)
        			.catch(
          				e => {
            				this.errors = e
          				}
        			)
    		}
  		},

  		mounted: function () {
    		this.$nextTick(function () {
       			this.getNpc();
    		})
  		},

	}
</script>

<style>
	img{
		height: 150px;
		width: 150px;
	}
</style>