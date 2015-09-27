<?php
class Appointment_model extends CI_Model {
    public function book_new_appointment($data) 
    {
        $response=array();
        $booking_date = new DateTime($data['booking_date']);
        $booking_date = $booking_date->format('Y-m-d');
        $status='pending';
        $sql= "INSERT INTO `booking_request` (name, booking_date, booking_with, booking_timing, mobile, status, user_id) VALUES (?,?,?,?,?,?,?)";
        $values= array($data['name'],$booking_date,$data['booking_with'],$data['booking_timing'], $data['mobile'],$status, $data['user_id']);
        if($this->db->query($sql,$values)) 
        {
            $response['status']=200;
            $response['msg']="Booking Done Successfully";
            return $response;
        }
        else{
            $response['status']=500;
            $response['msg']="Something Went Wrong...";
            return $response;
        }
    }
    public function view_specific_appointments($data)
    {
        $response=array();
        $sql="select * from booking_request where user_id=?";
        $values=array($data['user_id']);
        $query=$this->db->query($sql, $values);
        foreach($query->result() as $row){
            $temp['id']=$row->user_id;
            $temp['name']=$row->name;
            $temp['booking_date']=$row->booking_date;
            $temp['booking_with']=$row->booking_with;
            $temp['booking_timing']=$row->booking_timing;
            $temp['mobile']=$row->mobile;
            $temp['status']=$row->status;
            $response[]=$temp;
        }
        return $response;
    }
}   