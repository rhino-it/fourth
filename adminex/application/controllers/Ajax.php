<?php

session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

    public function index() {

        $this->load->view('adminex/user_view');
    }

    public function file_photo($lis = 0) {
        if (isset($_SESSION['ex_id_user']) == false || $_SESSION['ex_id_user'] == 0)
            header('Location: ' . base_url('adminex'));
        $_SESSION['url'] = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $this->lang->load('content', $lang = $_SESSION['ex_lg']);
        $data_select['ex_lg_Exit'] = $this->lang->line('ex_lg_Exit');

        $this->load->model('Select_model');
        $data_select['ex_lis'] = $lis;
        $data_select['ex_file'] = $this->Select_model->file_photo_aj($lis);

        $this->load->view('adminex/ajax/ex_photo_view', $data_select);
    }

    public function file_document($lis = 0) {
        if (isset($_SESSION['ex_id_user']) == false || $_SESSION['ex_id_user'] == 0)
            header('Location: ' . base_url('adminex'));
        $_SESSION['url'] = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $this->lang->load('content', $lang = $_SESSION['ex_lg']);
        $data_select['ex_lg_Exit'] = $this->lang->line('ex_lg_Exit');

        $this->load->model('Select_model');
        $data_select['ex_lis2'] = $lis;
        $data_select['ex_file2'] = $this->Select_model->file_doc_aj($lis);

        $this->load->view('adminex/ajax/ex_document_view', $data_select);
    }


    public function files_copy() {
        if ( 0 < $_FILES['file']['error'] ) {
           echo 'Error: ' . $_FILES['file']['error'];
        }
        else {

            $log = FALSE;
            $f = substr(strrchr($_FILES['file']['name'], '.'), 1);

            if ($f == 'doc' || $f == 'docx' || $f == 'pdf' || $f == 'ppt' || $f == 'pptx' || $f == 'xls' || $f == 'xlsx') $log = TRUE;
            if ($log == TRUE)
                $config['upload_path'] = '../assets/documents/';
            else
                $config['upload_path'] = '../assets/images/photos/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|doc|docx|pdf|ppt|pptx|xls|xlsx';
            
            $config['max_size'] = 3024;
            $config['encrypt_name'] = TRUE;
            $config['remove_spaces'] = TRUE;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {

                $data_select['ex_inf'] = $this->upload->display_errors('<p style="color:red">', '</p>');
            } else {
                $data_select['ex_inf'] = "Файл успешно загружен.";

                //--  begin Базага жазуу
                $image_data = $this->upload->data();
                //-- begin Манипуляции С Изображениями
                if ($log != TRUE) {
                    $config2 = array(
                        'image_library' => 'gd2',
                        'source_image' => $image_data['full_path'],
                        'new_image' => APPPATH . '../../assets/images/photos/thumb',
                        'create_thumb' => TRUE,
                        'maintain_ratio' => TRUE,
                        'width' => 400,
                        'height' => 400
                    );
                    $this->load->library('image_lib', $config2);
                    $this->image_lib->resize();
                }
                //-- end Манипуляции С Изображениями

                $add_img['fail'] = $image_data['file_name'];
                if ($log == TRUE) {
                    $add_img['fail_thumb'] = strtolower($f) . '.jpg';
                } else {
                    $add_img['fail_thumb'] = $image_data['raw_name'] . '_thumb' . $image_data['file_ext'];
                }

                $add_img['id_user'] = $_SESSION['ex_id_user'];
                $add_img['type'] = $log;
                //$add_img['name_kg'] = $_POST['exf_title'];
                //$add_img['name_ru'] = $_POST['exf_title'];
                //$add_img['name_en'] = $_POST['exf_title'];
                $add_img['vrem'] = date("Y-m-d H:i:s");

                $this->db->insert('ex_file', $add_img);
                
                //--  end Базага жазуу
            }



            //echo  'Ok';
        }
    }

}