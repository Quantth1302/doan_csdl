<?php
    class Cart extends CI_Controller{

        function index(){
            $this->load->view('pages/shop/shoppingcart');
        }
    }
?>