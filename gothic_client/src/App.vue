<template>
  <div id="app">
    <header-main></header-main>
    <router-view/>
    <footer-main></footer-main>
  </div>
</template>

<script>
import TopBar from './components/TopBar.vue'
import Header from './components/Header.vue'
import Navbar from './components/Navbar.vue'
import Footer from './components/Footer.vue'
export default {
  name: 'app',
  components: {
    'top-bar': TopBar,
    'header-main': Header,
    'nav-bar': Navbar,
    'footer-main': Footer
  }
}
</script>

<style lang="scss">
*{
  box-sizing: border-box;
}
body{
  margin:0;
  padding:0;
}
#app {
  font-family: 'Libre Baskerville', serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #D5D4D4;
  font-size: 16px;
  background:#111111;
}
h1,h2,h3,h4,h5{
  font-family: 'Cinzel', serif;
  font-weight: normal;
}
.important{
  color: #bea771;
}
.pattern{
  margin:0;
  background-image: radial-gradient( rgba(35, 30, 30, 0.61), rgba(32, 26, 26, 0.3)),
                  url('./assets/textura.png');
}
.article__body{
  font-size: 14px;
  opacity: 0.8;
  line-height: 1.8;
}






</style>
