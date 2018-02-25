<template>
<main class="welcome-page">

  <div class="pattern">
    <div class="container">
      <article class="about-game row">
        <div class="about-game__img col-md-5">
          <img src="../assets/tavern.jpg" class="article__img">
        </div>
        <div class="about-game__text col-md-7">
          <h3 class="important">And we start with this...</h3>
          <p class="article__body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras molestie nunc vel ligula accumsan convallis. In imperdiet ex massa. Donec dolor urna, lobortis id ligula nec, rutrum aliquam lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer quis ipsum nisl. Sed lacinia interdum vestibulum. Cras porttitor a neque gravida iaculis.</p>
        </div>
        <hr class="article__line">
      </article>
    </div>
  </div>

  <div class="pattern">
    <div class="container">
      <section class="game-informations row">
        <div class="col-md-12 text-center">
          <header class="game-informations__head">
            <h3 class="important">And we start with this...</h3>
          </header>
          <div class="game-informations__text">
            <p class="article__body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras molestie nunc vel ligula accumsan convallis. In imperdiet ex massa. Donec dolor urna, lobortis id ligula nec, rutrum aliquam lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer quis ipsum nisl. Sed lacinia interdum vestibulum. Cras porttitor a neque gravida iaculis.</p>
          </div>
        </div>
        <hr class="article__line">
      </section>
    </div>
  </div>
  
</main>
</template>

<script>
export default {
  name: 'Index',
  data () {
    return {
      msg: 'Welcome to Your Vue.js Npc component'
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss">

.article{
  &__line{
    background: #414141;
    width: 70%;
    height: 1px;
    margin-top:50px;
  }
  &__img{
  width: 100%;
  height: auto;
  }
}
.row{
  padding-top:5%;
  padding-bottom:5%;
}

.pattern{
  margin:0;
  background-image: radial-gradient( rgba(35, 30, 30, 0.61), rgba(32, 26, 26, 0.3)),
                  url('../assets/textura.png');
}
.about-game{
  padding-top:10%;
}
</style>
