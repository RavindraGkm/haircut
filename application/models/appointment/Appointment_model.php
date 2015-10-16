<?php
class Appointment_model extends CI_Model {
    public function book_new_appointment($data) {
        $response=array();
        $booking_date = new DateTime($data['booking_date']);
        $booking_date = $booking_date->format('Y-m-d');
        $status='pending';
        $sql= "INSERT INTO booking_request (name, booking_date, booking_with, booking_timing, mobile, service, user_email, status) VALUES (?,?,?,?,?,?,?,?)";
        $values= array($data['name'],$booking_date,$data['booking_with'],$data['booking_timing'], $data['mobile'], $data['service'], $data['user_email'], $status);
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
    public function get_user_appointments_by_email($email) {
        $response=array();
        $sql="select br.user_email, br.name, br.booking_date, br.booking_timing, ae.name as booking_with_name, br.mobile, br.status from booking_request as br INNER JOIN add_employee as ae ON ae.id=br.booking_with";
        $values=array($email);
        $query=$this->db->query($sql, $values);
        foreach($query->result() as $row){
            $temp['user_email']=$row->user_email;
            $temp['name']=$row->name;
            $booking_date = new DateTime($row->booking_date);
            $booking_date = $booking_date->format('d-M-Y');
            $temp['booking_date']=$booking_date;
            $temp['booking_with']=$row->booking_with_name;
            $temp['booking_timing']=$row->booking_timing;
            $temp['mobile']=$row->mobile;
            $temp['status']=$row->status;
            $response[]=$temp;
        }
        return $response;
    }
    public function view_all_employees_appointments() {
        $response=array();
        $sql="select br.id, br.name as customer_name, ae.name, br.booking_date, br.booking_timing, br.mobile, br.status, br.service from booking_request as br INNER JOIN add_employee as ae ON ae.id=br.booking_with";
        $query=$this->db->query($sql);
        foreach($query->result() as $row){
            $temp['id']=$row->id;
            $temp['customer_name']=$row->customer_name;
            $booking_date = new DateTime($row->booking_date);
            $booking_date = $booking_date->format('d-M-Y');
            $temp['booking_date']=$booking_date;
            $temp['booking_with']=$row->name;
            $temp['booking_timing']=$row->booking_timing;
            $temp['mobile']=$row->mobile;
            $temp['service']=$row->service;
            $temp['status']=$row->status;
            $response[]=$temp;
        }
        return $response;
    }
    public function appointment_status_update_call($data){
        $response=array();
        $sql= "UPDATE booking_request SET status=? WHERE id=?";
        $values= array($data['status'],$data['appointment_id']);
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