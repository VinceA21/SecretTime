<?php

/*

project Name  : Secret time
Author        : Manjeet Kumar
Last Modified : july 7, 2021

This module related to user authentication either admin or either user (Male/Female) to enter in dashboard

*/

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    function __construct() {
        parent:: __construct();
        $this->load->model('auth_model');
	      $this->lang->load('login');
    }

    /* Admin Backend Code Start */

    // Load admin login page
    public function login() {
      $this->load->view('login-admin');
    }

    // Login Admin dashboard
    public function login_admin(){    
      
      $this->form_validation->set_rules('txtemail', 'Username', 'required');
      $this->form_validation->set_rules('txtpassword', 'Password', 'required');
      
      if ($this->form_validation->run() == TRUE) {        
        $validate = $this->auth_model->validate_admin_login();   

        if(!empty($validate)) {              
          
          $admin_data = []; 
          $array['id'] = $validate->id;
          $array['fname'] = $validate->fname;
          $array['lname'] = $validate->lname;
          $array['username'] = $validate->username;
          $array['email'] = $validate->email;
          $array['phone'] = $validate->phone;
          $array['image'] = $validate->image;

          $admin_data['admin'] = $array;
          $this->session->set_userdata($admin_data);

          echo "success";
          exit();
        }        
      }
      else{
        echo validation_errors();
        exit();
      }
      echo "error" ;
    }

    // admj Logout
    public function logout() {
      $admin_data = $this->session->userdata('admin');
      $this->session->sess_destroy($admin_data);
      redirect('admin/login');
    } 


    // get Admin profile
    public function admin_profile(){    
      $admin_data = $this->session->userdata('admin');
      // print_r($admin_data);
      if(!empty($admin_data)){
        $id = $admin_data['id'];
        $data['profile'] = $this->auth_model->admin_profile($id);
        $this->load->view('profile-setting', $data);
       
      }
      else{
        redirect('admin/login');
      }
    }

    // Save Admin profile
    public function update_profile(){ 

      $this->form_validation->set_rules('txtfname', 'First Name', 'required');
      $this->form_validation->set_rules('txtcontactno', 'Contact No', 'required');
      $this->form_validation->set_rules('txtemail', 'Email id', 'required');

      if ($this->form_validation->run() == TRUE) {        
        $filename=time() . date('Ymd');
        $profileimage='';
        if(isset($_FILES['profileimag'])&&$_FILES['profileimag']['error']=='0'){
          $config = array(
            'upload_path' => "assets/admin/images",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048000",
            'file_name' => $filename
          );
          $this->load->library('upload', $config);
          if($this->upload->do_upload('profileimag')){
            $data = array('upload_data' => $this->upload->data());
            $profileimage=$data['upload_data']['file_name'];
          }
          else {
            $error = array('error' => $this->upload->display_errors());
            echo $error['error'];die;
          }
        }
        $save = $this->auth_model->save_admin_profile($profileimage);
        if($save){
          echo "success";
        }else{
          echo "error";
        }
      }
      else{
        echo validation_errors();
      }
    }

    // load page for change password

    public function admin_change_password(){    
      $admin_data = $this->session->userdata('admin');
      if(!empty($admin_data)){
        $id = $admin_data['id'];
        $data['id']= $id;
        $data['view']='change-password';
        $this->load->view('backend/admin-layout', $data);
      }
      else{
        redirect('admin/login');
      }
    }

    // Change admin Password

    public function admin_update_password(){ 

      $this->form_validation->set_rules('txtoldpassword', 'Old Password', 'required');
      $this->form_validation->set_rules('txtnewpassword', 'New Password', 'required');
      $this->form_validation->set_rules('txtconfirmpassword', 'Confirm Password', 'required');

      if ($this->form_validation->run() == TRUE) {  

        $id = $this->input->post('txtid');
        $oldpass = $this->input->post('txtoldpassword');
        $newpass = $this->input->post('txtnewpassword');
        $conpass = $this->input->post('txtconfirmpassword'); 
        if($newpass != $conpass){
          echo "mismatch";
          exit();
        }
        $array['password'] = md5($conpass);
        $array['modification_date'] = date('Y-m-d H:i:s');

        $save = $this->auth_model->change_admin_password($id, $oldpass, $array);
        echo $save;
      }
      else{
        echo validation_errors();
      }
    }

    /* Admin Backend Code End */

   
   /* User (male/female) Backend Code Start */


  // load page for choose a profile for men or women
  public function my_login(){
    $data['view'] = [];
    $this->load->view('user/index', $data);     
  }

  // load page for female login 
  public function female_login(){
    $data['view'] = [];
    $this->load->view('user/login-female', $data);     
  }


  // load page for female signup for create new profile 
public function female_signup(){
    $data['body_type'] =  get_body_type();
    $data['ethnicity'] =  get_ethnicity(); 
    $this->load->view('user/signup-female', $data);     
}


  // load page for female signup for create new profile 
