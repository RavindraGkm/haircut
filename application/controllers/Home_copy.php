<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home_copy extends CI_Controller {
    public function index() {
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->view('home_copy/home_panel');
    }
}
?>