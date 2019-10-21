<?php
	class Shop extends CI_Controller{
		public function view($shop = 'shop'){
			if(!file_exists(APPPATH.'views/pages/'.$shop.'.php')){
				show_404();
			}
			$this->load->view('pages/'.$shop);
		}
	}