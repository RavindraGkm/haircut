<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    public function index() {
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->database();
        $this->load->model('employee/Employee_model');
        $response=$this->Employee_model->get_all_employees_name();
        $this->db->close();
        $data['employees'] = $response;
        $this->load->view('home/home_panel.php',$data);
    }
}
?>