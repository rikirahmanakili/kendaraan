<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_home');
		 $this->load->model('pemeriksaan_model');
	}


	public function index()
	{
		$data = array(
			'title' => 'Home',
			'kendaraan' => $this->m_home->get_all_data(),
			'isi' => 'v_home',
		);
		$this->load->view('layout/v_wrapper_frontend', $data, FALSE);
	}

	public function kategori($id_kategori)
	{
		$kategori = $this->m_home->kategori($id_kategori);
		$data = array(
			'title' => 'Kategori kendaraan : ' . $kategori->nama_kategori,
			'kendaraan' => $this->m_home->get_all_data_kendaraan($id_kategori),
			'isi' => 'v_kategori_kendaraan',
		);
		$this->load->view('layout/v_wrapper_frontend', $data, FALSE);
	}

	public function detail_kendaraan($id_kendaraan)
	{
		$data = array(
			'title' => 'Detail kendaraan',
			'gambar' => $this->m_home->gambar_kendaraan($id_kendaraan),
			'kendaraan' => $this->m_home->detail_kendaraan($id_kendaraan),
			'isi' => 'v_detail_kendaraan',
		);
		$this->load->view('layout/v_wrapper_frontend', $data, FALSE);
	}
	
	public function pemeriksaan($id_kendaraan)
	{
		$data = array(
			'title' => 'pemeriksaan',
			'gambar' => $this->m_home->gambar_kendaraan($id_kendaraan),
			'kendaraan' => $this->m_home->detail_kendaraan($id_kendaraan),
			
			
			'isi' => 'pemeriksaan_view',
		);
		
		
		$this->load->view('layout/v_wrapper_frontend', $data, FALSE);
	}
}

/* End of file Home.php */
