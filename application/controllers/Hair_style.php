<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hair_style extends CI_Controller {
    public function try_hair_style() {
        $this->load->library('session');
        $data['user_email']= $this->session->userdata('user_email');
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('hair_styles/try_hair_styles',$data);
    }
}

?>