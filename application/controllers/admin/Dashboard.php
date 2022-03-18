<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_dashboard');
		$this->load->library('form_validation');
	}

	public function tampil_dashboard()
	{
		$show = $this->M_dashboard;

		$data = [
			"data_penyakit" => $show->hitung_data_penyakit(),
			"data_faktor" => $show->hitung_data_faktor(),
			"data_pengetahuan" => $show->hitung_data_pengetahuan(),
			"data_user" => $show->hitung_data_user(),
		];
		// var_dump($data);
		// die();
		$this->load->view("backend/Dashboard_view", $data);
	}
	

}