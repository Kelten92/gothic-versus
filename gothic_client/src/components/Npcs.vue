<template>

<article class="container">
  <div class="row">
    <div class="col-md-10 offset-md-1">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Lvl</th>
            <th>Weapon</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</article>

</template>

<script>
import axios from 'axios';

export default {
  name: 'Npcs',
  data () {
    return {
      msg: 'Welcome to Your Vue.js App',
      npcs:[],
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h1, h2 {
  font-weight: normal;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
