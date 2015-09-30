<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Appointment extends CI_Controller {
    public function book_appointment() {        
        $this->load->library('session');
        $data['user_id']= $this->session->userdata('user_id');
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('appointment/book_panel',$data);
    }
    public function view_appointment() {
        $this->load->library('session');
        $data['user_id']= $this->session->userdata('user_id');
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('appointment/view_panel', $data);
    }
     public function book_my_appointment() {
        $this->load->database();
        $data['name'] = $this->input->post('name');
        $data['booking_date'] = $this->input->post('booking_date');
        $data['booking_with']=$this->input->post('booking_with');
        $data['booking_timing']=$this->input->post('booking_timing');
        $data['mobile']=$this->input->post('mobile');
        $data['user_id']=$this->input->post('user_id');
        $this->load->model('appointment/Appointment_model');
        $response=$this->Appointment_model->book_new_appointment($data);
        echo json_encode($response);
    }
    public function show_all_appointment(){
        $this->load->database();
        $data['user_id']=$this->input->get('user_id');
        $this->load->model('appointment/Appointment_model');
        $response=$this->Appointment_model->view_specific_appointments($data);
        $this->db->close();
        echo json_encode($response);
    }
    public function view_all_appointment() {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('appointment/view_all_appointment');
    }
    public function show_all_employees_appointment(){
        $this->load->database();
        $this->load->model('appointment/Appointment_model');
        $response=$this->Appointment_model->view_all_employees_appointments();
        $this->db->close();
        echo json_encode($response);
    }
    public function appointment_status_update_call(){
        $this->load->database();
        $data['status'] = $this->input->post('status');
        $data['appointment_id']=$this->input->post('appointment_tab_id');
        $this->load->model('appointment/Appointment_model');
        $response=$this->Appointment_model->appointment_status_update_call($data);
        echo json_encode($response);
    }
}

?>