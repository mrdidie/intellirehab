<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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

		$data["dashboard"] = "";
		$data["icon_dashboard"] = "#fff;";
		$data["manageUsers"] = "";
		$data["icon_manageUsers"] = "#ccc";
		$data["manageApproval"] = "";
		$data["icon_manageApproval"] = "#ccc;";
		$data["auditLog"] = "";
		$data["icon_auditLog"] = "#ccc;";
		$data["manageRole"] = "";
		$data["icon_manageRole"] = "#ccc";

		$data["page"] = "Dashboard";
		$data["action"] = "";

		$data["count_approval"] = $this->count_approval;

		$data["jumlah_users"] = $this->admin_model->jumlah(1,$_SESSION['id_user']);
		$data["jumlah_patient"] = $this->admin_model->jumlah(2,$_SESSION['id_user']);
		$data["jumlah_submitted"] = $this->admin_model->jumlah(3,$_SESSION['id_user']);
		$data["jumlah_approval"] = $this->admin_model->jumlah(4,$_SESSION['id_user']);

		$this->load->view("main/header_view");
		$this->load->view("main/canvas_side_start");
		$this->load->view("admin/sidebar_view", $data);
		$this->load->view("main/canvas_main_start");
		$this->load->view("admin/top_bar_admin", $data);
		$this->load->view("admin/dashboard_view", $data);
		$this->load->view("main/canvas_main_end");
		$this->load->view("main/canvas_side_end");
		$this->load->view("main/footer_view");
	}

	public function manage_users(){

		$data["dashboard"] = "";
		$data["icon_dashboard"] = "#ccc;";
		$data["manageUsers"] = "";
		$data["icon_manageUsers"] = "#fff";
		$data["manageApproval"] = "";
		$data["icon_manageApproval"] = "#ccc;";
		$data["auditLog"] = "";
		$data["icon_auditLog"] = "#ccc;";
		$data["manageRole"] = "";
		$data["icon_manageRole"] = "#ccc";


		$data["page"] = "Users";
		$data["action"] = "";

		$data["maklumat_user"] = $this->admin_model->allUser();
		$data["count_approval"] = $this->count_approval;

		$this->load->view("main/header_view");
		$this->load->view("main/canvas_side_start");
		$this->load->view("admin/sidebar_view", $data);
		$this->load->view("main/canvas_main_start");
		$this->load->view("admin/top_bar_admin", $data);
		$this->load->view("admin/manage_users_view", $data);
		$this->load->view("main/canvas_main_end");
		$this->load->view("main/canvas_side_end");
		$this->load->view("main/footer_view");

	}

	public function manage_approval(){

		$data["dashboard"] = "";
		$data["icon_dashboard"] = "#ccc;";
		$data["manageUsers"] = "";
		$data["icon_manageUsers"] = "#ccc;";
		$data["manageApproval"] = "";
		$data["icon_manageApproval"] = "#fff;";
		$data["auditLog"] = "";
		$data["icon_auditLog"] = "#ccc;";
		$data["manageRole"] = "";
		$data["icon_manageRole"] = "#ccc";

		$data["page"] = "Approval";
		$data["action"] = "";

		$data["count_approval"] = $this->count_approval;

		$data["minimum"] = $this->admin_model->allClinical("min");

		$data["clinical1"] = $this->admin_model->allClinical("c1");
		$data["clinical2"] = $this->admin_model->allClinical("c2");
		$data["clinical3"] = $this->admin_model->allClinical("c3");

		$data["diagnostic"] = $this->admin_model->allClinical("diag");
		$data["management"] = $this->admin_model->allClinical("mgt");
		$data["information"] = $this->admin_model->allClinical("info");

		$data["tab_0"] = $this->load->view("admin/approval_minimum_data_set_view", $data, TRUE);
		$data["tab_1"] = $this->load->view("admin/approval_clinical1_view", $data, TRUE);
		$data["tab_2"] = $this->load->view("admin/approval_clinical2_view", $data, TRUE);
		$data["tab_3"] = $this->load->view("admin/approval_clinical3_view", $data, TRUE);
		$data["tab_4"] = $this->load->view("admin/approval_diagnostic_view", $data, TRUE);
		$data["tab_5"] = $this->load->view("admin/approval_management_view", $data, TRUE);
		$data["tab_6"] = $this->load->view("admin/approval_otherinfo_view", $data, TRUE);

		$data["maklumat_notification"] = $this->notification_model->allNotification();

		$this->load->view("main/header_view");
		$this->load->view("main/canvas_side_start");
		$this->load->view("admin/sidebar_view", $data);
		$this->load->view("main/canvas_main_start");
		$this->load->view("admin/top_bar_admin", $data);
		$this->load->view("admin/manage_approval_view", $data);
		$this->load->view("main/canvas_main_end");
		$this->load->view("main/canvas_side_end");
		$this->load->view("main/footer_view");

	}

	public function audit_log(){

		$data["dashboard"] = "";
		$data["icon_dashboard"] = "#ccc;";
		$data["manageUsers"] = "";
		$data["icon_manageUsers"] = "#ccc;";
		$data["manageApproval"] = "";
		$data["icon_manageApproval"] = "#ccc;";
		$data["auditLog"] = "";
		$data["icon_auditLog"] = "#fff;";
		$data["manageRole"] = "";
		$data["icon_manageRole"] = "#ccc";

		$data["page"] = "Audit Log";
		$data["action"] = "";

		$data["count_approval"] = $this->count_approval;

		$data["login_info"] = $this->admin_model->senarai_login();

		$data["tab_login"] = $this->load->view("admin/manage_login_activity", $data, TRUE);
		$data["tab_user"] = $this->load->view("admin/manage_user_activity", $data, TRUE);

		$this->load->view("main/header_view");
		$this->load->view("main/canvas_side_start");
		$this->load->view("admin/sidebar_view", $data);
		$this->load->view("main/canvas_main_start");
		$this->load->view("admin/top_bar_admin", $data);
		$this->load->view("admin/audit_log_view", $data);
		$this->load->view("main/canvas_main_end");
		$this->load->view("main/canvas_side_end");
		$this->load->view("main/footer_view");

	}

	public function manage_role(){

		$data["dashboard"] = "";
		$data["icon_dashboard"] = "#ccc;";
		$data["manageUsers"] = "";
		$data["icon_manageUsers"] = "#ccc;";
		$data["manageApproval"] = "";
		$data["icon_manageApproval"] = "#ccc;";
		$data["auditLog"] = "";
		$data["icon_auditLog"] = "#ccc;";
		$data["manageRole"] = "";
		$data["icon_manageRole"] = "#fff";

		$data["page"] = "Role List";
		$data["action"] = "";

		$data["count_approval"] = $this->count_approval;
		$data["role_user"] = $this->admin_model->allRole();

		$this->load->view("main/header_view");
		$this->load->view("main/canvas_side_start");
		$this->load->view("admin/sidebar_view", $data);
		$this->load->view("main/canvas_main_start");
		$this->load->view("admin/top_bar_admin", $data);
		$this->load->view("admin/manage_role_view");
		$this->load->view("main/canvas_main_end");
		$this->load->view("main/canvas_side_end");
		$this->load->view("main/footer_view");

	}

	public function new_role(){

		$data["dashboard"] = "";
		$data["icon_dashboard"] = "#ccc;";
		$data["manageUsers"] = "";
		$data["icon_manageUsers"] = "#ccc;";
		$data["manageApproval"] = "";
		$data["icon_manageApproval"] = "#ccc;";
		$data["auditLog"] = "";
		$data["icon_auditLog"] = "#ccc;";
		$data["manageRole"] = "";
		$data["icon_manageRole"] = "#fff";

		$data["page"] = "Role";
		$data["action"] = "New Role";

		$data["count_approval"] = $this->count_approval;
		$data["idrole"] = "";
		$data["jenis_action"] = 1;

		$data["desc_role"] = "";

		$this->load->view("main/header_view");
		$this->load->view("main/canvas_side_start");
		$this->load->view("admin/sidebar_view", $data);
		$this->load->view("main/canvas_main_start");
		$this->load->view("admin/top_bar_admin", $data);
		$this->load->view("admin/add_new_role", $data);
		$this->load->view("main/canvas_main_end");
		$this->load->view("main/canvas_side_end");
		$this->load->view("main/footer_view");

	}

	public function edit_role($idrole){

		$data["dashboard"] = "";
		$data["icon_dashboard"] = "#ccc;";
		$data["manageUsers"] = "";
		$data["icon_manageUsers"] = "#ccc;";
		$data["manageApproval"] = "";
		$data["icon_manageApproval"] = "#ccc;";
		$data["auditLog"] = "";
		$data["icon_auditLog"] = "#ccc;";
		$data["manageRole"] = "";
		$data["icon_manageRole"] = "#fff";

		$data["page"] = "Role";
		$data["action"] = "Edit Role";

		$data["count_approval"] = $this->count_approval;
		$data["idrole"] = $idrole;
		$data["jenis_action"] = 2;

		$data["desc_role"] = $this->admin_model->getRole($idrole);

		$this->load->view("main/header_view");
		$this->load->view("main/canvas_side_start");
		$this->load->view("admin/sidebar_view", $data);
		$this->load->view("main/canvas_main_start");
		$this->load->view("admin/top_bar_admin", $data);
		$this->load->view("admin/add_new_role", $data);
		$this->load->view("main/canvas_main_end");
		$this->load->view("main/canvas_side_end");
		$this->load->view("main/footer_view");

	}

	public function delete_role($idrole){

		$query = $this->admin_model->deleteRole($idrole);

		if($query==1){
			redirect("admin/manage_role");
		}

	}

	public function manage_profile(){
		
	}

	public function new_user(){

		$data["dashboard"] = "";
		$data["icon_dashboard"] = "#ccc;";
		$data["manageUsers"] = "";
		$data["icon_manageUsers"] = "#fff;";
		$data["manageApproval"] = "";
		$data["icon_manageApproval"] = "#ccc;";
		$data["auditLog"] = "";
		$data["icon_auditLog"] = "#ccc;";
		$data["manageRole"] = "";
		$data["icon_manageRole"] = "#ccc";

		$data["page"] = "Users";
		$data["action"] = "New User";

		$data["role_user"] = $this->admin_model->allRole();

		$data["count_approval"] = $this->count_approval;

		$this->load->view("main/header_view");
		$this->load->view("main/canvas_side_start");
		$this->load->view("admin/sidebar_view", $data);
		$this->load->view("main/canvas_main_start");
		$this->load->view("admin/top_bar_admin", $data);
		$this->load->view("admin/new_user_view");
		$this->load->view("main/canvas_main_end");
		$this->load->view("main/canvas_side_end");
		$this->load->view("main/footer_view");


	}

	public function add_new_user(){

		$query = $this->admin_model->process_add_new_user();

		if($query==1){
			redirect("admin/manage_users");
		}

	}

	public function edit_user($iduser){

		$data["dashboard"] = "";
		$data["icon_dashboard"] = "#ccc;";
		$data["manageUsers"] = "";
		$data["icon_manageUsers"] = "#fff;";
		$data["manageApproval"] = "";
		$data["icon_manageApproval"] = "#ccc;";
		$data["auditLog"] = "";
		$data["icon_auditLog"] = "#ccc;";
		$data["manageRole"] = "";
		$data["icon_manageRole"] = "#ccc";

		$data["page"] = "Users";
		$data["action"] = "Edit User";

		$data["count_approval"] = $this->count_approval;
		$data["role_user"] = $this->admin_model->allRole();
		$data["maklumat_user"] = $this->admin_model->maklumat_user($iduser);

		$this->load->view("main/header_view");
		$this->load->view("main/canvas_side_start");
		$this->load->view("admin/sidebar_view", $data);
		$this->load->view("main/canvas_main_start");
		$this->load->view("admin/top_bar_admin", $data);
		$this->load->view("admin/edit_users_view", $data);
		$this->load->view("main/canvas_main_end");
		$this->load->view("main/canvas_side_end");
		$this->load->view("main/footer_view");

	}

	public function edit_new_user(){

		$query = $this->admin_model->process_edit_user();

		if($query==1){
			redirect("admin/manage_users");
		}

	}

	public function delete_user($iduser){

		$query = $this->admin_model->process_delete_user($iduser);

		if($query==1){
			redirect("admin/manage_users");
		}

	}

	// therapy

	public function view_clinical($researchID,$session,$jenisClinical){

		$data["dashboard"] = "";
		$data["icon_dashboard"] = "#ccc;";
		$data["manageUsers"] = "";
		$data["icon_manageUsers"] = "#ccc;";
		$data["manageApproval"] = "";
		$data["icon_manageApproval"] = "#fff;";
		$data["auditLog"] = "";
		$data["icon_auditLog"] = "#ccc;";
		$data["manageRole"] = "";
		$data["icon_manageRole"] = "#ccc";

		$data["page"] = "Therapy";
		$data["action"] = $researchID;
		$data["session"] = $session;

		$data["count_approval"] = $this->count_approval;
		$data["clinical"] = $this->admin_model->maklumat_clinical($researchID,$session,$jenisClinical);
		$data["pat_05"] = $this->admin_model->pat($researchID,$session,"5");
		$data["pat_23"] = $this->admin_model->pat($researchID,$session,"23");
		$data["pat_29"] = $this->admin_model->pat($researchID,$session,"29");
		$data["pat_57"] = $this->admin_model->pat($researchID,$session,"57");
		$data["pat_63"] = $this->admin_model->pat($researchID,$session,"63");
		$data["pat_73a"] = $this->admin_model->pat($researchID,$session,"73a");
		$data["pat_73b"] = $this->admin_model->pat($researchID,$session,"73b");
		$data["pat_73c"] = $this->admin_model->pat($researchID,$session,"73c");
		$data["pat_70"] = $this->admin_model->pat($researchID,$session,"70");
		$data["pat_71"] = $this->admin_model->pat($researchID,$session,"71");
		$data["pat_72"] = $this->admin_model->pat($researchID,$session,"72");
		$data["pat_72a"] = $this->admin_model->pat($researchID,$session,"72a");
		$data["pat_72b"] = $this->admin_model->pat($researchID,$session,"72b");
		$data["pat_72c"] = $this->admin_model->pat($researchID,$session,"72c");

		if($jenisClinical=="c1"){
			$page = "clinical_view";
		} elseif($jenisClinical=="c2"){
			$page = "clinical2_view";
		} elseif($jenisClinical=="c3"){
			$page = "clinical3_view";
		} elseif($jenisClinical=="diag"){
			$page = "diagnostic_view";
		} elseif($jenisClinical=="mgt"){
			$page = "management_view";
		} elseif($jenisClinical=="info"){
			$page = "otherinformation_view";
		} elseif($jenisClinical=="min"){
			$page = "minimum_data_set_view";
		}

		$this->load->view("main/header_view");
		$this->load->view("main/canvas_side_start");
		$this->load->view("admin/sidebar_view", $data);
		$this->load->view("main/canvas_main_start");
		$this->load->view("admin/top_bar_admin", $data);
		$this->load->view("admin/$page", $data);
		$this->load->view("main/canvas_main_end");
		$this->load->view("main/canvas_side_end");
		$this->load->view("main/footer_view");

	}

	public function page_process_clinical1($researchID, $session){

		$query = $this->admin_model->process_clinical($researchID,$session,"c1");

		if($query==1){
			redirect("admin/manage_approval");
		}

	}

	public function page_process_clinical2($researchID, $session){

		$query = $this->admin_model->process_clinical($researchID,$session,"c2");

		if($query==1){
			redirect("admin/manage_approval");
		}

	}

	public function page_process_clinical3($researchID,$session){

		$query = $this->admin_model->process_clinical($researchID,$session,"c3");

		if($query==1){
			redirect("admin/manage_approval");
		}

	}

	public function page_process_diagnostic($researchID,$session){

		$query = $this->admin_model->process_clinical($researchID,$session,"diag");

		if($query==1){
			redirect("admin/manage_approval");
		}

	}

	public function page_process_management($researchID,$session){

		$query = $this->admin_model->process_clinical($researchID,$session,"mgt");

		if($query==1){
			redirect("admin/manage_approval");
		}

	}

	public function page_process_other_information($researchID,$session){

		$query = $this->admin_model->process_clinical($researchID,$session,"info");

		if($query==1){
			redirect("admin/manage_approval");
		}

	}

	public function page_edit_patient($researchID,$session){

		$query = $this->admin_model->process_clinical($researchID,$session,"min");

		if($query==1){
			redirect("admin/manage_approval");
		}

	}

	public function page_process_role($jenis){

		$query = $this->admin_model->process_role($jenis);

		if($query==1){
			redirect("admin/manage_role");
		}

	}

}