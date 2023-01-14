<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
	</ol>
	
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>



<div class="card card-solid">
	<div class="card-body pb-0">
		<div class="row">
			<?php foreach ($kendaraan as $key => $value) { ?>
				<div class="col-sm-4">
					
					<div class="card bg-light">
						<div class="card-header text-muted border-bottom-0">
							<h2 class="lead" style="text-transform:uppercase"><b><?= $value->pemegang_kendaraan ?></b></h2>
							<b>Plat Nomor : </b><?= $value->plat ?>
							<p class="text-muted text-sm" style="text-transform:uppercase"><b>Kategori : </b><?= $value->nama_kategori ?></p>
						</div>
						<div class="card-body pt-0">
							<div class="row">
								<div class="col-12 text-center">
									<img src="<?= base_url('assets/gambar/' . $value->gambar) ?>" width="300px" height="250px">
								</div>
							</div>
						</div>
						<div class="card-footer">
							<div class="row">
								
								<div class="col-sm-6">
									<div class="text-right">
										<a href="<?= base_url('home/detail_kendaraan/' . $value->id_kendaraan)  ?>" class="btn btn-sm btn-success">
											<i class="fas fa-eye"></i>
										</a>
										
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php echo form_close(); ?>
				</div>
			<?php } ?>

		</div>
	</div>
</div>