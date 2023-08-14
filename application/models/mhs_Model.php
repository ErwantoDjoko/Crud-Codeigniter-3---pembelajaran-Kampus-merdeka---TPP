<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class mhs_Model extends CI_Model {
 
    

    public function getMahasiswa(){
        
        $this->db->select('*');
        $this->db->from('mst_mahasiswa');
        $query = $this->db->get();
        return $query->result();
    }
    

    
    
}