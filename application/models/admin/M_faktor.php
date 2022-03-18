<?php

class M_faktor extends CI_model
{
	public function rules()
	{
		return [
			[
				'field' => 'faktor_penyebab',
				'label' => 'faktor_penyabab',
				'rules' => 'required'
			]

		];
	}

    public function tampil_faktor()
	{
		$hasil = $this->db->query("SELECT * FROM tabel_faktor");
		return $hasil->result();
	}
    
	public function save_faktor()
	{
		$post = $this->input->post();
		$data = [
			"faktor_penyebab" => $post["faktor_penyebab"],
			"bobot_faktor" => $post["bobot_faktor"],
		];

		return $this->db->insert("tabel_faktor", $data);
	}

	public function delete_faktor($id)
	{
		return $this->db->delete("tabel_faktor", array("id_faktor" => $id));
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

	public function getById_faktor($id)
	{
		return $this->db->get_where("tabel_faktor", ["id_faktor" => $id])->row();
	}
}