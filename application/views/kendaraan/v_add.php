<div class="col-md-12">
	<!-- general form elements disabled -->
	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">Form Add Kendaraan</h3>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<?php
			//notifikasi form kosong
			echo validation_errors('<div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<h5><i class="icon fas fa-info"></i>', '</h5> </div>');
			//notifikasi gagal upload gambar
			if (isset($error_upload)) {
				echo '<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h5><i class="icon fas fa-info"></i>' . $error_upload . '</h5> </div>';
			}

			echo form_open_multipart('kendaraan/add') ?>
			<div class="form-group">
				<label>Pemegang Kendaraan</label>
				<input name="pemegang_kendaraan" class="form-control" placeholder="Nama" style="text-transform:uppercase" value="<?= set_value('pemegang_kendaraan') ?>">
			</div>
			<div class="row">
				<div class="col-sm-4">
					<div class="form-group">
						<label>kategori Kendaraan</label>
						<select name="id_kategori" class="form-control">
							<option value="">--Pilih Kategori--</option>
							<?php foreach ($kategori as $key => $value) { ?>
								<option value="<?= $value->id_kategori ?>"><?= $value->nama_kategori ?></option>
							<?php } ?>
						</select>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label>Merk</label>
						<input name="merk" class="form-control" placeholder="Merk" style="text-transform:uppercase" value="<?= set_value('merk') ?>">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="input-box">
						<label>Plat Nomor</label>
						<input name="plat" class="form-control" placeholder="Plat" style="text-transform:uppercase" value="<?= set_value('plat') ?>">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<div class="input-box">
					<span class="details">
						<label>Daya Listrik / Isi Silinder</label></span>
						<input name="daya_listrik" class="form-control" placeholder="Daya Listrik / Isi Silinder" style="text-transform:uppercase" value="<?= set_value('daya_listrik') ?>">
					</div>
				</div>
				<div class="col-sm-4">

					<div class="input-box">
						<span class="details">
						<label>Nomor Rangka</label></span>
						<input name="nomor rangka" class="form-control" placeholder="Masukan Nomor Rangka" style="text-transform:uppercase" value="<?= set_value('nomor_rangka') ?>">
					</div>
							</div>	
					
				<div class="col-sm-4">
					<div class="input-box">
					<span class="details">
						<label>Nomor Mesin</label></span>
						<input name="nomor mesin" class="form-control" placeholder="Nomor Mesin" style="text-transform:uppercase" value="<?= set_value('nomor_mesin') ?>">
					</div>
							</div>
							</div>
							
							
							<br>
							
				<div class="row">			
				<div class="col-sm-4">

					<div class="input-box">
					<span class="details">
						<label>Warna</label></span>
						<input name="warna" class="form-control" placeholder="Warna" style="text-transform:uppercase" value="<?= set_value('warna') ?>">
					</div>
				</div>
				

				<div class="col-sm-4">
					<div class="input-box">
					<span class="details">
						<label>Nomor BPKB</label></span>
						<input name="nomor bpkb" class="form-control" placeholder="Nomor BPKB" style="text-transform:uppercase" value="<?= set_value('nomor_bpkb') ?>">
					</div>
				</div>
				

			
				

		
				
				
				<div class="col-sm-4">

			<div class="input-box">
			<span class="details">
				<label>Tahun Pembuatan</label></span>
				<input type="date" name="tahun pembuatan" class="form-control" placeholder="Tahun Pembuatan" value="<?= set_value('tahun_pembuatan') ?>">
			</div>
							</div>
							
			</div>
			<br>
			<div class="row">
				<div class="col-sm-6">

			<div class="input-box">
			<span class="details">
						<label>Perpanjangan Berikut</label>
						<input type="date" name="perpanjangan" class="form-control" placeholder="perpanjangan" value="<?= set_value('perpanjangan') ?>">
					</div>
				</div>
				</div>
				<br>
				
			
				
						<label>Gambar</label>
						<input type="file" name="gambar" class="form-control" id="preview_gambar" required>
				

				<div class="col-sm-6">
					<div class="form-group">
						<img src="<?= base_url('assets/gambar/nofoto.jpg') ?>" id="gambar_load" width="400px">
					</div>
				</div>
			


			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-sm">Simpan</button>
				<a href="<?= base_url('kendaraan') ?>" class="btn btn-success btn-sm">Kembali</a>
			</div>

			<?php echo form_close() ?>
		</div>
	</div>
</div>

<script>
	function bacaGambar(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				$('#gambar_load').attr('src', e.target.result);
			}
			reader.readAsDataURL(input.files[0]);
		}
	}

	$("#preview_gambar").change(function() {
		bacaGambar(this);
	});
</script>
