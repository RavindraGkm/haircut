<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Contact extends CI_Controller {

    public function index() {
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->view('contact/contact_panel.php');
    }
    public function contact_details() {
        $this->load->database();
        $data['contact_name'] = $this->input->post('contact_name');
        $data['contact_mobile'] = $this->input->post('contact_mobile');
        $data['contact_email'] = $this->input->post('contact_email');
        $data['contact_subject'] = $this->input->post('contact_subject');
        $data['contact_message'] = $this->input->post('contact_message');
        $this->load->model('contact/Contact_details');
        $response=$this->Contact_details->new_contact_message($data);
        $this->db->close();
        echo json_encode($response);
    }
    public function show_contact_details() {
        $this->load->library('session');
        if($this->session->has_userdata('user_email'))
        {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('contact/show_contact_details.php');
        }
        else
        {
            //echo "not valid user";
            $this->load->helper('html');
            $this->load->helper('url');
            redirect('login/login-page','location');
        }
    }
    public function show_all_contact_details(){
        $this->load->database();
        $this->load->model('contact/Contact_details');
        $response=$this->Contact_details->get_contact_details();
        $this->db->close();
        echo json_encode($response);
    }
    
       
}

?>