<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Frondend extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('frondend/M_frondend');
		$this->load->library('form_validation');
	}
	

	public function index()
	{
		$this->load->view("frondend/index");
	}


	public function biodata()
	{
		$data = [
			"get_no_user" => $this->M_frondend->get_no_user()
		];

		$this->load->view("frondend/biodata", $data);
	}


	// Menampilkan pertanyaan rawan
	public function konsultasi()
	{
		$data = [
			"data_kuisoner" => $this->M_frondend->get_data_kuisoner()
		];

		$this->load->view("frondend/konsultasi", $data);
	}


	// Menampilkan pertanyaan aman
	public function konsultasi2()
	{
		$data = [
			"data_kuisoner" => $this->M_frondend->get_data_kuisoner2()
		];

		$this->load->view("frondend/konsultasi2", $data);
	}


	public function hasil_konsultasi()
	{
		$this->load->view("frondend/hasil_konsultasi");
	}


	public function informasi_penyakit()
	{
		$this->load->view("frondend/informasi_penyakit");
	}


	public function tambah_data_biodata()
	{
		$show = $this->M_frondend;
		$id_user = $_POST["id_user"];
		$this->session->set_userdata('id_user', $id_user);

		if ($show->simpan_biodata()) {
			// $this->session->set_flashdata('success', 'Berhasil Menambah Data Faktor Penyakit');
			redirect(site_url('frondend/Frondend/konsultasi'));
		}
	}


	// Method ini untuk save data pertanyaan aman
	public function save_cbr()
	{
		$data2 = array();
		$index = 0; // Set index array awal dengan 0
		$id_faktor = $_POST["id_faktor"];
		$nilai_cf_user = $_POST["cf_user"];
		$nilai_bobot = $_POST["bobot_faktor"];

		foreach ($id_faktor as $data_id_faktor) { // Kita buat perulangan berdasarkan id_order sampai data terakhir

			array_push($data2, array(
				'id_user' 		 => $this->session->userdata('id_user'),
				'id_pengetahuan' => $data_id_faktor,
				'nilai_cf'		 => $nilai_bobot[$index], //index nilai masing" cf atau user
				'nilai_user' 	 => $nilai_cf_user[$index],
			));

			$index++;
		}

		$this->M_frondend->save_batch($data2); // Memasukan Data Pertanyaan Ke Database

		$this->db->select('*');
		$this->db->from('tabel_result_cbr a');
		$this->db->join('tabel_pengetahuan b', 'a.id_pengetahuan = b.id_pengetahuan');
		$this->db->where('b.id_penyakit', 1);
		$this->db->where('a.id_user', $this->session->userdata('id_user'));
		$this->db->where('a.nilai_user', "Pilih Kondisi");
		$cek_jumlah_data = $this->db->get()->num_rows();


		// memeriksa apakah petanyaan yang di pilih kurang dari 2 atau tidak
		if ($cek_jumlah_data > 4) {
			//Jika Pertanyaan hanya di isi 1
			$where = [
			"id_user" 	 => $this->session->userdata('id_user'),
			];

		    $this->db->delete("tabel_result_cbr", $where); //Menghapus data yang salah di masukkan

			$this->session->set_flashdata('kurang', 'Silahkan PIlih Minimum 2 Pertanyaan');
			redirect(site_url('frondend/Frondend/konsultasi'));

		} else {
			// JIka Pertanyaan Diisi lebih dari 2
			$where = [
				"id_user" 	 => $this->session->userdata('id_user'),
				"nilai_user" => "Pilih Kondisi"
				
			];

			$this->db->delete("tabel_result_cbr", $where); // menghapus data yang tidak diisi oleh user

			redirect(base_url("frondend/Frondend/konsultasi2"));
		}

	}


	// Method ini untuk save data pertanyaan rawan
	public function save_cbr2()
	{

		$data2 = array();
		$index = 0; // Set index array awal dengan 0
		$id_faktor = $_POST["id_faktor"];
		$nilai_cf_user = $_POST["cf_user"];
		$nilai_bobot = $_POST["bobot_faktor"];

		foreach ($id_faktor as $data_id_faktor) { // Kita buat perulangan berdasarkan id_order sampai data terakhir

			array_push($data2, array(
				'id_user' 		 => $this->session->userdata('id_user'),
				'id_pengetahuan' => $data_id_faktor,
				'nilai_cf'		 => $nilai_bobot[$index], //index nilai masing" cf atau user
				'nilai_user' 	 => $nilai_cf_user[$index],
			));

			$index++;
		}

		$this->M_frondend->save_batch($data2); // Memasukan Data Pertanyaan Ke Database

		$this->db->select('*');
		$this->db->from('tabel_result_cbr a');
		$this->db->join('tabel_pengetahuan b', 'a.id_pengetahuan = b.id_pengetahuan');
		$this->db->where('b.id_penyakit', 3);
		$this->db->where('a.id_user', $this->session->userdata('id_user'));
		$this->db->where('a.nilai_user', "Pilih Kondisi");
		$cek_jumlah_data = $this->db->get()->num_rows();


		// memeriksa apakah petanyaan yang di pilih kurang dari 2 atau tidak
		if ($cek_jumlah_data > 4) {
			//Jika Pertanyaan hanya di isi 1
			$id_user = $this->session->userdata('id_user');
			$sql = "DELETE t1 FROM tabel_result_cbr t1
  			JOIN tabel_pengetahuan t2 ON t1.id_pengetahuan = t2.id_pengetahuan
  			WHERE t2.id_penyakit = '3' and t1.id_user = '$id_user'  ";

  			$this->db->query($sql); // Eksekusi Query SQL

			$this->session->set_flashdata('kurang', 'Silahkan Pilih Minimum 2 Pertanyaan'); //buat session warning
			redirect(site_url('frondend/Frondend/konsultasi2')); // dikermbalikan pada view konsultasi 2

		} else {
			// JIka Pertanyaan Diisi lebih dari 2
			$where = [
				"id_user" 	 => $this->session->userdata('id_user'),
				"nilai_user" => "Pilih Kondisi"
				
			];

			$this->db->delete("tabel_result_cbr", $where); // menghapus data yang tidak diisi oleh user

			redirect(base_url("frondend/Frondend/contoh"));
		}

	}



	public function contoh()
	{

		if (!$this->session->userdata('id_user')) {
			redirect(base_url("frondend/Frondend/biodata"));
		}

		$id_user = $this->session->userdata('id_user');
		//$id_user = "USR0001";
		$data = [
			"nilai_cbr_rawan"	 => $this->M_frondend->get_data_cbr_rawan($id_user),
			"nilai_cbr_aman"	 => $this->M_frondend->get_data_cbr_aman($id_user),
			"nilai_cbr_total"	 => $this->M_frondend->get_data_cbr_total($id_user),
			//"nilai_cf" 			 => $this->M_frondend->get_data_cf(),
			//"jumlah_data_cf"	 => $this->M_frondend->jumlah_data_order()
		];
		// var_dump($data);
		// die();
		$this->load->view("frondend/contoh", $data);
	}


	public function contoh2()
	{

		if (!$this->session->userdata('id_user')) {
			redirect(base_url("frondend/Frondend/biodata"));
		}

		$id_penyakit = $this->uri->segment('4');
		$id_user = $this->session->userdata('id_user');
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
		$this->load->view("frondend/contoh2", $data);
		$this->session->unset_userdata('id_user'); // Menghapus Session id_user
	}
}