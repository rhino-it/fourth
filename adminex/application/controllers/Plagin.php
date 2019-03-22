<?php
session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Plagin extends CI_Controller {

    public function index() {
        if (isset($_SESSION['ex_id_user']) == false || $_SESSION['ex_id_user'] == 0)
            header('Location: ' . base_url('adminex'));

        $_SESSION['url'] = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $this->lang->load('content', $lang = $_SESSION['ex_lg']);
        $data_select['ex_lg_Exit'] = $this->lang->line('ex_lg_Exit');
        $this->load->model('Select_model');
        $data_select['ex_type_page'] = $this->Select_model->type_page();
        $data_select['ex_news_tema'] = $this->Select_model->news_tema();
        $data_select['ex_file'] = $this->Select_model->file_photo();
        $data_select['ex_menu1'] = 'm50';
        $data_select['ex_menu2'] = 'm51';
        $this->load->view('adminex/head_view');
        $this->load->view('adminex/header_view', $data_select);
        $this->load->view('adminex/menu_view', $data_select);
        
        $this->load->view('plagin/plagin_view');       
        $this->load->view('adminex/footer_view');
    }

    public function page() {
        
    }

     
}
