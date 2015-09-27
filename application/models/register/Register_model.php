<?php
class Register_model extends CI_Model {
    public function add_new_user($data) 
    {
        $response=array();
        $birth_date = new DateTime($data['mydate']);
        $birth_date = $birth_date->format('Y-m-d');

        if($this->db->query("INSERT INTO `user_login` (name, mydate, address, mobile, username, password) VALUES ('$data[name]','$birth_date','$data[address]', '$data[mobile]','$data[username]','$data[password]')")) 
        {
            $response['status']=200;
            $response['msg']="User Added Successfully";
            return $response;
        }
        else{
            $response['status']=500;
            $response['msg']="Something Went Wrong...";
            return $response;
        }
    }
}