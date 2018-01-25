<template>
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">

        <section class="row">
          <div class="col-md-12">
            <header class="npc__header">
              <h2 class="important">Diego</h2>
            </header>
          </div>
        </section>

        <section class="row">

          <div class="col-md-5">
            <img src="cos.jpg" class="npc__img">
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
                  <td>20</td>
                </tr>
                <tr>
                  <th scope="row">Health</th>
                  <td>360</td>
                </tr>
                <tr>
                  <th scope="row">Strength</th>
                  <td>70</td>
                </tr>
                <tr>
                  <th scope="row">Dexterity</th>
                  <td>40</td>
                </tr>
                <tr>
                  <th scope="row">Mana</th>
                  <td>20</td>
                </tr>
                <tr>
                  <th scope="row">One handed weapons</th>
                  <td>60%</td>
                </tr>
                <tr>
                  <th scope="row">Two handed weapons</th>
                  <td>20%</td>
                </tr>
                <tr>
                  <th scope="row">Weapon</th>
                  <td>Guard Dagger</td>
                </tr>
                <tr>
                  <th scope="row">Armor</th>
                  <td>Guard Armor</td>
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
export default {
  data () {
    return {
      msg: 'Welcome to Your Vue.js App'
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
section{
  margin: 5% 0;
}
.npc__header{
  text-align: center;
  background: #1b1b1b;
  padding: 5px 10px;
}
.npc__img{
  width: 100%;
  height: auto;
}
.npc__descryption{
  font-size: 12px
}
</style>
