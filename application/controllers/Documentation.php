<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Documentation extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->helper("url");

		if(!isset($_SESSION["login"])){
			redirect("login");
		}

	}

	public function index(){

	}

	public function barthel(){

		$this->load->view("documentation/barthel_view");

	}

	public function lawton_iadl(){

		$this->load->view("documentation/lawton_view");

	}

	public function hads(){

		$this->load->view("documentation/hads_view");

	}

	public function fac(){

		$this->load->view("documentation/fac_view");

	}

	public function fast(){

		$this->load->view("documentation/fast_view");

	}

	public function mmse(){

		$this->load->view("documentation/mmse_view");

	}

	public function csi(){

		$this->load->view("documentation/csi_view");

	}

	public function lotca(){

		$this->load->view("documentation/locta_view");

	}

	public function dass(){

		$this->load->view("documentation/dass_view");

	}

}