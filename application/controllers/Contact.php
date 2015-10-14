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
    
       
}

?>