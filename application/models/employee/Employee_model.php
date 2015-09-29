<?php
class Employee_model extends CI_Model {
    public function add_new_employee($data) 
    {
        $response=array();
        $birth_date = new DateTime($data['mydate']);
        $birth_date = $birth_date->format('Y-m-d');
        $sql= "INSERT INTO `add_employee` (name, mydate, address, mobile, email) VALUES (?,?,?,?,?)";
        $values= array($data['name'],$birth_date,$data['address'],$data['mobile'], $data['email']);
        if($this->db->query($sql,$values))
        {
            $response['status']=200;
            $response['msg']="Employee Added Successfully";
            return $response;
        }
        else
        {
            $response['status']=500;
            $response['msg']="Something Went Wrong...";
            return $response;
        }

        return $response;
    }
    public function view_all_employees()
    {
        $response=array();
        $sql="select * from add_employee";
        $query=$this->db->query($sql);
        foreach($query->result() as $row){
            $temp['id']=$row->id;
            $temp['name']=$row->name;
            $temp['birth_date']=$row->mydate;
            $temp['address']=$row->address;
            $temp['mobile']=$row->mobile;
            $temp['email']=$row->email;
            $response[]=$temp;
        }
        return $response;
    }
}