<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
    public function login_page() {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('login/login_panel');
    }
    public function login_check(){
        $this->load->database();
        $data['username'] = $this->input->post('username');
        $data['password'] = $this->input->post('password');
        $this->load->model('login/Login_model');
        $response=$this->Login_model->login_check($data);
        $this->db->close();
        echo json_encode($response);
    }
}

?>