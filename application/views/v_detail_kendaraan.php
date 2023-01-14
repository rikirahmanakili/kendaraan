<!-- Default box -->

<div class="card card-solid">
	<div class="card-body">
		<div class="row">
			<div class="col-12 col-sm-6">
				<h3 class="d-inline-block d-sm-none"><?= $kendaraan->pemegang_kendaraan ?></h3>
				<div class="col-12">
					<img src="<?= base_url('assets/gambar/' . $kendaraan->gambar) ?>" class="product-image" alt="Product Image">
				</div>
				<div class="col-12 product-image-thumbs">
					<div class="product-image-thumb active"><img src="<?= base_url('assets/gambar/' . $kendaraan->gambar) ?>" alt="Product Image"></div>
					<?php foreach ($gambar as $key => $value) { ?>
						<div class="product-image-thumb"><img src="<?= base_url('assets/gambarkendaraan/' . $value->gambar) ?>" alt="Product Image"></div>
					<?php } ?>


				</div>
			</div>
			
			<div class="col-12 col-sm-6">
			
				<table border="0">
    <tr>
       <td><h3> Pemegang Kendaraan</td></h3>
        <td><h3>:</td></h3>
        <td><h3 style="text-transform:uppercase"><?= $kendaraan->pemegang_kendaraan ?></td></h3>
    </tr>
    <tr>
        <td><h5>Kategori</td></h5>
        <td><h5>:</td></h5>
        <td><h5 style="text-transform:uppercase"><?= $kendaraan->nama_kategori ?></td></h5>
    </tr>
    <tr>
        <td> <h5>Merk</td></h5>
        <td> <h5>:</td></h5>
        <td> <h5 style="text-transform:uppercase"><?= $kendaraan->merk ?></td></h5>
    </tr>
    <tr>
        <td><h5> Plat Nomor</td></h5>
        <td><h5> :</td></h5>
        <td> <h5 style="text-transform:uppercase"><?= $kendaraan->plat ?></td></h5>
    </tr>
   <tr>
        <td><h5>Daya Listrik / Isi Silinder</td></h5>
        <td><h5>:</td></h5>
        <td><h5 style="text-transform:uppercase"><?= $kendaraan->daya_listrik ?></td></h5>
    </tr>
    <tr>
        <td><h5>Tahun Pembuatan</td></h5>
        <td><h5>:</td></h5>
        <td><h5 style="text-transform:uppercase"><?= $kendaraan->tahun_pembuatan ?></td></h5>
    </tr>
    <tr>
        <td><h5> Nomor Rangka</td></h5>
        <td><h5> :</td></h5>
        <td><h5 style="text-transform:uppercase"> <?= $kendaraan->nomor_rangka ?></td></h5>
    </tr>
    <tr>
        <td><h5> Nomor Mesin</td></h5>
        <td><h5> :</td></h5>
        <td><h5 style="text-transform:uppercase"> <?= $kendaraan->nomor_mesin ?></td></h5>
    </tr>
    <tr>
        <td><h5> Warna</td></h5>
        <td><h5> :</td></h5>
        <td><h5 style="text-transform:uppercase"> <?= $kendaraan->warna ?></td></h5>
    </tr>
    <tr>
        <td><h5>Nomor BPKB</td></h5>
        <td><h5> :</td></h5>
        <td><h5 style="text-transform:uppercase"> <?= $kendaraan->nomor_bpkb ?></td>
    </tr>
  
<tr>
        <td><h5> Perpanjangan Berikut</td></h5>
        <td><h5> :</td></h5>
        <td><h5> <?= $kendaraan->perpanjangan ?></td></h5>
    </tr>
</table>
<div class="card-footer">
							<div class="row">
								
								<div class="col-sm-6">
									<div class="text-right">
										<a href="<?php echo base_url('pemeriksaan');?>" class="btn btn-sm btn-success">
											<i class="fas fa-eye"></i>
														</a>
										
										
									</div>
								</div>
							</div>
						</div>
				
			
				

			</div>
		</div>

	</div>
	<!-- /.card-body -->
</div>
<!-- /.card -->
<!-- jQuery -->

<script src="<?= base_url() ?>template/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>template/dist/js/demo.js"></script>
