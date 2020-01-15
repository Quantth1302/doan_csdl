<?php
	class Shop extends MY_Controller{

		function __construct()
		{
			parent:: __construct();
			$this->load->model('Pet_model');
		}

		public function index($shop = 'shop'){
			if(!file_exists(APPPATH.'views/pages/shop/'.$shop.'.php')){
				show_404();
			}
			$data = array();
			$data['pets'] = $this->Pet_model->getLastestPet();
			$data['petsale'] = $this->Pet_model->getPetSale();
			$this->load->view('pages/shop/'.$shop,$data);
		}

		public function pet_detail(){
        
			$id = $this->uri->rsegment('3');
			$id = strval($id);
			$Pet = $this->Pet_model->getInfoPet($id);
			
			$this->data['Pett'] = $Pet;
			$this->data['temp'] = 'product/pet_detail';
			$this->load->view('pages/shop/single_product',$this->data);
		}

		public function cart(){
			$id = $this->uri->rsegment('3');
			$id = strval($id);
            $Pet = $this->Pet_model->getInfoPet($id);
           
		
            $this->data['Pett'] = $Pet;
			$this->data['temp'] = 'cart/index';
            $this->load->view('pages/shop/shoppingcart',$this->data);
		}
	}