<?php


/*

project Name  : Secret time
Author        : Manjeet Kumar
Last Modified : july 7, 2021

This page related to user (Male/Female) backend ogic code

*/


if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{
	 
	public function __construct(){
		parent::__construct();
		$this->load->model('home_model');
		// $this->load->helper('form');
		// $this->load->library('form_validation');

    /* check user login or not if not login it redirect for login to user or create a new profile for a new uaer */
    $user_session = $this->session->userdata('user');
    if(empty($user_session)){
      redirect(base_url('login'));
    }
  }

  /*
  When website load first time go to check for profile photos and other data
  */
  public function index(){
    redirect(base_url('upload-profile-photos'));
  }

  /*
  load page for upload profile image and other photos
  */

  public function upload_profile_photos(){
    $data['view'] = 'profile-photo-upload';
    $data['profile'] = $this->home_model->get_profile();
    // print_r($data);

    $user_session = $this->session->userdata('user');
    // print_r($user_session);
    $role = 0;
    if(!empty($user_session)){
      $role = $user_session['role'];
    }
    $data['role'] = $role;

    $this->load->view('frontend/layout', $data);     
  }

   /*
   upload profile image and other data 
  */

  public function save_upload_profile_photos(){ 

    $this->form_validation->set_rules('tagline', 'Tagline ', 'required');
    $this->form_validation->set_rules('offer', ' Offer ', 'required'); 

    if ($this->form_validation->run() == TRUE) { 

      $this->load->library('upload');
      $dataInfo = array();
      $files_array = array();
      $files = $_FILES;
     
      $cpt = count($_FILES['profile_image']['name']);
      
      $totalimg = 0;
      for($p=0; $p<$cpt; $p++){
          if(!empty($files['profile_image']['name'][$p])){

              $totalimg = $totalimg + 1;
          }
      }

      if($totalimg < 4){
         echo 'photos'; // 'Minimum 4 Images are required';
         exit();
      }
    
      for($i = 0; $i < $cpt; $i++){

          $filename = date('YmdHis').$files['profile_image']['name'][$i];        
          $_FILES['userfile']['name']= $filename;
          $_FILES['userfile']['type']= $files['profile_image']['type'][$i];
          $_FILES['userfile']['tmp_name']= $files['profile_image']['tmp_name'][$i];
          $_FILES['userfile']['error']= $files['profile_image']['error'][$i];
          $_FILES['userfile']['size']= $files['profile_image']['size'][$i];  

          $this->upload->initialize($this->set_file_upload_options());
          $this->upload->do_upload();
          $dataInfo = $this->upload->data();
          $image = $dataInfo['file_name'];

          if(!empty($image)){
            array_push($files_array, $image);
          }
      }

      // print_r($files_array);

      $images = implode(",", $files_array);

      $save = $this->home_model->save_profile_data_image($images);
      if ($save) {
        echo 'success';
        exit();
      }
    }
    else{
      echo validation_errors();
      exit();
    }
    echo 'error';
  }


 /*
   Save multiple images 
  */
  private function set_file_upload_options(){   
      //upload an image options
      $config = array(
          'upload_path' => "assets/upload/images/",
          'allowed_types' => "*",
          'overwrite' => TRUE,
          'max_size' => "20480000000"
      );
      return $config;
  }


   /*
  load page for complete profile
  */
  public function complete_my_profile(){
    $data['view'] = 'profile-completed';
    $this->load->view('frontend/layout', $data);   
  }


     
	






}