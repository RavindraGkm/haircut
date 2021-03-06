<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
    public function login_page() {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('login/login_panel');
    }
    public function login_check() {
        $this->load->database();
        $data['email'] = $this->input->post('email');
        $data['password'] = $this->input->post('password');
        $this->load->model('login/Login_model');
        $response=$this->Login_model->login_check($data);
        $this->db->close();
        echo json_encode($response);
    }
    public function login_with_fb() {
        $email = $this->input->post('email');
        $gender = $this->input->post('gender');
        $this->load->library('session');
        $this->load->helper('url');
        $this->session->set_userdata('user_email',$email);
        $this->session->set_userdata('is_fb_login',true);
        $this->session->set_userdata('gender',$gender);
        echo json_encode(array('status'=>200,'url'=>base_url()."hair-style/try-hair-style"));
    }
}
?>