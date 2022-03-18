<?php
class Profil extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/M_profil');
		$this->load->library('form_validation');
	}

	public function tampil_profil()
	{
		$show = $this->M_profil;
		$id_admin = $this->session->userdata('id_admin');

		$data = [
			"user" => $show->getById($id_admin)
		];

		$this->load->view("backend/Profil_view", $data);
	}

	public function edit($id = null)
	{
		$model = $this->M_profil;
		$this->form_validation->set_rules('username', 'username', 'trim|required');

		if ($this->form_validation->run() == true) {
			$model->update();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}

		$data["user"] = $model->getById($id);

		$this->load->view("backend/Profil_view", $data);
	}

	public function edit_ubahpw($id = null)
	{
		$model = $this->M_profil;
		$data["user"] = $model->getById($id);
		$this->load->view("backend/Ubahpw_view", $data);
	}

	public function simpan_ubahpw($id = null)
	{
		$model = $this->M_profil;
		$model->ubahpw($id);
		$this->session->set_flashdata('success', 'Berhasil disimpan');
		$this->session->sess_destroy(); // Hapus semua session
		redirect(site_url('admin/Login'));
	}
}