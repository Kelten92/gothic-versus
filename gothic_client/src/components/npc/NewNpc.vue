<template>
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2">
		<form @submit.prevent="onSubmited">
				<div class="form-group">
						<label for="name">Name</label>
						<label>{{errors.name}}</label>
						<input type="text" class="form-control" id="name" v-model="name">
				</div>

				<div class="form-group">
						<label for="avatar">Avatar</label>
						<label>{{errors.avatar}}</label>
						<input 
							v-on:change="uploadImage"
							type="file" 
							class="form-control" 
							id="avatar" 
							accept="image/*">
				</div>

				<div class="form-group">
						<label for="lvl">Lvl</label>
						<label>{{errors.lvl}}</label>
						<input type="number" class="form-control" id="lvl" v-model="lvl" min="1" max="50">
				</div>

				<div class="form-group">
						<label for="strength">Strength</label>
						<label>{{errors.strength}}</label>
						<input type="number" class="form-control" id="strength" v-model="strength" min="10" max="150" step="5">
				</div>

				<div class="form-group">
						<label for="dexterity">Dexterity</label>
						<label>{{errors.dexterity}}</label>
						<input type="number" class="form-control" id="dexterity" v-model="dexterity" min="10" max="150" step="5">
				</div>

				<div class="form-group">
						<label for="mana">Mana</label>
						<label>{{errors.mana}}</label>
						<input type="number" class="form-control" id="mana" v-model="mana" min="10" max="150" step="5">
				</div>

				<div class="form-group">
						<label for="health">Health</label>
						<label>{{errors.health}}</label>
						<input type="number" class="form-control" id="health" v-model="health" min="100" max="1500" step="10">
				</div>

				<div class="form-group">
						<label for="one_handed">1h_weapons</label>
						<label>{{errors.one_handed}}</label>
						<input type="number" class="form-control" id="one_handed" v-model="one_handed" min="10" max="100" step="10">
				</div>

				<div class="form-group">
						<label for="two_handed">2h_weapons</label>
						<label>{{errors.two_handed}}</label>
						<input type="number" class="form-control" id="two_handed" v-model="two_handed" min="10" max="100" step="10">
				</div>

				<div class="form-group">
						<label for="bows">Bows</label>
						<label>{{errors.bow}}</label>
						<input type="number" class="form-control" id="bows" v-model="bows" min="10" max="100" step="10">
				</div>

				<div class="form-group">
						<label for="crossbows">Crossbows</label>
						<label>{{errors.crossbow}}</label>
						<input type="number" class="form-control" id="crossbows" v-model="crossbows" min="10" max="100" step="10">
				</div>

				<div class="form-group">
						<label for="ring_of_magic">Ring_of_magic</label>
						<label>{{errors.ring_of_magic}}</label>
						<input type="number" class="form-control" id="ring_of_magic" v-model="ring_of_magic" min="1" max="6">
				</div>

				<div class="form-group">
						<label for="weapon">Weapon</label>
						<label>{{errors.weapon_id}}</label>
						<select v-model="weapon">
							<option v-for="bron in bronie" v-bind:value="bron.id">
								{{ bron.name }}
							</option>
						</select>
						<span>Selected: {{ weapon }}</span>
				</div>

				<div class="form-group">
						<label for="armor">Armor</label>
						<label>{{errors.armor_id}}</label>
						<select v-model="armor">
							<option v-for="zbroja in zbroje" v-bind:value="zbroja.id">
								{{ zbroja.name }}
							</option>
						</select>
						<span>Selected: {{ armor }}</span>
				</div>
				
				<button class="btn btn--newsletter" type="submit">Submit</button>
				<img :src="avatar" height="150" />
				
		</form>
		</div>
	</div>
</div>
</template>

<script>
import axios from 'axios';

export default {
	name: 'NewNpc',

	data () {
		return {
			bronie: [],
			zbroje: [],

			errors: [],
			error: [],

			name: '',
			avatar: '',
			lvl: '',
			strength: '',
			dexterity: '',
			mana: '',
			health: '',
			one_handed: '',
			two_handed: '',
			bows: '',
			crossbows: '',
			ring_of_magic: '',
			weapon: '1',
			armor: '1',

			avatar_url: '',
		}
	},

	methods: {
		uploadImage: function(e) {
			const files = e.target.files;
			let filename = files[0].name;
			if(filename.lastIndexOf('.') <= 0) {
				return alert('Pls add a valid file!');
			}
			const fileReader = new FileReader();
			fileReader.addEventListener('load', () => {
				this.avatar = fileReader.result;
			});
		 
			fileReader.readAsDataURL(files[0]);
			this.avatar_url = fileReader.result;
		},
		onGetWeapons() {
			axios.get('http://127.0.0.1:8000/api/weapons')
				.then(
					response => {
						this.bronie = response.data
					}
				)
				.catch(
					e => {
						console.log(e);
					}
				)
		},
		onGetArmors() {
			axios.get('http://127.0.0.1:8000/api/armors')
				.then(
					response => {
						this.zbroje = response.data
					}
				)
				.catch(
					e => {
						console.log(e);
					}
				)
		},
		onSubmited() {
			axios.post('http://127.0.0.1:8000/api/npcs',{
				name: this.name,
				avatar: this.avatar,
				lvl: this.lvl,
				strength: this.strength,
				dexterity: this.dexterity,
				mana: this.mana,
				health: this.health,
				one_handed: this.one_handed,
				two_handed: this.two_handed,
				bow: this.bows,
				crossbow: this.crossbows,
				ring_of_magic: this.ring_of_magic,
				weapon_id: this.weapon,
				armor_id: this.armor,
			})
			.then(
				response => {
					console.log(response);
					alert('Added NPC');
				}
			)
			.catch(
				e => {
					this.errors = e.response.data.errors
					alert('Error');
				}
			)  
		},
	},
	
	mounted: function () {
		this.$nextTick(function () {
			 this.onGetArmors();
			 this.onGetWeapons();
		})
	},
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
