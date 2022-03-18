<?php

class M_frondend extends CI_model
{
	public function simpan_biodata()
	{
		$post = $this->input->post();
		$data = [
			"id_user" => $post["id_user"],
			"nama_balita" => $post["nama_balita"],
			"usia_balita" => $post["usia_balita"],
			"jk_balita" => $post["jk_balita"],
			"alamat_orangtua" => $post["alamat_orangtua"],
			"nama_ibu" => $post["nama_ibu"],
			"nama_ayah" => $post["nama_ayah"],
			"no_hp_orangtua" => $post["no_hp_orangtua"],
		];

		return $this->db->insert("tabel_user", $data);
	}

	// Get data penyakit rawan
	public function get_data_kuisoner()
	{
		$this->db->select('*');
		$this->db->from('tabel_pengetahuan a');
		$this->db->join('tabel_faktor b', 'a.id_faktor = b.id_faktor');
		$this->db->where('a.id_penyakit', 1);
		$query = $this->db->get();
		return $query->result_array();
	}

	// Get data penyakit aman
	public function get_data_kuisoner2()
	{
		$this->db->select('*');
		$this->db->from('tabel_pengetahuan a');
		$this->db->join('tabel_faktor b', 'a.id_faktor = b.id_faktor');
		$this->db->where('a.id_penyakit', 3);
		$query = $this->db->get();
		return $query->result_array();
	}

	function get_no_user()
	{
		$q = $this->db->query("SELECT MAX(RIGHT(id_user,4)) AS kd_max FROM tabel_user");
		$kd = "";
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $k) {
				$tmp = ((int) $k->kd_max) + 1;
				$kd = sprintf("%04s", $tmp);
			}
		} else {
			$kd = "0001";
		}
		date_default_timezone_set('Asia/Jakarta');
		return "USR" . $kd;
	}

    // Function Untuk Menyimpan Data CBR Ke Tabel Result CBR 
	public function save_batch($data2)
	{
		return $this->db->insert_batch('tabel_result_cbr', $data2);
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

	// Function Untuk Mencari Data CBR Keseluruhan / Total tanpa kondisi
	public function get_data_cbr_all($id_user)
	{
		$this->db->select('*');
		$this->db->from('tabel_result_cbr a');
		$this->db->join('tabel_pengetahuan b', 'a.id_pengetahuan = b.id_pengetahuan');
		$this->db->join('tabel_faktor c', 'b.id_faktor = c.id_faktor');
		$this->db->where('a.id_user', $id_user);
		$query = $this->db->get();
		return $query->result();
	}

	// Function Untuk Mencari Nilai CBR Baik itu aman maupun rawan yang dikirim ke hlm contoh 2
	public function get_data_cbr($id_penyakit, $id_user)
	{
		$this->db->select('SUM(a.nilai_cf) as nilaicf, SUM(a.nilai_user) as nilaiuser');
		$this->db->from('tabel_result_cbr a');
		$this->db->join('tabel_pengetahuan b', 'a.id_pengetahuan = b.id_pengetahuan');
		$this->db->where('b.id_penyakit', $id_penyakit);
		$this->db->where('a.id_user', $id_user);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_data_cf($id_penyakit, $id_user)
	{
		$this->db->select('(a.nilai_cf*nilai_user) as total');
		$this->db->from('tabel_result_cbr a');
		$this->db->join('tabel_pengetahuan b', 'a.id_pengetahuan = b.id_pengetahuan');
		//$this->db->join('tabel_faktor c', 'b.id_faktor = c.id_faktor');
		$this->db->where('b.id_penyakit', $id_penyakit);
		$this->db->where('a.id_user', $id_user);
		$query = $this->db->get();
		return $query->result_array();
	}

	//untuk menampilkan semua faktor yg dipilih oleh user
	public function get_data_cf_all($id_penyakit, $id_user)
	{
		$this->db->select('*');
		$this->db->from('tabel_result_cbr a');
		$this->db->join('tabel_pengetahuan b', 'a.id_pengetahuan = b.id_pengetahuan');
		$this->db->join('tabel_faktor c', 'b.id_faktor = c.id_faktor');
		$this->db->where('b.id_penyakit', $id_penyakit);
		$this->db->where('a.id_user', $id_user);
		$query = $this->db->get();
		return $query->result_array();
	}

	function jumlah_data_order($id_penyakit, $id_user)
    {
        $this->db->select('(a.nilai_cf*nilai_user) as total');
		$this->db->from('tabel_result_cbr a');
		$this->db->join('tabel_pengetahuan b', 'a.id_pengetahuan = b.id_pengetahuan');
		$this->db->where('b.id_penyakit', $id_penyakit);
		$this->db->where('a.id_user', $id_user);
		return $this->db->get()->num_rows();
    }

    public function get_data_cf_solusi($id_penyakit, $id_user)
	{
		$this->db->select('*');
		$this->db->from('tabel_result_cbr a');
		$this->db->join('tabel_pengetahuan b', 'a.id_pengetahuan = b.id_pengetahuan');
		$this->db->join('tabel_penyakit c', 'b.id_penyakit = c.id_penyakit');
		$this->db->where('b.id_penyakit', $id_penyakit);
		$this->db->where('a.id_user', $id_user);
		$query = $this->db->get();
		return $query->row();
	}
}