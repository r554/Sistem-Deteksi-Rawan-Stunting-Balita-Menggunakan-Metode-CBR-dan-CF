<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengetahuan extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->model('admin/M_pengetahuan');
		$this->load->library('form_validation');
	}
    
    
    public function tampil_pengetahuan()
	{
        $show = $this->M_pengetahuan;
		$data = [
			"penyakit" => $show->tampil_pengetahuan(),
		];
        // var_dump($data);
        // die;
		$this->load->view("backend/Pengetahuan_view", $data);
	}

	public function detail_pengetahuan()
	{
		$id_pengetahuan = $this->uri->segment(4);

		$model = $this->M_pengetahuan;
		$data["faktor"] = $model->getById_detail_pengetahuan();
		$data["tampil_detail"] = $model->getById_pengetahuan($id_pengetahuan);
		$data["penyakit"] = $model->getById_pengetahuan2($id_pengetahuan);
		// var_dump($data);
		// die;
		$this->load->view('backend/detail_pengetahuan', $data);
	}

	//untuk menyimpan tambah data
	public function save_pengetahuan()
	{
		$model = $this->M_pengetahuan;

		if ($model->save_pengetahuan()) {
			$this->session->set_flashdata('success', 'Berhasil Menambah Data Faktor Penyakit');
			redirect(site_url('admin/Pengetahuan/tampil_pengetahuan'));
		}
	}


	public function delete_pengetahuan($id = null)
	{
		if (!isset($id)) show_404();

		if ($this->M_pengetahuan->delete_pengetahuan($id)) {
			$this->session->set_flashdata('hapus', 'Berhasil Menghapus Data Faktor Penyakit');
			redirect(site_url('admin/Pengetahuan/tampil_pengetahuan'));
		}
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
}