public function validate_female_signup(){

    $this->form_validation->set_rules('email', 'email', 'required');
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_rules('location', 'Location', 'required');
    $this->form_validation->set_rules('age', 'Age', 'required');
    $this->form_validation->set_rules('bodytype', 'Body Type', 'required');
    $this->form_validation->set_rules('ethnicity', ' Ethnicity ', 'required');

    if ($this->form_validation->run() == TRUE) {  

        //   check email already exists or not
        $email = $this->input->post('email');
        $email_validate = $this->auth_model->validate_register_email($email);
        if($email_validate){
            echo "email";
            exit();
        }

        $username = $this->input->post('username');
        //   check username already exists or not
        $username_validate = $this->auth_model->validate_register_username($username);
        if($username_validate){
            echo "username";
            exit();
        }

        $array['fSignup'] = $_POST;
        $this->session->set_userdata($array);

        echo "success";
        exit();
    }
    else{
      echo validation_errors();
      exit();
    }
    echo 'error';
  }


  //   check username already exists or not when user write username

    public function validate_username(){    
      
        $username = $this->input->post('username');
        $validate = $this->auth_model->validate_register_username($username);
        if(!empty($username)){
           if(empty($validate)){
              echo 'success';
              exit();
           }
        }
        echo 'error';
    }


    // load page for add more profile data (education/occupation)
  public function female_register(){

    $data['education'] =  get_education();
    $data['smoke'] =  get_smoke();
    $data['occupation'] =  get_occupation();
    $this->load->view('user/registation-female', $data);     
  }

   // create a new profile for female and save all profie data
  public function validate_female_registration(){

    $this->form_validation->set_rules('tall', 'How Tall', 'required');
    $this->form_validation->set_rules('education', 'Education', 'required');
    $this->form_validation->set_rules('smoke', 'Smoker', 'required');
    $this->form_validation->set_rules('occupation', 'Occupation', 'required');

    if ($this->form_validation->run() == TRUE) {  

        // before 
        if(empty($_SESSION['fSignup'])){
          echo "signup";
          exit();
        }

        // create a new profile for female and save all profie data
        $register = $this->auth_model->user_register(1);
        if($register){

          $fSignArray['fSignup'] = [];
          $this->session->set_userdata($fSignArray);

          // get profile for female login and create session for user.
          $profile = $this->auth_model->user_profile($register);
 
          $array['id'] = $profile->id;
          $array['role'] = $profile->role;
          $array['usercode'] = $profile->usercode;
          $array['name'] = $profile->name;
          $array['username'] = $profile->username;
          $array['email'] = $profile->email;
          $array['verify_email'] = $profile->verify_email;
          $array['phone'] = $profile->phone;
          $array['phone_verify'] = $profile->phone_verify;
          $array['image'] = $profile->image;
          $array['location'] = $profile->location;
          $array['age'] = $profile->age;
          $array['bodytype'] = $profile->bodytype;
          $array['ethnicity'] = $profile->ethnicity;
          $array['tall'] = $profile->tall;
          $array['education'] = $profile->education;
          $array['smoke'] = $profile->smoke;
          $array['occupation'] = $profile->occupation;
          $array['creation_date'] = $profile->creation_date;
          $array['modification_date'] = $profile->modification_date;

          $user_data['user'] = $array;
          $this->session->set_userdata($user_data);

          echo "success";
          exit();
        }
    }
    else{
      echo validation_errors();
      exit();
    }
    echo "error";
  }



    // load page for male login 
  public function male_login(){
    $data['view'] = []; //'user/index';
    $this->load->view('user/login-male', $data);     
  }
 

  public function male_signup(){
     // print_r($_POST);

    $data['body_type'] =  get_body_type();
    $data['ethnicity'] =  get_ethnicity(); 
    $this->load->view('user/signup-male', $data);     
}


  public function male_register(){
     $data['education'] =  get_education();
    $data['smoke'] =  get_smoke();
    $data['occupation'] =  get_occupation();
    $this->load->view('user/registation', $data);     
  }

  public function validate_male_registration(){

    $this->form_validation->set_rules('tall', 'How Tall', 'required');
    $this->form_validation->set_rules('education', 'Education', 'required');
    $this->form_validation->set_rules('smoke', 'Smoker', 'required');
    $this->form_validation->set_rules('occupation', 'Occupation', 'required');

    if ($this->form_validation->run() == TRUE) {  

        if(empty($_SESSION['fSignup'])){
          echo "signup";
          exit();
        }

        $register = $this->auth_model->user_register(2);
        if($register){

          $fSignArray['fSignup'] = [];
          $this->session->set_userdata($fSignArray);

          $profile = $this->auth_model->user_profile($register);
 
          $array['id'] = $profile->id;
          $array['role'] = $profile->role;
          $array['usercode'] = $profile->usercode;
          $array['name'] = $profile->name;
          $array['username'] = $profile->username;
          $array['email'] = $profile->email;
          $array['verify_email'] = $profile->verify_email;
          $array['phone'] = $profile->phone;
          $array['phone_verify'] = $profile->phone_verify;
          $array['image'] = $profile->image;
          $array['location'] = $profile->location;
          $array['age'] = $profile->age;
          $array['bodytype'] = $profile->bodytype;
          $array['ethnicity'] = $profile->ethnicity;
          $array['tall'] = $profile->tall;
          $array['education'] = $profile->education;
          $array['smoke'] = $profile->smoke;
          $array['occupation'] = $profile->occupation;
          $array['creation_date'] = $profile->creation_date;
          $array['modification_date'] = $profile->modification_date;

          $user_data['user'] = $array;
          $this->session->set_userdata($user_data);

          echo "success";
          exit();
        }
    }
    else{
      echo validation_errors();
      exit();
    }
    echo "error";
  }


