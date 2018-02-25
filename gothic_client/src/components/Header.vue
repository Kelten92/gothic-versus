<template>
<header class="header-main">
<nav class="navbar navbar-expand-lg navbar-inverse bg-inverse">
<div class="container">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Gothic-Versus</a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link nav-link--active" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <router-link to="/admin-panel" class="nav-link">Admin-Panel</router-link>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</div>
</nav>
  <section class="header-main__information text-center">
    <header >
      <h1 class="header-main__h1">Another browsers game in Rpg lore...</h1>
    </header>
    <p class="header-main__body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam condimentum id tortor ut rhoncus. Maecenas vitae augue lectus. Interdum et malesuada fames ac ante ipsum primis in faucibus.Praesent nec enim ut ante vulputate vestibulum. Integer convallis facilisis sem, fringilla aliquet arcu ultrices sit amet.</p>
    <a href="#" class="header-main__btn"><span>Register</span></a>
  </section>

  

  <img :src="headerUrl" class="header-main__img">

</header>
      

</template>

<script>
export default {
  data () {
    return {
      headerUrl:require('../assets/camp.jpg')
    }
  },
}
</script>

<style scoped lang="scss">
$background-color:#111111;
$main-color:#bea771;
$basic-color:#D5D4D4;
$add-color:#1b1b1b;
.navbar{
  z-index:2 !important;
}
.navbar-brand{
  color:$main-color !important;
}
.bg-inverse{
  background:$background-color !important;
}
.nav-link{
  color:$basic-color !important;
  transition:.8s;
  font-size:14px;
  &--active{
    color:$main-color !important;
  }
  &:hover{
  text-shadow:0px 0px 4px #D5D4D4;
  }
}


.header-main{
  overflow:hidden;

  &__information{
    width:30%;
    position:absolute;
    top:30%;
    left:35%;
    z-index:1;
      @media(max-width: 400px) {
        width: 80%;
        top:20%;
        left:10%;
      }
  }

  &__img{
    width:100%;
    height:100vh;
    position:relative;
    z-index:0;
     @media(max-width: 400px) {
        width: 1024px;
        height:auto;
        margin-top:-100px;
        margin-left:-130px;

      }
  }
  &__body{
    font-size:16px;
    margin:10% 0;
    @media(max-width: 400px) {
        margin:7% 0;
        font-size:14px;
      }
  }
  &__h1{
    font-size:36px;
    text-shadow: 0px 0px 2px #726161;
    @media(max-width: 400px) {
        font-size:28px;
      }
  }
  &__btn{
    font-family: 'Cinzel', serif;
    font-size:20px;
    text-decoration:none;
    z-index:1;
    color:#bea771;
    border-radius:2px;
    background:#1b1b1b;
    padding:10px 4px;
    box-sizing: content-box;

    span{
      box-sizing: content-box;
      border-radius:2px;
      padding:6px 28px;
      border:1px solid #bea771;
      border-bottom:2px solid #bea771;
    }
  }
}

</style>