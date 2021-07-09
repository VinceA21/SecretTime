<?php

/*

project Name  : Secret time
Author        : Manjeet Kumar
Last Modified : july 7, 2021

This page related to admin backend logic for update his/her settings and manage user(male/female) data

*/

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

   function __construct() {
      parent:: __construct();
      $this->load->model('admin_model');
	   $this->lang->load('login');
      //check_user_logged();
      $admin_data = $this->session->userdata('admin');
      if(empty($admin_data)){
         redirect('admin/login');
      }
   }

   // Load admi Dashboard

   public function index(){      
      $data['view']='index';
      $this->load->view('backend/admin-layout', $data);
   }

// Load admi Dashboard
   public function dashboard(){      
      $data['view']='index';
      $this->load->view('backend/admin-layout', $data);
   }


   // Get User list and view into admin dashboard
   public function users(){      
      $data['view']='users/index';
      $data['users'] = $this->admin_model->get_users();
      // print_r($data);
      $this->load->view('backend/admin-layout', $data);
   }

   // User Profile details
   public function user_profile($username, $unique_code){      
      $data['view']='users/user-profile';
      $data['user'] = $this->admin_model->get_users_profile($username, $unique_code);
      // print_r($data);
      $this->load->view('backend/admin-layout', $data);
   }


   // Education 

   public function education(){      
      $data['view']='profile-data/education';
      $data['education'] =  $this->admin_model->get_education();
      $this->load->view('backend/admin-layout', $data);
   }

   
   public function add_education(){ 
      
      $this->form_validation->set_rules('name', 'Name', 'required');
      if ($this->form_validation->run() == TRUE) {
         $save_data = $this->admin_model->add_education();

         if( !empty($save_data)){
            echo "success"; 
            exit();
         }
      }
      else{
          
         echo validation_errors();
         exit();
      }
      echo 'error';
   }


    public function edit_education(){ 
      
      $this->form_validation->set_rules('editcode', 'Education Data', 'required');
      $this->form_validation->set_rules('name', 'Name', 'required');
      if ($this->form_validation->run() == TRUE) {
         $save_data = $this->admin_model->edit_education();

         if( !empty($save_data)){
            echo "success"; 
            exit();
         }
      }
      else{
          
         echo validation_errors();
         exit();
      }
      echo 'error';
   }


    public function delete_education(){ 
      
      $this->form_validation->set_rules('deletecode', 'Education Data', 'required');
      if ($this->form_validation->run() == TRUE) {
         $save_data = $this->admin_model->delete_education();

         if( !empty($save_data)){
            echo "success"; 
            exit();
         }
      }
      else{
          
         echo validation_errors();
         exit();
      }
      echo 'error';
   }


   // ========== occupation =================


   public function occupation(){      
      $data['view']='profile-data/occupation';
      $data['occupation'] =  $this->admin_model->get_occupation();
      $this->load->view('backend/admin-layout', $data);
   }

   
   public function add_occupation(){ 
      
      $this->form_validation->set_rules('name', 'Name', 'required');
      if ($this->form_validation->run() == TRUE) {
         $save_data = $this->admin_model->add_occupation();

         if( !empty($save_data)){
            echo "success"; 
            exit();
         }
      }
      else{
          
         echo validation_errors();
         exit();
      }
      echo 'error';
   }


    public function edit_occupation(){ 
      
      $this->form_validation->set_rules('editcode', 'Occupation Data', 'required');
      $this->form_validation->set_rules('name', 'Name', 'required');
      if ($this->form_validation->run() == TRUE) {
         $save_data = $this->admin_model->edit_occupation();

         if( !empty($save_data)){
            echo "success"; 
            exit();
         }
      }
      else{
          
         echo validation_errors();
         exit();
      }
      echo 'error';
   }


    public function delete_occupation(){ 
      
      $this->form_validation->set_rules('deletecode', 'Occupation Data', 'required');
      if ($this->form_validation->run() == TRUE) {
         $save_data = $this->admin_model->delete_occupation();

         if( !empty($save_data)){
            echo "success"; 
            exit();
         }
      }
      else{
          
         echo validation_errors();
         exit();
      }
      echo 'error';
   }

   // ========== ethnicity =================


   public function ethnicity(){      
      $data['view']='profile-data/ethnicity';
      $data['ethnicity'] =  $this->admin_model->get_ethnicity();
      $this->load->view('backend/admin-layout', $data);
   }

   
   public function add_ethnicity(){ 
      
      $this->form_validation->set_rules('name', 'Name', 'required');
      if ($this->form_validation->run() == TRUE) {
         $save_data = $this->admin_model->add_ethnicity();

         if( !empty($save_data)){
            echo "success"; 
            exit();
         }
      }
      else{
          
         echo validation_errors();
         exit();
      }
      echo 'error';
   }


    public function edit_ethnicity(){ 
      
      $this->form_validation->set_rules('editcode', 'ethnicity Data', 'required');
      $this->form_validation->set_rules('name', 'Name', 'required');
      if ($this->form_validation->run() == TRUE) {
         $save_data = $this->admin_model->edit_ethnicity();

         if( !empty($save_data)){
            echo "success"; 
            exit();
         }
      }
      else{
          
         echo validation_errors();
         exit();
      }
      echo 'error';
   }


    public function delete_ethnicity(){ 
      
      $this->form_validation->set_rules('deletecode', 'ethnicity Data', 'required');
      if ($this->form_validation->run() == TRUE) {
         $save_data = $this->admin_model->delete_ethnicity();

         if( !empty($save_data)){
            echo "success"; 
            exit();
         }
      }
      else{
          
         echo validation_errors();
         exit();
      }
      echo 'error';
   }


 // ========== body_type =================


   public function body_type(){      
      $data['view']='profile-data/body-type';
      $data['body_type'] =  $this->admin_model->get_body_type();
      $this->load->view('backend/admin-layout', $data);
   }

   
   public function add_body_type(){ 
      
      $this->form_validation->set_rules('name', 'Name', 'required');
      if ($this->form_validation->run() == TRUE) {
         $save_data = $this->admin_model->add_body_type();

         if( !empty($save_data)){
            echo "success"; 
            exit();
         }
      }
      else{
          
         echo validation_errors();
         exit();
      }
      echo 'error';
   }


    public function edit_body_type(){ 
      
      $this->form_validation->set_rules('editcode', 'body_type Data', 'required');
      $this->form_validation->set_rules('name', 'Name', 'required');
      if ($this->form_validation->run() == TRUE) {
         $save_data = $this->admin_model->edit_body_type();

         if( !empty($save_data)){
            echo "success"; 
            exit();
         }
      }
      else{
          
         echo validation_errors();
         exit();
      }
      echo 'error';
   }


     public function delete_body_type(){ 
      
      $this->form_validation->set_rules('deletecode', 'body_type Data', 'required');
      if ($this->form_validation->run() == TRUE) {
         $save_data = $this->admin_model->delete_body_type();

         if( !empty($save_data)){
            echo "success"; 
            exit();
         }
      }
      else{
          
         echo validation_errors();
         exit();
      }
      echo 'error';
   }


   // ========== Smmoke =================


   public function smoke(){      
      $data['view']='profile-data/smoke';
      $data['smoke'] =  $this->admin_model->get_smoke();
      $this->load->view('backend/admin-layout', $data);
   }

   
   public function add_smoke(){ 
      
      $this->form_validation->set_rules('name', 'Name', 'required');
      if ($this->form_validation->run() == TRUE) {
         $save_data = $this->admin_model->add_smoke();

         if( !empty($save_data)){
            echo "success"; 
            exit();
         }
      }
      else{
          
         echo validation_errors();
         exit();
      }
      echo 'error';
   }


    public function edit_smoke(){ 
      
      $this->form_validation->set_rules('editcode', 'smoke Data', 'required');
      $this->form_validation->set_rules('name', 'Name', 'required');
      if ($this->form_validation->run() == TRUE) {
         $save_data = $this->admin_model->edit_smoke();

         if( !empty($save_data)){
            echo "success"; 
            exit();
         }
      }
      else{
          
         echo validation_errors();
         exit();
      }
      echo 'error';
   }

   public function delete_smoke(){ 
      
      $this->form_validation->set_rules('deletecode', 'smoke Data', 'required');
      if ($this->form_validation->run() == TRUE) {
         $save_data = $this->admin_model->delete_smoke();

         if( !empty($save_data)){
            echo "success"; 
            exit();
         }
      }
      else{
          
         echo validation_errors();
         exit();
      }
      echo 'error';
   }

   
   
   
   

  
}

