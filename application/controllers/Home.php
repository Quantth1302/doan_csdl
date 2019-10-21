<?php
	class Home extends CI_Controller{
		public function index($page = 'home'){
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}
			$this->load->view('pages/'.$page);
		}
	}