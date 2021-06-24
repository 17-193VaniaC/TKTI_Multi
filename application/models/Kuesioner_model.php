<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kuesioner_model extends CI_Model
{
    private $_table = "pertanyaan";

    public $id_pertanyaan;
    public $id_it_process;
    public $pertanyaan;
    public $level;

    public function getAll($id_it_process)
    {
        $this->db->select('id_pertanyaan, id_it_process, pertanyaan, level');
        $this->db->from('pertanyaan');
        $this->db->where('id_it_process', $id_it_process);
        $query = $this->db->get();
        return $query->result();
    }

    public function getIdPertanyaan($id_it_process)
    {
        $this->db->select('pertanyaan.id_pertanyaan, pertanyaan.id_it_process, pertanyaan.level, it_process.it_process');
        $this->db->from('pertanyaan');
        $this->db->join('it_process', 'it_process.id_it_process = pertanyaan.id_it_process');
        $this->db->where('pertanyaan.id_it_process', $id_it_process);
        $query = $this->db->get();
        return $query->result();
    }

    public function getAllById($it_process){
        $this->db->from('it_process');
        $this->db->where('it_process.id_it_process', $it_process);    
        $query = $this->db->get();
        return $query->result();
    }

    public function getLevel($id_pertanyaan){
        $this->db->select('id_pertanyaan, id_it_process, pertanyaan, level');
        $this->db->from('pertanyaan');
        $this->db->where('id_it_process', $id_pertanyaan);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_pertanyaan" => $id])->row();
    }
}
