<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Profile extends CI_Controller {

    public function view_profile() {
        $this->load->library('session');
        if($this->session->has_userdata('user_email'))
        {
            $data['user_email']= $this->session->userdata('user_email');
            $this->load->helper('html');
            $this->load->helper('url');
            $this->load->view('profile/profile_panel',$data);
        }
        else
        {
            //echo "not valid user";
            $this->load->helper('html');
            $this->load->helper('url');
            redirect('login/login-page','location');
        }
        
    }
    public function edit_profile() {
        $this->load->library('session');
        if($this->session->has_userdata('user_email'))
        {
            $data['user_email']= $this->session->userdata('user_email');
            $this->load->helper('html');
            $this->load->helper('url');
            $this->load->view('profile/edit_panel',$data);
        }
        else
        {
            //echo "not valid user";
            $this->load->helper('html');
            $this->load->helper('url');
            redirect('login/login-page','location');
        }
    }
    public function view_page() {
        $this->load->library('session');
        $data['user_id']= $this->session->userdata('user_id');
        $this->load->helper('html');
        $this->load->helper('url');
         // echo $data['user_id'];
        $this->load->view('profile/profile_panel',$data );
    }
     public function show_user() {
        $this->load->library('session');
        if($this->session->has_userdata('user_email'))
        {
            $this->load->database();
            $user_email=$this->input->get('user_email');
            $this->load->model('user/User_model');
            $response=$this->User_model->get_user_by_email($user_email);
            $this->db->close();
            echo json_encode($response);
        }
        else
        {
            //echo "not valid user";
            $this->load->helper('html');
            $this->load->helper('url');
            redirect('login/login-page','location');
        }
        
    }
    public function edit_user() {
        $this->load->database();
        $data['name']=$this->input->post('name');
        $data['birth_date'] = $this->input->post('birth_date');
        $data['address'] = $this->input->post('address');
        $data['mobile']=$this->input->post('mobile');
        $data['email']=$this->input->post('email');
        $data['password']=$this->input->post('password');
        $this->load->model('user/User_model');
        $response = $this->User_model->update_user($data);
        echo json_encode($response);
    }
    public function show_all_user() {
        $this->load->library('session');
        if($this->session->has_userdata('user_email'))
        {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('profile/show_user');
        }
        else
        {
            //echo "not valid user";
            $this->load->helper('html');
            $this->load->helper('url');
            redirect('login/login-page','location');
        }
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