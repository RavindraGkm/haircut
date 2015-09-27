<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller
{
    public function admin_panel(){
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('admin/admin_panel');
    }
}
?>