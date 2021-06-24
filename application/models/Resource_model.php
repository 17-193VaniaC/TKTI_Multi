<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Resource_model extends CI_Model
{
    private $_table = "it_resource";

    public $id_it_resource;
    public $it_resource;

    public function rules()
    {
        return [
            ['field' => 'id_it_resource',
            'label' => 'Id_it_resource',
            'rules' => 'required'],
            
            ['field' => 'it_resource',
            'label' => 'It_resource',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_it_resource" => $id])->row();
    }
}
