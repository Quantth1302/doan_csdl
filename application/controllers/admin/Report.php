<?php
class Report extends MY_Controller{

    function __construct()
    {
        parent:: __construct();
        $this->load->model('Report_model');
    }

    function index(){
        
        $info = $this->Report_model->getInfoBill();
        prev($info);
        
    }
}

?>