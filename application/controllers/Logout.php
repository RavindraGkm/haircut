<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Logout extends CI_Controller {

    public function logout_panel() {
        $this->load->library('session');
        $this->session->sess_destroy();
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->view('logout/logout.php');
    }
       
}

?>