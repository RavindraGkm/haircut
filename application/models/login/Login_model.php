<?php
class Login_model extends CI_Model {

    public  function  login_check($data){
        $this->load->database();
        $query=$this->db->query("select * from `user_login` where `username`='$data[username]' and `password`='$data[password]'");
        $response=array();
        if($query->num_rows()>0) {
            $row = $query->row();
            $response['status']=200;
            $response['user_type']=$row->type;
            $this->load->library('session');
            $this->session->set_userdata(array('user_email' => $row->username));
        }
        else{
            $response['status']=401;
            $response['msg']="Wrong User-Name & Password... ";
        }
        return $response;
    }
}
?>