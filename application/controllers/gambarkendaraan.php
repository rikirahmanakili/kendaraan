<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Gambarkendaraan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_gambarkendaraan');
		$this->load->model('m_kendaraan');
	}


	public function index()
	{
		$data = array(
			'title' => 'Gambar kendaraan',
			'gambarkendaraan' => $this->m_gambarkendaraan->get_all_data(),
			'isi' => 'gambarkendaraan/v_index',
		);
		$this->load->view('layout/v_wrapper_backend', $data, FALSE);
	}

	public function add($id_kendaraan)
	{
		$this->form_validation->set_rules('ket', 'Ket Gambar', 'required', array(
			'required' => '%s harus Diisi !!!'
		));

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = './assets/gambarkendaraan/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|ico';
			$config['max_size']     = '2000';
			$this->upload->initialize($config);
			$field_name = "gambar";
			if (!$this->upload->do_upload($field_name)) {
				$data = array(
					'title' => 'Add Gambar kendaraan',
					'error_upload' => $this->upload->display_errors(),
					'kendaraan'  => $this->m_kendaraan->get_data($id_kendaraan),
					'gambar' => $this->m_gambarkendaraan->get_gambar($id_kendaraan),
					'isi' => 'gambarkendaraan/v_add',
				);
				$this->load->view('layout/v_wrapper_backend', $data, FALSE);
			} else {
				$upload_data	= array('uploads' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/gambarkendaraan/' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);
				$data = array(
					'id_kendaraan' => $id_kendaraan,
					'ket' => $this->input->post('ket'),
					'gambar'	=> $upload_data['uploads']['file_name'],
				);
				$this->m_gambarkendaraan->add($data);
				$this->session->set_flashdata('pesan', 'Gambar Berhasil Ditambahkan !!!');
				redirect('gambarkendaraan/add/' . $id_kendaraan);
			}
		}

		$data = array(
			'title' => 'Add Gambar kendaraan',
			'kendaraan'  => $this->m_kendaraan->get_data($id_kendaraan),
			'gambar' => $this->m_gambarkendaraan->get_gambar($id_kendaraan),
			'isi' => 'gambarkendaraan/v_add',
		);
		$this->load->view('layout/v_wrapper_backend', $data, FALSE);
	}

	//Delete one item
	public function delete($id_kendaraan, $id_gambar)
	{
		//hapus gambar
		$gambar = $this->m_gambarkendaraan->get_data($id_gambar);
		if ($gambar->gambar != "") {
			unlink('./assets/gambarkendaraan/' . $gambar->gambar);
		}
		//end hapus gambar
		$data = array('id_gambar' => $id_gambar);
		$this->m_gambarkendaraan->delete($data);
		$this->session->set_flashdata('pesan', 'Gambar Berhasil Dihapus !!!');
		redirect('gambarkendaraan/add/' . $id_kendaraan);
	}
}
