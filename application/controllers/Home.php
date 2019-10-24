<?php
	class Home extends CI_Controller{

		function __construct(){
			parent:: __construct();
			$this->load->model('Pet_model', 'm');
		}

		public function index($page = 'home'){
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}
			$data['pet'] = $this->m->getLastestPet();
			$this->load->view('pages/'.$page, $data);
		}
	}