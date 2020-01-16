<?php
class Report extends MY_Controller{

    function __construct()
    {
        parent:: __construct();
        $this->load->model('Report_model');
        $this->load->model('User_model');
        $this->load->model('Pet_model');
    }

    function index(){
        $data = array();
        $data['build'] = $this->Pet_model->getPetBuild();
        $data['role'] = $this->User_model->getRoleByUsername($this->session->userdata('login'));
           
        $this->load->view('pages/admin/report/today',$data);
        
    }

    function rp(){
        $data = array();
        $data['rp'] = $this->Report_model->getInfoBill();
        $data['role'] = $this->User_model->getRoleByUsername($this->session->userdata('login'));

        $this->load->view('pages/admin/report/reportDetail',$data);
       
    }

}

?>