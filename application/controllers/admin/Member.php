<?php 
class Member extends CI_Controller{

    function index(){
        $this->load->view('pages/admin/member');
    }

    function create(){
        $this->load->view('pages/admin/createMember');
        
    }
}
?>