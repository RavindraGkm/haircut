<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Employee extends CI_Controller {
    public function employee_registration() {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('employee_registor/registration');
    }
    public function add_employee() {
        $this->load->database();
        $data['name'] = $this->input->post('name');
        $data['mydate'] = $this->input->post('mydate');
        $data['address'] = $this->input->post('address');
        $data['mobile'] = $this->input->post('mobile');
        $data['email'] = $this->input->post('email');
        $this->load->model('employee/Employee_model');
        $response=$this->Register_model->add_new_employee($data);
        $this->db->close();
        echo json_encode($response);
    }
    public function view_employee_details() {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('employee_registor/view_employee');
    }
    public function show_all_employees(){
        $this->load->database();
        $this->load->model('employee/Employee_model');
        $response=$this->Employee_model->view_all_employees();
        $this->db->close();
        echo json_encode($response);
    }
}

?>