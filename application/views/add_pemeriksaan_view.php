<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="utf-8">
 <title>Add New pemeriksaan</title>
 <!-- load bootstrap css file -->
 <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>"
rel="stylesheet">
<script src="./js/jquery-1.11.3.min.js"></script>
<link rel="stylesheet" href="./css/bootsrap-datepicker3.css" type="text/css">
 </head>
<style>
body {background-color: azure;
  background-image: url(<?php echo base_url("assets/mist.jpg");?>);
    background-repeat : no-repeat ;
	background-size : cover}
h1   {color: blue;}
p    {color: red;}
</style>
 <?php 
        if(isset($error))
        {
            echo "ERROR UPLOAD : <br/>";
            print_r($error);
            echo "<hr/>";
        }
        ?>
        <body>
 <div class="container">
 <h1><center>Add New pemeriksaan</center></h1>
 <div class="col-md-6 offset-md-3">
 <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>pemeriksaan/save">
<table border="0">


<tr>
        <td><h5>Pemegang Kendaraan</td></h5>
        <td><h5>:</td></h5>
        <td><h5>
        <input name="p_pemegang" class="form-control" style="text-transform:uppercase" placeholder="Nama Pemegang"  value="<?= set_value('pemegang_kendaraan') ?>">
    </tr>
<tr>
        <td><h5>Plat</td></h5>
        <td><h5>:</td></h5>
        <td><h5>
        <input name="p_plat" class="form-control" style="text-transform:uppercase" placeholder="Nomor Plat" value="<?= set_value('plat') ?>">
    </tr>
    <tr>
        <td><h5>Penggantian Suspansi</td></h5>
        <td><h5>:</td></h5>
        <td><h5>
       <select name="p_suspansi" class="form-control">
							<option value="">--Pilih--</option>
							<option>Perbaiki</option>
							<option>Ganti</option>
                            <option>Tidak</option>
						</select> </h5></td>
    </tr>
    <tr>
        <td> <h5>Penggantian Oli</td></h5>
        <td> <h5>:</td></h5>
        <td> <h5>
        <select name="p_oli" class="form-control">
							<option value="">--Pilih--</option>
							<option>Ganti</option>
                            <option>Tidak</option>
						</select></h5></td>
    </tr>
    <tr>
        <td><h5>Penggantian Rem</td></h5>
        <td><h5> :</td></h5>
        <td> <h5>
        <select name="p_rem" class="form-control">
							<option value="">--Pilih--</option>
							<option>Ganti</option>
                            <option>Tidak</option>
						</select></h5></td></td></h5>
    </tr>
   <tr>
        <td><h5>Penggantian Lampu</td></h5>
        <td><h5>:</td></h5>
        <td><h5>
        <select name="p_lampu" class="form-control">
							<option value="">--Pilih--</option>
							<option>Perbaiki</option>
							<option>Ganti</option>
                            <option>Tidak</option>
						</select></h5></td></td></h5>
    </tr>
    <tr>
        <td><h5>Pemeriksaan Kelayakan Ban</td></h5>
        <td><h5>:</td></h5>
        <td><h5>
        <select name="p_ban" class="form-control">
							<option value="">--Pilih--</option>
							<option>Perbaiki</option>
							<option>Ganti</option>
                            <option>Tidak</option>
						</select></h5></td></td></h5>
    </tr>
    <tr>
        <td><h5>Pemeriksaan Aki</td></h5>
        <td><h5> :</td></h5>
        <td><h5>
        <select name="p_aki" class="form-control">
							<option value="">--Pilih--</option>
							<option>Perbaiki</option>
							<option>Ganti</option>
                            <option>Tidak</option>
						</select></h5></td></td></h5>
    </tr>
    <tr>
        <td><h5>Pemeriksaan Radiator</td></h5>
        <td><h5> :</td></h5>
        <td><h5>
        <select name="p_radiator" class="form-control">
							<option value="">--Pilih--</option>
							<option>Perbaiki</option>
							<option>Ganti</option>
                            <option>Tidak</option>
						</select></h5></td></td></h5>
    </tr>
    <tr>
        <td><h5>Pemeriksaan Mesin</td></h5>
        <td><h5> :</td></h5>
        <td><h5>
        <select name="p_mesin" class="form-control">
							<option value="">--Pilih--</option>
							<option>Perbaiki</option>
							<option>Ganti</option>
                            <option>Tidak</option>
						</select></h5></td></td>
    </tr>

    <tr>
        <td><h5>Pemeriksaan Busi</td></h5>
        <td><h5> :</td></h5>
        <td><h5>
        <select name="p_busi" class="form-control">
							<option value="">--Pilih--</option>
							<option>Perbaiki</option>
							<option>Ganti</option>
                            <option>Tidak</option>
						</select></h5></td></td>
    </tr>

    <tr>
        <td><h5>Pemeriksaan Automatic Transmission Fluid</td></h5>
        <td><h5> :</td></h5>
        <td><h5>
        <select name="p_atf" class="form-control">
							<option value="">--Pilih--</option>
							<option>Perbaiki</option>
							<option>Ganti</option>
                            <option>Tidak</option>
						</select></h5></td></td>
    </tr>

    <tr>
        <td><h5>Pemeriksaan Filter Udara</td></h5>
        <td><h5> :</td></h5>
        <td><h5>
        <select name="p_filter" class="form-control">
							<option value="">--Pilih--</option>
							<option>Perbaiki</option>
							<option>Ganti</option>
                            <option>Tidak</option>
						</select></h5></td></td>
    </tr>

    <tr>
        <td><h5>Pemeriksaan Karet Wiper</td></h5>
        <td><h5> :</td></h5>
        <td><h5>
        <select name="p_karet" class="form-control">
							<option value="">--Pilih--</option>
							<option>Perbaiki</option>
							<option>Ganti</option>
                            <option>Tidak</option>
						</select></h5></td></td>
    </tr>

<td><h5>KM Terakhir</td></h5>
        <td><h5> :</td></h5>
        <td><h5><input name="km" class="form-control" style="text-transform:uppercase" placeholder="Km Terakhir"></td></h5>
    </tr>
<tr>

    <tr>
        <td><h5>Tanggal Perawatan</td></h5>
        <td><h5> :</td></h5>
        <td><h5><input type="date" name="tanggal" class="form-control" type="text" placeholder="tanggal"></td></h5>
    </tr>
	

	<tr>

    <tr>
        <td><h5>Bukti</td></h5>
        <td><h5> :</td></h5>
        <td><h5><input type="file" name="bukti" class="form-control" placeholder="bukti" required></td></h5>
    </tr>
    <tr>
	
	<td><h5>Keterangan</td></h5>
        <td><h5> :</td></h5>
        <td><h5><textarea name="ket" class="form-control" placeholder="Keterangan"></textarea>
    </tr>
<tr>
        
        
</table>

 <button type="submit" class="btn btn-primary" value="upload">Submit</button>
 </form>
 </div>
 </div>
 
 
 <!-- load jquery js file -->
 <script src="<?php echo
base_url('assets/js/jquery-min.js');?>"></script>
 <!-- load bootstrap js file -->
 <script src="<?php echo
base_url('assets/js/bootstrap.min.js');?>"></script>
<script src="./js/boostrap-datepicker.js"></script>
<script>
    $('#tgl').datepicker({
        format: 'yyy-mm-dd',
    });
    </script>
 </body>
</html>
