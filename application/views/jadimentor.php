<?php require 'header2.php'
?>
<div class="login">
  <div class="container">
    <div class="row"> 
      <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6 col-xs-offset-2 col-xs-8">
        <div class="row" id="header-login">
           <h3 class="login-tittle">JADI MENTOR</h2>
        </div>
        <div class="row">
          <form action="<?=base_url()?>index.php/smartedu/user_auth" class="form-login" method="post">
          <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" placeholder="Nama Lengkap" class="form-control">
          </div>
          <div class="form-group">
            <label>Spesialis</label>
            <input type="text" placeholder="Mtk/Fisika/Kimia dsb" class="form-control">
          </div>
          <div class="form-group">
            <label>Nomor Rekening</label>
            <input type="text" placeholder="Nomor Rekening" class="form-control">
          </div>
          <div class="form-group">
            <label>Transkip Nilai</label>
            <input type="password" placeholder="Upload Transkip Nilai" class="form-control">
          </div>
          <div class="form-group">
            <label>Kartu Identitas</label>
            <input type="password" placeholder="Upload KTP/KTM" class="form-control">
          </div>
          <div class="form-group">
            <label>Deskripsi</label>
            <input type="text" placeholder="Deskripsi Menengenai Anda" class="form-control">
          </div>

          <div class="form-group">
            <input type="submit" class="btn btn-block btn-custom-green" id="btn-login" value="SUBMIT" />
          </div>
          <div class="login-text">
             <input type="checkbox">Saya setuju dengan semua<a href="<?=base_url()?>index.php/smartedu/register_page"> Syarat dan Ketentuan</a> yang berlaku.
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
  <?php require 'footer.php'
?>