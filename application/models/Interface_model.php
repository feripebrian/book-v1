<?php
class Interface_model extends CI_Model{


    function book_new_show(){
        $data = $this->db->query("SELECT * FROM tb_buku WHERE STATUS='1' ORDER BY date_upload DESC LIMIT 10 ;");
        return $data->result_array();
    }
    
    function jumlah_book_show(){
        $data = $this->db->query("SELECT COUNT(*) AS jumlah FROM tb_buku WHERE STATUS='1';");
        return $data->result_array();
    }

    function book_show(){
        $data = $this->db->query("SELECT * FROM tb_buku WHERE STATUS='1' ORDER BY date_upload DESC;");
        return $data->result_array();
    }

    function baca_buku($id_buku){
        $query = $this->db->query("SELECT * FROM tb_buku WHERE id_buku='$id_buku';");
        return $query->result_array();
    }

    function kategori_show(){
        $data = $this->db->query("SELECT * FROM tb_kategori WHERE STATUS='1';");
        return $data->result_array();
    }

    function kategori_id($kategori){
        $data = $this->db->query("SELECT * FROM tb_buku INNER JOIN tb_kategori ON tb_buku.kategori=tb_kategori.kategori WHERE 
            tb_buku.kategori='$kategori';");
        return $data->result_array();
    }

    function saran_buku()
    {
      $data = array(
          "nama"        => $this->input->post('nama'),
          "judul_buku"  => $this->input->post('judul_buku'),
          "penerbit"    => $this->input->post('penerbit'),
          "pengarang"   => $this->input->post('pengarang'),
          "tahun"       => $this->input->post('tahun'),
          "date_upload" => date('Y-m-d H:i:s')
    );
    $this->db->insert('tb_saran_buku', $data);
    }

    function video_show(){
        $data = $this->db->query("SELECT * FROM tb_video WHERE STATUS='1' ORDER BY date_upload DESC;");
        return $data->result_array();
    }

    function video_show_id($id){
        $query = $this->db->query("SELECT * FROM tb_video WHERE id='$id';");
        return $query->result_array();
    }

    function profile_show(){
        $query = $this->db->query("SELECT * FROM tb_konten WHERE id='1';");
        return $query->result_array();
    }

    function visi_dan_misi_show(){
        $query = $this->db->query("SELECT * FROM tb_konten WHERE id='2';");
        return $query->result_array();
    }
    function galeri_show(){
        $query = $this->db->query("SELECT * FROM tb_galeri WHERE STATUS='1';");
        return $query->result_array();
    }
    function get_galeri_list($limit, $start){
        $query = $this->db->get('tb_galeri', $limit, $start);
        return $query;
    }
    
 }