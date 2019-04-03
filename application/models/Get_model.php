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
    $query = $this->db->order_by('id', 'DESC');
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
//begin Ular
function ul_menu($id) {
      $query = $this->db->where('id',$id);
      $query = $this->db->get('ex_menu');
      return $query->result_array();
}

function  ul_schedule_model($id){
   $query = $this->db->where('id_type_page', 2);
   $query = $this->db->where('id', $id);
   $query = $this->db->get('ex_page');
   return $query->result_array();     
}
//end Ular
function  doctor_collective(){
   $this->db->order_by('id', 'DESC');
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
function recipes_category(){
   $this->db->where('id_parent', 0);
   $query = $this->db->get('ex_medic_list_of_analisys');
   return $query->result_array();
}
function id_category($id_category){   
    $this->db->where('id_parent', $id_category);
    $query = $this->db->get('ex_medic_list_of_analisys');
    return $query->result_array();
}
function patients($id=0) {
   $query = $this->db->order_by('id', 'DESC');
   $query = $this->db->get('ex_medic_patient_data');
   return $query->result_array();
}
function pagination_services($num, $offset){   
   $this->db->order_by('id', 'DESC');
   $query = $this->db->get('ex_medic_patient_data', $num, $offset);
   return $query->result_array();
}
// список на странице
function pagination_filter($num=0, $offset=0,$ot,$do){   
  if ($offset=="")$offset=0;
    $query = $this->db->query("SELECT * FROM `ex_medic_patient_data` WHERE DATE(data) >='".$ot."' AND DATE(data) <='".$do."' ORDER BY id LIMIT ".$offset.",".$num);
   return $query->result_array();
}
// список на странице конец
// номер страницы пагинации
function all_filter($ot,$do){   
    $query = $this->db->query("SELECT * FROM `ex_medic_patient_data` WHERE DATE(data) >='".$ot."' AND DATE(data) <='".$do."' ORDER BY id");

// foreach ($query->result() as $row)
// {
//         echo $row->id_patient.'<br>';
//         echo $row->data.'<br>';
//         echo $row->sum.'<br>';
// }
   return $query->num_rows();
}
// номер страницы пагинации конец
function code_check($num, $offset)    {   
   $this->db->order_by('id', 'DESC');
   $query = $this->db->get('ex_medic_patient_data', $num, $offset);
   return $query->result_array();
}
function code_md5_check($random_code) {
    $query = $this->db->where('md5',$random_code);
    $query = $this->db->get('ex_medic_patient_data');   
    return $query->num_rows();
}
function user_login_check($user_login,$user_password) {
    $query = $this->db->where('login',$user_login);
    $query = $this->db->where('pass',$user_password);
    $query = $this->db->get('ex_user');   
    return $query->num_rows();
}
function about() {
    $query = $this->db->where('id','125');
    $query = $this->db->get('ex_page');   
    return $query->result_array();
}
function navigation_doctor($id) {
    $query = $this->db->where('id', 93);
    $query = $this->db->get('ex_menu');   
    return $query->result_array();
}
} 
