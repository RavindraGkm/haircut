<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Subscribe_email extends CI_Controller {
    public function index() {
        $this->load->database();
        $data['subscribe_email'] = $this->input->post('subscribe_email');
        $this->load->model('suscribe/Subscribe_model');
        $response=$this->Subscribe_model->subscribe_email($data);
        $this->db->close();
        echo json_encode($response);
    }
    public function show_subscribe_email()
    {
    	$this->load->helper('url');
    	$this->load->helper('html');
    	$this->load->view('subscribe/subscribe_panel');
    }
    public function show_all_subscribe_details()
    {
    	$this->load->library('session');
        if($this->session->has_userdata('user_email'))
        {
	    	$this->load->database();
	        $this->load->model('suscribe/Subscribe_model');
	        $response=$this->Subscribe_model->get_subscribe_details();
	        $this->db->close();
	        echo json_encode($response);
	    }
        else
        {
            $this->load->helper('html');
            $this->load->helper('url');
            redirect('login/login-page','location');
        }
    }
}
?>