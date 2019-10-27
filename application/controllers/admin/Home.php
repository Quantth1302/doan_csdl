<?php

class Home extends My_Controller{

    function index(){
        
        $this->load->view('pages/admin/home');
    }

    function logout(){

        if($this->session->userdata('login')){

            $this->session->unset_userdata('login');// xoa bien login o trang admin
        }
        redirect(base_url('login'));
    }
}
?>