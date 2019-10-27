<?php

class Login extends MY_Controller{

    function index(){   
      
        $this->load->library('form_validation');
        $this->load->helper('form');       
        if($this->input->post()){

            $this->form_validation->set_rules('login','login','callback_check_login');
            if($this->form_validation->run()){

                $this->session->set_userdata('login',true);// bien kiem tra login
                redirect(base_url('admin'));
            }
        }
        $this->load->view('pages/admin/login');
    }

    function check_login(){

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        // $password = md5($password);

        $this->load->model('User_model');
        $where = array('username'=>$username, 'password'=>$password);

        if($this->User_model->check_exists($where)){

            return true;
        }
        $this->form_validation->set_message(__FUNCTION__, 'Username hoăc password không chính xác');
        return false;      
    }
}