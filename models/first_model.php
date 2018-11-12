<?php
class first_model extends CI_Model{
	public function __construct() 
{
    parent::__construct();
     
    // load form and url helpers
    $this->load->helper(array('form', 'url'));
       
    // load form_validation library
    $this->load->library('form_validation');
}


	function insert_data($data){
		 $this->load->database();
 
      $this->load->library('session');
      
     $this->db->insert("registration",$data);
}



	function login($aplicant_id,$email,$password){
	$this->load->database();
	$query="SELECT Applicant_id,Email,Password FROM `login` WHERE `Applicant_id` = '".$aplicant_id."'AND `Email`='".$email."' AND `Password` LIKE '".$password."' ORDER BY `Name` ASC";
	$value=$this->db->query($query);
	return $value->result_array();
	}

	function update_data($data){
		$this->load->database();
 
      $this->load->library('session');
      
     $this->db->insert("updation",$data);
	}

	function renew_data($data){
		$this->load->database();
 
      $this->load->library('session');
      
     $this->db->insert("renewal",$data);
	}

	function crnt_model($aplicant_id){
		$this->load->database();
		$query="SELECT Applicant_id FROM `login` WHERE `Applicant_id` LIKE '".$aplicant_id."'  ORDER BY `Name` ASC";
		$value=$this->db->query($query);
		return $value->result_array();
	}
	function crnt_data($aplicant_id){
		$this->load->database();

			$query="SELECT `Status` FROM `login` WHERE `Applicant_id` LIKE  '".$aplicant_id."' ORDER BY `Name` ASC";
			$value=$this->db->query($query);
			return $value;

	}

	function payment_model($data){
		$this->load->database();
 
      	$this->load->library('session');
      
    	 $this->db->insert("payment_portal",$data);
	}
}
?>