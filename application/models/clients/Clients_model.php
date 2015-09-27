<?php
class Clients_model extends CI_Model {
    public function add_new_client($data) {
        $response=array();
        if($this->db->query("INSERT INTO clients_details (client_name, client_contact, client_address) VALUES ('$data[f_name]','$data[c_contact]','$data[c_address]')")) {
            $response['status']=200;
            $response['msg']="Client Added Successfully";
        }
        else{
            $response['status']=500;
            $response['msg']="Something Went Wrong...";
        }
        return $response;
    }

    public function show_all_client(){
        $query=$this->db->query("select * from clients_details");
        $response=array();
        foreach($query->result() as $row){
            $temp['id']=$row->id;
            $temp['client_name']=$row->client_name;
            $temp['client_contact']=$row->client_contact;
            $temp['client_address']=$row->client_address;
            $response[]=$temp;
        }
        return $response;
    }
    public function get_all_clients_by_name($name) {
        $sql = "select * from clients_details where client_name LIKE ?";
        $query=$this->db->query($sql,array("%".$name."%"));
        $response=array();
        foreach($query->result() as $row) {
            $temp = array('data'=>$row->id,'value'=>$row->client_name);
            $response[]=$temp;
        }
        return $response;
    }
    public function get_client_by_id($data){
        $query=$this->db->query("select * from clients_details where id='$data[id]'");
        foreach($query->result() as $row){
            $temp['count']=1;
            $temp['id']=$row->id;
            $temp['client_name']=$row->client_name;
            $temp['client_contact']=$row->client_contact;
            $temp['client_address']=$row->client_address;
            $response=$temp;
        }
        return $response;
    }
    public function update_client($data) {
        $response=array();
        if($this->db->query("update clients_details set client_name='$data[client_name]', client_contact='$data[client_contact]', client_address='$data[client_address]'where id='$data[client_id]'"))
        {
            $response['status']=200;
            $response['msg']="Client Updated Successfully";
        }
        else{
            $response['status']=500;
            $response['msg']="Something Went Wrong...";
        }
        return $response;
    }
}
?>