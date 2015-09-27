<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Billing extends CI_Controller {
    public function new_bill(){
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('billing/create_new_bill');
    }
    public function create_bill() {

        $this->load->database();
        $data['client_id'] = $this->input->post('client_id');
        $data['billing_date'] = $this->input->post('billing_date');
        $data['item_names'] = $this->input->post('item_name');
        $data['dim_1'] = $this->input->post('dim1');
        $data['dim_2'] = $this->input->post('dim2');
        $data['dim_3'] = $this->input->post('dim3');
        $data['dim_4'] = $this->input->post('dim4');
        $data['total'] = $this->input->post('total');
        $data['total_bill_price'] = $this->input->post('total_bill_price');
        $data['mode_payment'] = $this->input->post('mode_payment');
        $data['discount_percent'] = $this->input->post('discount_percent');
        $data['discount_value'] = $this->input->post('discount_value');
        $data['amount'] = $this->input->post('amount');
        $data['vat_type'] = $this->input->post('vat_type');
        $data['vat_percent'] = $this->input->post('vat_percent');
        $data['vat_value'] = $this->input->post('vat_value');
        $data['total_payable_amount'] = $this->input->post('total_payable_amount');
        $data['advance'] = $this->input->post('advance');
        $data['balance'] = $this->input->post('balance');
        $this->load->model('billing/Billing_model');
        $response=$this->Billing_model->add_new_bill($data);
//        $this->db->close();
//        if($response['status']==200) {
//            $this->load->helper('url');
//            redirect('quotation/print-quotation/'.$response['quotation_id']);
//        }
    }

    public function view_all_bills() {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('billing/view_bills');
    }

    public function get_all_bills() {
        $this->load->database();
        $this->load->model("billing/Billing_model");
        $response=$this->Billing_model->get_all_bills();
        $this->db->close();
        echo json_encode($response);
    }

    public function print_bill($bill_id) {
        $this->load->database();
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->model('billing/Billing_model');
        $response=$this->Billing_model->get_bill_by_id($bill_id);
        if($response['status']==200) {
            $this->load->view('billing/print_bill',$response);
        }
        $this->db->close();
    }

}
?>