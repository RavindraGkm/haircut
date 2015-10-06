<?php
class Employee_model extends CI_Model {
    public function add_new_employee($data) 
    {
        $response=array();
        $birth_date = new DateTime($data['mydate']);
        $birth_date = $birth_date->format('Y-m-d');
        $sql= "INSERT INTO add_employee (name, mydate, address, mobile, email) VALUES (?,?,?,?,?)";
        $values= array($data['name'],$birth_date,$data['address'],$data['mobile'], $data['email']);
        if($this->db->query($sql,$values)) {
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
            $birth_date = new DateTime($row->mydate);
            $birth_date = $birth_date->format('d-M-Y');
            $temp['birth_date']=$birth_date;
            $temp['address']=$row->address;
            $temp['mobile']=$row->mobile;
            $temp['email']=$row->email;
            $temp['status']=$row->status;
            $response[]=$temp;
        }
        return $response;
    }
    public function get_all_employees_name()
    {
        $response=array();
        $sql="select * from add_employee";
        $query=$this->db->query($sql);
        foreach($query->result() as $row){
            $temp['name']=$row->name;
            $response[]=$temp;
        }
        return $response;
    }
    public function employee_status_update_call($data){
        $response=array();
        $sql= "UPDATE `add_employee` SET `status`=? WHERE id=? ";
        $values= array($data['status'],$data['employee_id']);
        if($this->db->query($sql,$values)) {
            $response['status']=200;
            $response['msg']="Updated Successfully";
            return $response;
        }
        else{
            $response['status']=500;
            $response['msg']="Something Went Wrong...";
            return $response;
        }
    }
}