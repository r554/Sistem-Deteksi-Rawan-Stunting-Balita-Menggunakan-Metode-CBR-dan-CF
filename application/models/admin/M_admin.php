<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_admin extends CI_Model
{
    private $_table = "tabel_admin";

    public $id_admin;
    public $nama_admin;
    public $no_hp_admin;
    public $email_admin;
    public $foto_admin = "default.jpg";
    public $username;
    public $password;

    public function get($username)
    {
        $this->db->where('username', $username); // Untuk menambahkan Where Clause : username='$username_admin '
        $result = $this->db->get('tabel_admin')->row(); // Untuk mengeksekusi dan mengambil data hasil query

        return $result;
    }

    // Check username exists
    public function check_username_exists($username)
    {
        $query = $this->db->get_where('tabel_admin', array('username' => $username));
        if (empty($query->row_array())) {
            return true;
        } else {
            return false;
        }
    }
}