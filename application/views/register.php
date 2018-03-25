<?php require 'header2.php'
?>
<div class="login">
  <div class="container">
    <div class="row"> 
      <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6 col-xs-offset-2 col-xs-8">
        <div class="row" id="header-login">
           <h3 class="login-tittle">Daftar SMART EDU</h2>
        </div>
        <div class="row">
          <form class="form-login">
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email">
          </div>
          <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="Username">
          </div>
          <div class="form-group">
            <input type="text" name="password" class="form-control" placeholder="Password">
          </div>
          <div class="form-group">
            <input type="text" name="conf-password" class="form-control" placeholder="Confirm Password">
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-block btn-custom-green" id="btn-login" value="DAFTAR" />
          </div>
          <div class="login-text">
             <p>Sudah punya akun? silahkan masuk<a href="<?=base_url()?>index.php/smartedu/login_page">  disini</a></p>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
  <?php require 'footer.php'
?>