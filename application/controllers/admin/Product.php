<?php

class Product extends CI_Controller{

    function index(){

        $this->load->view('pages/admin/product');
    }
    function create(){
        $this->load->view('pages/admin/createProduct');
    }
}
?>