<div class="col-md-12">
	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">Data kendaraan</h3>

			<div class="card-tools">
				<a href="<?= base_url('kendaraan/add') ?>" type="button" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Add</a>
			</div>
			<!-- /.card-tools -->
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<?php
			if ($this->session->flashdata('pesan')) {
				echo '<div class="alert alert-success alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h5><i class="icon fas fa-check"></i>';
				echo $this->session->flashdata('pesan');
				echo '</h5></div>';
			}


			?>
			<table class="table table-bordered" id="example1">
				<thead class="text-center">
					<tr>
						<th>No</th>
						<th>Pemegang Kendaraan</th>
						<th>Kategori Kendaraan</th>
						<th>Merk</th>
						<th>Plat/Nomor</th>
						<th>Gambar</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach ($kendaraan as $key => $value) { ?>
						<tr>
							<td class="text-center"><?= $no++; ?></td>
							<td style="text-transform:uppercase">
								<?= $value->pemegang_kendaraan ?><br>
								
							</td>
							<td class="text-center" style="text-transform:uppercase"><?= $value->nama_kategori ?></td>
							<td class="text-center" style="text-transform:uppercase"><?= $value->merk ?></td>
							<td class="text-center" style="text-transform:uppercase"><?= $value->plat ?></td>
							<td class="text-center"><img src="<?= base_url('assets/gambar/' . $value->gambar) ?>" width="150px"></td>
							<td class="text-center">
								<a href="<?= base_url('kendaraan/edit/' . $value->id_kendaraan) ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
								<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value->id_kendaraan ?>"><i class="fas fa-trash"></i></button>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
		<!-- /.card-body -->
	</div>
	<!-- /.card -->
</div>



<!--modal delete -->
<?php 
foreach ($kendaraan as $key => $value) { ?>
	<div class="modal fade" id="delete<?= $value->id_kendaraan ?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Delete <?= $value->pemegang_kendaraan ?></h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">


					<h5>Apakah Anda Yakin Ingin Menghapus Data Ini...?</h5>


				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<a href="<?= base_url('kendaraan/delete/' . $value->id_kendaraan) ?>" class="btn btn-primary">Delete</a>
				</div>

			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
<?php } ?>
