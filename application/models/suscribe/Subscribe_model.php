<?php
class Subscribe_model extends CI_Model {

    public  function  subscribe_email($data){
        $response=array();
        date_default_timezone_set("Asia/Kolkata");
        $arrrival_date= date('Y-m-d');
        $status='suscribe';
        $sql= "INSERT INTO subscribe_email (subscribe_email, subscribe_date, status) VALUES (?,?,?)";
        $values= array($data['subscribe_email'],$arrrival_date, $status);
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
        public function get_subscribe_details()
        {
            $response=array();
            $sql="select * from subscribe_email";
            $query=$this->db->query($sql);
            foreach($query->result() as $row){
                $temp['id']=$row->id;
                $temp['email']=$row->subscribe_email;
                $temp['date']=$row->subscribe_date;
                $temp['status']=$row->status;
                $response[]=$temp;
            }
            return $response;
        }

    
    
}
?>
