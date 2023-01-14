<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_kendaraan extends CI_Model
{
	public function get_all_data()
	{
		$this->db->select('*');
		$this->db->from('tbl_kendaraan');
		$this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_kendaraan.id_kategori', 'left');
		$this->db->order_by('tbl_kendaraan.id_kendaraan', 'desc');
		return $this->db->get()->result();
	}

	public function get_data($id_kendaraan)
	{
		$this->db->select('*');
		$this->db->from('tbl_kendaraan');
		$this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_kendaraan.id_kategori', 'left');
		$this->db->where('id_kendaraan', $id_kendaraan);
		return $this->db->get()->row();
	}

	public function add($data)
	{
		$this->db->insert('tbl_kendaraan', $data);
	}

	public function edit($data)
	{
		$this->db->where('id_kendaraan', $data['id_kendaraan']);
		$this->db->update('tbl_kendaraan', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_kendaraan', $data['id_kendaraan']);
		$this->db->delete('tbl_kendaraan', $data);
	}
}
