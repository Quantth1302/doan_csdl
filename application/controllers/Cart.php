<?php
    class Cart extends MY_Controller{
        function __construct()
		{
			parent:: __construct();
			$this->load->model('Pet_model');
		}

        function index(){
            $id = $this->uri->rsegment('2');
			$id = strval($id);
            $Pet = $this->Pet_model->getInfoPet($id);
            
		
            $this->data['Pett'] = $Pet;
			$this->data['temp'] = 'cart/index';
            $this->load->view('pages/shop/shoppingcart',$this->data);
        }

        function submit(){
            $id = $this->uri->rsegment('3');
			$id = strval($id);
            if($this->Pet_model->UpDatePet($id)){
                redirect(base_url('success'));
            }
            else{
                $this->session->set_flashdata('message','Edit failed');
            }

        }
    }
?>