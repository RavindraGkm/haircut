<?php
class Hair_style_model extends CI_Model {
    public function add_hair_style_info($data) {
        $response = array();
        $sql = "INSERT INTO hair_styles (style_name, hair_style_image, hair_style_dummy_image, price,  gender) VALUES (?,?,?,?,?)";
        $values = array($data['style_name'], $data['hair_style_image'], $data['hair_style_dummy_image'], $data['style_price'], $data['gender']);
        if ($this->db->query($sql, $values)) {
            $response['status'] = 200;
            $response['msg'] = "Hair style info addedd successfully";
            return $response;
        } else {
            $response['status'] = 500;
            $response['msg'] = "Something Went Wrong...";
            return $response;
        }
    }
    public function get_all_hair_styles() {
        $response=array();
        $sql="select * from hair_styles";
        $query=$this->db->query($sql);
        foreach($query->result() as $row){
            $temp['style_name']=$row->style_name;
            $temp['hair_style_image']=$row->hair_style_image;
            $temp['hair_style_dummy_image']=$row->hair_style_dummy_image;
            $temp['price']=$row->price;
            $response[]=$temp;
        }
        return $response;
    }
    public function get_all_hair_styles_by_gender($gender) {
        $response=array();
        $sql="select * from hair_styles where gender=?";
        $values=array($gender);
        $query=$this->db->query($sql, $values);
        foreach($query->result() as $row){
            $temp['style_name']=$row->style_name;
            $temp['hair_style_image']=$row->hair_style_image;
            $temp['hair_style_dummy_image']=$row->hair_style_dummy_image;
            $temp['price']=$row->price;
            $response[]=$temp;
        }
        return $response;
    }
}   