<?php
class Contact_details extends CI_Model {

    public  function  new_contact_message($data){
        $response=array();
        date_default_timezone_set("Asia/Kolkata");
        $contact_date= date('Y-m-d');
        $sql= "INSERT INTO contact_us (name, mobile, email, subject, message, contact_date) VALUES (?,?,?,?,?,?)";
        $values= array($data['contact_name'],$data['contact_mobile'],$data['contact_email'],$data['contact_subject'], $data['contact_message'], $contact_date);
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
    public function get_contact_details(){
        $response=array();
        $sql="select * from contact_us";
        $query=$this->db->query($sql);
        foreach($query->result() as $row){
            $temp['id']=$row->id;
            $temp['name']=$row->name;
            $temp['mobile']=$row->mobile;
            $temp['email']=$row->email;
            $temp['subject']=$row->subject;
            $temp['message']=$row->message;
            $temp['contact_date']=$row->contact_date;
            $response[]=$temp;
        }
        return $response;

    }
}
?>
