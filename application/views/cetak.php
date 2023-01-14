<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="utf-8">
 <title>Bukti Pemeriksaan</title>
 <!-- load bootstrap css file -->
 <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
 <link href="<?php echo base_url('assets/css/jquery.dataTables.min.css');?>" rel="stylesheet">
 <link href="<?php echo base_url('assets/css/datatables.min.css');?>" rel="stylesheet">
 </head>
 
 <style>
hr {background-color: blue;}

</style>
<body>
	 
	  
<hr size = "2">
<div class="container">

 <table border="0">


<tr>
        <td><h5>Pemegang Kendaraan</td></h5>
        <td><h5>:</td></h5>
        <td><?php echo $pemegang_kendaraan;?></td>
        
    </tr>
<tr>
        <td><h5>Plat</td></h5>
        <td><h5>:</td></h5>
        <td><?php echo $plat;?></td>
    </tr>
    <tr>
        <td><h5>Penggantian Suspansi</td></h5>
        <td><h5>:</td></h5>
        <td><?php echo $pemeriksaan_suspansi;?></td>
    </tr>
    <tr>
        <td> <h5>Penggantian Oli</td></h5>
        <td> <h5>:</td></h5>
        <td> <?php echo $pemeriksaan_oli;?></td>
    </tr>
    <tr>
        <td><h5>Penggantian Rem</td></h5>
        <td><h5> :</td></h5>
        <td> <?php echo $pemeriksaan_rem;?></td>
    </tr>
   <tr>
        <td><h5>Penggantian Lampu</td></h5>
        <td><h5>:</td></h5>
        <td><?php echo $pemeriksaan_lampu;?></td>
    </tr>
    <tr>
        <td><h5>Pemeriksaan Kelayakan Ban</td></h5>
        <td><h5>:</td></h5>
        <td><?php echo $pemeriksaan_kelayakan_ban;?></td>
    </tr>
    <tr>
        <td><h5>Pemeriksaan Aki</td></h5>
        <td><h5> :</td></h5>
        <td><?php echo $pemeriksaan_aki;?></td>
    </tr>
    <tr>
        <td><h5>Pemeriksaan Radiator</td></h5>
        <td><h5> :</td></h5>
        <td><?php echo $pemeriksaan_radiator;?></td>
    </tr>
    <tr>
        <td><h5>Pemeriksaan Mesin</td></h5>
        <td><h5> :</td></h5>
        <td><?php echo $pemeriksaan_mesin;?></td>
    </tr>

    <tr>
        <td><h5>Pemeriksaan Busi</td></h5>
        <td><h5> :</td></h5>
        <td>
        <?php echo $pemeriksaan_busi;?></td>
    </tr>

    <tr>
        <td><h5>Pemeriksaan Automatic Transmission Fluid</td></h5>
        <td><h5> :</td></h5>
        <td>
							<option value=""><?php echo $pemeriksaan_atf;?></td>
    </tr>

    <tr>
        <td><h5>Pemeriksaan Filter Udara</td></h5>
        <td><h5> :</td></h5>
        <td><h5>
      <?php echo $pemeriksaan_filter_udara;?>
						</h5></td>
    </tr>

    <tr>
        <td><h5>Pemeriksaan Karet Wiper</td></h5>
        <td><h5> :</td></h5>
        <td><h5><?php echo $pemeriksaan_karet_wiper;?>
       
						</h5></td>
    </tr>

<td><h5>KM Terakhir</td></h5>
        <td><h5> :</td></h5>
        <td><h5><?php echo $km_terakhir;?></td></h5>
    </tr>
<tr>

    <tr>
        <td><h5>Tanggal Perawatan</td></h5>
        <td><h5> :</td></h5>
        <td><?php echo $tanggal_perawatan;?></td>
    </tr>
	

	<tr>

    <tr>
        <td><h5>Bukti</td></h5>
        <td><h5> :</td></h5>
        <td><?php echo $bukti;?></td>
    </tr>
    <tr>
	
	<td><h5>Keterangan</td></h5>
        <td><h5> :</td></h5>
        <td><?php echo $keterangan;?></td>
    </tr>
<tr>
        
        
</table>
</div>

 <!-- load jquery js file -->
 <script src="<?php echo base_url('assets/js/jquery-min.js');?>"></script>
 <!-- load bootstrap js file -->
 <script src="<?php echo base_url('assets/js/jquery.dataTables.min.js');?>"></script>
 <script src="<?php echo base_url('assets/js/dataTables.bootstrap4.min.js');?>"></script>
 
 <script src="<?php echo base_url('assets/js/dataTables.buttons.min.js');?>"></script>

 <script src="<?php echo
base_url('assets/js/bootstrap.min.js');?>"></script>
 </body>
 <script>$(document).ready( function () {
    $('#tableaku').DataTable();
} );
</script>

<script>
		window.print();
	</script>
</html>
