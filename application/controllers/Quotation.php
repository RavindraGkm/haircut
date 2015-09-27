<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quotation extends CI_Controller
{
    public function add_quotation() {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('quotation/add_quotation');
    }
//    public function quotation_details() {
//        $this->load->helper('html');
//        $this->load->helper('url');
//        $this->load->view('quotation/quotation_details');
//    }
    public function view_all_quotations() {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('quotation/view_quotations');
    }
    public function get_all_quotations() {
        $this->load->database();
        $this->load->model("quotation/Quotation_model");
        $response=$this->Quotation_model->get_all_quotations();
        $this->db->close();
        echo json_encode($response);
    }
    public function create_quotation() {
        $this->load->database();
        $data['client_id'] = $this->input->post('client_id');
        $data['item_names'] = $this->input->post('item_name');
        $data['dim_1'] = $this->input->post('dim1');
        $data['dim_2'] = $this->input->post('dim2');
        $data['dim_3'] = $this->input->post('dim3');
        $data['dim_4'] = $this->input->post('dim4');
        $data['total'] = $this->input->post('total');
        $data['grand_total_sum'] = $this->input->post('grand_total_sum');
        $this->load->model('quotation/Quotation_model');
        $response=$this->Quotation_model->add_new_quotation($data);
        $this->db->close();
        if($response['status']==200) {
            $this->load->helper('url');
            redirect('quotation/print-quotation/'.$response['quotation_id']);
        }
    }
    public function print_quotation($quotation_id) {
        $this->load->database();
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->model('quotation/Quotation_model');
        $response=$this->Quotation_model->get_quotation_by_id($quotation_id);
        if($response['status']==200) {
            $this->load->view('quotation/print_quotation',$response);
        }
        $this->db->close();
    }
}
?>