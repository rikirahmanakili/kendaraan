<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_perawatan extends CI_Model
{
	public function get_all_data()
	{
		$this->db->select('*');
		$this->db->from('tbl_perawatan');
		$this->db->join('tbl_perawatan', 'tbl_perawatan.id_kendaraan = tbl_kendaraan.id_kendaraan', 'left');
		$this->db->group_by('tbl_kendaraan.id_kendaraan');
		$this->db->order_by('tbl_kendaraan.id_kendaraan', 'desc');
		return $this->db->get()->result();
	}

	public function get_data($id_perawatan)
	{
		$this->db->select('*');
		$this->db->from('tbl_perawatan');
		$this->db->where('id_perawatan', $id_perawatan);
		return $this->db->get()->row();
	}
	



}
