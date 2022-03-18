<?php 

class M_dashboard extends CI_model
{

    public function hitung_data_penyakit()
    {
        $this->db->select('*');
        $this->db->from('tabel_penyakit');
                
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function hitung_data_faktor()
    {
        $this->db->select('*');
        $this->db->from('tabel_faktor');
                
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function hitung_data_pengetahuan()
    {
        $this->db->select('*');
        $this->db->from('tabel_pengetahuan');
                
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function hitung_data_user()
    {
        $this->db->select('*');
        $this->db->from('tabel_user');
                
        $query = $this->db->get();
        return $query->num_rows();
    }

}