<template>
<footer class="container-fluid">

  <div class="row">
    <div class="col-md-8 offset-md-2 text-center">
      <div class="newsletter">
        <label for="newsletter"><h3 class="important">Bądź z nami w stałym kontakcie!</h3></label>
        
        <form class="form-inline">
          <input type="email" class="form-control newsletter__input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <button type="submit" class="btn btn--newsletter">Submit</button>
        </form>
      </div>
    </div>
  </div>

  <hr class="newsletter__hr">

  <div class="row">
    <div class="col-md-8 offset-md-2 text-center">
      <div class="row footer__end">
        <div class="col-md-4">
          <p>Website copyright © 2005-2007 by Pluto 13 GmbH. Gothic und Piranha Bytes sind eingetragene Marken der Pluto 13 GmbH.</p>
        </div>
        <div class="col-md-4">
          <a href="#">Licencja</a>
          <a href="#">Twórcy</a>
          <a href="#">Poradnik</a>
        </div>
        <div class="col-md-4">
        <div class="footer__social">
          <a href="https://github.com/"><i class="fa fa-github-square" aria-hidden="true"></i></a>
          <a href="https://twitter.com/?lang=pl"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
        </div>
        </div>
      </div>
    </div>
  </div>

</footer>
</template>

<script>

</script>

<style>
.newsletter{
  margin:2% 0;
}
.form-inline{
  display: inherit;
}
footer{
  background: #1b1b1b;
  padding: 5% 0;
}
.newsletter__input{
  border:1px solid #111111;
  background:  #1b1b1b;
}
.btn--newsletter{
  background: #bea771;
  color: #111111;
}
.newsletter__hr{
  background: #414141;
  width: 70%;
  height: 2px;
}
.footer__end{
  font-size: 12px;
}
.footer__social{
  font-size: 36px;
}
.fa-github-square{
  color: white;
}
.fa-twitter-square{
  color: #0084b4;
}
</style>