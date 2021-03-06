<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Select_model extends CI_Model {

    function pages($id = 0) {
        if ($_SESSION['ex_id_user'] > 0) {

            $this->db->order_by('id', 'DESC');
            if ($id != 0)
                $this->db->where('id', $id);
            $query = $this->db->get('ex_page');
            return $query->result_array();
        } else
            header('Location: ' . base_url());
    }

    function pagination_pages($num, $offset) {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('ex_page', $num, $offset);
        return $query->result_array();
    }

    function type_page($id = 0) {
        if ($_SESSION['ex_id_user'] > 0) {

            if ($id > 0)
                $this->db->where('id', $id);
            $query = $this->db->get('ex_type_page');
            return $query->result_array();
        } else
            header('Location: ' . base_url());
    }

    function user($user = '', $pass = '') {

        if ($user != '' && $pass != '') {
            $this->db->where('user', $user);
            $this->db->where('pass', md5($pass));
        }
        $query = $this->db->get('ex_user');
        return $query->result_array();
    }

    function type_user() {
        $query = $this->db->get('ex_type_user');
        return $query->result_array();
    }

    function pagination_file($num, $offset) {
        if ($_SESSION['ex_id_user'] > 0) {

            $this->db->order_by('id', 'DESC');
            $query = $this->db->get('ex_file', $num, $offset);
            return $query->result_array();
        } else
            header('Location: ' . base_url());
    }

    function file() {
        if ($_SESSION['ex_id_user'] > 0) {

            $this->db->order_by('id', 'DESC');
            $query = $this->db->get('ex_file');
            return $query->result_array();
        } else
            header('Location: ' . base_url());
    }

    function file_page($id_page = 0) {
        if ($_SESSION['ex_id_user'] > 0) {
            $this->db->select('*');
            $this->db->from('ex_file_page');
            $this->db->join('ex_file', 'ex_file.id = ex_file_page.id_file');
            $this->db->where('ex_file_page.id_page', $id_page);
            $query = $this->db->get();
            return $query->result_array();
        } else
            header('Location: ' . base_url());
    }

    function menu($id_parent = 0) {
        if ($_SESSION['ex_id_user'] > 0) {

            if ($id_parent > 0)
                $this->db->where('id_parent', $id_parent);
            $query = $this->db->get('ex_menu');
            return $query->result_array();
        } else
            header('Location: ' . base_url());
    }

    function type_menu() {
        $query = $this->db->get('ex_type_menu');
        return $query->result_array();
    }

}
