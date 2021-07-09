<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
// ------------------------------------------------------------------------

/**
 * @access  public
 * @param   mixed   Script src's or an array
 * @param   string  language
 * @param   string  type
 * @param   string  title
 * @param   boolean should index_page be added to the script path
 * @return  string
 */
 // mail function ----

function send_mail($email,$subject,$message){

    $from = "manjeet@webitexperts.com";
    $sender_name = "Secret Time";
    $ci = &get_instance();
    $config = Array(
        'mailpath' => '/usr/sbin/sendmail',
        'protocol' => 'sendmail',
        'smtp_host' => 'uitgaande.email',
        'smtp_port' => '587',
        'smtp_user' => 'manjeet@webitexperts.com',
        'smtp_pass' => ';5?U]wtLtDi6',
        'mailtype'  => 'html', 
        'charset'   => 'iso-8859-1',
    );
    $ci->load->library('email');    
    $ci->email->initialize($config);
    $ci->email->from($from, $sender_name);
    $ci->email->to(trim($email));           
    $ci->email->subject($subject);
    $ci->email->message($message);
    if($ci->email->send()){
        return true;
    }else{
        return false;
    }   
}


function get_gender(){
    $ci =& get_instance();
    $sql = "SELECT * FROM gender WHERE status = 1";
    $query = $ci->db->query($sql);
    $result = $query->result();
    
    return $result;
}

function get_education(){
    $ci =& get_instance();
    $sql = "SELECT * FROM education WHERE education_status = 1";
    $query = $ci->db->query($sql);
    $result = $query->result();
    
    return $result;
}


function get_body_type(){
    $ci =& get_instance();
    $sql = "SELECT * FROM body WHERE body_status = 1";
    $query = $ci->db->query($sql);
    $result = $query->result();
    
    return $result;
}


function get_ethnicity(){
    $ci =& get_instance();
    $sql = "SELECT * FROM ethnicity WHERE ethnicity_status = 1";
    $query = $ci->db->query($sql);
    $result = $query->result();
    
    return $result;
}

function get_occupation(){
    $ci =& get_instance();
    $sql = "SELECT * FROM occupation WHERE occupation_status = 1";
    $query = $ci->db->query($sql);
    $result = $query->result();
    
    return $result;
}

function get_smoke(){
    $ci =& get_instance();
    $sql = "SELECT * FROM smoke WHERE smoke_status = 1";
    $query = $ci->db->query($sql);
    $result = $query->result();
    
    return $result;
}

function user_profile($id){
    $ci =& get_instance();
    $sql = "SELECT id, name, username, email, phone, image FROM user WHERE id = $id";
    $query = $ci->db->query($sql);
    $result = $query->row();
    
    return $result;
}


// =========================================

 


function date_interval($date1, $date2)
{
    $diff = abs(strtotime($date2) - strtotime($date1));

    $years = floor($diff / (365 * 60 * 60 * 24));
    $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
    $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

    return (($years > 0) ? $years . ' Year' . ($years > 1 ? 's' : '') . ', ' : '') . (($months > 0) ? $months . ' Month' . ($months > 1 ? 's' : '') . ', ' : '') . (($days > 0) ? $days . ' Day' . ($days > 1 ? 's' : '') : '');
}






if ( ! function_exists('get_vimeo_thumbnail')){

    function get_vimeo_thumbnail($url)
    {

     $ci =& get_instance();

    $videoId='';     

      $vimeo = $url;// 'https://vimeo.com/519941655/e13df533ae';

      if(preg_match("/(https?:\/\/)?(www\.)?(player\.)?vimeo\.com\/?(showcase\/)*([0-9))([a-z]*\/)*([0-9]{6,11})[?]?.*/", $vimeo, $output_array)) {
          $videoId = $output_array[6];
      }

      
      $url = $vimeo; //the full URL of your vimeo video

      $curl = curl_init();

      curl_setopt_array($curl, array(
      CURLOPT_URL => "https://vimeo.com/api/oembed.json?url=".$url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_POSTFIELDS => "",
      CURLOPT_HTTPHEADER => array(
      "Referer: ".$_SERVER['HTTP_REFERER'].""
      ),
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);

      //this returns JSon so decode it into an object
      $thumby = json_decode($response);
      curl_close($curl);

      // $thumbnail = $thumby->thumbnail_url;
      $thumbnail = base_url('assets/frontend/images/banner.jpg');
      if(!empty($thumby->thumbnail_url)){
        $thumbnail = $thumby->thumbnail_url;
      }

      //dirty parsing of the URL. Could be a regex of course!
      //end result is the unique ID for that thumbnail
      $thumbarr = explode('_',$thumbnail);
      $thumbnail = str_replace('https://i.vimeocdn.com/video/', '', $thumbarr[0]);

      //you can then use that ID to fetch better quality thumbs - the 640 is the width of the
      //image you want.
       $thumby->thumbnail_url = 'https://i.vimeocdn.com/video/'.$thumbnail.'_1080.jpg';

       // print_r($thumby);
        return $thumby;
    }
}

if ( ! function_exists('get_vimeo_thumbnail_320')){

    function get_vimeo_thumbnail_320($url) {

     $ci =& get_instance();

    $videoId='';     

      $vimeo = $url;// 'https://vimeo.com/519941655/e13df533ae';

      if(preg_match("/(https?:\/\/)?(www\.)?(player\.)?vimeo\.com\/?(showcase\/)*([0-9))([a-z]*\/)*([0-9]{6,11})[?]?.*/", $vimeo, $output_array)) {
          $videoId = $output_array[6];
      }

      $refer = '';
      if(!empty($_SERVER['HTTP_REFERER'])){
      		$refer = $_SERVER['HTTP_REFERER'];
      } 
      $url = $vimeo; //the full URL of your vimeo video
      $curl = curl_init();

      curl_setopt_array($curl, array(
	      CURLOPT_URL => "https://vimeo.com/api/oembed.json?url=".$url,
	      CURLOPT_RETURNTRANSFER => true,
	      CURLOPT_ENCODING => "",
	      CURLOPT_MAXREDIRS => 10,
	      CURLOPT_TIMEOUT => 30,
	      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	      CURLOPT_CUSTOMREQUEST => "GET",
	      CURLOPT_POSTFIELDS => "",
	      CURLOPT_HTTPHEADER => array(
	      	"Referer: $refer"
	      ),
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);

      //this returns JSon so decode it into an object
      $thumby = json_decode($response);
      curl_close($curl);

      $thumbnail = base_url('assets/frontend/images/banner.jpg');
      if(!empty($thumby->thumbnail_url)){
        $thumbnail = $thumby->thumbnail_url;
      }

      //dirty parsing of the URL. Could be a regex of course!
      //end result is the unique ID for that thumbnail
      $thumbarr = explode('_',$thumbnail);
      $thumbnail = str_replace('https://i.vimeocdn.com/video/', '', $thumbarr[0]);

      //you can then use that ID to fetch better quality thumbs - the 640 is the width of the
      //image you want.
     return  $image = 'https://i.vimeocdn.com/video/'.$thumbnail.'_329.jpg';

    }
}


function getEventName($event_id)
{
    $CI =& get_instance();

   $query = $CI->db->select('*')->from('event')->where('id',$event_id)->get();

        if ($query->num_rows() > 0)
        {
            return $query->result_array(); 
            //return $row->id;
        }else{

          return FALSE;

        }      


}


function getPaidEvents($event_id,$user_id)
{
    $CI =& get_instance();

   $query = $CI->db->select('*')->from('orders')->where('event_id',$event_id)->where('user_id',$user_id)->get();

            return $query->row(); 

}




