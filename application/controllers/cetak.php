<?php
class cetak extends CI_Controller{
 function __construct(){
 parent::__construct();
 $this->load->model('pemeriksaan_model');
 $this->load->model('m_kendaraan');
	
		$this->load->model('m_kategori');
 }
 function index(){
 $data['pemeriksaan'] = $this->pemeriksaan_model->get_pemeriksaan();
 $this->load->view('cetak',$data);
 
 
 }
	function add_new(){
	$this->load->view('add_pemeriksaan_view');
	}
	function save(){
	$pemeriksaan_suspansi = $this->input->post('p_suspansi');
	$pemeriksaan_oli = $this->input->post('p_oli');
	$pemeriksaan_rem = $this->input->post('p_rem');
	$pemeriksaan_lampu = $this->input->post('p_lampu');
	$pemeriksaan_kelayakan_ban = $this->input->post('p_ban');
	$pemeriksaan_aki = $this->input->post('p_aki');
	$pemeriksaan_radiator = $this->input->post('p_radiator');
	$pemeriksaan_mesin = $this->input->post('p_mesin');
	$pemeriksaan_busi = $this->input->post('p_busi');
	$pemeriksaan_atf = $this->input->post('p_atf');
	$pemeriksaan_filter_udara = $this->input->post('p_filter');
	$pemeriksaan_karet_wiper = $this->input->post('p_karet');
	$km_terakhir = $this->input->post('km');
	$tanggal_perawatan = $this->input->post('tanggal');
	$keterangan = $this->input->post('keterangan');
	$this->pemeriksaan_model->save($pemeriksaan_suspansi,$pemeriksaan_oli,$pemeriksaan_rem,$pemeriksaan_lampu,$pemeriksaan_kelayakan_ban,$pemeriksaan_aki,$pemeriksaan_radiator,$pemeriksaan_mesin,$pemeriksaan_busi,$pemeriksaan_atf,$pemeriksaan_filter_udara,$pemeriksaan_karet_wiper,$km_terakhir,$tanggal_perawatan,$keterangan);
	redirect('pemeriksaan');
	}
	function delete() {
		$id_perawatan = $this->uri->segment(3);
		$this->pemeriksaan_model->delete($id_perawatan);
		redirect('pemeriksaan');
	}
	
	function get_edit() {
		$id_perawatan = $this->uri->segment(3);
		$result = $this->pemeriksaan_model->get_id_perawatan($id_perawatan);
			if($result->num_rows() > 0){
			$i = $result->row_array();
				$data = array(
					'id_perawatan' => $i['id_perawatan'],
					'pemeriksaan_suspansi' => $i['pemeriksaan_suspansi'],
					'pemeriksaan_oli' => $i['pemeriksaan_oli'],
					'pemeriksaan_rem' => $i['pemeriksaan_rem'],
					'pemeriksaan_lampu' => $i['pemeriksaan_lampu'],
					'pemeriksaan_kelayakan_ban' => $i['pemeriksaan_kelayakan_ban'],
					'pemeriksaan_aki' => $i['pemeriksaan_aki'],
					'pemeriksaan_radiator' => $i['pemeriksaan_radiator'],
					'pemeriksaan_mesin' => $i['pemeriksaan_mesin'],
					'pemeriksaan_busi' => $i['pemeriksaan_busi'],
					'pemeriksaan_atf' => $i['pemeriksaan_atf'],
					'pemeriksaan_filter_udara' => $i['pemeriksaan_filter_udara'],
					'pemeriksaan_karet_wiper' => $i['pemeriksaan_karet_wiper'],
					'km_terakhir' => $i['km_terakhir'],
					'tanggal_perawatan' => $i['tanggal_perawatan'],
					'keterangan' => $i['keterangan'],
				);
				$this->load->view('edit_pemeriksaan_view',$data);
			}else{
				echo "data was not found";
			}
			
	}
	
	function update(){
	$id_perawatan = $this->input->post('id_perawatan');

	$pemeriksaan_suspansi = $this->input->post('p_suspansi');
	$pemeriksaan_oli = $this->input->post('p_oli');
	$pemeriksaan_rem = $this->input->post('p_rem');
	$pemeriksaan_lampu = $this->input->post('p_lampu');
	$pemeriksaan_kelayakan_ban = $this->input->post('p_ban');
	$pemeriksaan_aki = $this->input->post('p_aki');
	$pemeriksaan_radiator = $this->input->post('p_radiator');
	$pemeriksaan_mesin = $this->input->post('p_mesin');
	$pemeriksaan_busi = $this->input->post('p_busi');
	$pemeriksaan_atf = $this->input->post('p_atf');
	$pemeriksaan_filter_udara = $this->input->post('p_filter');
	$pemeriksaan_karet_wiper = $this->input->post('p_karet');
	$km_terakhir = $this->input->post('km');
	$tanggal_perawatan = $this->input->post('tanggal');
	$keterangan = $this->input->post('keterangan');
	$this->pemeriksaan_model->update($id_perawatan,$pemeriksaan_suspansi,$pemeriksaan_oli,$pemeriksaan_rem,$pemeriksaan_lampu,$pemeriksaan_kelayakan_ban,$pemeriksaan_aki,$pemeriksaan_radiator,$pemeriksaan_mesin,$pemeriksaan_busi,$pemeriksaan_atf,$pemeriksaan_filter_udara,$pemeriksaan_karet_wiper,$km_terakhir,$tanggal_perawatan,$keterangan);
	redirect('pemeriksaan');
		
	}
}