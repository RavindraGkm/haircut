<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Employee extends CI_Controller {
    public function employee_registration() {
        $this->load->library('session');
        if($this->session->has_userdata('user_email'))
        {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('employee_registor/registration');
        }
        else
        {
            //echo "not valid user";
            $this->load->helper('html');
            $this->load->helper('url');
            redirect('login/login-page','location');
        }
    }
    public function add_employee() {
        $this->load->database();
        $data['name'] = $this->input->post('name');
        $data['mydate'] = $this->input->post('birth_date');
        $data['address'] = $this->input->post('address');
        $data['mobile'] = $this->input->post('mobile');
        $data['email'] = $this->input->post('email');
        $this->load->model('employee/Employee_model');
        $response=$this->Employee_model->add_new_employee($data);
        $this->db->close();
        echo json_encode($response);
    }
    public function view_employee_details() {
        $this->load->library('session');
        if($this->session->has_userdata('user_email'))
        {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('employee_registor/view_employee');
        }
        else
        {
            //echo "not valid user";
            $this->load->helper('html');
            $this->load->helper('url');
            redirect('login/login-page','location');
        }
    }
    public function show_all_employees(){
        $this->load->database();
        $this->load->model('employee/Employee_model');
        $response=$this->Employee_model->view_all_employees();
        $this->db->close();
        echo json_encode($response);
    }
    public function get_employees_name(){
        $this->load->database();
        $this->load->model('employee/Employee_model');
        $response=$this->Employee_model->get_all_employees_name();
        $this->db->close();
        echo json_encode($response);
    }
    public function employee_status_update_call(){
        $this->load->database();
        $data['status'] = $this->input->post('status');
        $data['employee_id']=$this->input->post('employee_tab_id');
        $this->load->model('employee/Employee_model');
        $response=$this->Employee_model->employee_status_update_call($data);
        echo json_encode($response);
    }
                                        
}

?>