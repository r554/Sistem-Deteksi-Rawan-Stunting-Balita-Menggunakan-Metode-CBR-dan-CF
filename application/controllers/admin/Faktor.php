<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faktor extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->model('admin/M_faktor');
		$this->load->library('form_validation');
	}
    
    
    public function tampil_faktor()
	{
        $show = $this->M_faktor;
		$data = [
			"faktor" => $show->tampil_faktor(),
		];
        // var_dump($data);
        // die;
		$this->load->view("backend/Faktor_view", $data);
	}

	//untuk menyimpan tambah data
	public function save_faktor()
	{
		$model = $this->M_faktor;

		if ($model->save_faktor()) {
			$this->session->set_flashdata('success', 'Berhasil Menambah Data Faktor Penyakit');
			redirect(site_url('admin/Faktor/tampil_faktor'));
		}
	}

	public function tambah_faktor()
	{
		$this->load->view("backend/tambah_faktor");
	}

	public function edit_faktor($id = null)
	{

		$model = $this->M_faktor;
		$validation = $this->form_validation;
		$validation->set_rules($model->rules());


		if ($validation->run()) {
			$model->update_faktor();
			$this->session->set_flashdata('edit', 'Berhasil disimpan');
			redirect(site_url('admin/Faktor/tampil_faktor'));
		}

		$data["data_faktor"] = $model->getById_faktor($id);
		// var_dump($data);
		// die;
		$this->load->view("backend/edit_faktor", $data);
	}


	public function delete_faktor($id = null)
	{
		if (!isset($id)) show_404();

		if ($this->M_faktor->delete_faktor($id)) {
			$this->session->set_flashdata('hapus', 'Berhasil Menghapus Data Faktor Penyakit');
			redirect(site_url('admin/Faktor/tampil_faktor'));
		}
	}
}