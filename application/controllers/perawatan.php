<?php

defined('BASEPATH') or exit('No direct script access allowed');

class perawatan extends CI_Controller
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
			'title' => 'perawatan',
			'perawatan' => $this->m_perawatan->get_all_data(),
			'isi' => 'v_perawatan',
		);
		$this->load->view('layout/v_wrapper_backend', $data, FALSE);
	}


}

/* End of file perawatan.php */
