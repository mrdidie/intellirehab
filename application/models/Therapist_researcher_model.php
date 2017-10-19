<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Therapist_researcher_model extends CI_Model {

	public function allTherapy($idtherapist){

		$this->db->select("tbl_therapy.pat_researchID, tbl_patient_information.pat_firstname, tbl_therapy.id, tbl_patient_information.pat_rn, tbl_patient_information.session");
		$this->db->from("tbl_therapy");
		$this->db->join("tbl_patient_information", "tbl_patient_information.pat_researchID=tbl_therapy.pat_researchID", "LEFT");
		$query = $this->db->get();

		return $query->result();

	}

	public function allPatient($idtherapist,$researchID,$session){

		$this->db->select("pat_firstname, tbl_patient_information.pat_researchID, cli_19, cli_19FollowUp, tbl_patient_information.idtherapy, tbl_patient_information.pat_rn, tbl_clinicalD13_D28.session");
		$this->db->where("doctor_who", $idtherapist);
		$this->db->where("tbl_patient_information.pat_researchID", $researchID);
		$this->db->where("tbl_patient_information.session", $session);
		$this->db->from("tbl_patient_information");
		$this->db->join("tbl_clinicalD13_D28", "tbl_patient_information.pat_researchID=tbl_clinicalD13_D28.pat_researchID","LEFT");
		$query = $this->db->get();

		return $query->result();

	}

	public function jumlahPatient($idtherapist){

		$this->db->where("doctor_who",$idtherapist);
		$query = $this->db->get("tbl_patient_information");

		return $query->num_rows();

	}

	public function new_session($researchID){

		$this->db->select("session");
		$this->db->where("pat_researchID", $researchID);
		$query = $this->db->get("tbl_clinicalD13_D28");

		$row = $query->row();

		if(isset($row)){
			$new_session = $row->session + 1;
		} else {
			$new_session = 1;
		}

		return $new_session;

	}

	public function addNewPatient(){

		$patientID = $this->input->post("inpPatRN");
		$dob = $this->input->post("inpPatDateOfBirth");
		$gender = $this->input->post("slxPatGender");
		$researchID = "RID".$this->input->post("inpPatResearchID");
		$source = $this->input->post("slxPatSource");
		$sourceDesc = $this->input->post("inpPatSourceDesc");
		$sourceIDPatient = $this->input->post("inpPatSourceIDPatient");
		$surname = $this->input->post("inpPatSurname");
		$name = $this->input->post("inpPatName");
		$address = $this->input->post("inpPatAddress");
		$addressv1 = $this->input->post("inpPatAddressV1");
		$addressv2 = $this->input->post("inpPatAddressV2");
		$postcode = $this->input->post("inpPatPostcode");
		$district = $this->input->post("inpPatDistrict");
		$state = $this->input->post("inpPatState");
		$contactNo = $this->input->post("inpContactNoIfKnown");
		$race = $this->input->post("slxPatRace");
		$raceDesc = $this->input->post("inpPatRaceDesc");
		$education = $this->input->post("slxPatHighEducation");
		$employment = $this->input->post("slxPatEmployment");
		$employmentDesc = $this->input->post("inpPatEmploymentDesc");
		$cerebrovascular = $this->input->post("slxPat04");
		$accomodationPrestroke = $this->input->post("slx06Prestroke");
		$accomodationDischarge = $this->input->post("slx06AtDischarge");
		$rankinPrestroke = $this->input->post("slx07Prestroke");
		$rankinAdmission = $this->input->post("slx07OnAdmission");
		$rankinDischarge = $this->input->post("slx07AtDischarge");
		$barthelBowelPrestroke = $this->input->post("slxBarthelADLPreStrokeBowel");
		$barthelBowelDischarge = $this->input->post("slxBarthelADLAtDischargeBowel");
		$barthelFeedingPrestroke = $this->input->post("slxBarthelADLPreStrokeFeeding");
		$barthelFeedingDischarge = $this->input->post("slxBarthelADLAtDischargeFeeding");
		$barthelBladderPrestroke = $this->input->post("slxBarthelADLPreStrokeBladder");
		$barthelBladderDischarge = $this->input->post("slxBarthelADLAtDischargeBladder");
		$barthelDressingPreStroke = $this->input->post("slxBarthelADLPreStrokeDressing");
		$barthelDressingDischarge = $this->input->post("slxBarthelADLAtDischargeDressing");
		$barthelGroomingPrestroke = $this->input->post("slxBarthelADLPreStrokeGrooming");
		$barthelGroomingDischarge = $this->input->post("slxBarthelADLAtDischargeGrooming");
		$barthelMobilityPrestroke = $this->input->post("slxBarthelADLPreStrokeMobility");
		$barthelMobilityDischarge = $this->input->post("slxBarthelADLAtDischargeMobility");
		$barthelToiletPrestroke = $this->input->post("slxBarthelADLPreStrokeToilet");
		$barthelToiletDischarge = $this->input->post("slxBarthelADLAtDischargeToilet");
		$barthelTransferPrestroke = $this->input->post("slxBarthelADLPreStrokeTransfer");
		$barthelTransferDischarge = $this->input->post("slxBarthelADLAtDischargeTransfer");
		$barthelBathingPrestroke = $this->input->post("slxBarthelADLPreStrokeBathing");
		$barthelBathingDischarge = $this->input->post("slxBarthelADLAtDischargeBathing");
		$barthelStairsPrestroke = $this->input->post("slxBarthelADLPreStrokeStairs");
		$barthelStairsDischarge = $this->input->post("slxBarthelADLAtDischargeStairs");
		$outcome = $this->input->post("slxOutcome");

		$chk05desc = $this->input->post("chk05Desc");

		$newTherapy = $this->db->insert("tbl_therapy", array("pat_researchID"=>$researchID, "pat_rn"=>$patientID));

		// get id from therapy

		$this->db->select("id");
		$this->db->where("pat_researchID",$researchID);
		$datatherapy = $this->db->get("tbl_therapy");

		$row = $datatherapy->row();

		if(isset($row)){
			$idtherapy = $row->id;
		}

		$data = array(
			"idtherapy" => $idtherapy,
			"pat_researchID" => $researchID,
			"pat_rn" => $patientID,
			"pat_dob" => $dob,
			"pat_gender" => $gender,
			"pat_source" => $source,
			"pat_sourceDesc" => $sourceDesc,
			"pat_sourceIDPatient" => $sourceIDPatient,
			"pat_surname" => $surname,
			"pat_firstname" => $name,
			"pat_address" => $address,
			"pat_address1" => $addressv1,
			"pat_address2" => $addressv2,
			"pat_postcode" => $postcode,
			"pat_district" => $district,
			"pat_state" => $state,
			"pat_contactNo" => $contactNo,
			"pat_race" => $race,
			"pat_raceDesc" => $raceDesc,
			"pat_education" => $education,
			"pat_employment" => $employment,
			"pat_employmentDesc" => $employmentDesc,
			"pat_04" => $cerebrovascular,
			"pat_05Desc" => $chk05desc,
			"pat_06PreStroke" => $accomodationPrestroke,
			"pat_06Discharge" => $accomodationDischarge,
			"pat_07RankinPreStroke" => $rankinPrestroke,
			"pat_07RankinOnAdmission" => $rankinAdmission,
			"pat_07RankinDischarge" => $rankinDischarge,
			"pat_BarthelBowelPreStroke" => $barthelBowelPrestroke,
			"pat_BarthelBowelDischarge" => $barthelBowelDischarge,
			"pat_BarthelFeedingPreStroke" => $barthelFeedingPrestroke,
			"pat_BarthelFeedingDischarge" => $barthelFeedingDischarge,
			"pat_BarthelBladderPreStroke" => $barthelBladderPrestroke,
			"pat_BarthelBladderDischarge" => $barthelBladderDischarge,
			"pat_BarthelDressingPreStroke" => $barthelDressingPreStroke,
			"pat_BarthelDressingDischarge" => $barthelDressingDischarge,
			"pat_BarthelGroomingPreStroke" => $barthelGroomingPrestroke,
			"pat_BarthelGroomingDischarge" => $barthelGroomingDischarge,
			"pat_BarthelMobilityPreStroke" => $barthelMobilityPrestroke,
			"pat_BarthelMobilityDischarge" => $barthelMobilityDischarge,
			"pat_BarthelToiletPreStroke" => $barthelToiletPrestroke,
			"pat_BarthelToiletDischarge" => $barthelToiletDischarge,
			"pat_BarthelTransferPreStroke" => $barthelTransferPrestroke,
			"pat_BarthelTransferDischarge" => $barthelTransferDischarge,
			"pat_BarthelBathingPreStroke" => $barthelBathingPrestroke,
			"pat_BarthelBathingDischarge" => $barthelBathingDischarge,
			"pat_BarthelStairsPreStroke" => $barthelStairsPrestroke,
			"pat_BarthelStairsDischarge" => $barthelStairsDischarge,
			"pat_outcome" => $outcome,
			"doctor_who" => $_SESSION['id_user'],
			"saved_by" => $_SESSION['id_user'],
			"saved_date" => date("Y-m-d"),
			"approval" => 1,
			"session" => 1

		);

		$query = $this->db->insert("tbl_patient_information", $data);

		foreach($this->input->post("chk05") as $k=>$value){

			$data2 = array(
				"idtherapy" => $idtherapy,
				"pat_researchID" => $researchID,
				"pat_rn" => $patientID,
				"value" => $value,
				"session" => 1
			);

			$this->db->insert("tbl_pat_05", $data2);

		}

		$this->db->set('counter', 'counter+1', FALSE);
		$this->db->where("description","research_id");
		$this->db->update("tbl_count");

		$this->db->set('counter', 'counter+1', FALSE);
		$this->db->where("description","session");
		$this->db->update("tbl_count");

		$dataNotification = array(
			"part" => 1,
			"session" => 1,
			"saved_by" => $_SESSION['id_user'],
			"pat_researchID" => $researchID
		);

		$this->db->insert("tbl_for_notification", $dataNotification);

		if($query){
			return 1;
		} else {
			return 0;
		}

	}

	public function counter(){

		$this->db->where("description","research_id");
		$this->db->select("counter");
		$query = $this->db->get("tbl_count");

		$row = $query->row();

		if(isset($row)){
			$return = $row->counter;

			$newid = $return + 1;

			$researchidnumber = str_pad($newid,5,0,STR_PAD_LEFT);

			return $researchidnumber;

			// return "RID";
		}

	}

	// select data untuk masukkan ke dalam web

	public function minimum_data($researchID){

		// $this->db->select("*");
		$this->db->where("pat_researchID",$researchID);
		$this->db->from("tbl_patient_information");
		$this->db->join("usim_login test","test.id=tbl_patient_information.saved_by","LEFT");
		$this->db->join("usim_login tost","tost.id=tbl_patient_information.approval_by","LEFT");
		$query = $this->db->get();

		return $query->result();

	}

	public function pat_05($researchID){

		$this->db->where("pat_researchID",$researchID);
		$query = $this->db->get("tbl_pat_05");

		return $query->result();

	}

	public function panggil_data_clinical1($researchID,$session){

		$this->db->where("session", $session);
		$this->db->where("tbl_clinicalD13_D28.pat_researchID",$researchID);
		$this->db->from("tbl_clinicalD13_D28");
		$this->db->join("usim_login","usim_login.id=tbl_clinicalD13_D28.saved_by","LEFT");
		$query = $this->db->get();

		return $query->result();

	}

	public function pat_23($researchID,$session){

		$this->db->select("value");
		$this->db->where("value <>", 0);
		$this->db->where("session", $session);
		$this->db->where("pat_researchID",$researchID);
		$query = $this->db->get("tbl_clinical23");

		return $query->result();

	}

	public function panggil_data_clinical2($researchID,$session){

		$this->db->where("session", $session);
		$this->db->where("pat_researchID",$researchID);
		$this->db->from("tbl_clinicalD29_D41");
		$this->db->join("usim_login","usim_login.id=tbl_clinicalD29_D41.saved_by","LEFT");
		$query = $this->db->get();

		return $query->result();

	}

	public function pat_29($researchID,$session){

		$this->db->select("value");
		$this->db->where("value <>", 0);
		$this->db->where("session", $session);
		$this->db->where("pat_researchID",$researchID);
		$query = $this->db->get("tbl_clinical29");

		return $query->result();

	}

	public function panggil_data_clinical3($researchID,$session){

		$this->db->where("session", $session);
		$this->db->where("pat_researchID",$researchID);
		$this->db->from("tbl_clinicalD42_D52");
		$this->db->join("usim_login","usim_login.id=tbl_clinicalD42_D52.saved_by","LEFT");
		$query = $this->db->get();

		return $query->result();

	}

	public function panggil_data_diagnostic($researchID,$session){

		$this->db->where("session", $session);
		$this->db->where("pat_researchID", $researchID);
		$this->db->from("tbl_diagnostic");
		$this->db->join("usim_login","usim_login.id=tbl_diagnostic.saved_by","LEFT");
		$query = $this->db->get();

		return $query->result();

	}

	public function pat_57($researchID,$session){

		$this->db->where("session", $session);
		$this->db->where("pat_researchID",$researchID);
		$query = $this->db->get("tbl_diagnostic57");

		return $query->result();

	}

	public function panggil_data_mgt($researchID,$session){

		$this->db->where("session", $session);
		$this->db->where("pat_researchID", $researchID);
		$this->db->from("tbl_management");
		$this->db->join("usim_login","usim_login.id=tbl_management.saved_by","LEFT");
		$query = $this->db->get();

		return $query->result();

	}

	public function pat_63($researchID,$fieldNo,$session){

		$this->db->where("session", $session);
		$this->db->where("pat_researchID",$researchID);
		$this->db->where("fieldNo", $fieldNo);
		$query = $this->db->get("tbl_management63");

		return $query->result();

	}

	public function panggil_data_other_info($researchID,$session){

		$this->db->where("session", $session);
		$this->db->where("pat_researchID", $researchID);
		$this->db->from("tbl_other_information");
		$this->db->join("usim_login","usim_login.id=tbl_other_information.saved_by","LEFT");
		$query = $this->db->get();

		return $query->result();

	}

	public function pat_72($researchID,$fieldNo,$session){

		$this->db->where("session", $session);
		$this->db->where("pat_researchID",$researchID);
		$this->db->where("fieldNo", $fieldNo);
		$query = $this->db->get("tbl_other");

		return $query->result();

	}

	// process section - update & insert data 

	public function process_clinical1($researchID,$session){

		$slx13 = $this->input->post("slx13");
		$slx14 = $this->input->post("slx14");
		$slx15 = $this->input->post("slx15");
		$slx16 = $this->input->post("slx16");
		$slx17 = $this->input->post("slx17");
		$date18 = $this->input->post("inpDate18");
		$date19 = $this->input->post("inpDate19"); // admission

		if($date19<>""){
			$date = new DateTime($date19);

			$date->modify('+28 day');

			$date19FollowUp = $date->format('Y-m-d');
		}
		
		

		$date20 = $this->input->post("inpDate20");
		$date21 = $this->input->post("inpDate21");
		$slx22 = $this->input->post("slx22");
		$slx24 = $this->input->post("slx24");
		$slx25 = $this->input->post("slx25");
		$slx26 = $this->input->post("slx26");
		$barthelBowel = $this->input->post("slxBarthelBowel");
		$barthelFeeding = $this->input->post("slxBarthelFeeding");
		$barthelBladder = $this->input->post("slxBarthelBladder");
		$barthelDressing = $this->input->post("slxBarthelDressing");
		$barthelGrooming = $this->input->post("slxBarthelGrooming");
		$barthelMobility = $this->input->post("slxBarthelMobility");
		$barthelToilet = $this->input->post("slxBarthelToilet");
		$barthelTransfer = $this->input->post("sxlBarthelTransfer");
		$barthelBathing = $this->input->post("slxBarthelBathing");
		$barthelStairs = $this->input->post("slxBarthelStairs");
		$slx27 = $this->input->post("slx27");
		$slx27a = $this->input->post("slx27a");
		$slx27b = $this->input->post("slx27b");
		$slx27c = $this->input->post("slx27c");
		$slx28a = $this->input->post("slx28a");
		$slx28b = $this->input->post("slx28b");
		$slx28c = $this->input->post("slx28c");

		$array = array(
			"session" => $session,
			"pat_researchID" => $researchID,
			"cli_13" => $slx13,
			"cli_14" => $slx14,
			"cli_15" => $slx15,
			"cli_16" => $slx16,
			"cli_17" => $slx17,
			"cli_18" => $date18,
			"cli_19" => $date19,
			"cli_19FollowUp" => $date19FollowUp,
			"cli_20" => $date20,
			"cli_21" => $date21,
			"cli_22" => $slx22,
			"cli_24" => $slx24,
			"cli_25" => $slx25,
			"cli_26" => $slx26,
			"cli_BarthelBowel" => $barthelBowel,
			"cli_BarthelFeeding" => $barthelFeeding,
			"cli_BarthelBladder" => $barthelBladder,
			"cli_BarthelDressing" => $barthelDressing,
			"cli_BarthelGrooming" => $barthelGrooming,
			"cli_BarthelMobility" => $barthelMobility,
			"cli_BarthelToilet" => $barthelToilet,
			"cli_BarthelTransfer" => $barthelTransfer,
			"cli_BarthelBathing" => $barthelBathing,
			"cli_BarthelStairs" => $barthelStairs,
			"cli_27" => $slx27,
			"cli_27a" => $slx27a,
			"cli_27b" => $slx27b,
			"cli_27c" => $slx27c,
			"cli_28a" => $slx28a,
			"cli_28b" => $slx28b,
			"cli_28c" => $slx28c,
			"saved_by" => $_SESSION['id_user'],
			"saved_date" => date("Y-m-d"),
			"approval" => 1

		);

		$this->db->where("session", $session);
		$this->db->where("pat_researchID", $researchID);
		$check = $this->db->get("tbl_clinicalD13_D28");

		$data = $check->num_rows();

		if($data > 0){ // kalau data ada, edit table clinicalD13

			// delete clinical 23

			$this->db->where("session", $session);
			$this->db->where("pat_researchID", $researchID);
			$delete = $this->db->delete("tbl_clinical23");

			foreach($this->input->post("chk23") as $k=>$value){

				$update23 = array(
					"session" => $session,
					"pat_researchID" => $researchID,
					"value" => $value
				);

				$this->db->insert("tbl_clinical23", $update23);
			}


			// update tbl_clinicalD13

			$this->db->where("session", $session);
			$this->db->where("pat_researchID", $researchID);
			$query = $this->db->update("tbl_clinicalD13_D28",$array);

		} else { // kalau data takde lagi, insert 

			foreach($this->input->post("chk23") as $k=>$val){

				$insert23 = array(
					"session" => $session,
					"pat_researchID" => $researchID,
					"value" => $val
				);

				$this->db->insert("tbl_clinical23", $insert23);

			}

			$query = $this->db->insert("tbl_clinicalD13_D28", $array);


			$dataNotification = array(
				"part" => 2,
				"session" => $session,
				"saved_by" => $_SESSION['id_user'],
				"pat_researchID" => $researchID
			);

			$this->db->insert("tbl_for_notification", $dataNotification);

		}

		$this->check_notification($researchID,$session);


		if($query){
			return 1;
		} else {
			return 0;
		}

	}

	public function process_clinical2($researchID,$session){

		$slx30 = $this->input->post("slx30");
		$slx31 = $this->input->post("slx31");
		$slx32 = $this->input->post("slx32");
		$slx33 = $this->input->post("slx33");
		$slx34 = $this->input->post("slx34");
		$slx35 = $this->input->post("slx35");
		$slx36 = $this->input->post("slx36");
		$slx37a = $this->input->post("slx37a");
		$slx37b = $this->input->post("slx37b");
		$slx37c = $this->input->post("slx37c");
		$slx37d = $this->input->post("slx37d");
		$slx37e = $this->input->post("slx37e");
		$slx38 = $this->input->post("slx38");
		$slx39 = $this->input->post("slx39");
		$slx40a = $this->input->post("slx40a");
		$slx40a1 = $this->input->post("slx40a1");
		$slx40a2 = $this->input->post("slx40a2");
		$slx40b = $this->input->post("slx40b");
		$slx40b1 = $this->input->post("slx40b1");
		$slx40b2 = $this->input->post("slx40b2");
		$slx40b3 = $this->input->post("slx40b3");
		$slx40c = $this->input->post("slx40c");
		$slx40d = $this->input->post("slx40d");
		$slx40e = $this->input->post("slx40e");
		$slx41 = $this->input->post("slx41");

		$array = array(
			"session" => $session,
			"pat_researchID" => $researchID,
			"cli_30" => $slx30,
			"cli_31" => $slx31,
			"cli_32" => $slx32,
			"cli_33" => $slx33,
			"cli_34" => $slx34,
			"cli_35" => $slx35,
			"cli_36" => $slx36,
			"cli_37a" => $slx37a,
			"cli_37b" => $slx37b,
			"cli_37c" => $slx37c,
			"cli_37d" => $slx37d,
			"cli_37e" => $slx37e,
			"cli_38" => $slx38,
			"cli_39" => $slx39,
			"cli_40a" => $slx40a,
			"cli_40a1" => $slx40a1,
			"cli_40a2" => $slx40a2,
			"cli_40b" => $slx40b,
			"cli_40b1" => $slx40b1,
			"cli_40b2" => $slx40b2,
			"cli_40b3" => $slx40b3,
			"cli_40c" => $slx40c,
			"cli_40d" => $slx40d,
			"cli_40e" => $slx40e,
			"cli_41" => $slx41,
			"saved_by" => $_SESSION['id_user'],
			"saved_date" => date("Y-m-d"),
			"approval" => 1
		);

		$this->db->where("session", $session);
		$this->db->where("pat_researchID", $researchID);
		$check = $this->db->get("tbl_clinicalD29_D41");

		$data = $check->num_rows();

		if($data > 0){

			$this->db->where("session", $session);
			$this->db->where("pat_researchID", $researchID);
			$delete = $this->db->delete("tbl_clinical29");

			foreach($this->input->post("chk29") as $k=>$value){

				$update29 = array(

					"session" => $session,
					"pat_researchID" => $researchID,
					"value" => $value

				);

				$this->db->insert("tbl_clinical29",$update29);

			}

			$this->db->where("session", $session);
			$this->db->where("pat_researchID", $researchID);
			$query = $this->db->update("tbl_clinicalD29_D41", $array);

		} else {

			foreach($this->input->post("chk29") as $k=>$value){

				$update29 = array(

					"session" => $session,
					"pat_researchID" => $researchID,
					"value" => $value

				);

				$this->db->insert("tbl_clinical29",$update29);

			}

			$query = $this->db->insert("tbl_clinicalD29_D41", $array);

			$dataNotification = array(
				"part" => 3,
				"session" => $session,
				"saved_by" => $_SESSION['id_user'],
				"pat_researchID" => $researchID
			);

			$this->db->insert("tbl_for_notification", $dataNotification);

		} 

		$this->check_notification($researchID,$session);

		if($query){
			return 1;
		} else {
			return 0;
		}


	}

	public function process_clinical3($researchID,$session){

		$slx42 = $this->input->post("slx42");
		$slx43 = $this->input->post("slx43");
		$slx43a = $this->input->post("slx43a");
		$slx44 = $this->input->post("slx44");
		$slx44a = $this->input->post("slx44a");
		$slx44b = $this->input->post("slx44b");
		$slx44c = $this->input->post("slx44c");
		$slx44d = $this->input->post("slx44d");
		$slx45 = $this->input->post("slx45");
		$slx45a = $this->input->post("slx45a");
		$slx45b = $this->input->post("slx45b");
		$slx46 = $this->input->post("slx46");
		$slx47 = $this->input->post("slx47");
		$slx48 = $this->input->post("slx48");
		$slx48Desc = $this->input->post("inp48Desc");
		$slx49 = $this->input->post("slx49");
		$slx50a = $this->input->post("slx50a");
		$slx50b = $this->input->post("slx50b");
		$slx50c = $this->input->post("slx50c");
		$slx50d = $this->input->post("slx50d");
		$slx50e = $this->input->post("slx50e");
		$slx50f = $this->input->post("slx50f");
		$slx51 = $this->input->post("slx51");
		$slx51a = $this->input->post("slx51a");
		$slx51b = $this->input->post("slx51b");
		$slx51c = $this->input->post("slx51c");
		$slx52 = $this->input->post("slx52");

		$array = array(

			"session" => $session,
			"pat_researchID" => $researchID,
			"cli_42" => $slx42,
			"cli_43" => $slx43,
			"cli_43a" => $slx43a,
			"cli_44" => $slx44,
			"cli_44a" => $slx44a,
			"cli_44b" => $slx44b,
			"cli_44c" => $slx44c,
			"cli_44d" => $slx44d,
			"cli_45" => $slx45,
			"cli_45a" => $slx45a,
			"cli_45b" => $slx45b,
			"cli_46" => $slx46,
			"cli_47" => $slx47,
			"cli_48" => $slx48,
			"cli_48Desc" => $slx48Desc,
			"cli_49" => $slx49,
			"cli_50a" => $slx50a,
			"cli_50b" => $slx50b,
			"cli_50c" => $slx50c,
			"cli_50d" => $slx50d,
			"cli_50e" => $slx50e,
			"cli_50f" => $slx50f,
			"cli_51" => $slx51,
			"cli_51a" => $slx51a,
			"cli_51b" => $slx51b,
			"cli_51c" => $slx51c,
			"cli_52" => $slx52,
			"saved_by" => $_SESSION['id_user'],
			"saved_date" => date("Y-m-d"),
			"approval" => 1

		);

		$this->db->where("session", $session);
		$this->db->where("pat_researchID", $researchID);
		$check = $this->db->get("tbl_clinicalD42_D52");

		$data = $check->num_rows();

		if($data > 0){ // update

			$this->db->where("session", $session);
			$this->db->where("pat_researchId", $researchID);
			$query = $this->db->update("tbl_clinicalD42_D52", $array);

		} else { // new data

			$query = $this->db->insert("tbl_clinicalD42_D52", $array);

			$dataNotification = array(
				"part" => 4,
				"session" => $session,
				"saved_by" => $_SESSION['id_user'],
				"pat_researchID" => $researchID
			);

			$this->db->insert("tbl_for_notification", $dataNotification);
		}

		$this->check_notification($researchID,$session);

		if($query){
			return 1;
		} else {
			return 0;
		}

	}

	public function process_diagnostic($researchID,$session){

		$slx53 = $this->input->post("slx53");
		$slx53Desc = $this->input->post("inp53Desc");
		$slx54 = $this->input->post("slx54");
		$slx55 = $this->input->post("slx55");
		$slx56 = $this->input->post("slx56");
		$slx58 = $this->input->post("slx58");
		$slx58a = $this->input->post("slx58a");
		$slx58aDesc = $this->input->post("slx58aDesc");
		$slx59 = $this->input->post("slx59");
		$slx60a = $this->input->post("slx60a");
		$slx60b = $this->input->post("slx60b");
		$slx60c = $this->input->post("slx60c");
		$slx611a = $this->input->post("slx611a");
		$slx611b = $this->input->post("slx611b");
		$slx611c = $this->input->post("slx611c");
		$slx612a = $this->input->post("slx612a");
		$slx612b = $this->input->post("slx612b");
		$slx612c = $this->input->post("slx612c");
		$slx613 = $this->input->post("slx613");
		$slx614 = $this->input->post("slx614");
		$slx615 = $this->input->post("slx615");
		$slx616 = $this->input->post("slx616");
		$slx62a = $this->input->post("slx62a");
		$slx62b = $this->input->post("slx62b");
		$slx62c = $this->input->post("slx62c");
		$slx62d = $this->input->post("slx62d");
		$slx62e = $this->input->post("slx62e");
		$slx62f = $this->input->post("slx62f");
		$slx62g = $this->input->post("slx62g");
		$slx62h = $this->input->post("slx62h");
		$slx62hDesc = $this->input->post("slx62hDesc");

		$array = array(

			"session" => $session,
			"pat_researchID" => $researchID,
			"diag_53" => $slx53,
			"diag_53Desc" => $slx53Desc,
			"diag_54" => $slx54,
			"diag_55" => $slx55,
			"diag_56" => $slx56,
			"diag_58" => $slx58,
			"diag_58a" => $slx58a,
			"diag_58Desc" => $slx58aDesc,
			"diag_59" => $slx59,
			"diag_60a" => $slx60a,
			"diag_60b" => $slx60b,
			"diag_60c" => $slx60c,
			"diag_611a" => $slx611a,
			"diag_611b" => $slx611b,
			"diag_611c" => $slx611c,
			"diag_612a" => $slx612a,
			"diag_612b" => $slx612b,
			"diag_612c" => $slx612c,
			"diag_613" => $slx613,
			"diag_614" => $slx614,
			"diag_615" => $slx615,
			"diag_616" => $slx616,
			"diag_62a" => $slx62a,
			"diag_62b" => $slx62b,
			"diag_62c" => $slx62c,
			"diag_62d" => $slx62d,
			"diag_62e" => $slx62e,
			"diag_62f" => $slx62f,
			"diag_62g" => $slx62g,
			"diag_62h" => $slx62h,
			"diag_62hDesc" => $slx62hDesc,
			"saved_by" => $_SESSION['id_user'],
			"saved_date" => date("Y-m-d"),
			"approval" => 1
		);

		$this->db->where("session", $session);
		$this->db->where("pat_researchID", $researchID);
		$check = $this->db->get("tbl_diagnostic");

		$data = $check->num_rows();

		if($data>0){ // update

			$this->db->where("session", $session);
			$this->db->where("pat_researchID", $researchID);
			$delete = $this->db->delete("tbl_diagnostic57");

			foreach($this->input->post("chk57") as $k=>$value){
				
				$update57 = array(
					"session" => $session,
					"pat_researchID" => $researchID,
					"value" => $value
				);

				$this->db->insert("tbl_diagnostic57", $update57);

			}

			$this->db->where("session", $session);
			$this->db->where("pat_researchID", $researchID);
			$query = $this->db->update("tbl_diagnostic", $array);

		} else { // insert

			foreach($this->input->post("chk57") as $k=>$value){
				
				$update57 = array(
					"session" => $session,
					"pat_researchID" => $researchID,
					"value" => $value
				);

				$this->db->insert("tbl_diagnostic57", $update57);

			}

			$query = $this->db->insert("tbl_diagnostic", $array);

			$dataNotification = array(
				"part" => 5,
				"session" => $session,
				"saved_by" => $_SESSION['id_user'],
				"pat_researchID" => $researchID
			);

			$this->db->insert("tbl_for_notification", $dataNotification);

		}

		$this->check_notification($researchID,$session);

		if($query){
			return 1;
		} else {
			return 0;
		}

 
	}

	public function process_management($researchID,$session){

		$slx64 = $this->input->post("slx64");
		$slx65 = $this->input->post("slx65");
		$slx66 = $this->input->post("slx66");
		$slx67 = $this->input->post("slx67");
		$slx68 = $this->input->post("slx68");
		$slx69 = $this->input->post("slx69");

		$array = array(
			"session" => $session,
			"pat_researchID" => $researchID,
			"mgt_64" => $slx64,
			"mgt_65" => $slx65,
			"mgt_66" => $slx66,
			"mgt_67" => $slx67,
			"mgt_68" => $slx68,
			"mgt_69" => $slx69,
			"saved_by" => $_SESSION['id_user'],
			"saved_date" => date("Y-m-d"),
			"approval" => 1
		);

		$this->db->where("session", $session);
		$this->db->where("pat_researchID", $researchID);
		$check = $this->db->get("tbl_management");

		$data = $check->num_rows();

		if($data>0){

			$this->db->where("session",$session);
			$this->db->where("pat_researchID", $researchID);
			$delete = $this->db->delete("tbl_management63");

			foreach($this->input->post("chk63") as $a=>$valuea){
				$arr63 = array(
					"session" => $session,
					"pat_researchID" => $researchID,
					"fieldNo" => "63",
					"value" => $valuea
				);

				$this->db->insert("tbl_management63", $arr63);
			}

			foreach($this->input->post("chk73a") as $b=>$valueb){
				$arr73a = array(
					"session" => $session,
					"pat_researchID" => $researchID,
					"fieldNo" => "73a",
					"value" => $valueb
				);

				$this->db->insert("tbl_management63", $arr73a);
			}

			foreach($this->input->post("chk73b") as $b=>$valuec){
				$arr73b = array(
					"session" => $session,
					"pat_researchID" => $researchID,
					"fieldNo" => "73b",
					"value" => $valuec
				);

				$this->db->insert("tbl_management63", $arr73b);
			}

			foreach($this->input->post("chk73b") as $b=>$valued){
				$arr73c = array(
					"session" => $session,
					"pat_researchID" => $researchID,
					"fieldNo" => "73b",
					"value" => $valued
				);

				$this->db->insert("tbl_management63", $arr73c);
			}

			foreach($this->input->post("chk70") as $b=>$valuee){
				$arr70 = array(
					"session" => $session,
					"pat_researchID" => $researchID,
					"fieldNo" => "70",
					"value" => $valuee
				);

				$this->db->insert("tbl_management63", $arr70);
			}

			foreach($this->input->post("chk71") as $b=>$valuee){
				$arr71 = array(
					"session" => $session,
					"pat_researchID" => $researchID,
					"fieldNo" => "71",
					"value" => $valuee
				);

				$this->db->insert("tbl_management63", $arr71);
			}

			$this->db->where("session", $session);
			$this->db->where("pat_researchID", $researchID);
			$query = $this->db->update("tbl_management", $array);

		} else {

			foreach($this->input->post("chk63") as $a=>$valuea){
				$arr63 = array(
					"session" => $session,
					"pat_researchID" => $researchID,
					"fieldNo" => "63",
					"value" => $valuea
				);

				$this->db->insert("tbl_management63", $arr63);
			}

			foreach($this->input->post("chk73a") as $b=>$valueb){
				$arr73a = array(
					"session" => $session,
					"pat_researchID" => $researchID,
					"fieldNo" => "73a",
					"value" => $valueb
				);

				$this->db->insert("tbl_management63", $arr73a);
			}

			foreach($this->input->post("chk73b") as $b=>$valuec){
				$arr73b = array(
					"session" => $session,
					"pat_researchID" => $researchID,
					"fieldNo" => "73b",
					"value" => $valuec
				);

				$this->db->insert("tbl_management63", $arr73b);
			}

			foreach($this->input->post("chk73b") as $b=>$valued){
				$arr73c = array(
					"session" => $session,
					"pat_researchID" => $researchID,
					"fieldNo" => "73b",
					"value" => $valued
				);

				$this->db->insert("tbl_management63", $arr73c);
			}

			foreach($this->input->post("chk70") as $b=>$valuee){

				$arr70 = array(
					"session" => $session,
					"pat_researchID" => $researchID,
					"fieldNo" => "70",
					"value" => $valuee
				);

				$this->db->insert("tbl_management63", $arr70);
			}

			foreach($this->input->post("chk71") as $b=>$valuee){
				$arr71 = array(
					"session" => $session,
					"pat_researchID" => $researchID,
					"fieldNo" => "71",
					"value" => $valuee
				);

				$this->db->insert("tbl_management63", $arr71);
			}

			$query = $this->db->insert("tbl_management", $array);

			$dataNotification = array(
				"part" => 6,
				"session" => $session,
				"saved_by" => $_SESSION['id_user'],
				"pat_researchID" => $researchID
			);

			$this->db->insert("tbl_for_notification", $dataNotification);

		}

		$this->check_notification($researchID,$session);

		if($query){
			return 1;
		} else {
			return 0;
		}

	}

	public function process_other_information($researchID,$session){

		$array = array(
			"pat_researchID" => $researchID,
			"session" => $session,
			"slx72aDesc" => $this->input->post("inp72aDesc"),
			"slx72bDesc" => $this->input->post("inp72bDesc"),
			"slx72cDesc" => $this->input->post("inp72cDesc"),
			"otherInfo" => $this->input->post("txtAnyOtherInformation"),
			"saved_by" => $_SESSION['id_user'],
			"saved_date" => date("Y-m-d"),
			"approval" => 1

		);

		$this->db->where("session",$session);
		$this->db->where("pat_researchID", $researchID);
		$check = $this->db->get("tbl_other_information");

		$data = $check->num_rows();

		if($data > 0){

			$this->db->where("session",$session);
			$this->db->where("pat_researchID", $researchID);
			$delete = $this->db->delete("tbl_other");

			foreach($this->input->post("chk72") as $k=>$valuea){

				$arr72 = array(
					"pat_researchID"=> $researchID,
					"session" => $session,
					"fieldNo" => "72",
					"value" => $valuea
				);

				$this->db->insert("tbl_other", $arr72);

			}

			foreach($this->input->post("chk72a") as $k=>$valueb){

				$arr72a = array(
					"pat_researchID"=> $researchID,
					"session" => $session,
					"fieldNo" => "72a",
					"value" => $valueb
				);

				$this->db->insert("tbl_other", $arr72a);

			}

			foreach($this->input->post("chk72b") as $k=>$valuec){

				$arr72b = array(
					"pat_researchID"=> $researchID,
					"session" => $session,
					"fieldNo" => "72b",
					"value" => $valuec
				);

				$this->db->insert("tbl_other", $arr72b);

			}

			foreach($this->input->post("chk72c") as $k=>$valued){

				$arr72c = array(
					"pat_researchID"=> $researchID,
					"session" => $session,
					"fieldNo" => "72c",
					"value" => $valued
				);

				$this->db->insert("tbl_other", $arr72c);

			}

			$this->db->where("session", $session);
			$this->db->where("pat_researchID", $researchID);
			$query = $this->db->update("tbl_other_information", $array);

		} else {

			foreach($this->input->post("chk72") as $k=>$valuea){

				$arr72 = array(
					"pat_researchID"=> $researchID,
					"session" => $session,
					"fieldNo" => "72",
					"value" => $valuea
				);

				$this->db->insert("tbl_other", $arr72);

			}

			foreach($this->input->post("chk72a") as $k=>$valueb){

				$arr72a = array(
					"pat_researchID"=> $researchID,
					"session" => $session,
					"fieldNo" => "72a",
					"value" => $valueb
				);

				$this->db->insert("tbl_other", $arr72a);

			}

			foreach($this->input->post("chk72b") as $k=>$valuec){

				$arr72b = array(
					"pat_researchID"=> $researchID,
					"session" => $session,
					"fieldNo" => "72b",
					"value" => $valuec
				);

				$this->db->insert("tbl_other", $arr72b);

			}

			foreach($this->input->post("chk72c") as $k=>$valued){

				$arr72c = array(
					"pat_researchID"=> $researchID,
					"session" => $session,
					"fieldNo" => "72c",
					"value" => $valued
				);

				$this->db->insert("tbl_other", $arr72c);

			}

			$query = $this->db->insert("tbl_other_information", $array);

			$dataNotification = array(
				"part" => 7,
				"session" => $session,
				"saved_by" => $_SESSION['id_user'],
				"pat_researchID" => $researchID
			);

			$this->db->insert("tbl_for_notification", $dataNotification);

		}

		$this->check_notification($researchID,$session);

		if($query){
			return 1;
		} else {
			return 0;
		}

	}

	public function process_edit_minimum($researchID,$session){

		$patientID = $this->input->post("inpPatRN");
		$dob = $this->input->post("inpPatDateOfBirth");
		$gender = $this->input->post("slxPatGender");
		$researchID = "RID".$this->input->post("inpPatResearchID");
		$source = $this->input->post("slxPatSource");
		$sourceDesc = $this->input->post("inpPatSourceDesc");
		$sourceIDPatient = $this->input->post("inpPatSourceIDPatient");
		$surname = $this->input->post("inpPatSurname");
		$name = $this->input->post("inpPatName");
		$address = $this->input->post("inpPatAddress");
		$addressv1 = $this->input->post("inpPatAddressV1");
		$addressv2 = $this->input->post("inpPatAddressV2");
		$postcode = $this->input->post("inpPatPostcode");
		$district = $this->input->post("inpPatDistrict");
		$state = $this->input->post("inpPatState");
		$contactNo = $this->input->post("inpContactNoIfKnown");
		$race = $this->input->post("slxPatRace");
		$raceDesc = $this->input->post("inpPatRaceDesc");
		$education = $this->input->post("slxPatHighEducation");
		$employment = $this->input->post("slxPatEmployment");
		$employmentDesc = $this->input->post("inpPatEmploymentDesc");
		$cerebrovascular = $this->input->post("slxPat04");
		$chk05Desc = $this->input->post("chk05Desc");
		$accomodationPrestroke = $this->input->post("slx06Prestroke");
		$accomodationDischarge = $this->input->post("slx06AtDischarge");
		$rankinPrestroke = $this->input->post("slx07Prestroke");
		$rankinAdmission = $this->input->post("slx07OnAdmission");
		$rankinDischarge = $this->input->post("slx07AtDischarge");
		$barthelBowelPrestroke = $this->input->post("slxBarthelADLPreStrokeBowel");
		$barthelBowelDischarge = $this->input->post("slxBarthelADLAtDischargeBowel");
		$barthelFeedingPrestroke = $this->input->post("slxBarthelADLPreStrokeFeeding");
		$barthelFeedingDischarge = $this->input->post("slxBarthelADLAtDischargeFeeding");
		$barthelBladderPrestroke = $this->input->post("slxBarthelADLPreStrokeBladder");
		$barthelBladderDischarge = $this->input->post("slxBarthelADLAtDischargeBladder");
		$barthelDressingPreStroke = $this->input->post("slxBarthelADLPreStrokeDressing");
		$barthelDressingDischarge = $this->input->post("slxBarthelADLAtDischargeDressing");
		$barthelGroomingPrestroke = $this->input->post("slxBarthelADLPreStrokeGrooming");
		$barthelGroomingDischarge = $this->input->post("slxBarthelADLAtDischargeGrooming");
		$barthelMobilityPrestroke = $this->input->post("slxBarthelADLPreStrokeMobility");
		$barthelMobilityDischarge = $this->input->post("slxBarthelADLAtDischargeMobility");
		$barthelToiletPrestroke = $this->input->post("slxBarthelADLPreStrokeToilet");
		$barthelToiletDischarge = $this->input->post("slxBarthelADLAtDischargeToilet");
		$barthelTransferPrestroke = $this->input->post("slxBarthelADLPreStrokeTransfer");
		$barthelTransferDischarge = $this->input->post("slxBarthelADLAtDischargeTransfer");
		$barthelBathingPrestroke = $this->input->post("slxBarthelADLPreStrokeBathing");
		$barthelBathingDischarge = $this->input->post("slxBarthelADLAtDischargeBathing");
		$barthelStairsPrestroke = $this->input->post("slxBarthelADLPreStrokeStairs");
		$barthelStairsDischarge = $this->input->post("slxBarthelADLAtDischargeStairs");
		$outcome = $this->input->post("slxOutcome");

		$hdnIDTherapy = $this->input->post("hdnIDTherapy");

		$data = array(

			"pat_rn" => $patientID,
			"pat_dob" => $dob,
			"pat_gender" => $gender,
			"pat_source" => $source,
			"pat_sourceDesc" => $sourceDesc,
			"pat_sourceIDPatient" => $sourceIDPatient,
			"pat_surname" => $surname,
			"pat_firstname" => $name,
			"pat_address" => $address,
			"pat_address1" => $addressv1,
			"pat_address2" => $addressv2,
			"pat_postcode" => $postcode,
			"pat_district" => $district,
			"pat_state" => $state,
			"pat_contactNo" => $contactNo,
			"pat_race" => $race,
			"pat_raceDesc" => $raceDesc,
			"pat_education" => $education,
			"pat_employment" => $employment,
			"pat_employmentDesc" => $employmentDesc,
			"pat_04" => $cerebrovascular,
			"pat_05Desc" => $chk05Desc,
			"pat_06PreStroke" => $accomodationPrestroke,
			"pat_06Discharge" => $accomodationDischarge,
			"pat_07RankinPreStroke" => $rankinPrestroke,
			"pat_07RankinOnAdmission" => $rankinAdmission,
			"pat_07RankinDischarge" => $rankinDischarge,
			"pat_BarthelBowelPreStroke" => $barthelBowelPrestroke,
			"pat_BarthelBowelDischarge" => $barthelBowelDischarge,
			"pat_BarthelFeedingPreStroke" => $barthelFeedingPrestroke,
			"pat_BarthelFeedingDischarge" => $barthelFeedingDischarge,
			"pat_BarthelBladderPreStroke" => $barthelBladderPrestroke,
			"pat_BarthelBladderDischarge" => $barthelBladderDischarge,
			"pat_BarthelDressingPreStroke" => $barthelDressingPreStroke,
			"pat_BarthelDressingDischarge" => $barthelDressingDischarge,
			"pat_BarthelGroomingPreStroke" => $barthelGroomingPrestroke,
			"pat_BarthelGroomingDischarge" => $barthelGroomingDischarge,
			"pat_BarthelMobilityPreStroke" => $barthelMobilityPrestroke,
			"pat_BarthelMobilityDischarge" => $barthelMobilityDischarge,
			"pat_BarthelToiletPreStroke" => $barthelToiletPrestroke,
			"pat_BarthelToiletDischarge" => $barthelToiletDischarge,
			"pat_BarthelTransferPreStroke" => $barthelTransferPrestroke,
			"pat_BarthelTransferDischarge" => $barthelTransferDischarge,
			"pat_BarthelBathingPreStroke" => $barthelBathingPrestroke,
			"pat_BarthelBathingDischarge" => $barthelBathingDischarge,
			"pat_BarthelStairsPreStroke" => $barthelStairsPrestroke,
			"pat_BarthelStairsDischarge" => $barthelStairsDischarge,
			"pat_outcome" => $outcome,
			"doctor_who" => $_SESSION['id_user'],
			"saved_by" => $_SESSION['id_user'],
			"saved_date" => date("Y-m-d")

		);

		$this->db->where("pat_researchID", $researchID);
		$delete = $this->db->delete("tbl_pat_05");

		foreach($this->input->post("chk05") as $k=>$value){

			$data2 = array(
				"idtherapy" => $hdnIDTherapy,
				"pat_researchID" => $researchID,
				"pat_rn" => $patientID,
				"value" => $value,
				"session" => $session
			);

			$this->db->insert("tbl_pat_05", $data2);

		}

		$this->db->where("pat_researchID", $researchID);
		$this->db->where("session", $session);
		$query = $this->db->update("tbl_patient_information", $data);

		$this->check_notification($researchID,$session);

		if($query){
			return 1;
		} else {
			return 0;
		}

	}

	public function kira_percentage($researchID,$session){

		$bawah = $this->kira_table_semua();
		$atas = $this->kira_table_ada_isi($researchID, $session);

		$percentage = $this->percentage($atas,$bawah);

		return number_format($percentage,2);

	}

	public function kira_table_semua(){

		$minimum_data_set = $this->db->get("tbl_patient_information");
		$other_info = $this->db->get("tbl_other_information");
		$management = $this->db->get("tbl_management");
		$diagnostic = $this->db->get("tbl_diagnostic");
		$clinical1 = $this->db->get("tbl_clinicalD13_D28");
		$clinical2 = $this->db->get("tbl_clinicalD29_D41");
		$clinical3 = $this->db->get("tbl_clinicalD42_D52");

		$min = $minimum_data_set->num_fields() - 21;
		$info = $other_info->num_fields() - 8;
		$mgt = $management->num_fields() - 3;
		$diag = $diagnostic->num_fields() - 12;
		$c1 = $clinical1->num_fields() - 14;
		$c2 = $clinical2->num_fields() - 14;
		$c3 = $clinical3->num_fields() - 14;

		$total = $min + $info + $mgt + $diag + $c1 + $c2 + $c3;

		return $total;

	}

	public function kira_table_ada_isi($researchID,$session){

		$total1 = $total2 = $total3 = $total4 = $total5 = $total6 = $total7 = 0;

		$query1 = "SELECT  
			(CASE when pat_researchID <> '' then 1 else 0 END) as rid, 
			(CASE when pat_rn <> '' then 1 else 0 END) as rn,
			(CASE when pat_dob <>'0000-00-00' then 1 else 0 END) as dob,
			(CASE when pat_gender <> '' then 1 else 0 END) as gender,
			(CASE when pat_source <> '' then 1 else 0 END) as source,
			(CASE when pat_sourceIDPatient <> '' then 1 else 0 END) as sourceIDPatient,
			(CASE when pat_surname <> '' then 1 else 0 END) as surname,
			(CASE when pat_firstname <> '' then 1 else 0 END) as name,
			(CASE when pat_address <> '' then 1 else 0 END) as address,
			(CASE when pat_contactNo <> '' then 1 else 0 END) as contactNo,
			(CASE when pat_race <> '' then 1 else 0 END) as race,
			(CASE when pat_education <> '0' then 1 else 0 END) as education,
			(CASE when pat_employment <> '0' then 1 else 0 END) as employment,
			(CASE when pat_04 <> '0' then 1 else 0 END) as pat04,
			(CASE when pat_06PreStroke <> '0' then 1 else 0 END) as pat06Prestroke,
			(CASE when pat_06Discharge <> '0' then 1 else 0 END) as pat06Discharge,
			(CASE when pat_06Discharge <> '0' then 1 else 0 END) as pat06Discharge,
			(CASE when pat_07RankinPrestroke <> '0' then 1 else 0 END) as pat07Prestroke,
			(CASE when pat_07RankinOnAdmission <> '0' then 1 else 0 END) as pat07OnAdmission,
			(CASE when pat_07RankinDischarge <> '0' then 1 else 0 END) as pat07Discharge,
			(CASE when pat_BarthelBowelPreStroke <> '9' then 1 else 0 END) as bowelPrestroke,
			(CASE when pat_BarthelBowelDischarge <> '9' then 1 else 0 END) as bowelDischarge,
			(CASE when pat_BarthelFeedingPreStroke <> '9' then 1 else 0 END) as feedingPrestroke,
			(CASE when pat_BarthelFeedingDischarge <> '9' then 1 else 0 END) as feedingDischarge,
			(CASE when pat_BarthelBladderPreStroke <> '9' then 1 else 0 END) as bladderPrestroke,
			(CASE when pat_BarthelBladderDischarge <> '9' then 1 else 0 END) as bladderDischarge,
			(CASE when pat_BarthelDressingPreStroke <> '9' then 1 else 0 END) as dressingPrestroke,
			(CASE when pat_BarthelDressingDischarge <> '9' then 1 else 0 END) as dressingDischarge,
			(CASE when pat_BarthelGroomingPreStroke <> '9' then 1 else 0 END) as groomingPrestroke,
			(CASE when pat_BarthelGroomingDischarge <> '9' then 1 else 0 END) as groomingDischarge,
			(CASE when pat_BarthelMobilityPreStroke <> '9' then 1 else 0 END) as mobilityPrestroke,
			(CASE when pat_BarthelMobilityDischarge <> '9' then 1 else 0 END) as mobilityDischarge,
			(CASE when pat_BarthelToiletPreStroke <> '9' then 1 else 0 END) as toiletPrestroke,
			(CASE when pat_BarthelToiletDischarge <> '9' then 1 else 0 END) as toiletDischarge,
			(CASE when pat_BarthelTransferPreStroke <> '9' then 1 else 0 END) as transferPrestroke,
			(CASE when pat_BarthelTransferDischarge <> '9' then 1 else 0 END) as transferDischarge,
			(CASE when pat_BarthelBathingPreStroke <> '9' then 1 else 0 END) as bathingPrestroke,
			(CASE when pat_BarthelBathingDischarge <> '9' then 1 else 0 END) as bathingDischarge,
			(CASE when pat_BarthelStairsPreStroke <> '9' then 1 else 0 END) as stairsPrestroke,
			(CASE when pat_BarthelStairsDischarge <> '9' then 1 else 0 END) as stairsDischarge,
			(CASE when pat_outcome <> '0' then 1 else 0 END) as outcome

		FROM tbl_patient_information 
		WHERE pat_researchID='{$researchID}'
		AND session='{$session}'
		";
		$data = $this->db->query($query1);

		$row = $data->row();

		if(isset($row)){
			$rid = $row->rid;
			$rn = $row->rn;
			$dob = $row->dob;
			$gender = $row->gender;
			$source = $row->source;
			$sourceIDPatient = $row->sourceIDPatient;
			$surname = $row->surname;
			$firstname = $row->name;
			$address = $row->address;
			$contactNo = $row->contactNo;
			$race = $row->race;
			$education = $row->education;
			$employment = $row->employment;
			$pat04 = $row->pat04;
			$pat06Prestroke = $row->pat06Prestroke;
			$pat06Discharge = $row->pat06Discharge;
			$pat07Prestroke = $row->pat07Prestroke;
			$pat07OnAdmission = $row->pat07OnAdmission;
			$pat07Discharge = $row->pat07Discharge;
			$bowelPrestroke = $row->bowelPrestroke;
			$bowelDischarge = $row->bowelDischarge;
			$feedingPrestroke = $row->feedingPrestroke;
			$feedingDischarge = $row->feedingDischarge;
			$bladderPrestroke = $row->bladderPrestroke;
			$bladderDischarge = $row->bladderDischarge;
			$dressingPrestroke = $row->dressingPrestroke;
			$dressingDischarge = $row->dressingDischarge;
			$groomingPrestroke = $row->groomingPrestroke;
			$groomingDischarge = $row->groomingDischarge;
			$mobilityPrestroke = $row->mobilityPrestroke;
			$mobilityDischarge = $row->mobilityDischarge;
			$toiletPrestroke = $row->toiletPrestroke;
			$toiletDischarge = $row->toiletDischarge;
			$transferPrestroke = $row->transferPrestroke;
			$transferDischarge = $row->transferDischarge;
			$bathingPrestroke = $row->bathingPrestroke;
			$bathingDischarge = $row->bathingDischarge;
			$stairsPrestroke = $row->stairsPrestroke;
			$stairsDischarge = $row->stairsDischarge;

			$total1 = $rid + $rn + $dob + $gender + $source + $sourceIDPatient + $surname + $firstname + $address + $contactNo + $race + $education + $employment + $pat04 + $pat06Prestroke + $pat06Discharge + $pat07Prestroke + $pat07OnAdmission + $pat07Discharge + $bowelPrestroke + $bowelDischarge + $feedingPrestroke + $feedingDischarge + $bladderPrestroke + $bladderDischarge + $dressingPrestroke + $dressingDischarge + $groomingPrestroke + $groomingDischarge + $mobilityPrestroke + $mobilityDischarge + $toiletPrestroke + $toiletDischarge + $transferPrestroke + $transferDischarge + $bathingPrestroke + $bathingDischarge + $stairsPrestroke + $stairsDischarge;

		}

		$query2 = "SELECT (CASE when otherinfo <> '' then 1 else 0 END ) as otherinfo FROM tbl_other_information WHERE pat_researchID='{$researchID}' and session='{$session}'";

		$data2 = $this->db->query($query2);

		$row2 = $data2->row();
		$total2b = 0;
		if(isset($row2)){
			$otherinfo = $row2->otherinfo;

			$total2b =  $otherinfo;
		}

		$query2a = "SELECT COUNT(*) as count FROM tbl_other WHERE pat_researchID='{$researchID}' and session='{$session}' GROUP BY fieldNo";
		$data2a = $this->db->query($query2a);

		$row2a = $data2a->result();
		$bil2a = 0;
		foreach($row2a as $other){
			$bil2a++;
		}

		$total2 = $total2b + $bil2a;

		$query3 = "SELECT 
			(CASE when mgt_64 <> '0' then 1 else 0 END) as mgt64,
			(CASE when mgt_65 <> '0' then 1 else 0 END) as mgt65,
			(CASE when mgt_66 <> '0' then 1 else 0 END) as mgt66,
			(CASE when mgt_67 <> '0' then 1 else 0 END) as mgt67,
			(CASE when mgt_68 <> '0' then 1 else 0 END) as mgt68,
			(CASE when mgt_69 <> '0' then 1 else 0 END) as mgt69
		FROM tbl_management
		WHERE pat_researchID='{$researchID}'
		AND session='{$session}'
		";

		$data3 = $this->db->query($query3);

		$row3 = $data3->row();
		$total3b = 0;
		$mgt64 = $mgt65 = $mgt66 = $mgt67 = $mgt68 = $mgt69 = 0;
		if(isset($row3)){
			$mgt64 = $row3->mgt64;
			$mgt65 = $row3->mgt65;
			$mgt66 = $row3->mgt66;
			$mgt67 = $row3->mgt67;
			$mgt68 = $row3->mgt68;
			$mgt69 = $row3->mgt69;

			$total3b = $mgt64 + $mgt65 + $mgt66 + $mgt67 + $mgt68 + $mgt69;
		}

		$query3a = "SELECT COUNT(*) as count FROM tbl_management63 WHERE pat_researchID='{$researchID}' and session='{$session}' GROUP BY fieldNo";
		$data3a = $this->db->query($query3a);

		$row3a = $data3a->result();
		$bil3a = 0;
		foreach($row3a as $mgt63){
			$bil3a++;
		}

		$total3 = $total3b + $bil3a;

		$query4 = "SELECT 
			(CASE when diag_53 <> '0' then 1 else 0 END) as diag53,
			(CASE when diag_54 <> '0' then 1 else 0 END) as diag54,
			(CASE when diag_55 <> '0' then 1 else 0 END) as diag55,
			(CASE when diag_56 <> '0' then 1 else 0 END) as diag56,
			(CASE when diag_58 <> '0' then 1 else 0 END) as diag58,
			(CASE when diag_58a <> '0' then 1 else 0 END) as diag58a,
			(CASE when diag_59 <> '0' then 1 else 0 END) as diag59,
			(CASE when diag_60a <> '0' then 1 else 0 END) as diag60a,
			(CASE when diag_60b <> '0' then 1 else 0 END) as diag60b,
			(CASE when diag_60c <> '0' then 1 else 0 END) as diag60c,
			(CASE when diag_611a <> '0' then 1 else 0 END) as diag611a,
			(CASE when diag_611b <> '0' then 1 else 0 END) as diag611b,
			(CASE when diag_611c <> '0' then 1 else 0 END) as diag611c,
			(CASE when diag_612a <> '0' then 1 else 0 END) as diag612a,
			(CASE when diag_612b <> '0' then 1 else 0 END) as diag612b,
			(CASE when diag_612c <> '0' then 1 else 0 END) as diag612c,
			(CASE when diag_613 <> '0' then 1 else 0 END) as diag613,
			(CASE when diag_614 <> '0' then 1 else 0 END) as diag614,
			(CASE when diag_615 <> '0' then 1 else 0 END) as diag615,
			(CASE when diag_616 <> '0' then 1 else 0 END) as diag616,
			(CASE when diag_62a <> '0' then 1 else 0 END) as diag62a,
			(CASE when diag_62b <> '0' then 1 else 0 END) as diag62b,
			(CASE when diag_62c <> '0' then 1 else 0 END) as diag62c,
			(CASE when diag_62d <> '0' then 1 else 0 END) as diag62d,
			(CASE when diag_62e <> '0' then 1 else 0 END) as diag62e,
			(CASE when diag_62f <> '0' then 1 else 0 END) as diag62f,
			(CASE when diag_62g <> '0' then 1 else 0 END) as diag62g,
			(CASE when diag_62h <> '0' then 1 else 0 END) as diag62h
		FROM tbl_diagnostic
		WHERE pat_researchID='{$researchID}'
		AND session='{$session}'
		";

		$data4 = $this->db->query($query4);

		$row4 = $data4->row();
		$total4b = 0;
		if(isset($row4)){
			$diag53 = $row4->diag53;
			$diag54 = $row4->diag54;
			$diag55 = $row4->diag55;
			$diag56 = $row4->diag56;
			$diag58 = $row4->diag58;
			$diag58a = $row4->diag58a;
			$diag59 = $row4->diag59;
			$diag60a = $row4->diag60a;
			$diag60b = $row4->diag60b;
			$diag60c = $row4->diag60c;
			$diag611a = $row4->diag611a;
			$diag611b = $row4->diag611b;
			$diag611c = $row4->diag611c;
			$diag612a = $row4->diag612a;
			$diag612b = $row4->diag612b;
			$diag612c = $row4->diag612c;
			$diag613 = $row4->diag613;
			$diag614 = $row4->diag614;
			$diag615 = $row4->diag615;
			$diag616 = $row4->diag616;
			$diag62a = $row4->diag62a;
			$diag62b = $row4->diag62b;
			$diag62c = $row4->diag62c;
			$diag62d = $row4->diag62d;
			$diag62e = $row4->diag62e;
			$diag62f = $row4->diag62f;
			$diag62g = $row4->diag62g;
			$diag62h = $row4->diag62h;

			$total4b = $diag53 + $diag54 + $diag55 + $diag56 + $diag58 + $diag58a + $diag59 + $diag60a + $diag60b + $diag60c + $diag611a + $diag611b + $diag611c + $diag612a + $diag612b + $diag612c + $diag613 + $diag614 + $diag615 + $diag616 + $diag62a + $diag62b + $diag62c + $diag62d + $diag62e + $diag62f + $diag62g + $diag62h + 1;
		}

		$query4a = "SELECT COUNT(*) as count FROM tbl_diagnostic57 WHERE pat_researchID='{$researchID}' and session='{$session}' GROUP BY session";
		$data4a = $this->db->query($query4a);

		$row4a = $data4a->result();
		$bil4a = 0;
		foreach($row4a as $diag57){
			$bil4a++;
		}

		$total4 = $total4b + $bil4a;

		$query5 = "SELECT 
			(CASE when cli_42 <> '0' then 1 else 0 END) as cli42,
			(CASE when cli_43 <> '0' then 1 else 0 END) as cli43,
			(CASE when cli_43a <> '0' then 1 else 0 END) as cli43a,
			(CASE when cli_44 <> '0' then 1 else 0 END) as cli44,
			(CASE when cli_44a <> '0' then 1 else 0 END) as cli44a,
			(CASE when cli_44b <> '0' then 1 else 0 END) as cli44b,
			(CASE when cli_44c <> '0' then 1 else 0 END) as cli44c,
			(CASE when cli_44d <> '0' then 1 else 0 END) as cli44d,
			(CASE when cli_45 <> '0' then 1 else 0 END) as cli45,
			(CASE when cli_45a <> '0' then 1 else 0 END) as cli45a,
			(CASE when cli_45b <> '0' then 1 else 0 END) as cli45b,
			(CASE when cli_46 <> '0' then 1 else 0 END) as cli46,
			(CASE when cli_47 <> '0' then 1 else 0 END) as cli47,
			(CASE when cli_48 <> '0' then 1 else 0 END) as cli48,
			(CASE when cli_49 <> '0' then 1 else 0 END) as cli49,
			(CASE when cli_50a <> '0' then 1 else 0 END) as cli50a,
			(CASE when cli_50b <> '0' then 1 else 0 END) as cli50b,
			(CASE when cli_50c <> '0' then 1 else 0 END) as cli50c,
			(CASE when cli_50d <> '0' then 1 else 0 END) as cli50d,
			(CASE when cli_50e <> '0' then 1 else 0 END) as cli50e,
			(CASE when cli_50f <> '0' then 1 else 0 END) as cli50f,
			(CASE when cli_51 <> '0' then 1 else 0 END) as cli51,
			(CASE when cli_51a <> '0' then 1 else 0 END) as cli51a,
			(CASE when cli_51b <> '0' then 1 else 0 END) as cli51b,
			(CASE when cli_51c <> '0' then 1 else 0 END) as cli51c,
			(CASE when cli_52 <> '0' then 1 else 0 END) as cli52
		FROM tbl_clinicalD42_D52
		WHERE pat_researchID='{$researchID}'
		AND session='{$session}'
		";

		$data5 = $this->db->query($query5);

		$row5 = $data5->row();

		if(isset($row5)){
			$cli42 = $row5->cli42;
			$cli43 = $row5->cli43;
			$cli43a = $row5->cli43a;
			$cli44 = $row5->cli44;
			$cli44a = $row5->cli44a;
			$cli44b = $row5->cli44b;
			$cli44c = $row5->cli44c;
			$cli44d = $row5->cli44d;
			$cli45 = $row5->cli45;
			$cli45a = $row5->cli45a;
			$cli45b = $row5->cli45b;
			$cli46 = $row5->cli46;
			$cli47 = $row5->cli47;
			$cli48 = $row5->cli48;
			$cli49 = $row5->cli49;
			$cli50a = $row5->cli50a;
			$cli50b = $row5->cli50b;
			$cli50c = $row5->cli50c;
			$cli50d = $row5->cli50d;
			$cli50e = $row5->cli50e;
			$cli50f = $row5->cli50f;
			$cli51 = $row5->cli51;
			$cli51a = $row5->cli51a;
			$cli51b = $row5->cli51b;
			$cli51c = $row5->cli51c;
			$cli52 = $row5->cli52;

			$total5 = $cli42 + $cli43 + $cli43a + $cli44 + $cli44a + $cli44b + $cli44c + $cli44d + $cli45 + $cli45a + $cli45b + $cli46 + $cli47 + $cli48 + $cli49 + $cli50a + $cli50b + $cli50c + $cli50d + $cli50e + $cli50f + $cli51 + $cli51a + $cli51b + $cli51c + $cli52;
		}

		$query6 = "SELECT
			(CASE when cli_30 <> '0' then 1 else 0 END) as cli30,
			(CASE when cli_31 <> '0' then 1 else 0 END) as cli31,
			(CASE when cli_32 <> '0' then 1 else 0 END) as cli32,
			(CASE when cli_33 <> '0' then 1 else 0 END) as cli33,
			(CASE when cli_34 <> '0' then 1 else 0 END) as cli34,
			(CASE when cli_35 <> '0' then 1 else 0 END) as cli35,
			(CASE when cli_36 <> '0' then 1 else 0 END) as cli36,
			(CASE when cli_37a <> '0' then 1 else 0 END) as cli37a,
			(CASE when cli_37b <> '0' then 1 else 0 END) as cli37b,
			(CASE when cli_37c <> '0' then 1 else 0 END) as cli37c,
			(CASE when cli_37d <> '0' then 1 else 0 END) as cli37d,
			(CASE when cli_37e <> '0' then 1 else 0 END) as cli37e,
			(CASE when cli_38 <> '0' then 1 else 0 END) as cli38,
			(CASE when cli_38Hour <> '' then 1 else 0 END) as cli38Hour,
			(CASE when cli_39 <> '0' then 1 else 0 END) as cli39,
			(CASE when cli_40a <> '0' then 1 else 0 END) as cli40a,
			(CASE when cli_40a1 <> '0' then 1 else 0 END) as cli40a1,
			(CASE when cli_40a2 <> '0' then 1 else 0 END) as cli40a2,
			(CASE when cli_40b <> '0' then 1 else 0 END) as cli40b,
			(CASE when cli_40b1 <> '0' then 1 else 0 END) as cli40b1,
			(CASE when cli_40b2 <> '0' then 1 else 0 END) as cli40b2,
			(CASE when cli_40b3 <> '0' then 1 else 0 END) as cli40b3,
			(CASE when cli_40c <> '0' then 1 else 0 END) as cli40c,
			(CASE when cli_40d <> '0' then 1 else 0 END) as cli40d,
			(CASE when cli_40e <> '0' then 1 else 0 END) as cli40e,
			(CASE when cli_41 <> '0' then 1 else 0 END) as cli41
		FROM tbl_clinicalD29_D41
		WHERE pat_researchID='{$researchID}'
		AND session='{$session}'
		";

		$data6 = $this->db->query($query6);

		$row6 = $data6->row();
		$total6b = 0;
		if(isset($row6)){
			$cli30 = $row6->cli30;
			$cli31 = $row6->cli31;
			$cli32 = $row6->cli32;
			$cli33 = $row6->cli33;
			$cli34 = $row6->cli34;
			$cli35 = $row6->cli35;
			$cli36 = $row6->cli36;
			$cli37a = $row6->cli37a;
			$cli37b = $row6->cli37b;
			$cli37c = $row6->cli37c;
			$cli37d = $row6->cli37d;
			$cli38 = $row6->cli38;
			$cli38Hour = $row6->cli38Hour;
			$cli39 = $row6->cli39;
			$cli40a = $row6->cli40a;
			$cli40a1 = $row6->cli40a1;
			$cli40a2 = $row6->cli40a2;
			$cli40b = $row6->cli40b;
			$cli40b1 = $row6->cli40b1;
			$cli40b2 = $row6->cli40b2;
			$cli40b3 = $row6->cli40b3;
			$cli40c = $row6->cli40c;
			$cli40d = $row6->cli40d;
			$cli40e = $row6->cli40e;
			$cli41 = $row6->cli41;

			$total6b = $cli30 + $cli31 + $cli32 + $cli33 + $cli34 + $cli35 + $cli36 + $cli37a + $cli37b + $cli37c + $cli38 + $cli38Hour + $cli39 + $cli40a + $cli40a1 + $cli40a2 + $cli40b + $cli40b1 + $cli40b2 + $cli40b3 + $cli40c + $cli40d + $cli40e + $cli41;
		}

		$query6a = "SELECT COUNT(*) as count FROM tbl_clinical29 WHERE pat_researchID='{$researchID}' and session='{$session}' GROUP BY session";
		$data6a = $this->db->query($query6a);

		$row6a = $data6a->result();
		$bil6a = 0;
		foreach($row6a as $clinic2){
			$bil6a++;
		}

		$total6 = $total6b + $bil6a;

		$query7 = "SELECT 
			(CASE when cli_13 <> '0' then 1 else 0 END) as cli13,
			(CASE when cli_14 <> '0' then 1 else 0 END) as cli14,
			(CASE when cli_15 <> '0' then 1 else 0 END) as cli15,
			(CASE when cli_16 <> '0' then 1 else 0 END) as cli16,
			(CASE when cli_17 <> '0' then 1 else 0 END) as cli17,
			(CASE when cli_18 <> '0000-00-00' then 1 else 0 END) as cli18,
			(CASE when cli_19 <> '0000-00-00' then 1 else 0 END) as cli19,
			(CASE when cli_20 <> '0000-00-00' then 1 else 0 END) as cli20,
			(CASE when cli_21 <> '0000-00-00' then 1 else 0 END) as cli21,
			(CASE when cli_22 <> '0' then 1 else 0 END) as cli22,
			(CASE when cli_24 <> '0' then 1 else 0 END) as cli24,
			(CASE when cli_25 <> '0' then 1 else 0 END) as cli25,
			(CASE when cli_26 <> '0' then 1 else 0 END) as cli26,
			(CASE when cli_BarthelBowel <> '9' then 1 else 0 END) as bowel,
			(CASE when cli_BarthelFeeding <> '9' then 1 else 0 END) as feeding,
			(CASE when cli_BarthelBladder <> '9' then 1 else 0 END) as bladder,
			(CASE when cli_BarthelDressing <> '9' then 1 else 0 END) as dressing,
			(CASE when cli_BarthelGrooming <> '9' then 1 else 0 END) as grooming,
			(CASE when cli_BarthelMobility <> '9' then 1 else 0 END) as mobility,
			(CASE when cli_BarthelToilet <> '9' then 1 else 0 END) as toilet,
			(CASE when cli_BarthelTransfer <> '9' then 1 else 0 END) as transfer,
			(CASE when cli_BarthelBathing <> '9' then 1 else 0 END) as bathing,
			(CASE when cli_BarthelStairs <> '9' then 1 else 0 END) as stairs,
			(CASE when cli_27 <> '0' then 1 else 0 END) as cli27,
			(CASE when cli_27a <> '0' then 1 else 0 END) as cli27a,
			(CASE when cli_27b <> '0' then 1 else 0 END) as cli27b,
			(CASE when cli_27c <> '0' then 1 else 0 END) as cli27c,
			(CASE when cli_28a <> '0' then 1 else 0 END) as cli28a,
			(CASE when cli_28b <> '0' then 1 else 0 END) as cli28b,
			(CASE when cli_28c <> '0' then 1 else 0 END) as cli28c
		FROM tbl_clinicalD13_D28
		WHERE pat_researchID='{$researchID}'
		AND session='{$session}'
		";

		$data7 = $this->db->query($query7);

		$row7 = $data7->row();
		$total7b = 0;
		if(isset($row7)){
			$cli13 = $row7->cli13;
			$cli14 = $row7->cli14;
			$cli15 = $row7->cli15;
			$cli16 = $row7->cli16;
			$cli17 = $row7->cli17;
			$cli18 = $row7->cli18;
			$cli19 = $row7->cli19;
			$cli20 = $row7->cli20;
			$cli21 = $row7->cli21;
			$cli22 = $row7->cli22;
			$cli24 = $row7->cli24;
			$cli25 = $row7->cli25;
			$cli26 = $row7->cli26;
			$bowel = $row7->bowel;
			$bladder = $row7->bladder;
			$feeding = $row7->feeding;
			$dressing = $row7->dressing;
			$grooming = $row7->grooming;
			$mobility = $row7->mobility;
			$toilet = $row7->toilet;
			$transfer = $row7->transfer;
			$bathing = $row7->bathing;
			$stairs = $row7->stairs;
			$cli27 = $row7->cli27;
			$cli27a = $row7->cli27a;
			$cli27b = $row7->cli27b;
			$cli27c = $row7->cli27c;
			$cli28a = $row7->cli28a;
			$cli28b = $row7->cli28b;
			$cli28c = $row7->cli28c;

			$total7b = $cli13 + $cli14 + $cli15 + $cli16 + $cli17 + $cli18 + $cli19 + $cli20 + $cli21 + $cli22 + $cli24 + $cli25 + $cli26 + $bowel + $feeding + $bladder + $dressing + $grooming + $mobility + $toilet + $transfer + $bathing + $stairs + $cli27 + $cli27a + $cli27b + $cli27c + $cli28a + $cli28b + $cli28c;

		}


		$query7a = "SELECT COUNT(*) as count FROM tbl_clinical29 WHERE pat_researchID='{$researchID}' and session='{$session}' GROUP BY session";
		$data7a = $this->db->query($query7a);

		$row7a = $data7a->result();
		$bil7a = 0;
		foreach($row7a as $clinic1){
			$bil7a++;
		}

		$total7 = $total7b + $bil7a;

		// die($rid);
		$jumlah = $total1 + $total2 + $total3 + $total4 + $total5 + $total6 + $total7;

		return $jumlah;

	}

	public function percentage($atas,$bawah){

		$total = ($atas / $bawah) * 100;
		
		return $total;

	}

	public function check_notification($researchID,$session){

		$this->db->where("pat_researchID", $researchID);
		$this->db->where("session", $session);
		$query = $this->db->get("tbl_for_notification");

		$data = $query->num_rows();

		if($data >= 7){
			$this->hantar_email();
		}

	}

	public function hantar_email(){

		$this->load->library('email');

		$subject = 'This is a test';
		$message = '<p>This message has been sent for testing purposes.</p>';

		// Get full html:
		$body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
		    <meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
		    <title>' . html_escape($subject) . '</title>
		    <style type="text/css">
		        body {
		            font-family: Arial, Verdana, Helvetica, sans-serif;
		            font-size: 16px;
		        }
		    </style>
		</head>
		<body>
		' . $message . '
		</body>
		</html>';
		// Also, for getting full html you may use the following internal method:
		//$body = $this->email->full_html($subject, $message);

		$result = $this->email
		        ->from('administrator@usim.edu.my')
		        ->reply_to('yoursecondemail@somedomain.com')    // Optional, an account where a human being reads.
		        ->to('khairil114@gmail.com')
		        ->subject($subject)
		        ->message($body)
		        ->send();

		// var_dump($result);
		// echo '<br />';
		// echo $this->email->print_debugger();

		exit;
	}

	public function kira_approval($iduser){

		$total = $jumlah_min = $jumlah_c1 = $jumlah_c2 = $jumlah_c3 = $jumlah_diag = $jumlah_mgt = $jumlah_info = "";

		$this->db->group_by("pat_researchID, session");
		$this->db->where("approval", 2);
		$this->db->where("approval_status", 1);
		$this->db->where("saved_by", $iduser);
		$min = $this->db->get("tbl_patient_information");

		$this->db->group_by("pat_researchID, session");
		$this->db->where("approval", 2);
		$this->db->where("approval_status", 1);
		$this->db->where("saved_by", $iduser);
		$c1 = $this->db->get("tbl_clinicalD13_D28");

		$this->db->group_by("pat_researchID, session");
		$this->db->where("approval", 2);
		$this->db->where("approval_status", 1);
		$this->db->where("saved_by", $iduser);
		$c2 = $this->db->get("tbl_clinicalD29_D41");

		$this->db->group_by("pat_researchID, session");
		$this->db->where("approval", 2);
		$this->db->where("approval_status", 1);
		$this->db->where("saved_by", $iduser);
		$c3 = $this->db->get("tbl_clinicalD42_D52");

		$this->db->group_by("pat_researchID, session");
		$this->db->where("approval", 2);
		$this->db->where("approval_status", 1);
		$this->db->where("saved_by", $iduser);
		$diag = $this->db->get("tbl_diagnostic");

		$this->db->group_by("pat_researchID, session");
		$this->db->where("approval", 2);
		$this->db->where("approval_status", 1);
		$this->db->where("saved_by", $iduser);
		$mgt = $this->db->get("tbl_management");

		$this->db->group_by("pat_researchID, session");
		$this->db->where("approval", 2);
		$this->db->where("approval_status", 1);
		$this->db->where("saved_by", $iduser);
		$info = $this->db->get("tbl_other_information");

		$jumlah_min = $min->num_rows();
		$jumlah_c1 = $c1->num_rows();
		$jumlah_c2 = $c2->num_rows();
		$jumlah_c3 = $c3->num_rows();
		$jumlah_diag = $diag->num_rows();
		$jumlah_mgt = $mgt->num_rows();
		$jumlah_info = $info->num_rows();

		$total = $jumlah_min + $jumlah_c1 + $jumlah_c2 + $jumlah_c3 + $jumlah_diag + $jumlah_mgt + $jumlah_info;

		return $total;

	}

	public function kira_jantina($iduser,$jenis){

		if($jenis==1){
			$jantina = "male";
		} elseif($jenis==2){
			$jantina = "female";
		} elseif($jenis==3){
			$jantina = "";
		}

		$this->db->where("pat_gender", $jantina);
		$this->db->where("doctor_who", $iduser);
		$query = $this->db->get("tbl_patient_information");

		return $query->num_rows();
	}

	public function kira_isi($jenis,$researchID,$session){

		$total1 = $total2 = $total3 = $total4 = $total5 = $total6 = $total7 = $jumlah = 0;

		if($jenis==1){
			$query1 = "SELECT  
				(CASE when pat_researchID <> '' then 1 else 0 END) as rid, 
				(CASE when pat_rn <> '' then 1 else 0 END) as rn,
				(CASE when pat_dob <>'0000-00-00' then 1 else 0 END) as dob,
				(CASE when pat_gender <> '' then 1 else 0 END) as gender,
				(CASE when pat_source <> '' then 1 else 0 END) as source,
				(CASE when pat_sourceIDPatient <> '' then 1 else 0 END) as sourceIDPatient,
				(CASE when pat_surname <> '' then 1 else 0 END) as surname,
				(CASE when pat_firstname <> '' then 1 else 0 END) as name,
				(CASE when pat_address <> '' then 1 else 0 END) as address,
				(CASE when pat_contactNo <> '' then 1 else 0 END) as contactNo,
				(CASE when pat_race <> '' then 1 else 0 END) as race,
				(CASE when pat_education <> '0' then 1 else 0 END) as education,
				(CASE when pat_employment <> '0' then 1 else 0 END) as employment,
				(CASE when pat_04 <> '0' then 1 else 0 END) as pat04,
				(CASE when pat_06PreStroke <> '0' then 1 else 0 END) as pat06Prestroke,
				(CASE when pat_06Discharge <> '0' then 1 else 0 END) as pat06Discharge,
				(CASE when pat_06Discharge <> '0' then 1 else 0 END) as pat06Discharge,
				(CASE when pat_07RankinPrestroke <> '0' then 1 else 0 END) as pat07Prestroke,
				(CASE when pat_07RankinOnAdmission <> '0' then 1 else 0 END) as pat07OnAdmission,
				(CASE when pat_07RankinDischarge <> '0' then 1 else 0 END) as pat07Discharge,
				(CASE when pat_BarthelBowelPreStroke <> '9' then 1 else 0 END) as bowelPrestroke,
				(CASE when pat_BarthelBowelDischarge <> '9' then 1 else 0 END) as bowelDischarge,
				(CASE when pat_BarthelFeedingPreStroke <> '9' then 1 else 0 END) as feedingPrestroke,
				(CASE when pat_BarthelFeedingDischarge <> '9' then 1 else 0 END) as feedingDischarge,
				(CASE when pat_BarthelBladderPreStroke <> '9' then 1 else 0 END) as bladderPrestroke,
				(CASE when pat_BarthelBladderDischarge <> '9' then 1 else 0 END) as bladderDischarge,
				(CASE when pat_BarthelDressingPreStroke <> '9' then 1 else 0 END) as dressingPrestroke,
				(CASE when pat_BarthelDressingDischarge <> '9' then 1 else 0 END) as dressingDischarge,
				(CASE when pat_BarthelGroomingPreStroke <> '9' then 1 else 0 END) as groomingPrestroke,
				(CASE when pat_BarthelGroomingDischarge <> '9' then 1 else 0 END) as groomingDischarge,
				(CASE when pat_BarthelMobilityPreStroke <> '9' then 1 else 0 END) as mobilityPrestroke,
				(CASE when pat_BarthelMobilityDischarge <> '9' then 1 else 0 END) as mobilityDischarge,
				(CASE when pat_BarthelToiletPreStroke <> '9' then 1 else 0 END) as toiletPrestroke,
				(CASE when pat_BarthelToiletDischarge <> '9' then 1 else 0 END) as toiletDischarge,
				(CASE when pat_BarthelTransferPreStroke <> '9' then 1 else 0 END) as transferPrestroke,
				(CASE when pat_BarthelTransferDischarge <> '9' then 1 else 0 END) as transferDischarge,
				(CASE when pat_BarthelBathingPreStroke <> '9' then 1 else 0 END) as bathingPrestroke,
				(CASE when pat_BarthelBathingDischarge <> '9' then 1 else 0 END) as bathingDischarge,
				(CASE when pat_BarthelStairsPreStroke <> '9' then 1 else 0 END) as stairsPrestroke,
				(CASE when pat_BarthelStairsDischarge <> '9' then 1 else 0 END) as stairsDischarge,
				(CASE when pat_outcome <> '0' then 1 else 0 END) as outcome

			FROM tbl_patient_information 
			WHERE pat_researchID='{$researchID}'
			AND session='{$session}'
			";

			// echo $query1;
			$data = $this->db->query($query1);

			$row = $data->row();

			if(isset($row)){
				$rid = $row->rid;
				$rn = $row->rn;
				$dob = $row->dob;
				$gender = $row->gender;
				$source = $row->source;
				$sourceIDPatient = $row->sourceIDPatient;
				$surname = $row->surname;
				$firstname = $row->name;
				$address = $row->address;
				$contactNo = $row->contactNo;
				$race = $row->race;
				$education = $row->education;
				$employment = $row->employment;
				$pat04 = $row->pat04;
				$pat06Prestroke = $row->pat06Prestroke;
				$pat06Discharge = $row->pat06Discharge;
				$pat07Prestroke = $row->pat07Prestroke;
				$pat07OnAdmission = $row->pat07OnAdmission;
				$pat07Discharge = $row->pat07Discharge;
				$bowelPrestroke = $row->bowelPrestroke;
				$bowelDischarge = $row->bowelDischarge;
				$feedingPrestroke = $row->feedingPrestroke;
				$feedingDischarge = $row->feedingDischarge;
				$bladderPrestroke = $row->bladderPrestroke;
				$bladderDischarge = $row->bladderDischarge;
				$dressingPrestroke = $row->dressingPrestroke;
				$dressingDischarge = $row->dressingDischarge;
				$groomingPrestroke = $row->groomingPrestroke;
				$groomingDischarge = $row->groomingDischarge;
				$mobilityPrestroke = $row->mobilityPrestroke;
				$mobilityDischarge = $row->mobilityDischarge;
				$toiletPrestroke = $row->toiletPrestroke;
				$toiletDischarge = $row->toiletDischarge;
				$transferPrestroke = $row->transferPrestroke;
				$transferDischarge = $row->transferDischarge;
				$bathingPrestroke = $row->bathingPrestroke;
				$bathingDischarge = $row->bathingDischarge;
				$stairsPrestroke = $row->stairsPrestroke;
				$stairsDischarge = $row->stairsDischarge;

				$total1 = $rid + $rn + $dob + $gender + $source + $sourceIDPatient + $surname + $firstname + $address + $contactNo + $race + $education + $employment + $pat04 + $pat06Prestroke + $pat06Discharge + $pat07Prestroke + $pat07OnAdmission + $pat07Discharge + $bowelPrestroke + $bowelDischarge + $feedingPrestroke + $feedingDischarge + $bladderPrestroke + $bladderDischarge + $dressingPrestroke + $dressingDischarge + $groomingPrestroke + $groomingDischarge + $mobilityPrestroke + $mobilityDischarge + $toiletPrestroke + $toiletDischarge + $transferPrestroke + $transferDischarge + $bathingPrestroke + $bathingDischarge + $stairsPrestroke + $stairsDischarge;

				$minimum_data_set = $this->db->get("tbl_patient_information");
				$min = $minimum_data_set->num_fields() - 21;

				$jumlah = number_format(($total1 / $min) * 100,2);

				$jumlah = $jumlah."% ($total1 / $min)";
				// return $total1;

			}
		} elseif($jenis==2){
			$query2 = "SELECT (CASE when otherinfo <> '' then 1 else 0 END ) as otherinfo FROM tbl_other_information WHERE pat_researchID='{$researchID}' and session='{$session}'";

			$data2 = $this->db->query($query2);

			$row2 = $data2->row();
			$total2b = 0;
			if(isset($row2)){
				$otherinfo = $row2->otherinfo;

				$total2b =  $otherinfo;
			}

			$query2a = "SELECT COUNT(*) as count FROM tbl_other WHERE pat_researchID='{$researchID}' and session='{$session}' and value<>'0' GROUP BY fieldNo";
			$data2a = $this->db->query($query2a);

			$row2a = $data2a->result();
			$bil2a = 0;
			foreach($row2a as $other){
				$bil2a++;
			}

			$total2 = $total2b + $bil2a;

			$other_info = $this->db->get("tbl_other_information");
			$info = $other_info->num_fields() - 8;

			$jumlah = number_format(($total2 / $info) * 100,2);

			$jumlah = $jumlah."% ($total2 / $info)";

			// return $total2;

		} elseif($jenis==3){
			$query3 = "SELECT 
				(CASE when mgt_64 <> '0' then 1 else 0 END) as mgt64,
				(CASE when mgt_65 <> '0' then 1 else 0 END) as mgt65,
				(CASE when mgt_66 <> '0' then 1 else 0 END) as mgt66,
				(CASE when mgt_67 <> '0' then 1 else 0 END) as mgt67,
				(CASE when mgt_68 <> '0' then 1 else 0 END) as mgt68,
				(CASE when mgt_69 <> '0' then 1 else 0 END) as mgt69
			FROM tbl_management
			WHERE pat_researchID='{$researchID}'
			AND session='{$session}'
			";

			$data3 = $this->db->query($query3);

			$row3 = $data3->row();
			$total3b = 0;
			$mgt64 = $mgt65 = $mgt66 = $mgt67 = $mgt68 = $mgt69 = 0;
			if(isset($row3)){
				$mgt64 = $row3->mgt64;
				$mgt65 = $row3->mgt65;
				$mgt66 = $row3->mgt66;
				$mgt67 = $row3->mgt67;
				$mgt68 = $row3->mgt68;
				$mgt69 = $row3->mgt69;

				$total3b = $mgt64 + $mgt65 + $mgt66 + $mgt67 + $mgt68 + $mgt69;
			}

			$query3a = "SELECT COUNT(*) as count FROM tbl_management63 WHERE pat_researchID='{$researchID}' and session='{$session}' and value<>'0' GROUP BY fieldNo";
			$data3a = $this->db->query($query3a);

			$row3a = $data3a->result();
			$bil3a = 0;
			foreach($row3a as $mgt63){
				$bil3a++;
			}

			$total3 = $total3b + $bil3a;

			$management = $this->db->get("tbl_management");
			$mgt = $management->num_fields() - 3;

			$jumlah = number_format(($total3 / $mgt) * 100,2);

			$jumlah = $jumlah."% ($total3 / $mgt)";

			// return $total3;
		} elseif($jenis==4){
			$query4 = "SELECT 
				(CASE when diag_53 <> '0' then 1 else 0 END) as diag53,
				(CASE when diag_54 <> '0' then 1 else 0 END) as diag54,
				(CASE when diag_55 <> '0' then 1 else 0 END) as diag55,
				(CASE when diag_56 <> '0' then 1 else 0 END) as diag56,
				(CASE when diag_58 <> '0' then 1 else 0 END) as diag58,
				(CASE when diag_58a <> '0' then 1 else 0 END) as diag58a,
				(CASE when diag_59 <> '0' then 1 else 0 END) as diag59,
				(CASE when diag_60a <> '0' then 1 else 0 END) as diag60a,
				(CASE when diag_60b <> '0' then 1 else 0 END) as diag60b,
				(CASE when diag_60c <> '0' then 1 else 0 END) as diag60c,
				(CASE when diag_611a <> '0' then 1 else 0 END) as diag611a,
				(CASE when diag_611b <> '0' then 1 else 0 END) as diag611b,
				(CASE when diag_611c <> '0' then 1 else 0 END) as diag611c,
				(CASE when diag_612a <> '0' then 1 else 0 END) as diag612a,
				(CASE when diag_612b <> '0' then 1 else 0 END) as diag612b,
				(CASE when diag_612c <> '0' then 1 else 0 END) as diag612c,
				(CASE when diag_613 <> '0' then 1 else 0 END) as diag613,
				(CASE when diag_614 <> '0' then 1 else 0 END) as diag614,
				(CASE when diag_615 <> '0' then 1 else 0 END) as diag615,
				(CASE when diag_616 <> '0' then 1 else 0 END) as diag616,
				(CASE when diag_62a <> '0' then 1 else 0 END) as diag62a,
				(CASE when diag_62b <> '0' then 1 else 0 END) as diag62b,
				(CASE when diag_62c <> '0' then 1 else 0 END) as diag62c,
				(CASE when diag_62d <> '0' then 1 else 0 END) as diag62d,
				(CASE when diag_62e <> '0' then 1 else 0 END) as diag62e,
				(CASE when diag_62f <> '0' then 1 else 0 END) as diag62f,
				(CASE when diag_62g <> '0' then 1 else 0 END) as diag62g,
				(CASE when diag_62h <> '0' then 1 else 0 END) as diag62h
			FROM tbl_diagnostic
			WHERE pat_researchID='{$researchID}'
			AND session='{$session}'
			";

			$data4 = $this->db->query($query4);

			$row4 = $data4->row();
			$total4b = 0;
			if(isset($row4)){
				$diag53 = $row4->diag53;
				$diag54 = $row4->diag54;
				$diag55 = $row4->diag55;
				$diag56 = $row4->diag56;
				$diag58 = $row4->diag58;
				$diag58a = $row4->diag58a;
				$diag59 = $row4->diag59;
				$diag60a = $row4->diag60a;
				$diag60b = $row4->diag60b;
				$diag60c = $row4->diag60c;
				$diag611a = $row4->diag611a;
				$diag611b = $row4->diag611b;
				$diag611c = $row4->diag611c;
				$diag612a = $row4->diag612a;
				$diag612b = $row4->diag612b;
				$diag612c = $row4->diag612c;
				$diag613 = $row4->diag613;
				$diag614 = $row4->diag614;
				$diag615 = $row4->diag615;
				$diag616 = $row4->diag616;
				$diag62a = $row4->diag62a;
				$diag62b = $row4->diag62b;
				$diag62c = $row4->diag62c;
				$diag62d = $row4->diag62d;
				$diag62e = $row4->diag62e;
				$diag62f = $row4->diag62f;
				$diag62g = $row4->diag62g;
				$diag62h = $row4->diag62h;

				$total4b = $diag53 + $diag54 + $diag55 + $diag56 + $diag58 + $diag58a + $diag59 + $diag60a + $diag60b + $diag60c + $diag611a + $diag611b + $diag611c + $diag612a + $diag612b + $diag612c + $diag613 + $diag614 + $diag615 + $diag616 + $diag62a + $diag62b + $diag62c + $diag62d + $diag62e + $diag62f + $diag62g + $diag62h;
			}

			$query4a = "SELECT COUNT(*) as count FROM tbl_diagnostic57 WHERE pat_researchID='{$researchID}' and session='{$session}' and value<>'0' GROUP BY session";
			$data4a = $this->db->query($query4a);

			$row4a = $data4a->result();
			$bil4a = 0;
			foreach($row4a as $diag57){
				$bil4a++;
			}

			$total4 = $total4b + $bil4a;

			$diagnostic = $this->db->get("tbl_diagnostic");
			$diag = $diagnostic->num_fields() - 12;

			$jumlah = number_format(($total4 / $diag) * 100,2);

			$jumlah = $jumlah."% ($total4 / $diag)";

		} elseif($jenis==5){
			$query5 = "SELECT 
				(CASE when cli_42 <> '0' then 1 else 0 END) as cli42,
				(CASE when cli_43 <> '0' then 1 else 0 END) as cli43,
				(CASE when cli_43a <> '0' then 1 else 0 END) as cli43a,
				(CASE when cli_44 <> '0' then 1 else 0 END) as cli44,
				(CASE when cli_44a <> '0' then 1 else 0 END) as cli44a,
				(CASE when cli_44b <> '0' then 1 else 0 END) as cli44b,
				(CASE when cli_44c <> '0' then 1 else 0 END) as cli44c,
				(CASE when cli_44d <> '0' then 1 else 0 END) as cli44d,
				(CASE when cli_45 <> '0' then 1 else 0 END) as cli45,
				(CASE when cli_45a <> '0' then 1 else 0 END) as cli45a,
				(CASE when cli_45b <> '0' then 1 else 0 END) as cli45b,
				(CASE when cli_46 <> '0' then 1 else 0 END) as cli46,
				(CASE when cli_47 <> '0' then 1 else 0 END) as cli47,
				(CASE when cli_48 <> '0' then 1 else 0 END) as cli48,
				(CASE when cli_49 <> '0' then 1 else 0 END) as cli49,
				(CASE when cli_50a <> '0' then 1 else 0 END) as cli50a,
				(CASE when cli_50b <> '0' then 1 else 0 END) as cli50b,
				(CASE when cli_50c <> '0' then 1 else 0 END) as cli50c,
				(CASE when cli_50d <> '0' then 1 else 0 END) as cli50d,
				(CASE when cli_50e <> '0' then 1 else 0 END) as cli50e,
				(CASE when cli_50f <> '0' then 1 else 0 END) as cli50f,
				(CASE when cli_51 <> '0' then 1 else 0 END) as cli51,
				(CASE when cli_51a <> '0' then 1 else 0 END) as cli51a,
				(CASE when cli_51b <> '0' then 1 else 0 END) as cli51b,
				(CASE when cli_51c <> '0' then 1 else 0 END) as cli51c,
				(CASE when cli_52 <> '0' then 1 else 0 END) as cli52
			FROM tbl_clinicalD42_D52
			WHERE pat_researchID='{$researchID}'
			AND session='{$session}'
			";

			$data5 = $this->db->query($query5);

			$row5 = $data5->row();

			if(isset($row5)){
				$cli42 = $row5->cli42;
				$cli43 = $row5->cli43;
				$cli43a = $row5->cli43a;
				$cli44 = $row5->cli44;
				$cli44a = $row5->cli44a;
				$cli44b = $row5->cli44b;
				$cli44c = $row5->cli44c;
				$cli44d = $row5->cli44d;
				$cli45 = $row5->cli45;
				$cli45a = $row5->cli45a;
				$cli45b = $row5->cli45b;
				$cli46 = $row5->cli46;
				$cli47 = $row5->cli47;
				$cli48 = $row5->cli48;
				$cli49 = $row5->cli49;
				$cli50a = $row5->cli50a;
				$cli50b = $row5->cli50b;
				$cli50c = $row5->cli50c;
				$cli50d = $row5->cli50d;
				$cli50e = $row5->cli50e;
				$cli50f = $row5->cli50f;
				$cli51 = $row5->cli51;
				$cli51a = $row5->cli51a;
				$cli51b = $row5->cli51b;
				$cli51c = $row5->cli51c;
				$cli52 = $row5->cli52;

				$total5 = $cli42 + $cli43 + $cli43a + $cli44 + $cli44a + $cli44b + $cli44c + $cli44d + $cli45 + $cli45a + $cli45b + $cli46 + $cli47 + $cli48 + $cli49 + $cli50a + $cli50b + $cli50c + $cli50d + $cli50e + $cli50f + $cli51 + $cli51a + $cli51b + $cli51c + $cli52;


				$clinical3 = $this->db->get("tbl_clinicalD42_D52");
				$c3 = $clinical3->num_fields() - 14;

				$jumlah = number_format(($total5 / $c3) * 100,2);

				$jumlah = $jumlah."% ($total5 / $c3)";


			}
		} elseif($jenis==6){
			$query6 = "SELECT
				(CASE when cli_30 <> '0' then 1 else 0 END) as cli30,
				(CASE when cli_31 <> '0' then 1 else 0 END) as cli31,
				(CASE when cli_32 <> '0' then 1 else 0 END) as cli32,
				(CASE when cli_33 <> '0' then 1 else 0 END) as cli33,
				(CASE when cli_34 <> '0' then 1 else 0 END) as cli34,
				(CASE when cli_35 <> '0' then 1 else 0 END) as cli35,
				(CASE when cli_36 <> '0' then 1 else 0 END) as cli36,
				(CASE when cli_37a <> '0' then 1 else 0 END) as cli37a,
				(CASE when cli_37b <> '0' then 1 else 0 END) as cli37b,
				(CASE when cli_37c <> '0' then 1 else 0 END) as cli37c,
				(CASE when cli_37d <> '0' then 1 else 0 END) as cli37d,
				(CASE when cli_37e <> '0' then 1 else 0 END) as cli37e,
				(CASE when cli_38 <> '0' then 1 else 0 END) as cli38,
				(CASE when cli_38Hour <> '' then 1 else 0 END) as cli38Hour,
				(CASE when cli_39 <> '0' then 1 else 0 END) as cli39,
				(CASE when cli_40a <> '0' then 1 else 0 END) as cli40a,
				(CASE when cli_40a1 <> '0' then 1 else 0 END) as cli40a1,
				(CASE when cli_40a2 <> '0' then 1 else 0 END) as cli40a2,
				(CASE when cli_40b <> '0' then 1 else 0 END) as cli40b,
				(CASE when cli_40b1 <> '0' then 1 else 0 END) as cli40b1,
				(CASE when cli_40b2 <> '0' then 1 else 0 END) as cli40b2,
				(CASE when cli_40b3 <> '0' then 1 else 0 END) as cli40b3,
				(CASE when cli_40c <> '0' then 1 else 0 END) as cli40c,
				(CASE when cli_40d <> '0' then 1 else 0 END) as cli40d,
				(CASE when cli_40e <> '0' then 1 else 0 END) as cli40e,
				(CASE when cli_41 <> '0' then 1 else 0 END) as cli41
			FROM tbl_clinicalD29_D41
			WHERE pat_researchID='{$researchID}'
			AND session='{$session}'
			";

			$data6 = $this->db->query($query6);

			$row6 = $data6->row();
			$total6b = 0;
			if(isset($row6)){
				$cli30 = $row6->cli30;
				$cli31 = $row6->cli31;
				$cli32 = $row6->cli32;
				$cli33 = $row6->cli33;
				$cli34 = $row6->cli34;
				$cli35 = $row6->cli35;
				$cli36 = $row6->cli36;
				$cli37a = $row6->cli37a;
				$cli37b = $row6->cli37b;
				$cli37c = $row6->cli37c;
				$cli37d = $row6->cli37d;
				$cli38 = $row6->cli38;
				$cli38Hour = $row6->cli38Hour;
				$cli39 = $row6->cli39;
				$cli40a = $row6->cli40a;
				$cli40a1 = $row6->cli40a1;
				$cli40a2 = $row6->cli40a2;
				$cli40b = $row6->cli40b;
				$cli40b1 = $row6->cli40b1;
				$cli40b2 = $row6->cli40b2;
				$cli40b3 = $row6->cli40b3;
				$cli40c = $row6->cli40c;
				$cli40d = $row6->cli40d;
				$cli40e = $row6->cli40e;
				$cli41 = $row6->cli41;

				$total6b = $cli30 + $cli31 + $cli32 + $cli33 + $cli34 + $cli35 + $cli36 + $cli37a + $cli37b + $cli37c + $cli38 + $cli38Hour + $cli39 + $cli40a + $cli40a1 + $cli40a2 + $cli40b + $cli40b1 + $cli40b2 + $cli40b3 + $cli40c + $cli40d + $cli40e + $cli41;
			}

			$query6a = "SELECT COUNT(*) as count FROM tbl_clinical29 WHERE pat_researchID='{$researchID}' and session='{$session}' and value<>'0' GROUP BY session";
			$data6a = $this->db->query($query6a);

			$row6a = $data6a->result();
			$bil6a = 0;
			foreach($row6a as $clinic2){
				$bil6a++;
			}

			$total6 = $total6b + $bil6a;

			
			$clinical2 = $this->db->get("tbl_clinicalD29_D41");
			$c2 = $clinical2->num_fields() - 14;

			$jumlah = number_format(($total6 / $c2) * 100,2);

			$jumlah = $jumlah."% ($total6 / $c2)";

		} elseif($jenis==7){

			$query7 = "SELECT 
				(CASE when cli_13 <> '0' then 1 else 0 END) as cli13,
				(CASE when cli_14 <> '0' then 1 else 0 END) as cli14,
				(CASE when cli_15 <> '0' then 1 else 0 END) as cli15,
				(CASE when cli_16 <> '0' then 1 else 0 END) as cli16,
				(CASE when cli_17 <> '0' then 1 else 0 END) as cli17,
				(CASE when cli_18 <> '0000-00-00' then 1 else 0 END) as cli18,
				(CASE when cli_19 <> '0000-00-00' then 1 else 0 END) as cli19,
				(CASE when cli_20 <> '0000-00-00' then 1 else 0 END) as cli20,
				(CASE when cli_21 <> '0000-00-00' then 1 else 0 END) as cli21,
				(CASE when cli_22 <> '0' then 1 else 0 END) as cli22,
				(CASE when cli_24 <> '0' then 1 else 0 END) as cli24,
				(CASE when cli_25 <> '0' then 1 else 0 END) as cli25,
				(CASE when cli_26 <> '0' then 1 else 0 END) as cli26,
				(CASE when cli_BarthelBowel <> '9' then 1 else 0 END) as bowel,
				(CASE when cli_BarthelFeeding <> '9' then 1 else 0 END) as feeding,
				(CASE when cli_BarthelBladder <> '9' then 1 else 0 END) as bladder,
				(CASE when cli_BarthelDressing <> '9' then 1 else 0 END) as dressing,
				(CASE when cli_BarthelGrooming <> '9' then 1 else 0 END) as grooming,
				(CASE when cli_BarthelMobility <> '9' then 1 else 0 END) as mobility,
				(CASE when cli_BarthelToilet <> '9' then 1 else 0 END) as toilet,
				(CASE when cli_BarthelTransfer <> '9' then 1 else 0 END) as transfer,
				(CASE when cli_BarthelBathing <> '9' then 1 else 0 END) as bathing,
				(CASE when cli_BarthelStairs <> '9' then 1 else 0 END) as stairs,
				(CASE when cli_27 <> '0' then 1 else 0 END) as cli27,
				(CASE when cli_27a <> '0' then 1 else 0 END) as cli27a,
				(CASE when cli_27b <> '0' then 1 else 0 END) as cli27b,
				(CASE when cli_27c <> '0' then 1 else 0 END) as cli27c,
				(CASE when cli_28a <> '0' then 1 else 0 END) as cli28a,
				(CASE when cli_28b <> '0' then 1 else 0 END) as cli28b,
				(CASE when cli_28c <> '0' then 1 else 0 END) as cli28c
			FROM tbl_clinicalD13_D28
			WHERE pat_researchID='{$researchID}'
			AND session='{$session}'
			";

			$data7 = $this->db->query($query7);

			$row7 = $data7->row();
			$total7b = 0;
			if(isset($row7)){
				$cli13 = $row7->cli13;
				$cli14 = $row7->cli14;
				$cli15 = $row7->cli15;
				$cli16 = $row7->cli16;
				$cli17 = $row7->cli17;
				$cli18 = $row7->cli18;
				$cli19 = $row7->cli19;
				$cli20 = $row7->cli20;
				$cli21 = $row7->cli21;
				$cli22 = $row7->cli22;
				$cli24 = $row7->cli24;
				$cli25 = $row7->cli25;
				$cli26 = $row7->cli26;
				$bowel = $row7->bowel;
				$bladder = $row7->bladder;
				$feeding = $row7->feeding;
				$dressing = $row7->dressing;
				$grooming = $row7->grooming;
				$mobility = $row7->mobility;
				$toilet = $row7->toilet;
				$transfer = $row7->transfer;
				$bathing = $row7->bathing;
				$stairs = $row7->stairs;
				$cli27 = $row7->cli27;
				$cli27a = $row7->cli27a;
				$cli27b = $row7->cli27b;
				$cli27c = $row7->cli27c;
				$cli28a = $row7->cli28a;
				$cli28b = $row7->cli28b;
				$cli28c = $row7->cli28c;

				$total7b = $cli13 + $cli14 + $cli15 + $cli16 + $cli17 + $cli18 + $cli19 + $cli20 + $cli21 + $cli22 + $cli24 + $cli25 + $cli26 + $bowel + $feeding + $bladder + $dressing + $grooming + $mobility + $toilet + $transfer + $bathing + $stairs + $cli27 + $cli27a + $cli27b + $cli27c + $cli28a + $cli28b + $cli28c;

			}


			$query7a = "SELECT COUNT(*) as count FROM tbl_clinical23 WHERE pat_researchID='{$researchID}' and session='{$session}' and value<>'0' GROUP BY session";
			$data7a = $this->db->query($query7a);

			$row7a = $data7a->result();
			$bil7a = 0;
			foreach($row7a as $clinic1){
				$bil7a++;
			}

			$total7 = $total7b + $bil7a;


			$clinical1 = $this->db->get("tbl_clinicalD13_D28");
			$c1 = $clinical1->num_fields() - 14;

			$jumlah = number_format(($total7 / $c1) * 100,2);

			$jumlah = $jumlah."% ($total7 / $c1)";
		}

		return $jumlah;

	}

	public function detailPatient(){

		$researchID = $this->input->post("researchID");
		$session = $this->input->post("session");


		$min = $this->kira_isi(1,$researchID,$session);
		$otherinfo = $this->kira_isi(2,$researchID,$session);
		$mgt = $this->kira_isi(3,$researchID,$session);
		$diag = $this->kira_isi(4,$researchID,$session);
		$clinical3 = $this->kira_isi(5,$researchID,$session);
		$clinical2 = $this->kira_isi(6,$researchID,$session);
		$clinical1 = $this->kira_isi(7,$researchID,$session);


		return "<table width='100%'>
				<thead>
					<tr>
						<th width='3'>#</th>
						<th>Part</th>
						<th>Percent</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Minimum data set</td>
						<td>$min</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Clinical D13 to D28</td>
						<td>$clinical1</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Clinical D29 to D41</td>
						<td>$clinical2</td>
					</tr>
					<tr>
						<td>4</td>
						<td>Clinical D42 to D51</td>
						<td>$clinical3</td>
					</tr>
					<tr>
						<td>5</td>
						<td>Diagnostic</td>
						<td>$diag</td>
					</tr>
					<tr>
						<td>6</td>
						<td>Management</td>
						<td>$mgt</td>
					</tr>
					<tr>
						<td>7</td>
						<td>Other information</td>
						<td>$otherinfo</td>
					</tr>
				</tbody>
			</table>
		";

		// echo $session;

	}

}