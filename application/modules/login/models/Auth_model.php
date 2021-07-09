<?php

if (!defined('BASEPATH')) {
    exit('No Direct Script access allowed');
}

class Auth_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    
    // ============== Admin Logic Code start ===========
     
    public function validate_admin_login() {
        
        $username = $this->input->post('txtemail');
        $password = $this->input->post('txtpassword');

        $this->db->select('*')->from('admin');
        $this->db->where('email', $username);
        $this->db->where('password', md5($password));
        return $this->db->get()->row();
    }

    public function admin_profile($id) {
        $this->db->select('*')->from('admin');
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }


    public function save_admin_profile($image) {

        $id = $this->input->post('txtid');
        $array['fname'] = $this->input->post('txtfname');
        $array['lname'] = $this->input->post('txtlname');
        $array['phone'] = $this->input->post('txtcontactno');
        $array['email'] = $this->input->post('txtemail');
        $array['modification_date'] = date('Y-m-d H:i:s');
        if($image != ""){
            $array['image'] = $image;
        }
        $this->db->where('id', $id);
        return $this->db->update('admin', $array);
    }

     public function change_admin_password($id, $oldpass, $array) {

        $msg = "error";
        $this->db->where('id', $id);
        $this->db->where('password', md5($oldpass));
        $this->db->select('*')->from('admin');        
        $retdata = $this->db->get()->row();

        if(!empty($retdata)){
            $this->db->where('id', $id);
            $this->db->update('admin', $array);
            $msg = "success";
        }
        else{
            $msg = "oldpass";
        }
        return $msg;
    }

    // ============== User(male/female) Logic Code start ===========

    public function validate_register_email($email)  {
        // $this->db->where('status !=', -1); //check for profile delete
        $this->db->where('email', $email);
        $this->db->select('*');
        $this->db->from('user');
        $query = $this->db->get();

        return $result = $query->row();     
    }

    public function validate_register_username($username)  {
        // $this->db->where('status !=', -1); //check for profile delete
        $this->db->where('username', $username);
        $this->db->select('*');
        $this->db->from('user');
        $query = $this->db->get();

        return $result = $query->row();     
    }


    public function user_register($role) {

        $email = $_SESSION['fSignup']['email'];
        $username = $_SESSION['fSignup']['username'];
        $password = $_SESSION['fSignup']['password'];
        $location = $_SESSION['fSignup']['location'];
        $age = $_SESSION['fSignup']['age'];
        $bodytype = $_SESSION['fSignup']['bodytype'];
        $ethnicity = $_SESSION['fSignup']['ethnicity'];
        $tall = trim($this->input->post('tall'));
        $education = trim($this->input->post('education'));
        $smoke = trim($this->input->post('smoke'));
        $occupation = trim($this->input->post('occupation'));

        $array = array(
            'usercode' => "SECTIM".substr(time(), -6),
            'role' => $role,             
            'name' => $username,             
            'name' => $username,             
            'username' => $username,            
            'email' => $email,
            'password' => md5($password),
            'location' => $location,
            'age' => $age,
            'bodytype' => $bodytype,
            'ethnicity' => $ethnicity,
            'tall' => $tall,
            'education' => $education,
            'smoke' => $smoke,
            'occupation' => $occupation,
            'status' => 1,
            'creation_date' => date('Y-m-d H:i:s'),
            'modification_date' => date('Y-m-d H:i:s') 
        );

        $register = $this->db->insert('user', $array);
        return  $this->db->insert_id();
    }

     public function user_profile($id)  {

        $this->db->where('id', $id);
        $this->db->select('*');
        $this->db->from('user');
        $query = $this->db->get();
        return $query->row();
    }


     public function user_login()  {

        $username=$this->input->post('username');
        $password=md5($this->input->post('password'));

        $this->db->where('status !=', -1);
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->select('*');
        $this->db->from('user');
        $query = $this->db->get();
        return $query->row();
    }


     public function send_mail_forgot_password() {
        
        $username = $this->input->post('username');
       
        $this->db->select('*')->from('user');
        $this->db->where('username', $username);
        return $this->db->get()->row();
    }

     public function setForgotOTP($username, $otp){
   
        $data = array(
            'otp_validator'=> $otp,
            'modification_date' => date('Y-m-d H:i:s')
        );
        $this->db->where('username', $username);
        return $this->db->update('user', $data);
    }
    
    
   public function change_user_password() {
        
        $otp = $this->input->post('otp');
        $password = $this->input->post('password');
         
        $this->db->select('*');
        $this->db->where("otp_validator", $otp);
        $result = $this->db->get('user')->row();
        
        if($result){
            $data=array(
                'otp_validator'=> '',
                'password'=> md5($password),
                'modification_date' => date('Y-m-d H:i:s')
            );
            
            $this->db->where('otp_validator', $otp);
            $this->db->update('user', $data);
            
            $fPassword['fPassword'] = [];
            $this->session->set_userdata($fPassword);

            return 'success';
        }
        else{
            return 'otp';
        }
        
        return NULL;
        
    } 
 
}

