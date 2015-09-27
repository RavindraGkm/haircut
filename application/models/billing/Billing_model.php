<?php
class Billing_model extends CI_Model {

    public function add_new_bill($data) {
        $response=array();
        $billing_date = new DateTime($data['billing_date']);
        $billing_date = $billing_date->format('Y-m-d');
        $sql = "insert into bills (client_id, bill_date, total_price, discount_percent, discount_value, amount, total_payable_amount, payment_mode, vat_type, vat_percent, vat_value, advance) values (?,?,?,?,?,?,?,?,?,?,?,?)";
        $values = array(
            $data['client_id'],
            $billing_date,
            $data['total_bill_price'],
            $data['discount_percent'],
            $data['discount_value'],
            $data['amount'],
            $data['total_payable_amount'],
            $data['mode_payment'],
            $data['vat_type'],
            $data['vat_percent'],
            $data['vat_value'],
            $data['advance']
        );
        if($this->db->query($sql,$values)) {
            $bill_id=$this->db->insert_id();
            for($i=0;$i<count($data['item_names']);$i++) {
                if($data['item_names'][$i]!='') {
                    $sql = "insert into bill_details (bill_id, item_name, dim_1, dim_2, dim_3, dim_4, total) values (?,?,?,?,?,?,?)";
                    $values = array($bill_id,$data['item_names'][$i],$data['dim_1'][$i],$data['dim_2'][$i],$data['dim_3'][$i],$data['dim_4'][$i],$data['total'][$i]);
                    $this->db->query($sql,$values);
                }
            }
            $response['quotation_id']=$bill_id;
            $response['status']=200;
        }
        else {
            $response['status']=500;
        }
        return $response;
    }
    public function get_all_bills() {
        $response=array();
        $sql = "select bills.id,bills.bill_date,bills.total_payable_amount,clients_details.client_name from bills INNER JOIN clients_details ON clients_details.id=bills.client_id";
        if($query=$this->db->query($sql)) {
            foreach($query->result() as $row) {
                $temp['client_name']= $row->client_name;
                $temp['id']= $row->id;
                $temp['bill_date']=$row->bill_date;
                $temp['total_payable_amount']=$row->total_payable_amount;
                $bills[]=$temp;
            }
            $response['status']=200;
            $response['bills']=$bills;
        }
        else {
            $response['status']=500;
        }
        return $response;
    }
    public function get_bill_by_id($bill_id) {
        $response=array();
        $bill_details=array();

        $sql = "select * from bills INNER JOIN clients_details ON clients_details.id=bills.client_id where bills.id=? ";
        $values = array($bill_id);
        $bill_client_details = array();
        if($query=$this->db->query($sql,$values)) {
            $row=$query->row();
            $bill_client_details['client_name'] = $row->client_name;
            $bill_client_details['client_address'] = $row->client_address;
            $bill_client_details['client_contact'] = $row->client_contact;
            $bill_client_details['total_price']=$row->total_price;
            $bill_client_details['discount_percent']=$row->discount_percent;
            $bill_client_details['discount_value']=$row->discount_value;
            $bill_client_details['amount']=$row->amount;
            $bill_client_details['vat_percent']=$row->vat_percent;
            $bill_client_details['vat_value']=$row->vat_value;
            $bill_client_details['total_payable_amount']=$row->total_payable_amount;
            $bill_client_details['payment_mode']=$row->payment_mode;
            $bill_client_details['bill_id']=$row->id;
            $bill_client_details['bill_date']=$row->bill_date;
            $response['bill_and_client_details'] = $bill_client_details;
        }
        $sql = "select * from bill_details where bill_id= ? ";
        $values = array($bill_id);
        if($query=$this->db->query($sql,$values)) {
            foreach($query->result() as $row) {
                $temp['bill_id']=$row->bill_id;
                $temp['item_name']=$row->item_name;
                $temp['dim_1']=$row->dim_1;
                $temp['dim_2']=$row->dim_2;
                $temp['dim_3']=$row->dim_3;
                $temp['dim_4']=$row->dim_4;
//                $temp['quantity']=$row->quantity;
                $temp['total']=$row->total;
                $bill_details[]=$temp;
            }
            $response['status']=200;
            $response['bill_details']=$bill_details;
        }
        else {
            $response['status']=500;
        }
        return $response;
    }
}
?>