<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    public function index() {
        $this->load->library('session');
        $this->session->sess_destroy();
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->view('home/home_panel.php');
    }
}
?>