<head>
<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
 <link href="<?php echo base_url('assets/css/jquery.dataTables.min.css');?>" rel="stylesheet">
 <link href="<?php echo base_url('assets/css/datatables.min.css');?>" rel="stylesheet">
</head>
 <div class="container">
	


<div class="card card-solid">
	<div class="card-body pb-0">
		<div class="row">
			<?php foreach ($kendaraan as $key => $value) { ?>
				<div class="col-sm-4">
					
					<div class="card bg-light">
						<div class="card-header text-muted border-bottom-0">
							<h2 class="lead" style="text-transform:uppercase"><?= $value->pemegang_kendaraan ?></h2>
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

<script src="<?= base_url() ?>template/plugins/sweetalert2/sweetalert2.min.js"></script>
