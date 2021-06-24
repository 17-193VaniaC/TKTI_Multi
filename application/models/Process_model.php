<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Process_model extends CI_Model
{
    private $_table = "it_process";

    public $id_it_process;
    public $id_domain;
    public $it_process;
    public $importance;

    public function getAll($id_jenis_perusahaan, $id_it_resource, $id_domain)
    {
        if ($id_jenis_perusahaan == '1')
        {
            $this->db->select('it_process.id_it_process, it_process.id_domain, it_process.it_process, it_process.importance, mapping_it_resource_process.id_it_resource');
            $this->db->distinct();
            $this->db->from('it_process');
            $this->db->join('mapping_it_resource_process', 'mapping_it_resource_process.id_it_process = it_process.id_it_process');
            $this->db->where('mapping_it_resource_process.id_it_resource', $id_it_resource);
            $this->db->where('it_process.id_domain', $id_domain);
            $this->db->where("(it_process.importance='H')");
            $query = $this->db->get();
            return $query->result();
        }
        else if ($id_jenis_perusahaan == '2')
        {
            $this->db->select('it_process.id_it_process, it_process.id_domain, it_process.it_process, it_process.importance, mapping_it_resource_process.id_it_resource');
            $this->db->from('it_process');
            $this->db->join('mapping_it_resource_process', 'mapping_it_resource_process.id_it_process = it_process.id_it_process');
            $this->db->where('mapping_it_resource_process.id_it_resource', $id_it_resource);
            $this->db->where('it_process.id_domain', $id_domain);
            $this->db->where("(it_process.importance='H' OR it_process.importance='M')");
            $query = $this->db->get();
            return $query->result();
        }
        else
        {
            $this->db->select('it_process.id_it_process, it_process.id_domain, it_process.it_process, it_process.importance, mapping_it_resource_process.id_it_resource');
            $this->db->from('it_process');
            $this->db->join('mapping_it_resource_process', 'mapping_it_resource_process.id_it_process = it_process.id_it_process');
            $this->db->where('mapping_it_resource_process.id_it_resource', $id_it_resource);
            $this->db->where('it_process.id_domain', $id_domain);
            $this->db->where("(it_process.importance='H' OR it_process.importance='M' OR it_process.importance='L')");
            $query = $this->db->get();
            return $query->result();
        }
    }
    
    public function getById($id_jenis_perusahaan, $id_domain, $id_it_resource)
    {
        $importance;
        $sql='SELECT * FROM it_process ';
        // print_r($id_jenis_perusahaan);
        // echo "<br>";

        if($id_jenis_perusahaan==1) {
            $sql .= 'WHERE importance = "H" ';
        }
        if($id_jenis_perusahaan==2) {
            $sql .= 'WHERE importance = "H" or importance = "M" ';
        }
        if($id_jenis_perusahaan==3){
            $sql .=  'WHERE importance = "H" or importance = "M" or importance = "L" ';
        }
// domain
        $sql .= "AND ";
        $n_domain = count($id_domain);
        $i=0;
        while ($i<$n_domain) {
            $sql .= 'id_domain = ';
            $sql .= $id_domain[$i];
            // print_r($id_domain[$i]);
            $i=$i+1;
            if($i<$n_domain){
                $sql .= ' OR ';
            }
        }
//resource
        $sql .= " AND id_it_process IN ";
        $sql2 = "(SELECT id_it_process FROM mapping_it_resource_process WHERE ";
        $n_resource = count($id_it_resource);
        $i=0;
        while ($i<$n_resource) {
            $sql2 .= 'id_it_resource = ';
            $sql2 .= $id_it_resource[$i];
            $i=$i+1;
            if ($i<$n_resource) {
                $sql2 .= ' OR ';
            }
        }        
        $sql .= $sql2;
        $sql .=");";
        $query=$this->db->query($sql);
        return $query->result();  
    }
}
