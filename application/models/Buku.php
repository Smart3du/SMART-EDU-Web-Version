<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Buku extends CI_Model{
	var $isbn;
	var $juduliklan;
    var $judulbuku;
    var $penerbit;
    var $penulis;
    var $pemilikbuku;
    var $foto;

    public function getBuku($perpage,$start)
    {
        # code...
        return $get = $this->db->get('buku',$perpage,$start)->result_array();
    }
    public function getRowBuku(){
        $this->db->from('buku');
        $query = $this->db->get();
        $row = $query->num_rows();
        return $row;
    }
}