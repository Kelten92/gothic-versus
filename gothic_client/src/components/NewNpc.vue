<template>
<div class="container">
  <div class="row">
    <div class="col-md-8 offset-md-2">
    <form>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" v-model="name">
        </div>

        <div class="form-group">
            <label for="avatar">Avatar</label>
            <input type="text" class="form-control" id="avatar" v-model="avatar">
        </div>

        <div class="form-group">
            <label for="lvl">Lvl</label>
            <input type="number" class="form-control" id="lvl" v-model="lvl" min="1" max="50">
        </div>

        <div class="form-group">
            <label for="strength">Strength</label>
            <input type="number" class="form-control" id="strength" v-model="strength" min="10" max="150" step="5">
        </div>

        <div class="form-group">
            <label for="dexterity">Dexterity</label>
            <input type="number" class="form-control" id="dexterity" v-model="dexterity" min="10" max="150" step="5">
        </div>

        <div class="form-group">
            <label for="mana">Mana</label>
            <input type="number" class="form-control" id="mana" v-model="mana" min="10" max="150" step="5">
        </div>

        <div class="form-group">
            <label for="health">Health</label>
            <input type="number" class="form-control" id="health" v-model="health" min="100" max="1500" step="10">
        </div>

        <div class="form-group">
            <label for="1h_weapons">1h_weapons</label>
            <input type="number" class="form-control" id="1h_weapons" v-model="weapons_one" min="10" max="100" step="10">
        </div>

        <div class="form-group">
            <label for="2h_weapons">2h_weapons</label>
            <input type="number" class="form-control" id="2h_weapons" v-model="weapons_two" min="10" max="100" step="10">
        </div>

        <div class="form-group">
            <label for="bows">Bows</label>
            <input type="number" class="form-control" id="bows" v-model="bows" min="10" max="100" step="10">
        </div>

        <div class="form-group">
            <label for="crossbows">Crossbows</label>
            <input type="number" class="form-control" id="crossbows" v-model="crossbows" min="10" max="100" step="10">
        </div>

        <div class="form-group">
            <label for="ring_of_magic">Ring_of_magic</label>
            <input type="number" class="form-control" id="ring_of_magic" v-model="ring_of_magic" min="1" max="6">
        </div>

        <div class="form-group">
            <label for="weapon">Weapon</label>
            <select v-model="weapon">
              <option v-for="bron in bronie" v-bind:value="bron.id">
                {{ bron.name }}
              </option>
            </select>
            <input type="checkbox" v-model="one_handed">
            <p>{{ one_handed }}</p>
            <span>Selected: {{ weapon }}</span>
        </div>

        <div class="form-group">
            <label for="armor">Armor</label>
            <select v-model="armor">
              <option v-for="zbroja in zbroje" v-bind:value="zbroja.id">
                {{ zbroja.name }}
              </option>
            </select>
            <span>Selected: {{ armor }}</span>
        </div>

        <button class="btn btn--newsletter" type="submit">Submit</button>
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
      bronie_jednoreczne: [],
      bronie_dwureczne: [],
      luki:[],
      kusze: [],
      czary: [],
      zbroje: [],

      one_handed:'',

      name: '',
      avatar: '',
      lvl: '',
      strength: '',
      dexterity: '',
      mana: '',
      health: '',
      weapons_one: '',
      weapons_two: '',
      bows: '',
      crossbows: '',
      ring_of_magic: '',
      weapon: '1',
      armor: '1',
    }
  },
  methods: {
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
  },
  mounted: function () {
    this.$nextTick(function () {
       this.onGetArmors();
       this.onGetWeapons();

    })
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
