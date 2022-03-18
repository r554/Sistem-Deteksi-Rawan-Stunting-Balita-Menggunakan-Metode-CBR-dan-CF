<?php

class M_penyakit extends CI_model
{
	public function rules()
	{
		return [
			[
				'field' => 'nama_penyakit',
				'label' => 'nama_penyakit',
				'rules' => 'required'
			]

		];
	}

	public function save_penyakit()
	{
		$post = $this->input->post();
		$data = [
			"nama_penyakit" => $post["penyakit"],
			"detail_penyakit" => $post["detail"],
			"solusi_penyakit" => $post["solusi"],
		];

		return $this->db->insert("tabel_penyakit", $data);
	}

	public function tampil_penyakit()
	{
		$hasil = $this->db->query("SELECT * FROM tabel_penyakit");
		return $hasil->result();
	}

	public function delete_penyakit($id)
	{
		return $this->db->delete("tabel_penyakit", array("id_penyakit" => $id));
	}

	//edit produk
	public function update_penyakit()
	{
		$data = [
			"nama_penyakit" => $_POST["nama_penyakit"],
			"detail_penyakit" => $_POST["detail_penyakit"],
			"solusi_penyakit" => $_POST["solusi_penyakit"],
		];

		return $this->db->update("tabel_penyakit", $data, array('id_penyakit' => $_POST['id_penyakit']));
	}

	public function getById_penyakit($id)
	{
		return $this->db->get_where("tabel_penyakit", ["id_penyakit" => $id])->row();
	}
}