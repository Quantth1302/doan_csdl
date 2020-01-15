<?php
	class Home extends CI_Controller{

		function __construct(){
			parent:: __construct();
			$this->load->model('Pet_model');
		}

		public function index($page = 'home'){
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}
			$data = array();
			$data['pets'] = $this->Pet_model->getLastestPet();

			$this->load->view('pages/'.$page, $data);
		}
	}