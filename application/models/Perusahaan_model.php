<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan_model extends CI_Model
{
    private $_table = "jenis_perusahaan";

    public $id_jenis_perusahaan;
    public $nama_jenis_perusahaan;

    public function rules()
    {
        return [
            ['field' => 'id_jenis_perusahaan',
            'label' => 'Id_jenis_perusahaan',
            'rules' => 'required'],
            
            ['field' => 'nama_jenis_perusahaan',
            'label' => 'Nama_jenis_perusahaan',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_jenis_perusahaan" => $id])->row();
    }
}
