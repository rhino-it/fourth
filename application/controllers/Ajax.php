<?php
session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

	public function category($id_category)
	{	
		$this->load->model('Get_model');
		$data['query_category'] = $this->Get_model->id_category($id_category);
		// $data['id_category'] =$id_category;
		$this->load->view('ajax/category_option_view', $data);
	}

	public function data_patient($id_parent=0,$id=0)
	{	
		$this->load->model('Get_model');
		$data['data_patients'] = $this->Get_model->data_patient($id_parent);
		$data['last_data'] = $this->Get_model->last_data_patient($id);
		$this->load->view('ajax/data_patient_view', $data);
	}				
}
?>