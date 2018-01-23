<template>
  <header class="header">
    <img src="../assets/oldcamp.jpg" class="header__img">
    <div class="header__text">
      <h1 class="header__title important">Gothic Versus</h1>
      <p class="header__subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tristique tortor mattis varius varius. Mauris vitae diam rhoncus, facilisis est vitae, tincidunt risus. Praesent tempus, felis sed mattis congue, massa sem volutpat eros, quis consectetur ante quam sit amet felis.</p>
      <div class="header__action">
        <div class="btn btn--login"><a href="#">Sing up</a></div>
        <div class="btn btn--register"><a href="#">Sing in</a></div>
      </div>
    </div>
  </header>
</template>

<script>

</script>

<style>
.header{
  overflow: hidden;
  position: relative;
}
.header__img{
  width: 100%;
  height: 100vh;
}
.header__text{
  width: 50%;
  position: absolute;
  z-index: 1;
  top:20%;
  left:25%;
  text-align: center;
  font-size: 1.3em;
}
.header__title{
  text-shadow: 1px 1px 2px #56341d;
  font-size: 2.4em;
  margin:6% 0;
}
.header__subtitle{
  text-shadow: 0px 0px 2px black;
}
.header__action{
  margin-top: 10%;
}
.btn--register{
  background: #9f1e1e;
}
.btn--login{
  background: #569325;
}

@media (max-width: 600px){
  .header__text{
    top:8%;
    left:10%;
    width: 80%;
  }
  .header__img{
    margin-left:-640px;
    width: 1440px;
  }
  .header__title{
    font-size: 2em;
  }
  .header__subtitle{
    font-size: 14px;
    text-align: justify;
  }
}
</style>