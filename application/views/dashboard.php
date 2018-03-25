<?php require 'header3.php'
?>
<section class="dashboard-content" id="dashboard-content">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-6">
						<a href="<?=base_url()?>index.php/smartedu/buku_page"><div class="dashboard-item">
							<h2>Cari Buku</h2>
							<img src="<?=base_url()?>assets/img/item1.png">
						</div></a>
					</div>
					<div class="col-md-6">
						<div class="dashboard-item">
							<h2>Cari Kelas</h2>
							<img src="<?=base_url()?>assets/img/item5.png">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="dashboard-item">
							<h2>Upload Buku</h2>
							<img src="<?=base_url()?>assets/img/item2.png">	
						</div>
					</div>
					<div class="col-md-6">
						<div class="dashboard-item">
							<h2>Buka Kelas</h2>
							<img src="<?=base_url()?>assets/img/item3.png">
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="dashboard-item" id="jm">
					<h2>Jadi Mentor</h2>
					<img src="<?=base_url()?>assets/img/item4.png">
				</div>
			</div>
		</div>
	</div>
</section>
<?php require 'footer.php'
?>