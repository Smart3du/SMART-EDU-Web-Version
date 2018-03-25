<?php require 'header2.php'
?>
<div class="login">
  <div class="container">
    <div class="row"> 
      <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6 col-xs-offset-2 col-xs-8">
        <div class="row" id="header-login">
           <h3 class="login-tittle">Masuk SMART EDU</h2>
        </div>
        <div class="row">
          <form action="<?=base_url()?>index.php/smartedu/user_auth" class="form-login" method="post">
          <div class="form-group">
            <label>USERNAME</label>
            <input type="text" name="username" class="form-control">
          </div>
          <div class="form-group">
            <label>PASSWORD</label>
            <input type="password" name="password" class="form-control">
          </div>
          <div class="login-text">
            <p>Lupa password akun anda?<a> Klik disini</a></p>
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-block btn-custom-green" id="btn-login" value="MASUK" />
          </div>
          <div class="login-text">
             <p>Belum punya akun? silahkan daftar<a href="<?=base_url()?>index.php/smartedu/register_page">  disini</a></p>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
  <?php require 'footer.php'
?>