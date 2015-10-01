<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Registration extends CI_Controller {
    public function registration_page() {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('registor/registration');
    }
    public function user_registration() {
        $this->load->database();
        $data['name'] = $this->input->post('name');
        $data['mydate'] = $this->input->post('mydate');
        $data['address'] = $this->input->post('address');
        $data['mobile'] = $this->input->post('mobile');
        $data['email'] = $this->input->post('email');
        $data['password'] = $this->input->post('password');
        $this->load->model('register/Register_model');
        $response=$this->Register_model->add_new_user($data);
        $this->db->close();
        echo json_encode($response);
    }
    
}

?>