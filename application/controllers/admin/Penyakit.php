<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyakit extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->model('admin/M_penyakit');
		$this->load->library('form_validation');
	}
    
    
    public function tampil_penyakit()
	{
        $show = $this->M_penyakit;
		$data = [
			"penyakit" => $show->tampil_penyakit(),
		];
        // var_dump($data);
        // die;
		$this->load->view("backend/Penyakit_view", $data);
	}

	//untuk menyimpan tambah data produk
	public function save_penyakit()
	{
		$model = $this->M_penyakit;

		if ($model->save_penyakit()) {
			$this->session->set_flashdata('success', 'Berhasil Menambah Data Penyakit');
			redirect(site_url('admin/Penyakit/tampil_penyakit'));
		}
	}

	public function tambah_penyakit()
	{
		$this->load->view("backend/tambah_penyakit");
	}

	public function edit_penyakit($id = null)
	{

		$model = $this->M_penyakit;
		$validation = $this->form_validation;
		$validation->set_rules($model->rules());


		if ($validation->run()) {
			$model->update_penyakit();
			$this->session->set_flashdata('edit', 'Berhasil disimpan');
			redirect(site_url('admin/Penyakit/tampil_penyakit'));
		}

		$data["data_penyakit"] = $model->getById_penyakit($id);
		// var_dump($data);
		// die;
		$this->load->view("backend/edit_penyakit", $data);
	}


	public function delete_penyakit($id = null)
	{
		if (!isset($id)) show_404();

		if ($this->M_penyakit->delete_penyakit($id)) {
			$this->session->set_flashdata('hapus', 'Berhasil Menghapus Data Penyakit');
			redirect(site_url('admin/Penyakit/tampil_penyakit'));
		}
	}

}