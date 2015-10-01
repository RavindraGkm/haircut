<?php
class  User_model extends CI_Model {

	public function get_user_by_email($email) {
        $response = array();
        $sql = "select * from user_login where email=?";
        $values = array($email);
        if($query=$this->db->query($sql,$values)) {
            if($query->num_rows()>0) {
                //$response = array('s'=>'a');
                $row = $query->row();
                $response['name']=$row->name;
                $birth_date = new DateTime($row->mydate);
                $birth_date = $birth_date->format('d-M-Y');
                $response['mydate']=$birth_date;
                $response['address']=$row->address;
                $response['mobile']=$row->mobile;
                $response['email']=$row->email;
                $response['password']=$row->password;
                //$response['count']=1;
            }
            /*else {
                $response['count']=0;
            }*/
        }
        else {
            $response['status']=501;
        }
        return $response;
    }
    public function update_user($data) {
        $response=array();
        $birth_date = new DateTime($data['birth_date']);
        $birth_date = $birth_date->format('Y-m-d');
        $sql = "update user_login set name=?, mydate=?, address=?, mobile=?,password=? where email=?";
        $values = array($data['name'],$birth_date,$data['address'],$data['mobile'],$data['password'],$data['email']);
        if($this->db->query($sql,$values)) {
            $response['status']=200;
            $response['msg']="Client Updated Successfully";
        }
        else {
            $response['status']=500;
            $response['msg']="Something Went Wrong...";
        }
        return $response;
    }
    public function view_all_users(){
        $response=array();
        $type=0;
        $sql="select * from user_login where type=?";
        $values=array($type);
        $query=$this->db->query($sql, $values);
        foreach($query->result() as $row){
            $temp['name']=$row->name;
            $birth_date = new DateTime($row->mydate);
            $birth_date = $birth_date->format('d-M-Y');
            $temp['birth_date']=$birth_date;
            $temp['address']=$row->address;
            $temp['mobile']=$row->mobile;
            $temp['username']=$row->email;
            $temp['password']=$row->password;
            $response[]=$temp;
        }
        return $response;
    }
}