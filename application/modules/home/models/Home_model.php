<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

class Home_model extends CI_Model {
 
    function __construct() {
        parent::__construct();
    }

    public function user_id()  {
        $id = 0;
        $user_session = $this->session->userdata('user');
        if(!empty($user_session)){
            $id = $user_session['id'];
        }
        return $id;
    }
     public function get_profile()  {
        
        $user_id = $this->user_id();

        $sql = "SELECT * FROM user WHERE id = $user_id";
        $query = $this->db->query($sql);
        return $result = $query->row();
    }



    public function save_profile_data_image($image)  {
        $user_id = $this->user_id();

        $array = array(
            'image' => $image,
            'tagline' => $this->input->post('tagline'),
            'offer' => $this->input->post('offer'),
            'modification_date' => date('Y-m-d H:i:s'),
        );

        $this->db->where('id', $user_id);
        return $this->db->update('user',$array);
    }

}