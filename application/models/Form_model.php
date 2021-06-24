<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Form_model extends CI_Model
{
    private $_table = "jenis_perusahaan";
    private $_table2 = "it_resource";
    private $_table3 = "domain";

    public $id_jenis_perusahaan;
    public $nama_jenis_perusahaan;
    public $id_it_resource;
    public $it_resource;
    public $id_domain;
    public $nama_domain;

    public function getAll()
    {
        return $this->db->get($this->_table, $this->_table2, $this->_table3)->result();
    }
}
