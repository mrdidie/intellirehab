<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Therapist_researcher extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->helper("url");
		$this->load->model("therapist_researcher_model");
		$this->load->model("calendar_model");
		$this->load->model("follow_up_model");
		$this->load->model("profile_model");

		if(!isset($_SESSION['login'])){
			redirect("login");
		} elseif($_SESSION['role_user']<>8){
			redirect("login");
		}

	}

	public function index(){

		$data["dashboard"] = "";
		$data["icon_dashboard"] = "#fff";
		$data["managePatient"] = "";
		$data["icon_managePatient"] = "#ccc";
		$data["manageTheraphy"] = "";
		$data["followUP"] = "";
		$data["icon_followUP"] = "#ccc";
		$data["manageProfile"] = "";
		$data["icon_profile"] = "#ccc";

		$data["page"] = "Dashboard";
		$data["action"] = "";

		$data["jumlah_pesakit"] = $this->therapist_researcher_model->jumlahPatient($_SESSION['id_user']);

		$data["cal"] = $this->calendar_model->generate($_SESSION['id_user']);

		$data["schedule"] = $this->calendar_model->schedule($_SESSION['id_user']);

		$data["dah_hantar"] = $this->calendar_model->submit_approval($_SESSION['id_user'],1);
		$data["pending"] = $this->calendar_model->submit_approval($_SESSION['id_user'],2);

		$data["jumlah_approval"] = $this->therapist_researcher_model->kira_approval($_SESSION['id_user']);

		$data["jantina_lelaki"] = $this->therapist_researcher_model->kira_jantina($_SESSION['id_user'],1);
		$data["jantina_perempuan"] = $this->therapist_researcher_model->kira_jantina($_SESSION['id_user'],2);
		$data["jantina_others"] = $this->therapist_researcher_model->kira_jantina($_SESSION['id_user'],3);

		$this->load->view("main/header_view");
		$this->load->view("main/canvas_side_start");
		$this->load->view("therapist_researcher/sidebar_view", $data);
		$this->load->view("main/canvas_main_start");
		$this->load->view("therapist_researcher/topbar_view", $data);
		$this->load->view("therapist_researcher/dashboard_view", $data);
		$this->load->view("main/canvas_main_end");
		$this->load->view("main/canvas_side_end");
		$this->load->view("main/footer_view");
		
	}

	public function manage_patient(){

		$data["dashboard"] = "";
		$data["icon_dashboard"] = "#ccc";
		$data["managePatient"] = "";
		$data["icon_managePatient"] = "#fff";
		$data["manageTheraphy"] = "";
		$data["followUP"] = "";
		$data["icon_followUP"] = "#ccc";
		$data["manageProfile"] = "";
		$data["icon_profile"] = "#ccc";

		$data["page"] = "Patient";
		$data["action"] = "";

		$data["maklumat_therapy"] = $this->therapist_researcher_model->allTherapy($_SESSION['id_user']);

		$this->load->view("main/header_view");
		$this->load->view("main/canvas_side_start");
		$this->load->view("therapist_researcher/sidebar_view", $data);
		$this->load->view("main/canvas_main_start");
		$this->load->view("therapist_researcher/topbar_view", $data);
		$this->load->view("therapist_researcher/manage_patient_view", $data);
		$this->load->view("main/canvas_main_end");
		$this->load->view("main/canvas_side_end");
		$this->load->view("main/footer_view");

	}

	public function manage_therapy($researchID,$session){

		$data["dashboard"] = "";
		$data["icon_dashboard"] = "#ccc";
		$data["managePatient"] = "";
		$data["icon_managePatient"] = "#fff";
		$data["manageTheraphy"] = "";
		$data["followUP"] = "";
		$data["icon_followUP"] = "#ccc";
		$data["manageProfile"] = "";
		$data["icon_profile"] = "#ccc";

		$data["page"] = "Theraphy";
		$data["action"] = $researchID;
		$data["idtherapy"] = $session;

		$data["new_session"] = $this->therapist_researcher_model->new_session($researchID);

		$data["maklumat_patient"] = $this->therapist_researcher_model->allPatient($_SESSION['id_user'],$researchID,$session);

		$data["percentage"] = $this->therapist_researcher_model->kira_percentage($researchID, $session);
		$data["atas"] = $this->therapist_researcher_model->kira_table_ada_isi($researchID,$session);
		$data["bawah"] = $this->therapist_researcher_model->kira_table_semua();

		$this->load->view("main/header_view");
		$this->load->view("main/canvas_side_start");
		$this->load->view("therapist_researcher/sidebar_view", $data);
		$this->load->view("main/canvas_main_start");
		$this->load->view("therapist_researcher/topbar_view", $data);
		$this->load->view("therapist_researcher/manage_therapy_list_view", $data);
		$this->load->view("main/canvas_main_end");
		$this->load->view("main/canvas_side_end");
		$this->load->view("main/footer_view");

	}

	public function patient_theraphy($researchID,$sessionNo){

		$data["dashboard"] = "";
		$data["icon_dashboard"] = "#ccc";
		$data["managePatient"] = "";
		$data["icon_managePatient"] = "#fff";
		$data["manageTheraphy"] = "";
		$data["followUP"] = "";
		$data["icon_followUP"] = "#ccc";
		$data["manageProfile"] = "";
		$data["icon_profile"] = "#ccc";

		$data["page"] = "Theraphy";
		$data["action"] = $researchID;
		$data["session"] = $sessionNo;

		$data["maklumat_minimum_data"] = $this->therapist_researcher_model->minimum_data($researchID);
		$data["pat_05"] = $this->therapist_researcher_model->pat_05($researchID);

		$data["clinicalD13"] = $this->therapist_researcher_model->panggil_data_clinical1($researchID,$sessionNo);
		$data["pat_23"] = $this->therapist_researcher_model->pat_23($researchID,$sessionNo);

		$data["clinicalD29"] = $this->therapist_researcher_model->panggil_data_clinical2($researchID,$sessionNo);
		$data["pat_29"] = $this->therapist_researcher_model->pat_29($researchID,$sessionNo);

		$data["clinicalD42"] = $this->therapist_researcher_model->panggil_data_clinical3($researchID,$sessionNo);

		$data["diagnostic"] = $this->therapist_researcher_model->panggil_data_diagnostic($researchID,$sessionNo);
		$data["pat_57"] = $this->therapist_researcher_model->pat_57($researchID,$sessionNo);

		$data["management"] = $this->therapist_researcher_model->panggil_data_mgt($researchID,$sessionNo);
		$data["pat_63"] = $this->therapist_researcher_model->pat_63($researchID,"63",$sessionNo);
		$data["pat_73a"] = $this->therapist_researcher_model->pat_63($researchID,"73a",$sessionNo);
		$data["pat_73b"] = $this->therapist_researcher_model->pat_63($researchID,"73b",$sessionNo);
		$data["pat_73c"] = $this->therapist_researcher_model->pat_63($researchID,"73c",$sessionNo);
		$data["pat_70"] = $this->therapist_researcher_model->pat_63($researchID,"70",$sessionNo);
		$data["pat_71"] = $this->therapist_researcher_model->pat_63($researchID,"71",$sessionNo);

		$data["otherinformation"] = $this->therapist_researcher_model->panggil_data_other_info($researchID,$sessionNo);
		$data["pat_72"] = $this->therapist_researcher_model->pat_72($researchID,"72",$sessionNo);
		$data["pat_72a"] = $this->therapist_researcher_model->pat_72($researchID,"72a",$sessionNo);
		$data["pat_72b"] = $this->therapist_researcher_model->pat_72($researchID,"72b",$sessionNo);
		$data["pat_72c"] = $this->therapist_researcher_model->pat_72($researchID,"72c",$sessionNo);

		$data["tab_1"] = $this->load->view("therapist_researcher/edit_patient_view", $data, TRUE);
		$data["tab_2"] = $this->load->view("therapist_researcher/manage_clinical_view_1", $data, TRUE);
		$data["tab_3"] = $this->load->view("therapist_researcher/manage_diagnostic_view", $data, TRUE);
		$data["tab_4"] = $this->load->view("therapist_researcher/manage_management_view", $data, TRUE);
		$data["tab_5"] = $this->load->view("therapist_researcher/manage_other_information_view", $data, TRUE);
		$data["tab_6"] = $this->load->view("therapist_researcher/manage_clinical_view_2", $data, TRUE);
		$data["tab_7"] = $this->load->view("therapist_researcher/manage_clinical_view_3", $data, TRUE);

		$this->load->view("main/header_view");
		$this->load->view("main/canvas_side_start");
		$this->load->view("therapist_researcher/sidebar_view", $data);
		$this->load->view("main/canvas_main_start");
		$this->load->view("therapist_researcher/topbar_view", $data);
		$this->load->view("therapist_researcher/manage_theraphy_view", $data);
		$this->load->view("main/canvas_main_end");
		$this->load->view("main/canvas_side_end");
		$this->load->view("main/footer_view");

	}

	public function follow_up(){

		$data["dashboard"] = "";
		$data["icon_dashboard"] = "#ccc";
		$data["managePatient"] = "";
		$data["icon_managePatient"] = "#ccc";
		$data["manageTheraphy"] = "";
		$data["followUP"] = "";
		$data["icon_followUP"] = "#fff";
		$data["manageProfile"] = "";
		$data["icon_profile"] = "#ccc";

		$data["page"] = "Follow UP";
		$data["action"] = "";

		$data["senarai_patient"] = $this->follow_up_model->semua_pesakit();

		$this->load->view("main/header_view");
		$this->load->view("main/canvas_side_start");
		$this->load->view("therapist_researcher/sidebar_view", $data);
		$this->load->view("main/canvas_main_start");
		$this->load->view("therapist_researcher/topbar_view", $data);
		$this->load->view("follow_up/manage_followup", $data);
		$this->load->view("main/canvas_main_end");
		$this->load->view("main/canvas_side_end");
		$this->load->view("main/footer_view");

	}

	public function manage_followup($researchID,$session){

		$data["dashboard"] = "";
		$data["icon_dashboard"] = "#ccc";
		$data["managePatient"] = "";
		$data["icon_managePatient"] = "#ccc";
		$data["manageTheraphy"] = "";
		$data["followUP"] = "";
		$data["icon_followUP"] = "#fff";
		$data["manageProfile"] = "";
		$data["icon_profile"] = "#ccc";

		$data["page"] = "Follow UP";
		$data["action"] = "";

		$data["researchID"] = $researchID;
		$data["session"] = $session;

		$data["tab_1"] = $this->load->view("follow_up/follow1", $data, TRUE);
		$data["tab_2"] = $this->load->view("follow_up/follow2", $data, TRUE);

		$this->load->view("main/header_view");
		$this->load->view("main/canvas_side_start");
		$this->load->view("therapist_researcher/sidebar_view", $data);
		$this->load->view("main/canvas_main_start");
		$this->load->view("therapist_researcher/topbar_view", $data);
		$this->load->view("follow_up/main_followup", $data);
		$this->load->view("main/canvas_main_end");
		$this->load->view("main/canvas_side_end");
		$this->load->view("main/footer_view");

	}

	public function manage_profile(){

		$data["dashboard"] = "";
		$data["icon_dashboard"] = "#ccc";
		$data["managePatient"] = "";
		$data["icon_managePatient"] = "#ccc";
		$data["manageTheraphy"] = "";
		$data["followUP"] = "";
		$data["icon_followUP"] = "#ccc";
		$data["manageProfile"] = "";
		$data["icon_profile"] = "#fff";

		$data["page"] = "Profile";
		$data["action"] = "";

		$data["data_profile"] = $this->profile_model->profile($_SESSION['id_user']);
		$data["data_role"] = $this->profile_model->allRole();

		$this->load->view("main/header_view");
		$this->load->view("main/canvas_side_start");
		$this->load->view("therapist_researcher/sidebar_view", $data);
		$this->load->view("main/canvas_main_start");
		$this->load->view("therapist_researcher/topbar_view", $data);
		$this->load->view("therapist_researcher/manage_profile", $data);
		$this->load->view("main/canvas_main_end");
		$this->load->view("main/canvas_side_end");
		$this->load->view("main/footer_view");

		// $this->load->view("errors/html/error_500");
		
	}

	public function page_process_profile(){

		$query = $this->profile_model->process_profile();

		if($query==1){
			redirect("therapist_researcher/manage_profile");
		}

	}


	public function new_patient(){

		$data["dashboard"] = "";
		$data["icon_dashboard"] = "#ccc";
		$data["managePatient"] = "";
		$data["icon_managePatient"] = "#fff";
		$data["manageTheraphy"] = "";
		$data["followUP"] = "";
		$data["icon_followUP"] = "#ccc";
		$data["manageProfile"] = "";
		$data["icon_profile"] = "#ccc";

		$data["page"] = "Patient";
		$data["action"] = "New Patient";

		$this->load->view("main/header_view");
		$this->load->view("main/canvas_side_start");
		$this->load->view("therapist_researcher/sidebar_view", $data);
		$this->load->view("main/canvas_main_start");
		$this->load->view("therapist_researcher/topbar_view", $data);
		$this->load->view("therapist_researcher/add_patient_view", $data);
		$this->load->view("main/canvas_main_end");
		$this->load->view("main/canvas_side_end");
		$this->load->view("main/footer_view");

	}

	public function page_add_new_patient(){

		$researchID = "RID".$this->input->post("inpPatResearchID");

		$query = $this->therapist_researcher_model->addNewPatient();

		if($query==1){
			redirect("therapist_researcher/patient_theraphy/".$researchID."/1"); // sesi pertama
		}

	}

	public function counter_rid(){

		$data = $this->therapist_researcher_model->counter();

		echo $data;

	}

	public function page_edit_patient($researchID,$session){

		$query = $this->therapist_researcher_model->process_edit_minimum($researchID,$session);

		if($query==1){
			redirect("therapist_researcher/patient_theraphy/".$researchID."/".$session);
		}

	}

	public function page_process_clinical1($researchID,$session){

		$query = $this->therapist_researcher_model->process_clinical1($researchID,$session);

		if($query==1){
			redirect("therapist_researcher/patient_theraphy/".$researchID."/".$session);
		}

	}

	public function page_process_clinical2($researchID,$session){

		$query = $this->therapist_researcher_model->process_clinical2($researchID,$session);

		if($query==1){
			redirect("therapist_researcher/patient_theraphy/".$researchID."/".$session);
		}

	}

	public function page_process_clinical3($researchID,$session){

		$query = $this->therapist_researcher_model->process_clinical3($researchID,$session);

		if($query==1){
			redirect("therapist_researcher/patient_theraphy/".$researchID."/".$session);
		}

	}

	public function page_process_diagnostic($researchID,$session){

		$query = $this->therapist_researcher_model->process_diagnostic($researchID,$session);

		if($query==1){
			redirect("therapist_researcher/patient_theraphy/".$researchID."/".$session);
		}

	}

	public function page_process_management($researchID,$session){

		$query = $this->therapist_researcher_model->process_management($researchID,$session);

		if($query==1){
			redirect("therapist_researcher/patient_theraphy/".$researchID."/".$session);
		}

	}

	public function page_process_other_information($researchID,$session){

		$query = $this->therapist_researcher_model->process_other_information($researchID,$session);

		if($query==1){
			redirect("therapist_researcher/patient_theraphy/".$researchID."/".$session);
		}

	}

	public function send_mail() {
        
		$email = $this->therapist_researcher_model->hantar_email();

    }

    public function page_process_follow1($researchID,$session){

    	$query = $this->therapist_researcher_model->process_follow1($researchID,$session);

    	if($query==1){
    		redirect("therapist_researcher/manage_followup/".$researchID."/".$session);
    	}

    }

    // ajax

    public function keterangan_patient(){

    	$query = $this->therapist_researcher_model->detailPatient();

    	echo $query;

    }


}