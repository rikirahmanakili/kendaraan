<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="utf-8">
 <title>Edit pemeriksaan</title>
 <!-- load bootstrap css file -->
 <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
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
 <h1><center>Edit pemeriksaan</center></h1>
 <div class="col-md-6 offset-md-3">
 <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>pemeriksaan/update">
<table border="0">


<tr>
        <td><h5>Pemegang Kendaraan</td></h5>
        <td><h5>:</td></h5>
        <td><h5>
        <input name="p_pemegang" class="form-control" style="text-transform:uppercase" placeholder="Nama Pemegang"  value="<?php echo $pemegang_kendaraan;?>">
    </tr>
<tr>
        <td><h5>Plat</td></h5>
        <td><h5>:</td></h5>
        <td><h5>
        <input name="p_plat" class="form-control" style="text-transform:uppercase" placeholder="Nomor Plat" value="<?php echo $plat;?>">
    </tr>
    <tr>
        <td><h5>Penggantian Suspansi</td></h5>
        <td><h5>:</td></h5>
        <td><h5>
       <select name="p_suspansi" class="form-control">
							<option value="<?php echo $pemeriksaan_suspansi;?>"><?php echo $pemeriksaan_suspansi;?></option>
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
							<option value="<?php echo $pemeriksaan_oli;?>"><?php echo $pemeriksaan_oli;?></option>
							<option>Ganti</option>
                            <option>Tidak</option>
						</select></h5></td>
    </tr>
    <tr>
        <td><h5>Penggantian Rem</td></h5>
        <td><h5> :</td></h5>
        <td> <h5>
        <select name="p_rem" class="form-control">
							<option value="<?php echo $pemeriksaan_rem;?>"><?php echo $pemeriksaan_rem;?></option>
							<option>Ganti</option>
                            <option>Tidak</option>
						</select></h5></td></td></h5>
    </tr>
   <tr>
        <td><h5>Penggantian Lampu</td></h5>
        <td><h5>:</td></h5>
        <td><h5>
        <select name="p_lampu" class="form-control">
							<option value="<?php echo $pemeriksaan_lampu;?>"><?php echo $pemeriksaan_lampu;?></option>
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
							<option value="<?php echo $pemeriksaan_kelayakan_ban;?>"><?php echo $pemeriksaan_kelayakan_ban;?></option>
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
							<option value="<?php echo $pemeriksaan_aki;?>"><?php echo $pemeriksaan_aki;?></option>
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
							<option value="<?php echo $pemeriksaan_radiator;?>"><?php echo $pemeriksaan_radiator;?></option>
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
							<option value="<?php echo $pemeriksaan_mesin;?>"><?php echo $pemeriksaan_mesin;?></option>
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
							<option value="<?php echo $pemeriksaan_busi;?>"><?php echo $pemeriksaan_busi;?></option>
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
							<option value="<?php echo $pemeriksaan_atf;?>"><?php echo $pemeriksaan_atf;?></option>
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
							<option value="<?php echo $pemeriksaan_filter_udara;?>"><?php echo $pemeriksaan_filter_udara;?></option>
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
							<option value="<?php echo $pemeriksaan_karet_wiper;?>"><?php echo $pemeriksaan_karet_wiper;?></option>
							<option>Perbaiki</option>
							<option>Ganti</option>
                            <option>Tidak</option>
						</select></h5></td></td>
    </tr>

<td><h5>KM Terakhir</td></h5>
        <td><h5> :</td></h5>
        <td><h5><input type="text" class="form-control" style="text-transform:uppercase" name="km" value="<?php echo $km_terakhir;?>" placeholder="Km Terakhir"></td></h5>
    </tr>
<tr>

    <tr>
        <td><h5>Tanggal Perawatan</td></h5>
        <td><h5> :</td></h5>
        <td><h5><input type="date" name="tanggal" class="form-control" type="text" value="<?php echo $tanggal_perawatan;?>" placeholder="tanggal"></td></h5>
    </tr>
	

	<tr>

    <tr>
        <td><h5>Bukti</td></h5>
        <td><h5> :</td></h5>
        <td><h5><input type="file" name="bukti" class="form-control" value="<?php echo $bukti;?>" placeholder="bukti" required></td></h5>
    </tr>
    <tr>
	
	<td><h5>Keterangan</td></h5>
        <td><h5> :</td></h5>
        <td><h5><textarea name="ket"  value="<?php echo $keterangan;?>" class="form-control" placeholder="Keterangan"><?php echo $keterangan;?></textarea>
    </tr>
<tr>
        
        
</table>

 <input type="hidden" name="id_perawatan" value="<?php echo $id_perawatan?>">
 <button type="submit" class="btn btn-primary">Update</button>
 </form>
 </div>
 </div>
 
 
 
 <!-- load jquery js file -->
 <script src="<?php echo
base_url('assets/js/jquery-min.js');?>"></script>
 <!-- load bootstrap js file -->
 <script src="<?php echo
base_url('assets/js/bootstrap.min.js');?>"></script>
 </body>
</html>
