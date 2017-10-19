<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Follow_up_model extends CI_Model {

	public function semua_pesakit(){

		$this->db->select("pat_firstname,tbl_patient_information.pat_researchID,cli_19FollowUp,tbl_patient_information.pat_rn, tbl_patient_information.session");
		$this->db->from("tbl_patient_information");
		$this->db->join("tbl_clinicalD13_D28","tbl_patient_information.pat_researchID=tbl_clinicalD13_D28.pat_researchID","LEFT");
		$query = $this->db->get();

		return $query->result();

		// $data = array();

		// foreach($query->result() as $row){

		// 	$data["pat_researchID"] = $row->pat_researchID;
		// 	$data["session"] = $row->session;
		// 	$data["pat_firstname"] = $row->pat_firstname;
		// 	$data["pat_rn"] = $row->pat_rn;
		// 	$data["cli_19FollowUp"] = $row->cli_19FollowUp;

		// 	$kebenaran = $this->kebenaran_followup($row->pat_researchID,$row->session);

		// 	$today = date("Y-m-d");

		// 	if($today==$row->cli_19FollowUp and $kebenaran==1){
		// 		$status = "Follow up";
		// 	} else {
		// 		$status = "Follow up not available";
		// 	}

		// 	$data["status"] = $status;
		// 	$data["kebenaran"] = $kebenaran;

		// 	// print_r($data);
		// 	return $data;

		// }

	}

	public function kebenaran_followup($researchID,$session){

		$this->load->model("therapist_researcher_model");

		$kira_isi = $this->therapist_researcher_model->kira_table_ada_isi($researchID,$session);
		$kira_semua = $this->therapist_researcher_model->kira_table_semua();

		$total = ($kira_isi / $kira_semua) * 100;

		if($total=="100"){
			return 1;
		} else {
			return 0;
		}

	}

	public function process_follow1($researchID,$session){

		$idfollow1 = $this->input->post("hdnID");

		foreach($this->input->post("chkDie") as $d => $value){
			
			$die = $value;

		}

		if($die==1){

			$follow1 = array(
				"pat_researchID" => $researchID,
				"session" => $session,
				"pat_die" => $die,
				"saved_by" => $_SESSION['id_user'],
				"saved_date" => date("Y-m-d")
			);


			if($idfollow1<>""){
				$this->db->where("idfollowup", $idfollow1);
				$this->db->update("tbl_followupD74toD84", $follow1);
			} else {
				$query = $this->db->insert("tbl_followupD74toD84", $follow1);
			}
			

		} else {

			if($idfollow1<>""){
				$this->db->where("fieldNo", 74);
				$this->db->where("pat_researchID", $researchID);
				$this->db->where("session", $session);
				$this->db->delete("tbl_followup74");
			}

			foreach($this->input->post("chk74") as $h74=>$val74){

				$data74 = array(
					"pat_researchID" => $researchID,
					"session" => $session,
					"fieldNo" => 74,
					"value" => $val74
				);

				$this->db->insert("tbl_followup74", $data74);

			}

			$slx75 = $this->input->post("slx75");
			$slx76 = $this->input->post("slx76");
			$slx77 = $this->input->post("slx77");
			$slx77a = $this->input->post("slx77a");
			$slx77aDesc = $this->input->post("slx77aDesc");
			$slx78 = $this->input->post("slx78");
			$slx79 = $this->input->post("slx79");
			$slx80a = $this->input->post("slx80a");
			$slx80b = $this->input->post("slx80b");
			$slx81 = $this->input->post("slx81");
			$slx81b = $this->input->post("slx81b");
			$slx81c = $this->input->post("slx81c");
			$slx82 = $this->input->post("slx82");
			$slx83 = $this->input->post("slx83");
			$slx84 = $this->input->post("slx84");


			$follow1 = array(

				"pat_researchID" => $researchID,
				"session" => $session,
				"pat_died" => 0,
				"follow75" => $slx75,
				"follow76" => $slx76,
				"follow77" => $slx77,
				"follow77a" => $slx77a,
				"follow77aDesc" => $slx77aDesc,
				"follow78" => $slx78,
				"follow79" => $slx79,
				"follow80a" => $slx80a,
				"follow80b" => $slx80b,
				"follow81" => $slx81,
				"follow81a" => $slx81b,
				"follow81b" => $slx81c,
				"follow82" => $slx82,
				"follow83" => $slx83,
				"follow84" => $slx84,
				"saved_by" => $_SESSION['id_user'],
				"saved_date" => date("Y-m-d")

			);

			if($idfollow1<>""){
				$this->db->where("idfollowup", $idfollow1);
				$query = $this->db->update("tbl_followupD74toD84", $follow1);
			} else {
				$query = $this->db->insert("tbl_followupD74toD84", $follow1);
			}
			
		}


		if($query){
			return 1;
		} else {
			return 0;
		}

	}

	public function process_follow2($researchID, $session){

		$idfollow2 = $this->input->post("hdnID");

		if($idfollow2<>""){
			$this->db->where("fieldNo", 85);
			$this->db->where("pat_researchID", $researchID);
			$this->db->where("session", $session);
			$this->db->delete("tbl_followup74");
		}

		foreach($this->input->post("chk85") as $x => $val85){

			$array = array(
				"pat_researchID" => $researchID,
				"session" => $session,
				"fieldNo" => 85,
				"value" => $val85
			);

			$this->db->insert("tbl_followup74", $array);

		}

		$slx86 = $this->input->post("slx86");
		$barthelBowel = $this->input->post("slxBarthelBowel");
		$barthelFeeding = $this->input->post("slxBarthelFeeding");
		$barthelBladder = $this->input->post("slxBarthelBladder");
		$barthelDressing = $this->input->post("slxBarthelDressing");
		$barthelGrooming = $this->input->post("slxBarthelGrooming");
		$barthelMobility = $this->input->post("slxBarthelMobility");
		$barthelToilet = $this->input->post("slxBarthelToilet");
		$barthelTransfer = $this->input->post("slxBarthelTransfer");
		$barthelBathing = $this->input->post("slxBarthelBathing");
		$barthelStairs = $this->input->post("slxBarthelStairs");
		$IADLtelephone = $this->input->post("inpTelephone");
		$IADLshopping = $this->input->post("inpShopping");
		$IADLpreparingfood = $this->input->post("inpPreparingFood");
		$IADLhousekeeping = $this->input->post("inpHousekeeping");
		$IADLlaundry = $this->input->post("inpDoingLaundry");
		$IADLtransport = $this->input->post("inpTransportation");
		$IADLmedication = $this->input->post("inpHandlingMedication");
		$IADLfinance = $this->input->post("inpHandlingFinances");
		$HADSscore = $this->input->post("inpHADSTotalScore");
		$slx88 = $this->input->post("slx88");
		$FASTscore = $this->input->post("inpFastScore");
		$MMEscore = $this->input->post("inpMMSEScore");
		$CSIscore = $this->input->post("inpCSIScore");

		$follow2 = array(

			"pat_researchID" => $researchID,
			"session" => $session,
			"follow86" => $slx86,
			"Dressing" => $barthelDressing,
			"Grooming" => $barthelGrooming,
			"Bathing" => $barthelBathing,
			"Toilet" => $barthelToilet,
			"Bowel" => $barthelBowel,
			"Bladder" => $barthelBladder,
			"Feeding" => $barthelFeeding,
			"Transfer" => $barthelTransfer,
			"Mobility" => $barthelMobility,
			"Stairs" => $barthelStairs,
			"telephone" => $IADLtelephone,
			"shopping" => $IADLshopping,
			"preparefood" => $IADLpreparingfood,
			"housekeeping" => $IADLhousekeeping,
			"laundry" => $IADLlaundry,
			"transport" => $IADLtransport,
			"medications" => $IADLmedication,
			"finances" => $IADLfinance,
			"hads" => $HADSscore,
			"follow88" => $slx88,
			"fast" => $FASTscore,
			"mme" => $MMEscore,
			"csi" => $CSIscore,
			"saved_by" => $_SESSION['id_user'],
			"saved_date" => date("Y-m-d")

		);

		if($idfollow2<>""){
			$this->db->where("idfollowup", $idfollow2);
			$query = $this->db->update("tbl_followupD85toD91", $follow2);
		} else {
			$query = $this->db->insert("tbl_followupD85toD91", $follow2);
		}

		if($query){
			return 1;
		} else {
			return 0;
		}

	}

	public function jumlahFollowup($iduser){

		date_default_timezone_set("Asia/Kuala_Lumpur");

		$today = date("Y-m-d");

		$this->db->where("saved_by", $iduser);
		$this->db->where("cli_19FollowUp <>", "0000-00-00");
		$query = $this->db->get("tbl_clinicalD13_D28");

		return $query->num_rows();

	}

	public function followup($researchID, $session, $table){

		$this->db->where("pat_researchID", $researchID);
		$this->db->where("session", $session);
		$query = $this->db->get($table);

		return $query->result();

	}

	public function followsub($researchID,$session,$fieldNo){

		$this->db->where("pat_researchID", $researchID);
		$this->db->where("session", $session);
		$this->db->where("fieldNo", $fieldNo);
		$query = $this->db->get("tbl_followup74");

		return $query->result();

	}

}