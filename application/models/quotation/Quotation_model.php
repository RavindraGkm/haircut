<?php
class Quotation_model extends CI_Model {

    public function add_new_quotation($data) {
        $response=array();
        $sql = "insert into quotations (clients_id, quotation_date , total_amount) values (?,?,?)";
        $values = array($data['client_id'],date('Y-m-d'),$data['grand_total_sum']);
        if($this->db->query($sql,$values)) {
            $quotation_id=$this->db->insert_id();
            for($i=0;$i<count($data['item_names']);$i++) {
                if($data['item_names'][$i]!='') {
                    $sql = "insert into quotations_details (quotations_id, item_name, dim_1, dim_2, dim_3, dim_4, total) values (?,?,?,?,?,?,?)";
                    $values = array($quotation_id,$data['item_names'][$i],$data['dim_1'][$i],$data['dim_2'][$i],$data['dim_3'][$i],$data['dim_4'][$i],$data['total'][$i]);
                    $this->db->query($sql,$values);
                }
            }
            $response['quotation_id']=$quotation_id;
            $response['status']=200;
        }
        else {
            $response['status']=500;
        }
        return $response;
    }
    public function get_all_quotations() {
        $response=array();
        $sql = "select quotations.id,quotations.quotation_date,quotations.total_amount,clients_details.client_name from quotations INNER JOIN clients_details ON clients_details.id=quotations.clients_id";
        if($query=$this->db->query($sql)) {
            foreach($query->result() as $row) {
                $temp['client_name']= $row->client_name;
                $temp['id']= $row->id;
                $temp['quotation_date']=$row->quotation_date;
                $temp['total_amount']=$row->total_amount;
                $quotations[]=$temp;
            }
            $response['status']=200;
            $response['quotations']=$quotations;
        }
        else {
            $response['status']=500;
        }
        return $response;
    }
    public function get_quotation_by_id($quotation_id) {
        $response=array();
        $quotation_details=array();
        $sql = "select * from quotations INNER JOIN clients_details ON clients_details.id=quotations.clients_id where quotations.id=? ";
        $values = array($quotation_id);
        $quot_client_details = array();
        if($query=$this->db->query($sql,$values)) {
            $row=$query->row();
            $quot_client_details['client_name'] = $row->client_name;
            $response['quotation_and_client_details'] = $quot_client_details;
        }
        $sql = "select * from quotations_details where quotations_id= ? ";
        $values = array($quotation_id);
        if($query=$this->db->query($sql,$values)) {
            foreach($query->result() as $row) {
                $temp['item_name']=$row->item_name;
                $temp['dim_1']=$row->dim_1;
                $temp['dim_2']=$row->dim_2;
                $temp['dim_3']=$row->dim_3;
                $temp['dim_4']=$row->dim_4;
                $temp['total']=$row->total;
                $quotation_details[]=$temp;
            }
            $response['status']=200;
            $response['quotation_details']=$quotation_details;
        }
        else {
            $response['status']=500;
        }
        return $response;
    }
}
?>