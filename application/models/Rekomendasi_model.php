<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Rekomendasi_model extends CI_Model
{
    private $_table = "rekomendasi";

    public $id_rekomendasi;
    public $id_pertanyaan;
    public $rekomendasi;

    public function getAll()
    {
        $this->db->select('id_rekomendasi, id_pertanyaan, rekomendasi');
        $this->db->from('rekomendasi');
        $query = $this->db->get();
        return $query->result();
    }

    public function getRecomend($level = null){

        $sql='SELECT rekomendasi.id_pertanyaan, rekomendasi.id_rekomendasi, rekomendasi.rekomendasi FROM rekomendasi, pertanyaan WHERE rekomendasi.id_pertanyaan = pertanyaan.id_pertanyaan and pertanyaan.level =?';
        $query=$this->db->query($sql, $level);
        return $query->result();       
    }

    public function getIdLevel($level = null, $id_it_process){
        $sql='SELECT pertanyaan.id_pertanyaan FROM pertanyaan WHERE pertanyaan.id_it_process =? and pertanyaan.level =?';
        $query=$this->db->query($sql, array($id_it_process, $level));
        return $query->result_array();       
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_rekomendasi" => $id])->row();
    }
}
