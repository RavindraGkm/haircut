<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class User_profile extends CI_Controller {
    public function profile_page() {
        $this->load->library('session');
        $data['user_id']= $this->session->userdata('user_id');
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('profile/profile_panel',$data);
    }
    public function edit_page() {
        $this->load->library('session');
        $data['user_id']= $this->session->userdata('user_id');
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('profile/edit_panel',$data);
    }
    public function view_page() {
        $this->load->library('session');
        $data['user_id']= $this->session->userdata('user_id');
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('profile/profile_panel',$data );
    }
     public function show_user() {
        $this->load->database();
        $data['id']=$this->input->get('id');
        $this->load->model('user/User_model');
        $response=$this->User_model->get_user_by_id($data);
        $this->db->close();
        echo json_encode($response);
    }
    public function edit_user() {
        $this->load->database();
        $data['id']=$this->input->post('id');
        $data['name']=$this->input->post('name');
        $data['mydate'] = $this->input->post('mydate');
        $data['address'] = $this->input->post('address');
        $data['mobile']=$this->input->post('mobile');
        $data['username']=$this->input->post('username');
        $data['password']=$this->input->post('password');
        $this->load->model('user/User_model');
        $response = $this->User_model->update_user($data);
        echo json_encode($response);
    }
    public function show_all_user() {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('profile/show_user');
    }
    public function show_all_users_details(){
        $this->load->database();
        $this->load->model('user/User_model');
        $response=$this->User_model->view_all_users();
        $this->db->close();
        echo json_encode($response);
    }
    
}

?>