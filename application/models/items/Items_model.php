<?php
class Items_model extends CI_Model {
    public function add_new_item($data) {
        $response=array();
        if($this->db->query("insert into item_details (item_category, item_name, item_code, d1, d2, d3, d4) values ('$data[category]', '$data[item_name]', '$data[item_code]', '$data[d1]', '$data[d2]', '$data[d3]', '$data[d4]')")) {
            $response['status']=200;
            $response['msg']="Item Added Successfully";
        }
        else{
            $response['status']=500;
            $response['msg']="Something Went Wrong...";
        }
        return $response;
    }
    public function show_all_item() {
        $query=$this->db->query("select * from item_details");
        $response=array();
        foreach($query->result() as $row) {
            $temp['id']=$row->id;
            $temp['item_category']=$row->item_category;
            $temp['item_name']=$row->item_name;
            $temp['item_code']=$row->item_code;
            $temp['d1']=$row->d1;
            $temp['d2']=$row->d2;
            $temp['d3']=$row->d3;
            $temp['d4']=$row->d4;
            $response[]=$temp;
        }
        return $response;
    }
    public function get_all_items_by_name($name) {
        $sql = "select * from item_details where item_name LIKE ?";
        $query=$this->db->query($sql,array("%".$name."%"));
        $response=array();
        foreach($query->result() as $row) {
            $temp = array('data'=>$row->id,'value'=>$row->item_name);
            $response[]=$temp;
        }
        return $response;
    }
    public function get_item_by_id($data){
        $query=$this->db->query("select * from item_details where id='$data[id]'");
        foreach($query->result() as $row){
            $temp['count']=1;
            $temp['id']=$row->id;
            $temp['item_category']=$row->item_category;
            $temp['item_name']=$row->item_name;
            $temp['item_code']=$row->item_code;
            $temp['d1']=$row->d1;
            $temp['d2']=$row->d2;
            $temp['d3']=$row->d3;
            $temp['d4']=$row->d4;
            $response=$temp;
        }
        return $response;
    }
    public function update_item($data) {
        $response=array();
        $sql = "update item_details set item_category=?, item_name=?, item_code=?, d1=?, d2=?, d3=?, d4=? where id=?";
        if($this->db->query($sql,array($data['category'],$data['item_name'],$data['item_code'],$data['d1'],$data['d2'],$data['d3'],$data['d4'],$data['item_id']))) {
            $response['status']=200;
            $response['msg']="Item Updated Successfully";
        }
        else{
            $response['status']=500;
            $response['msg']="Something Went Wrong...";
        }
        return $response;
    }
}
?>