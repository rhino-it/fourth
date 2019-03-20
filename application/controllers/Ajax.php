<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

	public function category($id_category)
	{	
		$this->load->model('Get_model');
		$data['query_category'] = $this->Get_model->id_category($id_category);
		// $data['id_category'] =$id_category;
		$this->load->view('ajax/category_option_view', $data);
	}		
}
?>