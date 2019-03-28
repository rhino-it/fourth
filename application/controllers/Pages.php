<?php
session_start();
if (isset($_SESSION['language'])!=true) $_SESSION['language'] = 'russian';
if (isset($_SESSION['user_login_check'])!=true) $_SESSION['user_login_check'] = 0;

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
	public function index($id=0)	{
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
	public function user_come_in()	{
		$this->load->model('Get_model');
		$user_login=$this->input->post('login');
		$user_password=$this->input->post('password');
		$user_password=md5($user_password);
		if (isset($user_login) && isset($user_password)) {
			$data['user_login_check'] = $this->Get_model->user_login_check($user_login,$user_password);
			if ($data['user_login_check']==1) {
				$_SESSION['user_login_check']=1;			
			}
			redirect(base_url('index.php/Pages/index'),'refresh');
		}
		else{
			redirect(base_url('index.php/Pages/index'),'refresh');	
		}
	}	
	public function user_go_out()	{
		$_SESSION['user_login_check']=0;			
		redirect(base_url('index.php/Pages/index'),'refresh');
	}	
	public function results($id=0)	{
		// CAPTCHA start
		$this->load->helper('captcha');
		$vals = array(
			'img_path'      => './assets/images/captcha/',
			'img_url'       => base_url().'assets/images/captcha/',
			'font_path'     => 'system/fonts/Roboto-Black.ttf',
			'img_width'     => '130',
			'img_height'    => 50,
			'expiration'    => 300,
			'word_length'   => 8,
			'font_size'     => 12,
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
	public function uzi($id=0)	{
		$this->load->model('Get_model');
		$this->load->view('head_view');
		$data['main_menu'] = $this->Get_model->md_menu(1);
		$this->load->view('header_view',$data);
		$this->load->view('uzi_view',$data);
		$this->load->view('footer_view');
	}
	public function phizio($id=0)	{
		$this->load->model('Get_model');
		$this->load->view('head_view');
		$data['main_menu'] = $this->Get_model->md_menu(1);
		$this->load->view('header_view',$data);
		$this->load->view('phizio_view',$data);
		$this->load->view('footer_view');
	}
	public function schedule($id=16)	{
		$this->load->model('Get_model');
		$this->load->view('head_view');
		$data['main_menu'] = $this->Get_model->md_menu(1);
		$data['schedule_model'] = $this->Get_model->schedule_model($id);
		$this->load->view('header_view',$data);
		$this->load->view('schedule_view',$data);
		$this->load->view('footer_view');
	}
	public function recipes($id=0)	{
		$_SESSION['counter_medic']=0;
		$this->load->model('Get_model');
		$data['main_menu'] = $this->Get_model->md_menu(1);
		$data['recipes_category'] = $this->Get_model->recipes_category();

		$this->load->view('head_view');
		$this->load->view('header_view',$data);
		$this->load->view('recipes_view',$data);
		$this->load->view('footer_view');
	}
	public function staff($id=0)	{
		$this->load->model('Get_model');
		$this->load->view('head_view');
		$data['main_menu'] = $this->Get_model->md_menu(1);
		$data['doctor_collective'] = $this->Get_model->doctor_collective();
		$this->load->view('header_view',$data);
		$this->load->view('staff_view');
		$this->load->view('footer_view');
	}
	public function doctor($id=0)	{
		$this->load->model('Get_model');
		$this->load->view('head_view');
		$data['main_menu'] = $this->Get_model->md_menu(1);
		$data['doctor'] = $this->Get_model->doctor($id);
		$this->load->view('header_view',$data);
		$this->load->view('doctor_view',$data);
		$this->load->view('footer_view');
	}
	public function page($id=0)	{
		$this->load->model('Get_model');
		$this->load->view('head_view');
		$data['main_menu'] = $this->Get_model->md_menu(1);
		$data['inf'] = $this->Get_model->inf($id);
		$data['uslugi'] = $this->Get_model->uslugi();
		$this->load->view('header_view',$data);
		$this->load->view('content_view',$data);
		$this->load->view('footer_view');
	}
	public function arhiv($id=0)	{
		$this->load->model('Get_model');
		$data['main_menu'] = $this->Get_model->md_menu(1);

		$config['base_url'] = base_url() . 'pages/arhiv/';


		$query =$this->db->query('SELECT * FROM ex_page WHERE id_type_page=1');

		$config['total_rows'] = $query->num_rows(); 
		$config['url_segment'] = 3;
		$config['per_page'] = 6;
		$config['num_links'] = 3;

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

		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';

		$this->pagination->initialize($config);

		$data['arhiv'] = $this ->Get_model->arhiv($config['per_page'], $this->uri->segment(3));


		$this->load->view('head_view');
		$this->load->view('header_view',$data);
		$this->load->view('arhiv_view',$data);
		$this->load->view('footer_view');
	}
	public function uslugi_detail($id=0)	{
		$this->load->model('Get_model');
		$data['uslugi_detail'] = $this->Get_model->uslugi_detail($id);
		$data['main_menu'] = $this->Get_model->md_menu(1);
		$data['uslugi'] = $this->Get_model->uslugi();

		$this->load->view('head_view');
		$this->load->view('header_view',$data);
		$this->load->view('uzi_view',$data);
		$this->load->view('footer_view');
	}
	public function about($id=0)	{
		$this->load->model('Get_model');
		$data['main_menu'] = $this->Get_model->md_menu(1);
		$data['about'] = $this->Get_model->about();

		$this->load->view('head_view');
		$this->load->view('header_view',$data);
		$this->load->view('about_view',$data);
		$this->load->view('footer_view');
	}
	public function check_captcha($random_code=0)	{	
		$random_code=$this->input->post('Codeword');
		$this->load->model('Get_model');	
		$data['code_check'] = $this->Get_model->code_md5_check($random_code);
		$a=$this->input->post('text_captcha');
		if ($a==$_SESSION['captcha_key'] && $data['code_check']==1) {
			$query = $this->db->get_where('ex_medic_patient_data', array('md5' => $random_code));
					foreach ($query->result_array() as $pdf) {
				redirect(base_url('assets/pdf/'.$pdf['result']),'refresh');
					}
			
		}
		else{
			redirect(base_url('index.php/Pages/results'),'refresh');
		}

	}





	public function add_result($id=0){
		if (isset($_POST['id_patients'])){

				$config['upload_path']          = './assets/pdf/';
                $config['allowed_types']        = 'pdf';
                $config['max_size']             = 3024;
                $config['encrypt_name']         = TRUE;
                $config['remove_spaces']         = TRUE;

		  $this->load->library('upload', $config);
		  $this->upload->do_upload('pdf_file');

		  $image_data=$this->upload->data();

		  $add_img['result'] = $image_data['file_name'];
		  // $add_img['vrem'] = $date['Y-m-d H:i:s'];
		  $this->db->where('id', $_POST['id_patients']);
		  $this->db->update('ex_medic_patient_data', $add_img);
		  redirect(base_url('index.php/Pages/patients'),'refresh');

		}
	}

	public function patients($id=0)
	{	



		$this->load->model('Get_model');
		$data['main_menu'] = $this->Get_model->md_menu(1);
		$config['base_url'] = base_url() . 'pages/patients/';
		if (isset($_POST['ot']) AND isset($_POST['do'])) {
			$config['total_rows'] = $this->Get_model->all_filter($_POST['ot'],$_POST['do']);
		}
			else{
				$config['total_rows'] = $this->db->count_all('ex_medic_patient_data');
			}
		

		$config['url_segment'] = 3;
		$config['per_page'] = 6;
		$config['num_links'] = 3;

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

		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';

		$this->pagination->initialize($config);


		if (isset($_POST['ot']) AND isset($_POST['do'])) {
		$data['ex_medic_patient_data'] = $this ->Get_model->pagination_filter($config['per_page'], $this->uri->segment(3),$_POST['ot'],$_POST['do']);
		}
		else{
		$data['ex_medic_patient_data'] = $this ->Get_model->pagination_services($config['per_page'], $this->uri->segment(3));
		}

		$this->load->view('head_view');
		$this->load->view('header_view',$data);
		$this->load->view('all_view',$data);
		$this->load->view('footer_view');
	}
	public function medicoment_insert(){
		$this->load->model('Get_model');		
		$this->load->helper('string');
		$count_i=$this->input->post('count_i');

		for ($i=0; $i <= $count_i; $i++) { 
			$_SESSION['q'.$i]=$this->input->post('q'.$i);
		}
		$_SESSION['name'] = $this->input->post('fio');
		$_SESSION['birthday'] = $this->input->post('birthday');
		$_SESSION['phone_number'] = $this->input->post('phone_number');
		$_SESSION['address'] = $this->input->post('address');

		if (isset($_SESSION['name'])!='' && isset($_SESSION['birthday'])!='' && isset($_SESSION['phone_number'])!='' && isset($_SESSION['address'])!='' && isset($_SESSION['q0'])!='') {
			$id_max=0;
			$sum=0;


			$random_code=random_string('alnum',8);
			$data['code_check'] = $this->Get_model->code_md5_check($random_code);

			if ($data['code_check']==0) {
				$this->db->select_max('id');
				$query = $this->db->get('ex_medic_patient');
				foreach ($query->result_array() as $q3) {
					$id_max=$q3['id'];
				}
				$id_max+=1;

				for ($i=0; $i < $count_i; $i++) { 
					$query = $this->db->get_where('ex_medic_list_of_analisys', array('id' => $_SESSION['q'.$i]));
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
					'name' => $_SESSION['name'],
					'birthday' => $_SESSION['birthday'],
					'phone_number' => $_SESSION['phone_number'],
					'address' => $_SESSION['address'],
				);
				$this->db->insert('ex_medic_patient', $data); 	

				$data=array(
					'id_patient' => $id_max,
					'data' => date("Y-m-d"),
					'md5' => $random_code,
					'sum' => $sum,
				);
				$this->db->insert('ex_medic_patient_data', $data);
				redirect(base_url('index.php/Pages/patients'),'refresh');

				$data=array(
					'id_patient' => $id_max,
					'data' => date("Y-m-d"),
					'md5' => $random_code,
					'sum' => $sum,
				);
				$this->db->insert('ex_medic_patient_data', $data);
				redirect(base_url('index.php/Pages/recipes'),'refresh');					
			}				
			else{
				redirect(base_url('index.php/Pages/medicoment_insert'),'refresh');
			}
		}
		else{
			redirect(base_url('index.php/Pages/recipes'),'refresh');
		}
	}
}	