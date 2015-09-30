
<?php
class  User_model extends CI_Model {

	public function get_user_by_id($data){
        $query=$this->db->query("select * from user_login where id='$data[id]'");
        $response=array();
        if($query->num_rows()>0) {
            $row = $query->row();
            $response['name']=$row->name;
            $birth_date = new DateTime($row->mydate);
            $birth_date = $birth_date->format('d-M-Y');
            $response['mydate']=$birth_date;
            $response['address']=$row->address;
            $response['mobile']=$row->mobile;
            $response['username']=$row->username;
            $response['password']=$row->password;
        }
        return $response;
    }
    public function update_user($data) {
        $response=array();
        $birth_date = new DateTime($data['mydate']);
        $birth_date = $birth_date->format('Y-m-d');
        if($this->db->query("update user_login set name='$data[name]', mydate='$birth_date', address='$data[address]', mobile='$data[mobile]', username='$data[username]',password='$data[password]' where id='$data[id]'"))
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
    public function view_all_users(){
        $response=array();
        $sql="select * from user_login";
        $query=$this->db->query($sql);
        foreach($query->result() as $row){
            $temp['name']=$row->name;
            $birth_date = new DateTime($row->mydate);
            $birth_date = $birth_date->format('d-M-Y');
            $temp['birth_date']=$birth_date;
            $temp['address']=$row->address;
            $temp['mobile']=$row->mobile;
            $temp['username']=$row->username;
            $temp['password']=$row->password;
            $response[]=$temp;
        }
        return $response;
    }
}