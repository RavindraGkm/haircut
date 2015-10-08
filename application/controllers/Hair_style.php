<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hair_style extends CI_Controller {
    public function try_hair_style() {
        $this->load->library('session');
        if($this->session->has_userdata('user_email'))
        {
            $this->load->database();
            $data['user_email']= $this->session->userdata('user_email');
            $this->load->helper('html');
            $this->load->helper('url');
            $this->load->model("hair_style/Hair_style_model");
            $response = $this->Hair_style_model->get_all_hair_styles();
            $data['hair_styles_info']=$response;
            $this->db->close();
            $this->load->view('hair_styles/try_hair_styles',$data);
        }
        else
        {
            //echo "not valid user";
            $this->load->helper('html');
            $this->load->helper('url');
            redirect('login/login-page','location');
        }
    }
    public function add_hair_style_details() {
        $this->load->library('session');
        if($this->session->has_userdata('user_email'))
        {
        if($this->input->get('error', TRUE)) {
            $data['error'] = $this->input->get('error');
        }
        if($this->input->get('msg', TRUE)) {
            $data['msg'] = $this->input->get('msg');
        }
        $this->load->library('session');
        $data['user_email']= $this->session->userdata('user_email');
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->view('hair_styles/add_hair_style_details',$data);
        }
        else
        {
            //echo "not valid user";
            $this->load->helper('html');
            $this->load->helper('url');
            redirect('login/login-page','location');
        }
    }
    public function add_hair_style_action() {
        $this->load->database();
        $this->load->helper('url');
        $config['upload_path'] = './assets/img/superbox/hair_styles/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $hair_style_image = time().'_'.$_FILES["hair_style_image"]['name'];
        $config['file_name'] = $hair_style_image;
        $this->load->library('upload', $config);
        $post_data['style_name'] = $this->input->post('style_name');
        $post_data['style_price'] = $this->input->post('style_price');
        if ($this->upload->do_upload('hair_style_image')) {
            $data = $this->upload->data();
            $hair_style_dummy_image = time().'_'.$_FILES["hair_style_image"]['name'];
            $config['file_name'] = $hair_style_dummy_image;
            $post_data['hair_style_image']= $data['file_name'];
            if ($this->upload->do_upload('hair_style_dummy_image')) {
                $data = $this->upload->data();
                $post_data['hair_style_dummy_image']= $data['file_name'];
                $this->load->model("hair_style/Hair_style_model");
                $response = $this->Hair_style_model->add_hair_style_info($post_data);
                redirect('hair-style/add-hair-style?msg=Styles addedd successfully');
            }
            else {
                unlink($config['upload_path'].$post_data['hair_style_image']);
                redirect('hair-style/add-hair-style?error=File upload error');
            }
        }
        else {
            redirect('hair-style/add-hair-style/?error=File upload error');
        }
        $this->db->close();
    }
    function add_styles () {
        $this->load->database();
        $sql= "insert into hair_styles (style_name, hair_style_image, hair_style_dummy_image, price) VALUES (?,?,?,?)";
        for($i=1;$i<=24;$i++) {
            $values= array('Style '.$i,'superbox-thumb-'.$i.'.jpg','superbox-full-'.$i.'.jpg', $i+1200);
            $this->db->query($sql,$values);
        }
        $this->db->close();
    }
    function upload_user_image() {
        $this->load->library('session');
        $data['user_email']= $this->session->userdata('user_email');
        $this->load->helper('url');
        $path_info = pathinfo($_FILES["user_image"]['name']);
        $extension=$path_info['extension'];
        $config['upload_path'] = './assets/img/user_images/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $hair_style_image = time().'_'.$data['user_email'].".".$extension;
        $config['file_name'] = $hair_style_image;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('user_image')) {
            $dd = $this->upload->data();
            echo json_encode(array('status'=>'success','image_path'=>base_url()."assets/img/user_images/".$dd['file_name']));
        }
    }
}

?>