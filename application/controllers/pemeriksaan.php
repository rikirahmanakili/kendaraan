<?php
class pemeriksaan extends CI_Controller{
 function __construct(){
 parent::__construct();
 $this->load->model('pemeriksaan_model');

 }
 function index(){
 $data['pemeriksaan'] = $this->pemeriksaan_model->get_pemeriksaan();
 $this->load->view('pemeriksaan_view',$data);

 
 
 
 }
	function add_new(){
	$this->load->view('add_pemeriksaan_view');
	}
	function save()
	{

		$config['upload_path']          = './gambar/';
                $config['allowed_types']        = 'gif|jpg|png|pdf|';
                $config['max_size']             = 10000000;
        
		$this->upload->initialize($config);

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('bukti'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('add_pemeriksaan_view', $error);
                }
                else
                {
                        $data['bukti'] = $this->upload->data("file_name");
						$data['pemegang_kendaraan'] = $this->input->post('p_pemegang');
						$data['plat'] = $this->input->post('p_plat');
						$data['pemeriksaan_suspansi'] = $this->input->post('p_suspansi');
						$data['pemeriksaan_oli'] = $this->input->post('p_oli');
						$data['pemeriksaan_rem'] = $this->input->post('p_rem');
						$data['pemeriksaan_lampu'] = $this->input->post('p_lampu');
						$data['pemeriksaan_kelayakan_ban'] = $this->input->post('p_ban');
						$data['pemeriksaan_aki'] = $this->input->post('p_aki');
						$data['pemeriksaan_radiator'] = $this->input->post('p_radiator');
						$data['pemeriksaan_mesin'] = $this->input->post('p_mesin');
						$data['pemeriksaan_busi'] = $this->input->post('p_busi');
						$data['pemeriksaan_atf'] = $this->input->post('p_atf');
						$data['pemeriksaan_filter_udara'] = $this->input->post('p_filter');
						$data['pemeriksaan_karet_wiper'] = $this->input->post('p_karet');
						$data['km_terakhir'] = $this->input->post('km');
						$data['tanggal_perawatan'] = $this->input->post('tanggal');
						$data['keterangan'] = $this->input->post('ket');
			
			$this->db->insert('tbl_perawatan',$data);
			redirect('pemeriksaan');
                }





	
	}
	
	
	 public function do_upload()
        {
                $config['upload_path']          = './gambar/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 10000000;
        

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('bukti'))
                {
                        $error = array('error' => $this->upload->display_errors());

                         $this->load->view('pemeriksaan_view',$error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                         $this->load->view('pemeriksaan_view',$data);
                }
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
					'pemegang_kendaraan' => $i['pemegang_kendaraan'],
					'plat' => $i['plat'],
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
					'bukti' => $i['bukti'],
					'keterangan' => $i['keterangan']
				);
				$this->load->view('edit_pemeriksaan_view',$data);
			}else{
				echo "data was not found";
			}
			
	}
	
	function update(){
		
				$config['upload_path']          = './gambar/';
                $config['allowed_types']        = 'gif|jpg|png|pdf|';
                $config['max_size']             = 10000000;
        

                $this->load->library('upload', $config);

				$this->upload->initialize($config);

                if ( ! $this->upload->do_upload('bukti'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('edit_pemeriksaan_view', $error);
                }
                else
                {
	$id_perawatan = $this->input->post('id_perawatan');
	$pemegang_kendaraan = $this->input->post('p_pemegang');
	$plat = $this->input->post('p_plat');
	
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
	$bukti = $this->upload->data("file_name");
	$keterangan = $this->input->post('ket');
	$this->pemeriksaan_model->update($id_perawatan,$pemegang_kendaraan,$plat,$pemeriksaan_suspansi,$pemeriksaan_oli,$pemeriksaan_rem,$pemeriksaan_lampu,$pemeriksaan_kelayakan_ban,$pemeriksaan_aki,$pemeriksaan_radiator,$pemeriksaan_mesin,$pemeriksaan_busi,$pemeriksaan_atf,$pemeriksaan_filter_udara,$pemeriksaan_karet_wiper,$km_terakhir,$tanggal_perawatan,$bukti,$keterangan);
	redirect('pemeriksaan');
		
		
				}
	}
	
	function cetak() {
		$id_perawatan = $this->uri->segment(3);
		$result = $this->pemeriksaan_model->get_id_perawatan($id_perawatan);
			if($result->num_rows() > 0){
			$i = $result->row_array();
				$data = array(
					'id_perawatan' => $i['id_perawatan'],
					'pemegang_kendaraan' => $i['pemegang_kendaraan'],
					'plat' => $i['plat'],
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
					'bukti' => $i['bukti'],
					'keterangan' => $i['keterangan']
				);
				$this->load->view('cetak',$data);
			}else{
				echo "data was not found";
			}
			
	}
	
	
}