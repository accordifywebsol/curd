<?php
//defined('BASEPATH') OR exit('No direct script access allowed'); 

class Curd_model extends CI_Model
{
   public function getAllProducts()
   {
       $query= $this->db->get('opera');
       if($query){
           return $query->result();
       }
    }
    public function insertProduct($data){

        $this->db->insert('opera', $data);
        if($query){
            return true;
        }
        else{
            return false;
        }
    }
}
?>