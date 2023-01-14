<div class="col-md-12">
	<!-- general form elements disabled -->
	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">Form Edit Kendaraan</h3>
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

			echo form_open_multipart('kendaraan/edit/' . $kendaraan->id_kendaraan) ?>
			<div class="form-group">
				<label>Pemegang Kendaraan</label>
				<input name="pemegang_kendaraan" class="form-control" placeholder="Pemegang Kendaraan" style="text-transform:uppercase" value="<?= $kendaraan->pemegang_kendaraan  ?>">
			</div>
			<div class="row">
				<div class="col-sm-4">
					<div class="form-group">
						<label>kategori Kendaraan</label>
						<select name="id_kategori" class="form-control">
							<option value="<?= $kendaraan->id_kategori ?>"><?= $kendaraan->nama_kategori ?></option>
							<?php foreach ($kategori as $key => $value) { ?>
								<option value="<?= $value->id_kategori ?>"><?= $value->nama_kategori ?></option>
							<?php } ?>
						</select>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
					<span class="details">
						<label>Merk</label>
						<input name="merk" class="form-control" placeholder="Merk" style="text-transform:uppercase" value="<?= $kendaraan->merk ?>">
					</div>
				</div>
				
				<div class="col-sm-4">
					<div class="form-group">
					<span class="details">
						<label>plat Nomor</label>
						<input name="plat"  class="form-control" placeholder="plat" style="text-transform:uppercase" value="<?= $kendaraan->plat?>">
					</div>
				</div>
			</div>
			<div class="row">
			<div class="col-sm-4">
					<div class="form-group">
					<span class="details">
						<label>Daya Listrik / Isi Silinder</label></span>
						<input name="daya_listrik" class="form-control" placeholder="Daya Listrik / Isi Silinder" style="text-transform:uppercase" value="<?= $kendaraan->daya_listrik ?>">
					</div>
				</div>
			

				<div class="col-sm-4">
				<div class="input-box">
						<span class="details">
						<label>Nomor Rangka</label></span>
						<input name="nomor rangka" class="form-control" placeholder="Masukan nomor Rangka" style="text-transform:uppercase" value="<?= $kendaraan->nomor_rangka ?>">
						</div>
					</div>	
					
				<div class="col-sm-4">
					<div class="input-box">
					<span class="details">
						<label>Nomor Mesin</label></span>
						<input name="nomor mesin" class="form-control" placeholder="Nomor Mesin" style="text-transform:uppercase" value="<?= $kendaraan->nomor_mesin ?>">
						</div>
					</div>
					</div>


				<div class="row">
				<div class="col-sm-4">
					<div class="input-box">
					<span class="details">
						<label>Warna</label></span>
						<input name="warna" class="form-control" placeholder="warna" style="text-transform:uppercase" value="<?= $kendaraan->warna ?>">
					</div>
				</div>

				<div class="col-sm-4">
					<div class="input-box">
					<span class="details">
						<label>Nomor BPKB</label></span>
						<input name="nomor bpkb" class="form-control" placeholder="nomor bpkb" style="text-transform:uppercase" value="<?= $kendaraan->nomor_bpkb ?>">
					</div>
				</div>

				

			<div class="col-sm-4">
			<div class="input-box">
			<span class="details">
				<label>Tahun Pembuatan</label></span>
				<input type="date" name="tahun_pembuatan" class="form-control" rows="5" placeholder="Tahun Pembuatan" value="<?= $kendaraan->tahun_pembuatan ?>">
					</div>
				</div>


</div>
<br>
<div class="row">
			<div class="col-sm-6">
			<div class="input-box">
			<span class="details">
						<label>Perpanjangan Berikut</label>
						<input type="date" name="perpanjangan" class="form-control" placeholder="perpanjangan" value="<?= $kendaraan->perpanjangan ?>">
					</div>
				</div>
							</div>

<br>

			
				
						<label>Gambar</label>
						<input type="file" name="gambar" class="form-control" id="preview_gambar">
				

				<div class="col-sm-6">
					<div class="form-group">
						<img src="<?= base_url('assets/gambar/' . $kendaraan->gambar) ?>" id="gambar_load" width="400px">
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
