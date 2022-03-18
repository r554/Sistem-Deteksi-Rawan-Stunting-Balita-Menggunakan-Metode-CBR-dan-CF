<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/M_pengguna');
		$this->load->model('frondend/M_frondend');
		$this->load->library('form_validation');
	}

	public function tampil_pengguna()
	{
		$data = [
			"get_data_user" => $this->M_pengguna->get_data_user()
		];
		// var_dump($data);
		// die();
		$this->load->view('backend/Pengguna_view', $data);
	}

	public function delete_pengguna($id = null)
	{
		if (!isset($id)) show_404();

		if ($this->M_pengguna->delete_pengguna($id)) {
			$this->session->set_flashdata('hapus', 'Berhasil Menghapus Data Pengguna');
			redirect(site_url('admin/Pengguna/tampil_pengguna'));
		}
	}

	public function detail_pengguna()
	{
		$id_user = $this->uri->segment(4);

		$model = $this->M_pengguna;
		$data["data_cbr_aman"] = $model->get_data_cbr_aman($id_user);
		$data["data_cbr_rawan"] = $model->get_data_cbr_rawan($id_user);
		$data["data_cbr_total"] = $model->get_data_cbr_total($id_user);
		$data["data_user"] = $model->getbyId_data_user($id_user);
		// var_dump($data);
		// die;
		$this->load->view('backend/detail_pengguna', $data);
	}

	public function hasil_pengguna()
	{

		if (!$this->uri->segment('7')) {
			// redirect(base_url("admin/Pengguna/detail_pengguna"));
		}

		$id_penyakit = $this->uri->segment('4');
		$id_user = $this->uri->segment('7');
		//$id_penyakit = 3;
		//$id_user = "USR0008";
		$data = [
			"nilai_cbr"	 	=> $this->M_frondend->get_data_cbr($id_penyakit, $id_user),
			"Data_cbr_all"	=> $this->M_frondend->get_data_cbr_all($id_user),
			"nilai_cf" 		=> $this->M_frondend->get_data_cf($id_penyakit, $id_user),
			"jumlah_data_cf"=> $this->M_frondend->jumlah_data_order($id_penyakit, $id_user),
			"nilai_cf_all"	=> $this->M_frondend->get_data_cf_all($id_penyakit, $id_user),
			"solusi"		=> $this->M_frondend->get_data_cf_solusi($id_penyakit, $id_user),
		];
		// var_dump($data);
		// die();
		$this->load->view("backend/hasil_pengguna", $data);
		$this->session->unset_userdata('id_user'); // Menghapus Session id_user
	}

}