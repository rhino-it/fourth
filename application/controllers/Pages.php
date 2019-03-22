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
}	