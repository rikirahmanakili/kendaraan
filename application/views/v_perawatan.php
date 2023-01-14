<!-- Default box -->



<div class="card card-solid">
	<div class="card-body">
		<div class="row">
			<div class="col-12 col-sm-6">
				<h3 class="d-inline-block d-sm-none"><?= $kendaraan->pemegang_kendaraan ?></h3>
	
					<?php foreach ($gambar as $key => $value) { ?>
						
					<?php } ?>


				</div>
			</div>
			
			<div class="col-12 col-sm-6">
			
				<table border="0">
    <tr>
       <td><h3>Pemegang Kendaraan</td></h3>
        <td><h3></td></h3>
        <td><h3>:</td></h3>
        <td><h3></td></h3>
        <td><h3><?= $kendaraan->pemegang_kendaraan ?></td></h3>

    </tr>
</table>
<hr>
<table border="0">
    <tr>
        <td><h5>Pemeriksaan Suspansi</td></h5>
        <td><h5>:</td></h5>
        <td><h5>
       <select name="p_suspansi" class="form-control">
							<option value="">--Pilih--</option>
							<option>Yes</option>
							<option>No</option>
						</select> </h5></td>
    </tr>
    <tr>
        <td> <h5>Pemeriksaan Oli</td></h5>
        <td> <h5>:</td></h5>
        <td> <h5>
        <select name="p_suspansi" class="form-control">
							<option value="">--Pilih--</option>
							<option>Yes</option>
							<option>No</option>
						</select></h5></td>
    </tr>
    <tr>
        <td><h5>Pemeriksaan Rem</td></h5>
        <td><h5> :</td></h5>
        <td> <h5>
        <select name="p_suspansi" class="form-control">
							<option value="">--Pilih--</option>
							<option>Yes</option>
							<option>No</option>
						</select></h5></td></td></h5>
    </tr>
   <tr>
        <td><h5>Pemeriksaan Lampu</td></h5>
        <td><h5>:</td></h5>
        <td><h5>
        <select name="p_suspansi" class="form-control">
							<option value="">--Pilih--</option>
							<option>Yes</option>
							<option>No</option>
						</select></h5></td></td></h5>
    </tr>
    <tr>
        <td><h5>Pemeriksaan Kelayakan Ban</td></h5>
        <td><h5>:</td></h5>
        <td><h5>
        <select name="p_suspansi" class="form-control">
							<option value="">--Pilih--</option>
							<option>Yes</option>
							<option>No</option>
						</select></h5></td></td></h5>
    </tr>
    <tr>
        <td><h5>Pemeriksaan Tekanan Ban</td></h5>
        <td><h5> :</td></h5>
        <td><h5>
        <select name="p_suspansi" class="form-control">
							<option value="">--Pilih--</option>
							<option>Yes</option>
							<option>No</option>
						</select></h5></td></td></h5>
    </tr>
    <tr>
        <td><h5>Pemeriksaan Aki</td></h5>
        <td><h5> :</td></h5>
        <td><h5>
        <select name="p_suspansi" class="form-control">
							<option value="">--Pilih--</option>
							<option>Yes</option>
							<option>No</option>
						</select></h5></td></td></h5>
    </tr>
    <tr>
        <td><h5>Pemeriksaan Radiator</td></h5>
        <td><h5> :</td></h5>
        <td><h5>
        <select name="p_suspansi" class="form-control">
							<option value="">--Pilih--</option>
							<option>Yes</option>
							<option>No</option>
						</select></h5></td></td></h5>
    </tr>
    <tr>
        <td><h5>Pemeriksaan Mesin</td></h5>
        <td><h5> :</td></h5>
        <td><h5>
        <select name="p_suspansi" class="form-control">
							<option value="">--Pilih--</option>
							<option>Yes</option>
							<option>No</option>
						</select></h5></td></td>
    </tr>

<td><h5>KM Terakhir</td></h5>
        <td><h5> :</td></h5>
        <td><h5><input name="km terakhir" class="form-control" placeholder="Km Terakhir" value="<?= set_value('km_terakhir') ?>"></td></h5>
    </tr>
<tr>

    <tr>
        <td><h5>Tanggal Perawatan</td></h5>
        <td><h5> :</td></h5>
        <td><h5><input name="tanggal perawatan" class="form-control" placeholder="Tanggal Perawatan" value="<?= set_value('tanggal_perawatan') ?>"></td></h5>
    </tr>
    <tr>
        
</table>
<div class="card-footer">
							<div class="row">
								
								<div class="col-sm-6">
									<div class="text-right">
										<a href="<?= base_url('home/detail_kendaraan/' . $kendaraan->id_kendaraan)  ?>" class="btn btn-sm btn-success">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5zM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5z"/>
</svg>
														</a>
										
										
									</div>
								</div>
							</div>
						</div>
				<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>"
rel="stylesheet">
</head>





			

			</div>
		</div>


		<h1><center>List Pemeliharaan</center></h1>
		<div class="table-responsive-xl">
<table class="table table-striped" border="1">

<thead>
<tr>
<th scope="col">No</th>
<th scope="col"> Suspansi</th>
<th scope="col"> Oli</th>
<th scope="col"> Rem</th>
<th scope="col"> Lampu</th>
<th scope="col" class="text-center"> Kelayakan Ban</th>
<th scope="col" class="text-center"> Tekanan Ban</th>
<th scope="col"> Aki</th>
<th scope="col"> Radiator</th>
<th scope="col"> Mesin</th>
<th scope="col" class="text-center">Km Terakhir</th>
<th scope="col" class="text-center">Tanggal Perawatan</th>
<th width="200" class="text-center">Action</th>
</tr>
</thead>



<tr>
<th scope="row">--</th>
<td><?= $perawatan->pemeriksaan_suspansi;?></td>
<td>--</td>
<td>--</td>
<td>--</td>
<td>--</td>
<td>--</td>
<td>--</td>
<td>--</td>
<td>--</td>
<td>--</td>
<td>--</td>
<td> <a class="btn btn-sm btndanger">Delete</a>
</td>
</tr>
	

</table>
					</div>
	</div>
	<!-- /.card-body -->
</div>
<!-- /.card -->
<!-- jQuery -->

<script src="<?= base_url() ?>template/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>template/dist/js/demo.js"></script>