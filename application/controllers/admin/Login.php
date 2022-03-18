<?php

class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/M_admin');
		$this->load->library(array('form_validation', 'session'));
	}

	public function index()
    {
        if ($this->session->userdata('authenticated')) // Jika user sudah login (Session authenticated ditemukan)
            redirect('admin/Dashboard/tampil_dashboard'); // Redirect ke page home

        $this->load->view('backend/Login_view'); // Load view login.php
    }

	public function login()
    {
        $username = $this->input->post('username'); // Ambil isi dari inputan username pada form login
        $password = $this->input->post('password'); // Ambil isi dari inputan password pada form login dan encrypt dengan md5

        $user = $this->M_admin->get($username); // Panggil fungsi get yang ada di UserModel.php


        if (empty($user)) { // Jika hasilnya kosong / user tidak ditemukan
            $this->session->set_flashdata('message', 'Username Atau Password Salah'); // Buat session flashdata
            redirect('admin/Login'); // Redirect ke halaman login
        } else {
            if ($password == $user->password) { // Jika password yang diinput sama dengan password yang didatabase
                $session = array(
                    'authenticated' => true, // Buat session authenticated dengan value true
                    'username' => $user->username,  // Buat session username
                    'nama' => $user->nama_admin, // Buat session nama
                    'id_admin' => $user->id_admin, // Buat session role
                    'foto_admin' => $user->foto_admin, // Buat session role
                );

                $this->session->set_userdata($session); // Buat session sesuai $session
				redirect(site_url('admin/Dashboard/tampil_dashboard'));
                //redirect('page/home'); // Redirect ke halaman home
            } else {
                $this->session->set_flashdata('message', 'Username atau Password Salah'); // Buat session flashdata
                redirect('admin/Login'); // Redirect ke halaman login
            }
        }
    }

	public function logout()
    {
        $this->session->sess_destroy(); // Hapus semua session
        //redirect('welcome'); // Redirect ke halaman login
        redirect(site_url('admin/Login'));
    }

}