<?php

defined('BASEPATH') or exit('No direct script access allowed');

class kendaraan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_kendaraan');
		$this->load->model('m_perawatan');
		$this->load->model('m_kategori');
	}

	// List all your items
	public function index()
	{
		$data = array(
			'title' => 'kendaraan',
			'kendaraan' => $this->m_kendaraan->get_all_data(),
			'isi' => 'kendaraan/v_kendaraan',
		);
		$this->load->view('layout/v_wrapper_backend', $data, FALSE);
	}

	// Add a new item
	public function add()
	{
		$this->form_validation->set_rules('pemegang_kendaraan', 'Nama kendaraan', 'required', array(
			'required' => '%s harus Diisi !!!'
		));
		$this->form_validation->set_rules('id_kategori', 'Kategori', 'required', array(
			'required' => '%s harus Diisi !!!'
		));
		$this->form_validation->set_rules('merk', 'merk', 'required', array(
			'required' => '%s harus Diisi !!!'
		));
		$this->form_validation->set_rules('plat', 'plat', 'required', array(
			'required' => '%s harus Diisi !!!'
		));
		
		$this->form_validation->set_rules('plat', 'plat', 'required', array(
			'required' => '%s harus Diisi !!!'
		));
		
		$this->form_validation->set_rules('daya_listrik', 'daya_listrik', 'required', array(
			'required' => '%s harus Diisi !!!'
		));
		$this->form_validation->set_rules('nomor_rangka', 'nomor_rangka', 'required', array(
			'required' => '%s harus Diisi !!!'
		));
		$this->form_validation->set_rules('nomor_mesin', 'nomor_mesin', 'required', array(
			'required' => '%s harus Diisi !!!'
		));
		$this->form_validation->set_rules('warna', 'warna', 'required', array(
			'required' => '%s harus Diisi !!!'
		));	
		$this->form_validation->set_rules('nomor_bpkb', 'nomor_bpkb', 'required', array(
			'required' => '%s harus Diisi !!!'
		));	
		
		$this->form_validation->set_rules('tahun_pembuatan', 'tahun_pembuatan', 'required', array(
			'required' => '%s harus Diisi !!!'
		));
		$this->form_validation->set_rules('perpanjangan', 'perpanjangan', 'required', array(
			'required' => '%s harus Diisi !!!'
		));


		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = './assets/gambar/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|ico|jfif';
			$config['max_size']     = '200000';
			$this->upload->initialize($config);
			$field_name = "gambar";
			if (!$this->upload->do_upload($field_name)) {
				$data = array(
					'title' => 'Add kendaraan',
					'kategori' => $this->m_kategori->get_all_data(),
					'error_upload' => $this->upload->display_errors(),
					'isi' => 'kendaraan/v_add',
				);
				$this->load->view('layout/v_wrapper_backend', $data, FALSE);
			} else {
				$upload_data	= array('uploads' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/gambar/' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);
				$data = array(
					'pemegang_kendaraan' => $this->input->post('pemegang_kendaraan'),
					'id_kategori' => $this->input->post('id_kategori'),
					'merk' => $this->input->post('merk'),
					'plat' => $this->input->post('plat'),
					'daya_listrik' => $this->input->post('daya_listrik'),
					'nomor_rangka' => $this->input->post('nomor_rangka'),
					'nomor_mesin' => $this->input->post('nomor_mesin'),
					'warna' => $this->input->post('warna'),
					'nomor_bpkb' => $this->input->post('nomor_bpkb'),
					'tahun_pembuatan' => $this->input->post('tahun_pembuatan'),
					'perpanjangan' => $this->input->post('perpanjangan'),
					'gambar'	=> $upload_data['uploads']['file_name'],
				);
				$this->m_kendaraan->add($data);
				$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan !!!');
				redirect('kendaraan');
			}
		}

		$data = array(
			'title' => 'Add kendaraan',
			'kategori' => $this->m_kategori->get_all_data(),
			'isi' => 'kendaraan/v_add',
		);
		$this->load->view('layout/v_wrapper_backend', $data, FALSE);
	}

	//Update one item
	public function edit($id_kendaraan = NULL)
	{
		$this->form_validation->set_rules('pemegang_kendaraan', 'Nama kendaraan', 'required', array(
			'required' => '%s harus Diisi !!!'
		));
		$this->form_validation->set_rules('id_kategori', 'Kategori', 'required', array(
			'required' => '%s harus Diisi !!!'
		));
		$this->form_validation->set_rules('merk', 'merk', 'required', array(
			'required' => '%s harus Diisi !!!'
		));
		
		$this->form_validation->set_rules('plat', 'plat', 'required', array(
			'required' => '%s harus Diisi !!!'
		));
		$this->form_validation->set_rules('daya_listrik', 'daya_listrik', 'required', array(
			'required' => '%s harus Diisi !!!'
		));
		$this->form_validation->set_rules('nomor_rangka', 'nomor_rangka', 'required', array(
			'required' => '%s harus Diisi !!!'
		));
		$this->form_validation->set_rules('nomor_mesin', 'nomor_mesin', 'required', array(
			'required' => '%s harus Diisi !!!'
		));
		$this->form_validation->set_rules('warna', 'warna', 'required', array(
			'required' => '%s harus Diisi !!!'
		));	
		$this->form_validation->set_rules('nomor_bpkb', 'nomor_bpkb', 'required', array(
			'required' => '%s harus Diisi !!!'
		));	
		$this->form_validation->set_rules('tahun_pembuatan', 'tahun_pembuatan', 'required', array(
			'required' => '%s harus Diisi !!!'
		));
		$this->form_validation->set_rules('perpanjangan', 'perpanjangan', 'required', array(
			'required' => '%s harus Diisi !!!'
		));


		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = './assets/gambar/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|ico|jfif';
			$config['max_size']     = '200000';
			$this->upload->initialize($config);
			$field_name = "gambar";
			if (!$this->upload->do_upload($field_name)) {
				$data = array(
					'title' => 'Edit kendaraan',
					'kategori' => $this->m_kategori->get_all_data(),
					'kendaraan'  => $this->m_kendaraan->get_data($id_kendaraan),
					'error_upload' => $this->upload->display_errors(),
					'isi' => 'kendaraan/v_edit',
				);
				$this->load->view('layout/v_wrapper_backend', $data, FALSE);
			} else {
				//hapus gambar
				$kendaraan = $this->m_kendaraan->get_data($id_kendaraan);
				if ($kendaraan->gambar != "") {
					unlink('./assets/gambar/' . $kendaraan->gambar);
				}
				//end hapus gambar
				$upload_data	= array('uploads' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/gambar/' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);
				$data = array(
					'id_kendaraan'	  => $id_kendaraan,
					'pemegang_kendaraan' => $this->input->post('pemegang_kendaraan'),
					'id_kategori' => $this->input->post('id_kategori'),
					'merk' => $this->input->post('merk'),
					'plat' => $this->input->post('plat'),
					'daya_listrik' => $this->input->post('daya_listrik'),
					'nomor_rangka' => $this->input->post('nomor_rangka'),
					'nomor_mesin' => $this->input->post('nomor_mesin'),
					'warna' => $this->input->post('warna'),
					'nomor_bpkb' => $this->input->post('nomor_bpkb'),
					'tahun_pembuatan' => $this->input->post('tahun_pembuatan'),
					'perpanjangan' => $this->input->post('perpanjangan'),
					'gambar'	=> $upload_data['uploads']['file_name'],
				);
				$this->m_kendaraan->edit($data);
				$this->session->set_flashdata('pesan', 'Data Berhasil Diganti !!!');
				redirect('kendaraan');
			}
			//jika tanpa ganti gambar
			$data = array(
				'id_kendaraan'	  => $id_kendaraan,
				'pemegang_kendaraan' => $this->input->post('pemegang_kendaraan'),
				'id_kategori' => $this->input->post('id_kategori'),
				'merk' => $this->input->post('merk'),
				'plat' => $this->input->post('plat'),
				'daya_listrik' => $this->input->post('daya_listrik'),
				'nomor_rangka' => $this->input->post('nomor_rangka'),
				'nomor_mesin' => $this->input->post('nomor_mesin'),
				'warna' => $this->input->post('warna'),
				'nomor_bpkb' => $this->input->post('nomor_bpkb'),
				'tahun_pembuatan' => $this->input->post('tahun_pembuatan'),
				'perpanjangan' => $this->input->post('perpanjangan'),
			);
			$this->m_kendaraan->edit($data);
			$this->session->set_flashdata('pesan', 'Data Berhasil Diganti !!!');
			redirect('kendaraan');
		}

		$data = array(
			'title' => 'Edit kendaraan',
			'kategori' => $this->m_kategori->get_all_data(),
			'kendaraan'  => $this->m_kendaraan->get_data($id_kendaraan),
			'isi' => 'kendaraan/v_edit',
		);
		$this->load->view('layout/v_wrapper_backend', $data, FALSE);
	}

	//Delete one item
	public function delete($id_kendaraan = NULL)
	{
		//hapus gambar
		$kendaraan = $this->m_kendaraan->get_data($id_kendaraan);
		if ($kendaraan->gambar != "") {
			unlink('./assets/gambar/' . $kendaraan->gambar);
		}
		//end hapus gambar
		$data = array('id_kendaraan' => $id_kendaraan);
		$this->m_kendaraan->delete($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Dihapus !!!');
		redirect('kendaraan');
	}
}

/* End of file kendaraan.php */
