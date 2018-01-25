<template>
  <div id="app">
    <nav-bar></nav-bar>
    <header-main></header-main>
    <router-view/>
    <footer-main></footer-main>
  </div>
</template>

<script>
import Header from './components/Header.vue'
import Navbar from './components/Navbar.vue'
import Footer from './components/Footer.vue'
export default {
  name: 'app',
  components: {
    'header-main': Header,
    'nav-bar': Navbar,
    'footer-main': Footer
  }
}
</script>

<style>
*{
  box-sizing: border-box;
}
body{
  margin:0;
  padding:0;
}
#app {
  font-family: 'Cinzel', serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #D5D4D4;
  font-size: 16px;
  background: #111111;
}
h1,h2,h3,h4,h5{
  font-weight: normal;
}
.important{
  color: #bea771;
}
a{
  color: #bea771;
  font-size: 0.9em;
  transition: 0.8s;
}
a:hover{
  text-shadow: 0px 0px 2px #ada771;
}
.btn{
  display: inline;
  width: 96px;
  height: 38px;
  padding: 5px 10px;
  border-radius: 2px;
  margin:5px;
  transition: 0.7s;
  opacity: 0.8;
  font-weight: bold;
}
.btn:hover{
  opacity: 1;
}
.btn > a{
  text-decoration: none;
  color: #D5D4D4;
}
.article__body{
  font-family: 'Libre Baskerville', serif;
  font-size: 14px;
  opacity: 0.8;
  line-height: 1.8;
}
</style>
