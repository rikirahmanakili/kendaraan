<!DOCTYPE html>


<html lang="en">
 <head>
 <meta charset="utf-8">
 <title>pemeriksaan List</title>
 <!-- load bootstrap css file -->
 <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
 <link href="<?php echo base_url('assets/css/jquery.dataTables.min.css');?>" rel="stylesheet">
 <link href="<?php echo base_url('assets/css/datatables.min.css');?>" rel="stylesheet">
 </head>
 <style>

   
body {background-color: azure;
  background-image: url(<?php echo base_url("assets/mist.jpg");?>);
    background-repeat : no-repeat ;
	background-size : cover}

h1   {color: red;}
p    {color: red;}


th, td {
  padding: 15px;
  text-align: center;
  
}

.table-container {
	overflow: auto;
}


</style>


<body>
	  
	  

<div class="container">

								
<div style="margin-top: 20px;" align="left" >
 <a href="<?php echo site_url('home/');?>" button type="submit" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
</svg></a>
 </div>								
<div style="margin-top: 20px;" align="center" >
 <a href="<?php echo site_url('pemeriksaan/add_new/');?>" button type="submit" class="btn btn-primary">Tambah Data</a>
 </div>
 <div class="table-container">
 <table id="tableaku" class="table table-hover" >
 <thead>
	<tr style="align:center" class="bg-primary">
		<th >No</th>
<th>Pemegang</th>
<th>Plat</th>
<th> Suspansi</th>
<th> Oli</th>
<th> Rem</th>
<th> Lampu</th>
<th class="text-center"> Kelayakan Ban</th>
<th> Aki</th>
<th> Radiator</th>
<th> Mesin</th>
<th>Busi</th>
<th>Atf</th>
<th>Filter</th>
<th>Karet</th>
<th class="text-center">Km Terakhir</th>
<th class="text-center">Tanggal Perawatan</th>
<th> Bukti</th>
<th class="text-center">Keterangan</th>
<th width="200" class="text-center">Action</th>
	</tr>
  </thead>
  <tbody>

					
 <?php
 $count = 0;
 foreach ($pemeriksaan->result() as $row) :
 $count++;
 ?>
 <tr>
 <th scope="row"><?php echo $count;?></th>
 <td style="text-transform:uppercase"><?php echo $row->pemegang_kendaraan;?></td>
 <td style="text-transform:uppercase"><?php echo $row->plat?></td>
 <td><?php echo $row->pemeriksaan_suspansi;?></td>
 <td><?php echo $row->pemeriksaan_oli;?></td>
  <td><?php echo $row->pemeriksaan_rem;?></td>
 <td><?php echo $row->pemeriksaan_lampu;?></td>
  <td><?php echo $row->pemeriksaan_kelayakan_ban;?></td>
  <td><?php echo $row->pemeriksaan_aki;?></td>
 <td><?php echo $row->pemeriksaan_radiator;?></td>
  <td><?php echo $row->pemeriksaan_mesin;?></td>
  <td><?php echo $row->pemeriksaan_busi;?></td>
  <td><?php echo $row->pemeriksaan_atf;?></td>
  <td><?php echo $row->pemeriksaan_filter_udara;?></td>
  <td><?php echo $row->pemeriksaan_karet_wiper;?></td>
 <td style="text-transform:uppercase"><?php echo $row->km_terakhir;?></td>
  <td><?php echo $row->tanggal_perawatan;?></td>
  <td><a href="<?php echo base_url('gambar/' . $row->bukti) ?>" bukti>View</a></td>
  <td><?php echo $row->keterangan;?></td>
 <td> <a href="<?php echo site_url('pemeriksaan/get_edit/'.$row->id_perawatan);?>" class="btn btn-primary">Update</a>
 <a href="<?php echo site_url('pemeriksaan/delete/'.$row->id_perawatan);?>" class="btn btn-danger">Delete</a>
 <a href="<?php echo base_url('pemeriksaan/cetak/'.$row->id_perawatan);?>" class="btn btn-sm btn-warning">
 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
  <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
  <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
</svg>
</td>
 </tr>
 
 <?php endforeach;?>
 </tbody>
 </table>
 </div>
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
</html>
