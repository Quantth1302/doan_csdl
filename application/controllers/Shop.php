<?php
	class Shop extends CI_Controller{
		public function index($shop = 'shop'){
			if(!file_exists(APPPATH.'views/pages/shop/'.$shop.'.php')){
				show_404();
			}
			$this->load->view('pages/shop/'.$shop);
		}
	}