public function user_login(){

    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    
    if ($this->form_validation->run() == TRUE) { 
      $profile = $this->auth_model->user_login();  
      if(!empty($profile)) { 

          $array['id'] = $profile->id;
          $array['role'] = $profile->role;
          $array['usercode'] = $profile->usercode;
          $array['name'] = $profile->name;
          $array['username'] = $profile->username;
          $array['email'] = $profile->email;
          $array['verify_email'] = $profile->verify_email;
          $array['phone'] = $profile->phone;
          $array['phone_verify'] = $profile->phone_verify;
          $array['image'] = $profile->image;
          $array['location'] = $profile->location;
          $array['age'] = $profile->age;
          $array['bodytype'] = $profile->bodytype;
          $array['ethnicity'] = $profile->ethnicity;
          $array['tall'] = $profile->tall;
          $array['education'] = $profile->education;
          $array['smoke'] = $profile->smoke;
          $array['occupation'] = $profile->occupation;
          $array['creation_date'] = $profile->creation_date;
          $array['modification_date'] = $profile->modification_date;

          $user_data['user'] = $array;
          $this->session->set_userdata($user_data);

        echo "success";
        exit();
      }        
    }
    else{
      echo validation_errors();
      exit();
    }
    echo "error" ;
  }




public function forgot_password(){
  $data[] =  [];
  $this->load->view('user/forgot-password', $data);     
}

public function send_mail_forgot_password(){    
  
  $this->form_validation->set_rules('username', 'username', 'required');

  if ($this->form_validation->run() == TRUE) {        
    $forgotmail = $this->auth_model->send_mail_forgot_password();   
    if(!empty($forgotmail)) {              
      
        $string = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $string_shuffled = str_shuffle($string);
        $forgot_otp = substr($string_shuffled, 1, 10);
        
        if(!empty($forgotmail->otp_validator)){
          $forgot_otp = $forgotmail->otp_validator;
        }
        else{
          $this->auth_model->setForgotOTP($forgotmail->username, $forgot_otp);
        }

        $data['_fOTP'] = $forgot_otp;
        $data['_fUsername'] = $this->input->post('username');
        $data['_fEmail'] = $forgotmail->email;

        $fPassword['fPassword'] = $data;
        $this->session->set_userdata($fPassword);
        
        $subject = 'Secret Time Forgot Password';
        $message = 'Hello '.$forgotmail->name."<br/> Your Fogot Password OTP : ".$forgot_otp;
        @send_mail($forgotmail->email, $subject, $message);
     
        echo "success";
        exit();
    }
    else{
        echo "error";
        exit();
    }
  }
  else{
    echo validation_errors();
    exit();
  }
  echo "error" ;
}


public function reset_password(){
  $data[] =  [];
  $this->load->view('user/reset-password', $data);     
}

public function resend_mail_forgot_password(){    
  
    if(!empty($_SESSION['fPassword'])){

      $forgot_otp = $_SESSION['fPassword']['_fOTP'];
      $name = $_SESSION['fPassword']['_fUsername'];
      $email = $_SESSION['fPassword']['_fEmail'];

      $subject = 'Secret Time Forgot Password';
      $message = 'Hello '.$name."<br/> Your Fogot Password OTP : ".$forgot_otp;
      $mail = @send_mail($email, $subject, $message);
      if($mail){
          echo "success";
          exit();
      } 
    }
   
    echo "error";
}


 public function change_user_password(){    
      
    $this->form_validation->set_rules('otp', 'Token', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required');

    if ($this->form_validation->run() == TRUE) {        
        $pass = $this->input->post('password');
        $cpass = $this->input->post('confirm_password');
      
        if($pass != $cpass){
          echo "Password and confirm password not match";
          exit();
        }
      
        echo $c_password = $this->auth_model->change_user_password();
        exit();
    }
    else{
        echo validation_errors();
        exit();
    }
    echo "error" ;
}

// Logout  from website when user try to signup or create new profile

public function user_refresh_logout() {     
   
    $fSignArray['fSignup'] = [];
    $this->session->set_userdata($fSignArray);
    redirect(base_url('login'));
}


// Logout permanently from dashboard

public function user_logout() {     
   
    $user_data['user'] = [];
    $this->session->set_userdata($user_data);
    redirect(base_url('login'));
}




}

