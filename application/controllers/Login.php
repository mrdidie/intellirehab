<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model("Login_model");
		$this->load->helper("url");

	}

	public function index(){

		$this->load->view("main/header_view");
		$this->load->view("login/login_main");
		$this->load->view("main/footer_view");

	}

	public function verify(){

		
		$check_login = $this->Login_model->verify();
		// die($check_login);
		// testing adjust

		if($check_login==999){ // admin page
			redirect("admin");
		} elseif($check_login==1){
			redirect("researcher");
		} elseif($check_login==2){
			redirect("nurse");
		} elseif($check_login==3){
			redirect("researcher");
		} elseif($check_login==5){
			redirect("physician");
		} elseif($check_login==6){
			redirect("researcher");
		} elseif($check_login==7){
			redirect("professor");
		} elseif($check_login==8){
			redirect("researcher");
		} else {
			redirect("login");
		}
		// if($check_login==1){
		// 	redirect("home");
		// } else {
		// 	redirect("login");
		// }

	}

}