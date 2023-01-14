<?php
class pemeriksaan_model extends CI_Model{
 function get_pemeriksaan(){
 $result = $this->db->get('tbl_perawatan');

 return $result;
 }
  function save($pemeriksaan_suspansi,$pemeriksaan_oli,$pemeriksaan_rem,$pemeriksaan_lampu,$pemeriksaan_kelayakan_ban,$pemeriksaan_aki,$pemeriksaan_radiator,$pemeriksaan_mesin,$pemeriksaan_busi,$pemeriksaan_atf,$pemeriksaan_filter_udara,$pemeriksaan_karet_wiper,$km_terakhir,$tanggal_perawatan,$bukti,$keterangan){
	$data = array(
	'pemeriksaan_suspansi' => $pemeriksaan_suspansi,
	'pemeriksaan_oli' => $pemeriksaan_oli,
	'pemeriksaan_rem' => $pemeriksaan_rem,
	'pemeriksaan_lampu' => $pemeriksaan_lampu,
	'pemeriksaan_kelayakan_ban' => $pemeriksaan_kelayakan_ban,
	'pemeriksaan_aki' => $pemeriksaan_aki,
	'pemeriksaan_radiator' => $pemeriksaan_radiator,
	'pemeriksaan_mesin' => $pemeriksaan_mesin,
	'pemeriksaan_busi' => $pemeriksaan_busi,
	'pemeriksaan_atf' => $pemeriksaan_atf,
	'pemeriksaan_filter_udara' => $pemeriksaan_filter_udara,
	'pemeriksaan_karet_wiper' => $pemeriksaan_karet,
	'km_terakhir' => $km_terakhir,
	'tanggal_perawatan' => $tanggal_perawatan,
	'bukti' => $bukti,
	'keterangan' => $keterangan
	);
	$this->db->insert('tbl_perawatan',$data);
  }
  function delete($id_perawatan){
	  $this->db->where('id_perawatan', $id_perawatan);
	  $this->db->delete('tbl_perawatan');
	  
  }
  function get_id_perawatan($id_perawatan){
  $query = $this->db->get_where('tbl_perawatan', array('id_perawatan' => $id_perawatan));
	  return $query;
  }
  
  function update($id_perawatan,$pemegang_kendaraan,$plat,$pemeriksaan_suspansi,$pemeriksaan_oli,$pemeriksaan_rem,$pemeriksaan_lampu,$pemeriksaan_kelayakan_ban,$pemeriksaan_aki,$pemeriksaan_radiator,$pemeriksaan_mesin,$pemeriksaan_busi,$pemeriksaan_atf,$pemeriksaan_filter_udara,$pemeriksaan_karet_wiper,$km_terakhir,$tanggal_perawatan,$bukti,$keterangan){
	  $data = array(
	'pemegang_kendaraan' => $pemegang_kendaraan,
	'plat' => $plat,	  
	  
	'pemeriksaan_suspansi' => $pemeriksaan_suspansi,
	'pemeriksaan_oli' => $pemeriksaan_oli,
	'pemeriksaan_rem' => $pemeriksaan_rem,
	'pemeriksaan_lampu' => $pemeriksaan_lampu,
	'pemeriksaan_kelayakan_ban' => $pemeriksaan_kelayakan_ban,
	
	'pemeriksaan_aki' => $pemeriksaan_aki,
	'pemeriksaan_radiator' => $pemeriksaan_radiator,
	'pemeriksaan_mesin' => $pemeriksaan_mesin,
	
	'pemeriksaan_busi' => $pemeriksaan_busi,
	'pemeriksaan_atf' => $pemeriksaan_atf,
	'pemeriksaan_filter_udara' => $pemeriksaan_filter_udara,
	'pemeriksaan_karet_wiper' => $pemeriksaan_karet_wiper,
	'km_terakhir' => $km_terakhir,
	'tanggal_perawatan' => $tanggal_perawatan,
	'bukti' => $bukti,
	'keterangan' => $keterangan,
	  );
	  $this->db->where('id_perawatan', $id_perawatan);
	  $this->db->update('tbl_perawatan', $data);
  }
  
  
}
