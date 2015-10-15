<?php
class Suscribe_email extends CI_Model {

    public  function  suscribe_email($data){
        $response=array();
        date_default_timezone_set("Asia/Kolkata");
        $arrrival_date= date('Y-m-d');
        $status='suscribe';
        $sql= "INSERT INTO contact_us (suscribe_email, arrrival_date, status) VALUES (?,?,?,?)";
        $values= array($data['suscribe_email'],$arrrival_date, $status);
        if($this->db->query($sql,$values)) 
        {
            $response['status']=200;
            $response['msg']="Email Saved Successfully";
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
