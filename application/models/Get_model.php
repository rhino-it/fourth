<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get_model extends CI_Model {

    function md_menu($id) {
    		$query = $this->db->order_by('sort', 'ASC');
            $query = $this->db->where('id_parent',$id);
            $query = $this->db->get('ex_menu');
            return $query->result_array();
    }
    function inf($id) {
            $query = $this->db->where('id', $id);
            $query = $this->db->get('ex_page');
            return $query->result_array();
    }
    function news($id) {
            $query = $this->db->where('id_type_page', 1);
            $query = $this->db->get('ex_page');
            return $query->result_array();
    }
    function main_page_news() {
            $query = $this->db->limit(3);
            $query = $this->db->where('id_type_page', 1);
            $query = $this->db->get('ex_page');
            return $query->result_array();
    }
    function  arhiv($num, $offset){
     $this->db->order_by('id', 'DESC');
     $query = $this->db->where('id_type_page', 1);
     $query = $this->db->get('ex_page', $num, $offset);
     return $query->result_array();     
    }
    function  schedule_model($id){
     $query = $this->db->where('id_type_page', $id);
     $query = $this->db->get('ex_page');
     return $query->result_array();     
    }
    function  doctor_collective(){
     $this->db->order_by('foto_thumb', 'ASC');
     $query = $this->db->where('id_type_page', 15);
     $query = $this->db->get('ex_page');
     return $query->result_array();     
    }
    function  doctor($id){
     $query = $this->db->where('id', $id);
     $query = $this->db->get('ex_page');
     return $query->result_array();     
    }
    function  uslugi(){
     $query = $this->db->where('id_type_page', 14);
     $query = $this->db->get('ex_page');
     return $query->result_array();     
    }
    function  uslugi_detail($id){
     $query = $this->db->where('id', $id);
     $query = $this->db->get('ex_page');
     return $query->result_array();     
    }

    function recipes_category()
    {
         $this->db->where('id_parent', 0);
         $query = $this->db->get('ex_medic_list_of_analisys');
         return $query->result_array();
    }
        function id_category($id_category)
    {   
        $this->db->where('id_parent', $id_category);
         $query = $this->db->get('ex_medic_list_of_analisys');
        return $query->result_array();
    }
    



    // function  recipes_uslugi(){
    //  // $query = $this->db->where('id_parent', 0);
    //  $query = $this->db->get('ex_medic_list_of_analisys');
    //  return $query->result_array();     
    // }
    // function  recipes_medicoment(){     
    //  $query = $this->db->get('ex_medic_list_of_analisys');
    //  return $query->result_array();     
    // }
} 
