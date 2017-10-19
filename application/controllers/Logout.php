<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function index(){

		date_default_timezone_set("Asia/Kuala_Lumpur");

	if(isset($_SESSION['id_user'])):
		$this->db->set("last_logout", date("Y-m-d H:i:s"));
		$this->db->where("id", $_SESSION['id_user']);
		$query = $this->db->update("usim_login");
	endif;

	if(isset($_SESSION['id_login'])):
		$this->db->set("last_logout", date("Y-m-d H:i:s"));
		$this->db->where("id", $_SESSION['id_login']);
		$this->db->where("iduser", $_SESSION['id_user']);
		$logout = $this->db->update("tbl_log");
	endif;
	
		$this->load->helper("url");

		session_destroy();

		redirect("login");

	}

}