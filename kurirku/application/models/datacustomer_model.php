<?php

class Datacustomer_model extends CI_Model
{

	public function tampil_data($table)
	{
		return $this->db->get($table);
	}


	public function ambil_id_datacustomer($id)
	{
		$hasil = $this->db->where('id', $id)->get('tb_data');
		if ($hasil->num_rows() > 0) {
			return $hasil->result();
		} else {
			return false;
		}
	}

	public function insert_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function update_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function perbarui_datacustomer($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}
