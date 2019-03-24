<?php
session_start();
if (isset($_SESSION['language'])!=true) $_SESSION['language'] = 'russian';

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index($id=0)
	{
		$this->load->model('Get_model');
		$this->load->view('head_view');
		$data['main_menu'] = $this->Get_model->md_menu(1);
		$data['main_page_news'] = $this->Get_model->main_page_news();
		$data['uslugi'] = $this->Get_model->uslugi();
		
		$this->load->view('header_view',$data);
		$this->load->view('slider_view');
		$this->load->view('news_view');
		$this->load->view('middle_view',$data);
		$this->load->view('footer_view');
	}

	public function results($id=0)
	{
		// CAPTCHA start
		$this->load->helper('captcha');
		$vals = array(
        'img_path'      => './assets/images/captcha/',
        'img_url'       => base_url().'assets/images/captcha/',
        'font_path'     => './path/to/fonts/texb.ttf',
        'img_width'     => '130',
        'img_height'    => 50,
        'expiration'    => 300,
        'word_length'   => 8,
        'font_size'     => 100,
        'img_id'        => 'Imageid',
        'pool'          => '0123456789abcdefghijklmnopqrstuvwxyz',
        'colors'        => array(
                'background' => array(255, 255, 255),
                'border' => array(0,207,239),
                'text' => array(0, 0, 0),
                'grid' => array(255, 40, 40)
        )
			);
			$data = create_captcha($vals);
			$_SESSION['captcha_key']=$data['word'];
		// CAPTCHA start

		$this->load->model('Get_model');
		$data['main_menu'] = $this->Get_model->md_menu(1);

		$this->load->view('head_view');
		$this->load->view('header_view',$data);
		 $this->load->view('results_view',$data);
		$this->load->view('footer_view');
	}
	public function uzi($id=0)
	{
		$this->load->model('Get_model');
		$this->load->view('head_view');
		$data['main_menu'] = $this->Get_model->md_menu(1);
		$this->load->view('header_view',$data);
		$this->load->view('uzi_view',$data);
		$this->load->view('footer_view');
	}
	public function phizio($id=0)
	{
		$this->load->model('Get_model');
		$this->load->view('head_view');
		$data['main_menu'] = $this->Get_model->md_menu(1);
		$this->load->view('header_view',$data);
		$this->load->view('phizio_view',$data);
		$this->load->view('footer_view');
	}
	public function schedule($id=16)
	{
		$this->load->model('Get_model');
		$this->load->view('head_view');
		$data['main_menu'] = $this->Get_model->md_menu(1);
		$data['schedule_model'] = $this->Get_model->schedule_model($id);
		$this->load->view('header_view',$data);
		$this->load->view('schedule_view',$data);
		$this->load->view('footer_view');
	}
	public function recipes($id=0)
	{
		$_SESSION['counter_medic']=0;
		$this->load->model('Get_model');
		$data['main_menu'] = $this->Get_model->md_menu(1);
		$data['recipes_category'] = $this->Get_model->recipes_category();

		$this->load->view('head_view');
		$this->load->view('header_view',$data);
		$this->load->view('recipes_view',$data);
		$this->load->view('footer_view');
	}
	public function staff($id=0)
	{
		$this->load->model('Get_model');
		$this->load->view('head_view');
		$data['main_menu'] = $this->Get_model->md_menu(1);
		$data['doctor_collective'] = $this->Get_model->doctor_collective();
		$this->load->view('header_view',$data);
		$this->load->view('staff_view');
		$this->load->view('footer_view');
	}
	public function doctor($id=0)
	{
		$this->load->model('Get_model');
		$this->load->view('head_view');
		$data['main_menu'] = $this->Get_model->md_menu(1);
		$data['doctor'] = $this->Get_model->doctor($id);
		$this->load->view('header_view',$data);
		$this->load->view('doctor_view',$data);
		$this->load->view('footer_view');
	}
	public function page($id=0)
	{
		$this->load->model('Get_model');
		$this->load->view('head_view');
		$data['main_menu'] = $this->Get_model->md_menu(1);
		$data['inf'] = $this->Get_model->inf($id);
		$data['uslugi'] = $this->Get_model->uslugi();
		$this->load->view('header_view',$data);
		$this->load->view('content_view',$data);
		$this->load->view('footer_view');
	}
	public function arhiv($id=0)
	{
		$this->load->model('Get_model');
		$data['main_menu'] = $this->Get_model->md_menu(1);

		$config['base_url'] = 'arhiv/';
		$this->db->from('ex_page');
		$this->db->where('id_type_page', 1);
		$config['total_rows'] = $this->db->count_all_results();
		$config['url_segment'] = 3;
		$config['per_page'] = 6;
		$config['num_links'] = 2;

		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';

		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';

		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';

		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';

		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['first_link'] = 'Первая';
		$config['last_link'] = 'Последняя';

		$this->pagination->initialize($config);
		$data['arhiv'] = $this->Get_model->arhiv($config['per_page'],$this->uri->segment(3));

		$this->load->view('head_view');
		$this->load->view('header_view',$data);
		$this->load->view('arhiv_view',$data);
		$this->load->view('footer_view');
	}
	public function uslugi_detail($id=0)
	{
		$this->load->model('Get_model');
		$data['uslugi_detail'] = $this->Get_model->uslugi_detail($id);
		$data['main_menu'] = $this->Get_model->md_menu(1);
		$data['uslugi'] = $this->Get_model->uslugi();

		$this->load->view('head_view');
		$this->load->view('header_view',$data);
		$this->load->view('uzi_view',$data);
		$this->load->view('footer_view');
	}
	public function about($id=0)
	{
		$this->load->model('Get_model');
		$data['main_menu'] = $this->Get_model->md_menu(1);

		$this->load->view('head_view');
		$this->load->view('header_view',$data);
		$this->load->view('about_view',$data);
		$this->load->view('footer_view');
	}

	public function check_captcha()
	{	
		$a=$this->input->post('text_captcha');
		if ($a==$_SESSION['captcha_key']) {
			echo '1';
		}
		else{
			redirect(base_url('index.php/Pages/results'),'refresh');
		}
	}

	public function medicoment_insert(){
		$this->load->model('Get_model');		
		$this->load->helper('string');
				
		$count_i=$this->input->post('count_i');
		$id_max=0;
		$sum=0;

		// 1 version start
		$this->db->select_max('id');
		$query = $this->db->get('ex_medic_patient');
		foreach ($query->result_array() as $q3) {
			$id_max=$q3['id'];
		}
		$id_max+=1;
		for ($i=0; $i < $count_i; $i++) { 
			$id_medic=$this->input->post('q'.$i);
			$query = $this->db->get_where('ex_medic_list_of_analisys', array('id' => $id_medic));
			foreach ($query->result_array() as $q1) {
				$data=array(
					'id_data' => $id_max,
					'id_analysys' => $q1['id'],
					'price' => $q1['price'],
				);
				$this->db->insert('ex_medic_patient_analysys', $data);
				$sum+=$q1['price'];
			}
		}

		$data=array(
			'name' => $this->input->post('fio'),
			'birthday' => $this->input->post('birthday'),
			'phone_number' => $this->input->post('phone_number'),
			'address' => $this->input->post('address'),
		);
		$this->db->insert('ex_medic_patient', $data);
		
		$data=array(
			'id_patient' => $id_max,
			'data' => date("Y-m-d"),
			'md5' => md5(random_string('alnum',8)),
			'sum' => $sum,
		);
		$this->db->insert('ex_medic_patient_data', $data);
		redirect(base_url('index.php/Pages/recipes'),'refresh');
		// 1 version end

		// 2 version start
		for ($i=0; $i < $count_i; $i++) { 

			// $id_medic=$this->input->post('q'.$i);
			// $data['medicoment_sql_zapros'] = $this->Get_model->medicoment_sql_zapros($id_medic);
			// foreach ($data['medicoment_sql_zapros'] as $m_s_z) {
			// 	echo $m_s_z['id'].'-'.$m_s_z['price'].'<br>';
			// }

		// $data=array(
		// 	'name' => $this->input->post('fio'),
		// 	'birthday' => $this->input->post('birthday'),
		// 	'phone_number' => $this->input->post('phone_number'),
		// 	'address' => $this->input->post('address'),
		// );
		// $this->db->insert('ex_medic_patient', $data);

		}
		// 2 version end

	}
	// public function example()
	// {
	// 	echo $_POST['fio'].'<br>';
	// 	echo $_POST['birthday'].'<br>';
	// 	echo $_POST['address'].'<br>';
	// 	echo $_POST['phone_number'];
	// }
	   //     function insert($id)
    // {   
    //     $data['e_mail'] = $_POST['fio']; 
    //     $data['e_mail']  = $_POST['birthday'];
    //     $data['e_mail']  = $_POST['address'];
    //     $data['e_mail']  = $_POST['phone.number'];
        
    //     $this->db->insert('assasas', $data);
    // }

}	