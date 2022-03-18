<?php

class M_pengguna extends CI_model
{
	public function get_data_user()
	{
        $this->db->from('tabel_user');
        // $this->db->join('tabel_result_cbr', 'tabel_result_cbr.id_user = tabel_user.id_user', 'left');
        // $this->db->where('tabel_pengetahuan.id_penyakit', $id_pengetahauan);
        // $this->db->order_by('tabel_user.id_user');
        $query = $this->db->get();
        return $query->result_array();
	}

        public function delete_pengguna($id)
	{
		return $this->db->delete("tabel_user", array("id_user" => $id));
	}
	
        // Function Untuk Mencari Nilai CBR Rawan
	public function get_data_cbr_rawan($id_user)
	{
		// sum jumlah nilai cf dgn user
		$this->db->select('SUM(a.nilai_cf) as nilaicf, SUM(a.nilai_user) as nilaiuser');
		$this->db->from('tabel_result_cbr a');
		$this->db->join('tabel_pengetahuan b', 'a.id_pengetahuan = b.id_pengetahuan');
		$this->db->where('b.id_penyakit', 1);
		$this->db->where('a.id_user', $id_user);
		$query = $this->db->get();
		return $query->result();
	}

	// Function Untuk Mencari Nilai CBR Aman
	public function get_data_cbr_aman($id_user)
	{
		$this->db->select('SUM(a.nilai_cf) as nilaicf, SUM(a.nilai_user) as nilaiuser');
		$this->db->from('tabel_result_cbr a');
		$this->db->join('tabel_pengetahuan b', 'a.id_pengetahuan = b.id_pengetahuan');
		$this->db->where('b.id_penyakit', 3);
		$this->db->where('a.id_user', $id_user);
		$query = $this->db->get();
		return $query->result();
	}

	// Function Untuk Mencari Nilai CBR Keseluruhan / Total tanpa kondisi
	public function get_data_cbr_total($id_user)
	{
		$this->db->select('SUM(a.nilai_cf) as nilaicf, SUM(a.nilai_user) as nilaiuser');
		$this->db->from('tabel_result_cbr a');
		$this->db->join('tabel_pengetahuan b', 'a.id_pengetahuan = b.id_pengetahuan');
		$this->db->where('a.id_user', $id_user);
		$query = $this->db->get();
		return $query->result();
	}

        public function getbyId_data_user($id_user)
	{
		$this->db->select('*');
		$this->db->from('tabel_user');
		// $this->db->join('tabel_pengetahuan b', 'a.id_pengetahuan = b.id_pengetahuan');
		$this->db->where('id_user', $id_user);
		$query = $this->db->get();
		return $query->result();
	}

}