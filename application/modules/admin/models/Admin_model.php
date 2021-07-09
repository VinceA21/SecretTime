<?php

if (!defined('BASEPATH')) {
    exit('No Direct Script access allowed');
}

class Admin_model extends CI_Model {
 
    function __construct() {
        parent::__construct();
    }


    public function get_users() {

        $sql = "SELECT * FROM  user WHERE status > -1";
        $query = $this->db->query($sql);
        $result = $query->result();
       
        return $result;
    }

     public function get_users_profile($username, $usercode) {

        $sql = "SELECT * FROM  user WHERE usercode = '$usercode'";
        $query = $this->db->query($sql);
        $result = $query->row();
       
        return $result;
    }
    
    public function get_users_profile_via_id($id) {

        $sql = "SELECT * FROM  user WHERE id = '$id'";
        $query = $this->db->query($sql);
        $result = $query->row();
       
        return $result;
    }

    // ========  Education ==============


    public function add_education() {
        $array = array(
            'education_code' => "SECTEDU".substr(time(), -5),
            'name' => $this->input->post('name'),
            'education_status' => 1,
            'creation_date' => date('Y-m-d H:i:s'),
            'modification_date' => date('Y-m-d H:i:s') 
        );
        return $this->db->insert('education', $array);
    }

    public function get_education() {

        $sql = "SELECT * FROM education  WHERE education_status = 1 order by id DESC";
        $query = $this->db->query($sql);
        $result = $query->result();
       
        return $result;
    }

    public function edit_education() {
        $code = $this->input->post('editcode');
        $array = array(
            'name' => $this->input->post('name'),
            'modification_date' => date('Y-m-d H:i:s') 
        );

        $this->db->where('education_code', $code);
        return $this->db->update('education', $array);
    }


    public function delete_education() {
        $code = $this->input->post('deletecode');
        $array = array(
            'education_status' => 0,
            'modification_date' => date('Y-m-d H:i:s') 
        );

        $this->db->where('education_code', $code);
        return $this->db->update('education', $array);
    }



    // ========  occupation ==============


    public function add_occupation() {
        $array = array(
            'occupation_code' => "SECTOCP".substr(time(), -5),
            'name' => $this->input->post('name'),
            'occupation_status' => 1,
            'creation_date' => date('Y-m-d H:i:s'),
            'modification_date' => date('Y-m-d H:i:s') 
        );
        return $this->db->insert('occupation', $array);
    }

    public function get_occupation() {

        $sql = "SELECT * FROM occupation  WHERE occupation_status = 1 order by id DESC";
        $query = $this->db->query($sql);
        $result = $query->result();
       
        return $result;
    }


    public function edit_occupation() {
        $code = $this->input->post('editcode');
        $array = array(
            'name' => $this->input->post('name'),
            'modification_date' => date('Y-m-d H:i:s') 
        );

        $this->db->where('occupation_code', $code);
        return $this->db->update('occupation', $array);
    }


     public function delete_occupation() {
        $code = $this->input->post('deletecode');
        $array = array(
            'occupation_status' => 0,
            'modification_date' => date('Y-m-d H:i:s') 
        );

        $this->db->where('occupation_code', $code);
        return $this->db->update('occupation', $array);
    }



    // ========  ethnicity ==============


    public function add_ethnicity() {
        $array = array(
            'ethnicity_code' => "SECTETC".substr(time(), -5),
            'name' => $this->input->post('name'),
            'ethnicity_status' => 1,
            'creation_date' => date('Y-m-d H:i:s'),
            'modification_date' => date('Y-m-d H:i:s') 
        );
        return $this->db->insert('ethnicity', $array);
    }

    public function get_ethnicity() {

        $sql = "SELECT * FROM ethnicity  WHERE ethnicity_status = 1 order by id DESC";
        $query = $this->db->query($sql);
        $result = $query->result();
       
        return $result;
    }


    public function edit_ethnicity() {
        $code = $this->input->post('editcode');
        $array = array(
            'name' => $this->input->post('name'),
            'modification_date' => date('Y-m-d H:i:s') 
        );

        $this->db->where('ethnicity_code', $code);
        return $this->db->update('ethnicity', $array);
    }


     public function delete_ethnicity() {
        $code = $this->input->post('deletecode');
        $array = array(
            'ethnicity_status' => 0,
            'modification_date' => date('Y-m-d H:i:s') 
        );

        $this->db->where('ethnicity_code', $code);
        return $this->db->update('ethnicity', $array);
    }


     // ========  body_type ==============


    public function add_body_type() {
        $array = array(
            'body_code' => "SECTBDT".substr(time(), -5),
            'name' => $this->input->post('name'),
            'body_status' => 1,
            'creation_date' => date('Y-m-d H:i:s'),
            'modification_date' => date('Y-m-d H:i:s') 
        );
        return $this->db->insert('body', $array);
    }

    public function get_body_type() {

        $sql = "SELECT * FROM body  WHERE body_status = 1 order by id DESC";
        $query = $this->db->query($sql);
        $result = $query->result();
       
        return $result;
    }


    public function edit_body_type() {
        $code = $this->input->post('editcode');
        $array = array(
            'name' => $this->input->post('name'),
            'modification_date' => date('Y-m-d H:i:s') 
        );

        $this->db->where('body_code', $code);
        return $this->db->update('body', $array);
    }

    public function delete_body_type() {
        $code = $this->input->post('deletecode');
        $array = array(
            'body_status' => 0,
            'modification_date' => date('Y-m-d H:i:s') 
        );

        $this->db->where('body_code', $code);
        return $this->db->update('body', $array);
    }





    // ========  smoke ==============


    public function add_smoke() {
        $array = array(
            'smoke_code' => "SECTSMK".substr(time(), -5),
            'name' => $this->input->post('name'),
            'smoke_status' => 1,
            'creation_date' => date('Y-m-d H:i:s'),
            'modification_date' => date('Y-m-d H:i:s') 
        );
        return $this->db->insert('smoke', $array);
    }

    public function get_smoke() {

        $sql = "SELECT * FROM smoke  WHERE smoke_status = 1 order by id DESC";
        $query = $this->db->query($sql);
        $result = $query->result();
       
        return $result;
    }


    public function edit_smoke() {
        $code = $this->input->post('editcode');
        $array = array(
            'name' => $this->input->post('name'),
            'modification_date' => date('Y-m-d H:i:s') 
        );

        $this->db->where('smoke_code', $code);
        return $this->db->update('smoke', $array);
    }


    public function delete_smoke() {
        $code = $this->input->post('deletecode');
        $array = array(
            'smoke_status' => 0,
            'modification_date' => date('Y-m-d H:i:s') 
        );

        $this->db->where('smoke_code', $code);
        return $this->db->update('smoke', $array);
    }
    

}

