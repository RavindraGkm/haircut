<?php
class Login_model extends CI_Model {

    public  function  login_check($data){
        $this->load->database();
        $sql = "select * from user_login where email=? and password=?";
        $values = array($data['email'],$data['password']);
        $query=$this->db->query($sql,$values);
        $response=array();
        if($query->num_rows()>0) {
            $row = $query->row();
            $response['status']=200;
            $response['user_type']=$row->type;
            $this->load->library('session');
            $this->session->set_userdata(array('user_email' => $row->email));
        }
        else {
            $response['status']=401;
            $response['msg']="Wrong User-Name &amp; Password... ";
        }
        return $response;
    }
}
?>
