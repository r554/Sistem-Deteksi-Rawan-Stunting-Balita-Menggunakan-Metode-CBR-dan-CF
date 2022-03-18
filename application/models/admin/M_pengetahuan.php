<?php

class M_pengetahuan extends CI_model
{
	public function rules()
	{
		return [
			[
				'field' => 'id_pengetahuan',
				'label' => 'id_pengetahuan',
				'rules' => 'required'
			]

		];
	}

    public function tampil_pengetahuan()
	{
		$hasil = $this->db->query("SELECT * FROM tabel_penyakit");
		return $hasil->result();
	}

	public function getById_detail_pengetahuan()
	{
		return $this->db->query("SELECT * FROM tabel_faktor")->result();
	}

	public function getById_pengetahuan($id_pengetahauan)
	{
        $this->db->from('tabel_pengetahuan');
        $this->db->join('tabel_faktor', 'tabel_faktor.id_faktor = tabel_pengetahuan.id_faktor');
        $this->db->where('tabel_pengetahuan.id_penyakit', $id_pengetahauan);
        $query = $this->db->get();
        return $query->result_array();
	}

	public function getById_pengetahuan2($id_pengetahauan)
	{
        $this->db->from('tabel_penyakit');
        $this->db->where('tabel_penyakit.id_penyakit', $id_pengetahauan);
        $query = $this->db->get();
        return $query->result_array();
	}
    
	public function save_pengetahuan()
	{
		$post = $this->input->post();
		$data = [
			"id_faktor" => $post["faktor"],
			"id_penyakit" => $post["id_penyakit"],
		];

		return $this->db->insert("tabel_pengetahuan", $data);
	}

	public function delete_pengetahuan($id)
	{
		return $this->db->delete("tabel_pengetahuan", array("id_pengetahuan" => $id));
	}

	
	//edit produk
	public function update_faktor()
	{
		$data = [
			"faktor_penyebab" => $_POST["faktor_penyebab"],
			"bobot_faktor" => $_POST["bobot_faktor"],
		];

		return $this->db->update("tabel_faktor", $data, array('id_faktor' => $_POST['id_faktor']));
	}

	
}