<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function allUser(){

		$this->db->select("nama_user,description,usim_login.id, usim_login.status");
		$this->db->from("usim_login");
		$this->db->join("tbl_role","tbl_role.id=usim_login.role_user","LEFT");
		$this->db->where("role_user<>",999);
		$query = $this->db->get();

		return $query->result();

	}

	public function allRole(){

		$names = array(999, 4);
		$this->db->where_not_in("id", $names);
		$query = $this->db->get("tbl_role");

		return $query->result();

	}

	public function process_add_new_user(){

		$katanama = $this->input->post("inpUsername");
		$katalaluan = $this->input->post("inpPassword");
		$newPassword = md5("usim".$katalaluan."rehab");
		$fullName = $this->input->post("inpFullName");
		$staffID = $this->input->post("inpStaffID");
		$email = $this->input->post("inpEmail");
		$role = $this->input->post("slxRoleUser");

		$data = array(
			"katanama" => $katanama,
			"katalaluan" => $newPassword,
			"nama_user" => $fullName,
			"email_user" => $email,
			"role_user" => $role,
			"idno" => $staffID,
			"status" => 9
		);

		$query = $this->db->insert("usim_login", $data);

		if($query){
			return 1;
		} else {
			return 0;
		}

	}

	public function maklumat_user($iduser){

		$this->db->where("id",$iduser);
		$query = $this->db->get("usim_login");

		return $query->result();

	}

	public function process_edit_user(){

		$katanama = $this->input->post("inpUsername");
		$katalaluan = $this->input->post("inpPassword");
		if($katalaluan<>""){
			$newPassword = md5("usim".$katalaluan."rehab");
		}
		
		$fullName = $this->input->post("inpFullName");
		$staffID = $this->input->post("inpStaffID");
		$email = $this->input->post("inpEmail");
		$role = $this->input->post("slxRoleUser");
		$iduser = $this->input->post("hdnID");

		if($katalaluan<>""){
			$data = array(
				"katanama" => $katanama,
				"katalaluan" => $newPassword,
				"nama_user" => $fullName,
				"email_user" => $email,
				"role_user" => $role,
				"idno" => $staffID,
				"status" => 9
			);
		} else {
			$data = array(
				"katanama" => $katanama,
				"nama_user" => $fullName,
				"email_user" => $email,
				"role_user" => $role,
				"idno" => $staffID,
				"status" => 9
			);
		}

		$this->db->where("id",$iduser);
		$query = $this->db->update("usim_login", $data);

		if($query){
			return 1;
		} else {
			return 0;
		}
		

	}

	public function process_delete_user($iduser){

		$this->db->where("id",$iduser);
		$query = $this->db->delete("usim_login");

		if($query){
			return 1;
		} else {
			return 0;
		}

	}

	public function kira_approval(){

		$this->db->group_by("pat_researchID, session");
		$query = $this->db->get("tbl_for_notification");

		$total = $query->num_rows();

		return $total;

	}

	public function allClinical($jenis){

		if($jenis=="c1"){
			$table = "tbl_clinicalD13_D28";
		} elseif($jenis=="c2"){
			$table = "tbl_clinicalD29_D41";
		} elseif($jenis=="c3"){
			$table = "tbl_clinicalD42_D52";
		} elseif($jenis=="diag"){
			$table = "tbl_diagnostic";
		} elseif($jenis=="mgt"){
			$table = "tbl_management";
		} elseif($jenis=="info"){
			$table = "tbl_other_information";
		} elseif($jenis=="min"){
			$table = "tbl_patient_information";
		}

		$this->db->select("usim_login.nama_user, $table.saved_date, $table.pat_researchID, $table.session");
		$this->db->where("approval", 1);
		$this->db->from($table);
		$this->db->join("usim_login","usim_login.id=$table.saved_by", "LEFT");
		$query = $this->db->get();

		return $query->result();

	}

	public function maklumat_clinical($researchID,$session,$jenis){

		if($jenis=="c1"){
			$table = "tbl_clinicalD13_D28";
		} elseif($jenis=="c2"){
			$table = "tbl_clinicalD29_D41";
		} elseif($jenis=="c3"){
			$table = "tbl_clinicalD42_D52";
		} elseif($jenis=="diag"){
			$table = "tbl_diagnostic";
		} elseif($jenis=="mgt"){
			$table = "tbl_management";
		} elseif($jenis=="info"){
			$table = "tbl_other_information";
		} elseif($jenis=="min"){
			$table = "tbl_patient_information";
		}

		$this->db->where("session", $session);
		$this->db->where("pat_researchID", $researchID);
		$this->db->join("usim_login","$table.saved_by=usim_login.id","LEFT");
		$this->db->from($table);
		$query = $this->db->get();

		return $query->result();

	}

	public function pat($researchID,$session,$jenis){

		if($jenis=="23"){
			$table = "tbl_clinical23";
		} elseif($jenis=="29"){
			$table = "tbl_clinical29";
		} elseif($jenis=="57"){
			$table = "tbl_diagnostic57";
		} elseif($jenis=="63" or $jenis=="73a" or $jenis=="73b" or $jenis=="73c" or $jenis=="70" or $jenis=="71"){
			$table = "tbl_management63";
			$this->db->where("fieldNo", $jenis);
		}  elseif($jenis=="72" or $jenis=="72a" or $jenis=="72b" or $jenis=="72c"){
			$table = "tbl_other";
			$this->db->where("fieldNo", $jenis);
		} elseif($jenis=="5"){
			$table = "tbl_pat_05";
		}

		$this->db->where("session", $session);
		$this->db->where("pat_researchID", $researchID);
		$query = $this->db->get($table);

		return $query->result();

	}

	// page process

	public function process_clinical($researchID,$session,$jenis){

		if($jenis=="c1"){
			$table = "tbl_clinicalD13_D28";
			$part = 2;
		} elseif($jenis=="c2"){
			$table = "tbl_clinicalD29_D41";
			$part = 3;
		} elseif($jenis=="c3"){
			$table = "tbl_clinicalD42_D52";
			$part = 4;
		} elseif($jenis=="diag"){
			$table = "tbl_diagnostic";
			$part = 5;
		} elseif($jenis=="mgt"){
			$table = "tbl_management";
			$part = 6;
		} elseif($jenis=="info"){
			$table = "tbl_other_information";
			$part = 7;
		} elseif($jenis=="min"){
			$table = "tbl_patient_information";
			$part = 1;
		}

		$approval = $this->input->post("rdoApproval");
		$approvalBy = $this->input->post("hdnApprovalID");
		$today = date("Y-m-d");

		$array = array(
			"approval" => 2,
			"approval_status" => $approval,
			"approval_by" => $approvalBy,
			"approval_date" => $today
		);

		$this->db->where("session", $session);
		$this->db->where("pat_researchID", $researchID);
		$query = $this->db->update($table, $array);

		$delete = $this->db->delete("tbl_for_notification", array("part"=>$part,"pat_researchID"=>$researchID,"session"=>$session));

		if($query){
			return 1;
		} else {
			return 0;
		}

		// die($approval);
	}

	public function senarai_login(){

		$this->db->where("usim_login.role_user <>",999);
		$this->db->where("tbl_log.last_logout <>", "0000-00-00 00:00:00");
		$this->db->select("usim_login.nama_user, tbl_role.description, tbl_log.last_login, tbl_log.last_logout");
		$this->db->from("tbl_log");
		$this->db->join("usim_login","tbl_log.iduser=usim_login.id","LEFT");
		$this->db->join("tbl_role","tbl_role.id=usim_login.role_user","LEFT");
		$query = $this->db->get();

		return $query->result();

	}

	public function process_role($jenis){


		$data = array(
			"description" => $this->input->post("inpRoleDesc")
		);

		if($jenis==1){
			$query = $this->db->insert("tbl_role", $data);
		} elseif($jenis==2){
			$this->db->where("id", $this->input->post("hdnIDRole"));
			$query = $this->db->update("tbl_role", $data);

		}

		
		if($query){
			return 1;
		} else {
			return 0;
		}

	}

	public function getRole($idrole){

		$this->db->where("id", $idrole);
		$query = $this->db->get("tbl_role");

		$data = $query->row();

		if(isset($data)){
			return $data->description;
		}

	}

	public function deleteRole($idrole){

		$query = $this->db->delete("tbl_role", array("id"=>$idrole));

		if($query){
			return 1;
		} else {
			return 0;
		}

	}

	public function jumlah($jenis,$iduser){

		if($jenis==1){
			$this->db->where("role_user <>", 999);
			$query = $this->db->get("usim_login");

			return $query->num_rows();

		} elseif($jenis==2){
			$query = $this->db->get("tbl_therapy");

			return $query->num_rows();

		} elseif($jenis==3){
			
			$this->db->group_by("pat_researchID, session");
			$query = $this->db->get("tbl_for_notification");

			return $query->num_rows();

		} elseif($jenis==4){

			$total = $min = $c1 = $c2 = $c3 = $diag = $mgt = $info = "";

			$this->db->group_by("pat_researchID, session");
			$this->db->where("approval_by", $iduser);
			$query = $this->db->get("tbl_patient_information");

			$min = $query->num_rows();

			$this->db->group_by("pat_researchID, session");
			$this->db->where("approval_by", $iduser);
			$query = $this->db->get("tbl_clinicalD13_D28");

			$c1 = $query->num_rows();

			$this->db->group_by("pat_researchID, session");
			$this->db->where("approval_by", $iduser);
			$query = $this->db->get("tbl_clinicalD29_D41");

			$c2 = $query->num_rows();

			$this->db->group_by("pat_researchID, session");
			$this->db->where("approval_by", $iduser);
			$query = $this->db->get("tbl_clinicalD42_D52");

			$c3 = $query->num_rows();

			$this->db->group_by("pat_researchID, session");
			$this->db->where("approval_by", $iduser);
			$query = $this->db->get("tbl_diagnostic");

			$diag = $query->num_rows();

			$this->db->group_by("pat_researchID, session");
			$this->db->where("approval_by", $iduser);
			$query = $this->db->get("tbl_management");

			$mgt = $query->num_rows();

			$this->db->group_by("pat_researchID, session");
			$this->db->where("approval_by", $iduser);
			$query = $this->db->get("tbl_other_information");

			$info = $query->num_rows();

			$total = $min + $c1 + $c2 + $c3 + $diag + $mgt + $info;

			return $total;
		}

		
		
		
	}

}