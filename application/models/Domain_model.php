<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Domain_model extends CI_Model
{
    private $_table = "domain";

    public $id_domain;
    public $nama_domain;

    public function rules()
    {
        return [
            ['field' => 'id_domain',
            'label' => 'Id_domain',
            'rules' => 'required'],
            
            ['field' => 'nama_domain',
            'label' => 'Nama_domain',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_domain" => $id])->row();
    }
}
