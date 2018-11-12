<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_controller extends CI_Controller {
	public function index(){
	$this->load->helper('url');
	$this->load->helper('form');
	$this->load->model('first_model');
	$this->load->view('home_page.html');
	
	}
	public function sign_in(){
	$this->load->helper('url');
	$this->load->helper('form');
	
	$this->load->view('signin.html');
		
	}
	public function sign_in_submit(){
	$this->load->helper('url');
	$this->load->helper('form');
	$this->load->library('session');
		$name=$this->input->post("name");
		$email=$this->input->post("email");
		$password=$this->input->post("password");
		$mobile_no=$this->input->post("mobile_no");
		$date_of_birth=$this->input->post("dob");
		$address=$this->input->post("address");
		$profession=$this->input->post("profession");
		$annual_income=$this->input->post("annual_income");
		$documents=$this->input->post("documents");

		
		$data=array(
		"name"=>$name,
		"email"=>$email,
		"password"=>$password,
		"mobile_no"=>$mobile_no,
		"date_of_birth"=>$date_of_birth,
		"address"=>$address,
		"profession"=>$profession,
		"annual_income"=>$annual_income,
		"documents"=>$documents,
		);
		
		$this->load->helper('url');
		
		$this->load->model('first_model');
		$query=$this->first_model->insert_data($data);
		
		if($query){
			$this->load->view('cancel');
		}
		else{
			$this->load->view('submit');
		}
	}


	public function log_in(){
	$this->load->helper('url');
	$this->load->helper('form');
	
	$this->load->view('login.html');
		
	}
	public function login_submit(){
		$aplicant_id=$this->input->post('Applicant_id');
		$email= $this->input->post('Email');
		$password= $this->input->post('Password');

		$this->load->model('first_model');
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$value=$this->first_model->login($aplicant_id,$email,$password);
		
		$cnt=count($value);
		if($cnt)
		{
	     	$this->load->view('status.html');
		}
		else
		{
			$this->load->view('login.html');
	     	echo "<br><br>wrong input.. pls try again";
		}

	}

	public function crnt_status(){
	$this->load->helper('url');
	$this->load->helper('form');
	$this->load->model('first_model');
	$this->load->view('crnt.html');
	}

	public function crnt(){
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->model('first_model');

		$aplicant_id=$this->input->post('Applicant_id');
		$value=$this->first_model->crnt_model($aplicant_id);
		$cnt=count($value);
		if($cnt)
		{
	     	$data["fetch_data"]=$this->first_model->crnt_data($aplicant_id);
	     	$this->load->view("crnt_status.html",$data);
		}
		else
		{
			$this->load->view('crnt.html');
	     	echo "<br><br>wrong input.. pls try again";
		}
		
	}
	public function update_info(){
		$this->load->helper('url');
		$this->load->helper('form');
	
		$this->load->view('update.html');
	}

	public function updation(){
	$this->load->helper('url');
	$this->load->helper('form');
	$this->load->library('session');
		$aplicant_id=$this->input->post("Applicant_id");
		$name=$this->input->post("Name");
		$email=$this->input->post("Email");
		$password=$this->input->post("Password");
		$mobile_no=$this->input->post("Mobile_no");
		$date_of_birth=$this->input->post("Date_of_birth");
		$address=$this->input->post("Address");
		$profession=$this->input->post("Profession");
		$annual_income=$this->input->post("Annual_income");
		$document=$this->input->post("Document");

		
		$data=array(
		"Applicant_id"=>$aplicant_id,
		"Name"=>$name,
		"Email"=>$email,
		"Password"=>$password,
		"Mobile_no"=>$mobile_no,
		"Date_of_birth"=>$date_of_birth,
		"Address"=>$address,
		"Profession"=>$profession,
		"Annual_income"=>$annual_income,
		"Document"=>$document,
		);
		
		$this->load->helper('url');
		
		$this->load->model('first_model');
		$query=$this->first_model->update_data($data);
		
		if($query){
			$this->load->view('cancel');
		}
		else{
			$this->load->view('submit');
		}
	}

	public function renew_info(){
	$this->load->helper('url');
	$this->load->helper('form');
	
	$this->load->view('renew.html');
	}

	public function renewal(){
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');

		
		$aplicant_id=$this->input->post("Applicant_id");
		$name=$this->input->post("Name");
		$email=$this->input->post("Email");
		$password=$this->input->post("Password");
		$doe=$this->input->post("Date_of_expiry");

		$data=array(
		"Applicant_id"=>$aplicant_id,
		"Name"=>$name,
		"Email"=>$email,
		"Password"=>$password,
		"Date_of_expiry"=>$doe,
	);

		$this->load->helper('url');
		
		$this->load->model('first_model');
		$query=$this->first_model->renew_data($data);
		
		if($query){
			$this->load->view('cancel');
		}
		else{
			$this->load->view('submit');
		}
	}

	public function payment_portal(){
	$this->load->helper('url');
	$this->load->helper('form');
	
	$this->load->view('payment.html');
	}
	public function payment(){
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->model('first_model');
		
		$card_no=$this->input->post("card_no");
		$name=$this->input->post("name_of_cardholder");
		$cvv=$this->input->post("CVV");
		$doe=$this->input->post("date_of_expiry");

		$data=array(
		"card_no"=>$card_no,
		"name_of_cardholder"=>$name,
		"CVV"=>$cvv,
		"date_of_expiry"=>$doe,
	);

		$query=$this->first_model->payment_model($data);
		
		if($query){
			echo"<br><br>wrong input......reenter the details";
			$this->load->view("payment.html");
		}
		else{
				$this->load->view('payment_portal.html');
			
		}
	}
}
?>