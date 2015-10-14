<?php
class Contact_details extends CI_Model {

    public  function  new_contact_message($data){
        $response=array();
        $sql= "INSERT INTO contact_us (name, mobile, email, subject, message) VALUES (?,?,?,?,?)";
        $values= array($data['contact_name'],$data['contact_mobile'],$data['contact_email'],$data['contact_subject'], $data['contact_message']);
        if($this->db->query($sql,$values)) 
        {
            $response['status']=200;
            $response['msg']="Mesage Send Successfully";
            return $response;
        }
        else{
            $response['status']=500;
            $response['msg']="Something Went Wrong...";
            return $response;
        }

    }
}
?>
