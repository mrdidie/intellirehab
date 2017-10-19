<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nurse extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model("nurse_model");
		$this->load->helper("url");
		$this->load->model("profile_model");

		if(!isset($_SESSION['login'])){
			redirect("login");
		} elseif($_SESSION['role_user']<>2){
			redirect("login");
		}

	}

	public function index(){

		$data["dashboard"] = "";
		$data["icon_dashboard"] = "#fff";
		$data["managePatient"] = "";
		$data["icon_managePatient"] = "#ccc";
		$data["manageProfile"] = "";
		$data["icon_profile"] = "#ccc";

		$data["page"] = "Dashboard";
		$data["action"] = "";

		$this->load->view("main/header_view");
		$this->load->view("main/canvas_side_start");
		$this->load->view("nurse/sidebar_view", $data);
		$this->load->view("main/canvas_main_start");
		$this->load->view("nurse/topbar_view", $data);
		$this->load->view("nurse/dashboard_view", $data);
		$this->load->view("main/canvas_main_end");
		$this->load->view("main/canvas_side_end");
		$this->load->view("main/footer_view");

	}

	public function manage_patient(){

		$data["dashboard"] = "";
		$data["icon_dashboard"] = "#ccc";
		$data["managePatient"] = "";
		$data["icon_managePatient"] = "#fff";
		$data["manageProfile"] = "";
		$data["icon_profile"] = "#ccc";

		$data["page"] = "Patient";
		$data["action"] = "";

		$data["patient_list"] = $this->nurse_model->allPatient();

		$this->load->view("main/header_view");
		$this->load->view("main/canvas_side_start");
		$this->load->view("nurse/sidebar_view", $data);
		$this->load->view("main/canvas_main_start");
		$this->load->view("nurse/topbar_view", $data);
		$this->load->view("nurse/manage_patient_view", $data);
		$this->load->view("main/canvas_main_end");
		$this->load->view("main/canvas_side_end");
		$this->load->view("main/footer_view");

	}

	public function view_patient($researchID,$session,$jenis){

		$data["dashboard"] = "";
		$data["icon_dashboard"] = "#ccc";
		$data["managePatient"] = "";
		$data["icon_managePatient"] = "#fff";
		$data["manageProfile"] = "";
		$data["icon_profile"] = "#ccc";

		$data["page"] = "Patient";
		$data["action"] = "$researchID";

		$data["maklumat_minimum_data"] = $this->nurse_model->minimum_data($researchID,$session);
		$data["pat_05"] = $this->nurse_model->pat05($researchID,$session);

		$this->load->view("main/header_view");
		$this->load->view("main/canvas_side_start");
		$this->load->view("nurse/sidebar_view", $data);
		$this->load->view("main/canvas_main_start");
		$this->load->view("nurse/topbar_view", $data);
		$this->load->view("nurse/patient_information", $data);
		$this->load->view("main/canvas_main_end");
		$this->load->view("main/canvas_side_end");
		$this->load->view("main/footer_view");

	}

	public function manage_profile(){

		$data["dashboard"] = "";
		$data["icon_dashboard"] = "#ccc";
		$data["managePatient"] = "";
		$data["icon_managePatient"] = "#ccc";
		$data["manageProfile"] = "";
		$data["icon_profile"] = "#fff";

		$data["page"] = "Profile";
		$data["action"] = "";

		$data["data_profile"] = $this->profile_model->profile($_SESSION['id_user']);
		$data["data_role"] = $this->profile_model->allRole();

		$this->load->view("main/header_view");
		$this->load->view("main/canvas_side_start");
		$this->load->view("nurse/sidebar_view", $data);
		$this->load->view("main/canvas_main_start");
		$this->load->view("nurse/topbar_view", $data);
		$this->load->view("nurse/manage_profile", $data);
		$this->load->view("main/canvas_main_end");
		$this->load->view("main/canvas_side_end");
		$this->load->view("main/footer_view");

	}

	public function page_process_profile(){

		$query = $this->profile_model->process_profile();

		if($query==1){
			redirect("nurse/manage_profile");
		}

	}

}