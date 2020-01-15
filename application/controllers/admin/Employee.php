<?php

class Employee extends MY_Controller{
    
    function __construct(){
        parent:: __construct();
        $this->load->model('User_model');
    }

    function index(){
        $data = array();
		$data['employee'] = $this->User_model->getInfoEmployee();
      
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;

        $this->data['temp'] = 'admin/employee/index';    
        $this->load->view('pages/admin/employee/index',$data,$this->data);
    }

    function check_id(){

        $id = $this->input->post('id');
        $where = array('id' => $id);
        if($this->User_model->check_exists($where)){

            //tra ve thong bao loi
            $this->form_validation->set_message(__FUNCTION__,'This id already exists');
            return false;
        }else{
            return true;
        }
    }

    // function create(){
         
    //     $this->load->library('form_validation');
    //     $this->load->helper('form');
    //     //neu co du lieu up len thi kiem tra
    //     if($this->input->post()){
    //         $this->form_validation->set_rules('id','id','required|max_length[11]|callback_check_id');

    //         //Nhap lieu chinh xacs
    //         if($this->form_validation->run()){
    //             //them vao database
    //             $this->load->library('upload_library');
    //             $upload_path = 'assets/img/employee';
    //             $upload_data = $this->upload_library->upload($upload_path, 'image');  
    //             $image = '';
    //             if(isset($upload_data['file_name']))
    //             {
    //                 $image = $upload_data['file_name'];
    //             }
    //             $id     = $this->input->post('id');
    //             $name   = $this->input->post('name');
    //             $email = $this->input->post('email');
    //             $gender = $_POST['gender'];
    //             $sale_id = $_POST['sale_id'];
    //             $data = array(
    //                 'id'     => $id,
    //                 'age'    => $age,
    //                 'description' => $description,
    //                 'price'  => $price,
    //                 'species_id' => $species_id,
    //                 'gender' => $gender,
    //                 'sale_id' => $sale_id,
    //                 'image' => $image,
    //             );

    //             if($this->Pet_model->create($data)){
    //                 $this->session->set_flashdata('message','Insert Successfully !!!');
    //             }else{
    //                 $this->session->set_flashdata('message','insert Failed !!!');
    //             }
    //             // chuyen thong bao den trang admin
    //             redirect(base_url('admin/product'));
    //         }
    //     }
        
    //     $this->data['temp'] = 'admin/product/create';
    //     $this->load->view('pages/admin/product/createProduct',$this->data);
    // }

    function edit(){
        
        $id = $this->uri->rsegment('3');
        $id = strval($id);
        $employee = $this->User_model->get_info($id);
        if(!$employee)
        {
            //tạo ra nội dung thông báo
            $this->session->set_flashdata('message', 'This product is not exist');
            redirect(base_url('admin/employee'));
        }
        $this->data['employee'] = $employee;

        $this->load->library('form_validation');
        $this->load->helper('form');
        if($this->input->post()){
            $this->form_validation->set_rules('id','id','required|max_length[11]');

            //Nhap lieu chinh xacs
            if($this->form_validation->run()){
                //them vao database
                $this->load->library('upload_library');
                $upload_path = 'assets/img/employee';
                $upload_data = $this->upload_library->upload($upload_path, 'image');  
                $image = '';
                if(isset($upload_data['file_name']))
                {
                    $image = $upload_data['file_name'];
                }
                $id     = $this->input->post('id');
                $name   = $this->input->post('name');
                $gender = $_POST['gender'];
                $adress = $this->input->post('adress');
                $username = $this->input->post('username'); 
                $password = $this->input->post('password');
                $role_id = $_POST['role_id'];
                $data = array(
                    'id'     => $id,
                    'name'    => $name,
                    'gender' => $gender,
                    'adress'  => $adress,
                    'username' => $username,
                    'password' => $password,
                    'role_id' => $role_id,
                    'image' => $image,
                );

                if($this->User_model->update($employee->id,$data)){
                    $this->session->set_flashdata('message','Edit Successfully !!');
                }else{
                    $this->session->set_flashdata('message','Edit failed');
                }
                // chuyen thong bao den trang admin
                redirect(base_url('admin/employee'));
            }
        }
        $this->data['temp'] = 'admin/employee/edit';
        $this->load->view('pages/admin/employee/editEmployee',$this->data);
    }

    

    function delete($id){

        $id = $this->uri->rsegment('3');
        $id = strval($id);
        
        
        $info = $this->User_model->get_info($id);
        if(!$info){

            $this->session->set_flashdata('message','This employee is not exist !!! ');
            redirect(base_url('admin/employee'));
        }
        // xoa du lieu
        $this->User_model->delete_employee_id($id);
        $this->session->set_flashdata('message', 'Delete successfully !!!');
        redirect(base_url('admin/employee'));
    }
}
?>