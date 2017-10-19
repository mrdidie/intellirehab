<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notification extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->helper("url");
		$this->load->model("admin_model");
		$this->load->model("notification_model");
		$this->count_approval = $this->admin_model->kira_approval();

		if(!isset($_SESSION['login'])){
			redirect("login");
		} elseif($_SESSION['role_user']<>999){
			redirect("login");
		}

	}

	public function index(){

	}

	public function approval(){

		$data["dashboard"] = "";
		$data["icon_dashboard"] = "#ccc;";
		$data["manageUsers"] = "";
		$data["icon_manageUsers"] = "#ccc";
		$data["manageApproval"] = "";
		$data["icon_manageApproval"] = "#fff;";
		$data["auditLog"] = "";
		$data["icon_auditLog"] = "#ccc;";

		$data["manageRole"] = "";
		$data["icon_manageRole"] = "#ccc";

		$data["page"] = "Notification";
		$data["action"] = "Approval";

		$data["count_approval"] = $this->count_approval;
		$data["maklumat_notification"] = $this->notification_model->allNotification();

		$this->load->view("main/header_view");
		$this->load->view("main/canvas_side_start");
		$this->load->view("admin/sidebar_view", $data);
		$this->load->view("main/canvas_main_start");
		$this->load->view("admin/top_bar_admin");
		$this->load->view("notification/notification_view", $data);
		$this->load->view("main/canvas_main_end");
		$this->load->view("main/canvas_side_end");
		$this->load->view("main/footer_view");

	}

}