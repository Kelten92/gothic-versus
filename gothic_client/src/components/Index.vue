<template>
<article class="container">
  <div class="row">
    <div class="col-md-10 offset-md-1">
      <div class="container">

        <div class="row article">
          <div class="col-md-7">
            <img src="../assets/tavern.jpg" class="article__img">
          </div>
          <div class="col-md-5">
            <h3 class="important">And we start with this...</h3>
            <p class="article__body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras molestie nunc vel ligula accumsan convallis. In imperdiet ex massa. Donec dolor urna, lobortis id ligula nec, rutrum aliquam lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer quis ipsum nisl. Sed lacinia interdum vestibulum. Cras porttitor a neque gravida iaculis.</p>
          </div>
        </div>

        <div class="row article">
          <div class="col-md-5">
            <h3 class="important">And we start with this...</h3>
            <p class="article__body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras molestie nunc vel ligula accumsan convallis. In imperdiet ex massa. Donec dolor urna, lobortis id ligula nec, rutrum aliquam lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer quis ipsum nisl. Sed lacinia interdum vestibulum. Cras porttitor a neque gravida iaculis.</p>
          </div>
          <div class="col-md-7">
            <img src="../assets/tavern.jpg" class="article__img">
          </div>
        </div>

        <div class="row article">
          <div class="col-md-4">
            <img src="../assets/tavern.jpg" class="article__img">
          </div>
          <div class="col-md-4">
            <img src="../assets/tavern.jpg" class="article__img">
          </div>
          <div class="col-md-4">
            <img src="../assets/tavern.jpg" class="article__img">
          </div>
        </div>

      </div>
    </div>
  </div>
</article>
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
<style scoped>
.article{
  margin:5% 0;
}
.article__img{
  width: 100%;
  height: auto;
}
</style>
