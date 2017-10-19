<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stroke_model extends CI_Model {

	public function stroke_view($researchID,$session,$jenis_stroke,$jenis){

		if($jenis_stroke=="arom"){
			$table = "tbl_stroke_arom";
		} elseif($jenis_stroke=="prom"){
			$table = "tbl_stroke_prom";
		} elseif($jenis_stroke=="msgarom"){
			$table = "tbl_stroke_msgarom";
		}

		$this->db->where("jenis", $jenis);
		$this->db->where("researchID", $researchID);
		$this->db->where("session", $session);
		$query = $this->db->get($table);

		return $query->result();

	}

	public function process_arom($researchID, $session){

		$inpDSExt1 = $this->input->post("inpDSExt1");
		$inpDSExt2 = $this->input->post("inpDSExt2");
		$inpDSExt3 = $this->input->post("inpDSExt3");
		$inpDSExt4 = $this->input->post("inpDSExt4");
		$inpDSFlex1 = $this->input->post("inpDSFlex1");
		$inpDSFlex2 = $this->input->post("inpDSFlex2");
		$inpDSFlex3 = $this->input->post("inpDSFlex3");
		$inpDSFlex4 = $this->input->post("inpDSFlex4");
		$inpDSAdd1 = $this->input->post("inpDSAdd1");
		$inpDSAdd2 = $this->input->post("inpDSAdd2");
		$inpDSAdd3 = $this->input->post("inpDSAdd3");
		$inpDSAdd4 = $this->input->post("inpDSAdd4");
		$inpDSIntRotate1 = $this->input->post("inpDSIntRotate1");
		$inpDSIntRotate2 = $this->input->post("inpDSIntRotate2");
		$inpDSIntRotate3 = $this->input->post("inpDSIntRotate3");
		$inpDSIntRotate4 = $this->input->post("inpDSIntRotate4");
		$inpDSExtRotate1 = $this->input->post("inpDSExtRotate1");
		$inpDSExtRotate2 = $this->input->post("inpDSExtRotate2");
		$inpDSExtRotate3 = $this->input->post("inpDSExtRotate3");
		$inpDSExtRotate4 = $this->input->post("inpDSExtRotate4");
		$inpDEExt1 = $this->input->post("inpDEExt1");
		$inpDEExt2 = $this->input->post("inpDEExt2");
		$inpDEExt3 = $this->input->post("inpDEExt3");
		$inpDEExt4 = $this->input->post("inpDEExt4");
		$inpDFPro1 = $this->input->post("inpDFPro1");
		$inpDFPro2 = $this->input->post("inpDFPro2");
		$inpDFPro3 = $this->input->post("inpDFPro3");
		$inpDFPro4 = $this->input->post("inpDFPro4");
		$inpDFSupi1 = $this->input->post("inpDFSupi1");
		$inpDFSupi2 = $this->input->post("inpDFSupi2");
		$inpDFSupi3 = $this->input->post("inpDFSupi3");
		$inpDFSupi4 = $this->input->post("inpDFSupi4");
		$inpDWFlex1 = $this->input->post("inpDWFlex1");
		$inpDWFlex2 = $this->input->post("inpDWFlex2");
		$inpDWFlex3 = $this->input->post("inpDWFlex3");
		$inpDWFlex4 = $this->input->post("inpDWFlex4");
		$inpDWDorsiFlex1 = $this->input->post("inpDWDorsiFlex1");
		$inpDWDorsiFlex2 = $this->input->post("inpDWDorsiFlex2");
		$inpDWDorsiFlex3 = $this->input->post("inpDWDorsiFlex3");
		$inpDWDorsiFlex4 = $this->input->post("inpDWDorsiFlex4");
		$inpDWUlna1 = $this->input->post("inpDWUlna1");
		$inpDWUlna2 = $this->input->post("inpDWUlna2");
		$inpDWUlna3 = $this->input->post("inpDWUlna3");
		$inpDWUlna4 = $this->input->post("inpDWUlna4");
		$inpDTMP1 = $this->input->post("inpDTMP1");
		$inpDTMP2 = $this->input->post("inpDTMP2");
		$inpDTMP3 = $this->input->post("inpDTMP3");
		$inpDTMP4 = $this->input->post("inpDTMP4");
		$inpDTIP1 = $this->input->post("inpDTIP1");
		$inpDTIP2 = $this->input->post("inpDTIP2");
		$inpDTIP3 = $this->input->post("inpDTIP3");
		$inpDTIP4 = $this->input->post("inpDTIP4");
		$inpDTCMC1 = $this->input->post("inpDTCMC1");
		$inpDTCMC2 = $this->input->post("inpDTCMC2");
		$inpDTCMC3 = $this->input->post("inpDTCMC3");
		$inpDTCMC4 = $this->input->post("inpDTCMC4");
		$inpDTPal1 = $this->input->post("inpDTPal1");
		$inpDTPal2 = $this->input->post("inpDTPal2");
		$inpDTPal3 = $this->input->post("inpDTPal3");
		$inpDTPal4 = $this->input->post("inpDTPal4");
		$inpDOppo1 = $this->input->post("inpDOppo1");
		$inpDOppo2 = $this->input->post("inpDOppo2");
		$inpDOppo3 = $this->input->post("inpDOppo3");
		$inpDOppo4 = $this->input->post("inpDOppo4");
		$inpDT1 = $this->input->post("inpDT1");
		$inpDT2 = $this->input->post("inpDT2");
		$inpDT3 = $this->input->post("inpDT3");
		$inpDT4 = $this->input->post("inpDT4");
		$inpDIMCP1 = $this->input->post("inpDIMCP1");
		$inpDIMCP2 = $this->input->post("inpDIMCP2");
		$inpDIMCP3 = $this->input->post("inpDIMCP3");
		$inpDIMCP4 = $this->input->post("inpDIMCP4");
		$inpDIPIP1 = $this->input->post("inpDIPIP1");
		$inpDIPIP2 = $this->input->post("inpDIPIP2");
		$inpDIPIP3 = $this->input->post("inpDIPIP3");
		$inpDIPIP4 = $this->input->post("inpDIPIP4");
		$inpDIDIP1 = $this->input->post("inpDIDIP1");
		$inpDIDIP2 = $this->input->post("inpDIDIP2");
		$inpDIDIP3 = $this->input->post("inpDIDIP3");
		$inpDIDIP4 = $this->input->post("inpDIDIP4");
		$inpDMMCP1 = $this->input->post("inpDMMCP1");
		$inpDMMCP2 = $this->input->post("inpDMMCP2");
		$inpDMMCP3 = $this->input->post("inpDMMCP3");
		$inpDMMCP4 = $this->input->post("inpDMMCP4");
		$inpDMPIP1 = $this->input->post("inpDMPIP1");
		$inpDMPIP2 = $this->input->post("inpDMPIP2");
		$inpDMPIP3 = $this->input->post("inpDMPIP3");
		$inpDMPIP4 = $this->input->post("inpDMPIP4");
		$inpDMDIP1 = $this->input->post("inpDMDIP1");
		$inpDMDIP2 = $this->input->post("inpDMDIP2");
		$inpDMDIP3 = $this->input->post("inpDMDIP3");
		$inpDMDIP4 = $this->input->post("inpDMDIP4");
		$inpDRMCP1 = $this->input->post("inpDRMCP1");
		$inpDRMCP2 = $this->input->post("inpDRMCP2");
		$inpDRMCP3 = $this->input->post("inpDRMCP3");
		$inpDRMCP4 = $this->input->post("inpDRMCP4");

		$data = array(
			"researchID" => $researchID,
			"session" => $session,
			"shoulderExt1" => $inpDSExt1,
			"shoulderExt2" => $inpDSExt2,
			"shoulderExt3" => $inpDSExt3,
			"shoulderExt4" => $inpDSExt4,
			"shoulderFlex1" => $inpDSFlex1,
			"shoulderFlex2" => $inpDSFlex2,
			"shoulderFlex3" => $inpDSFlex3,
			"shoulderFlex4" => $inpDSFlex4,
			"shoulderAdd1" => $inpDSAdd1,
			"shoulderAdd2" => $inpDSAdd2,
			"shoulderAdd3" => $inpDSAdd3,
			"shoulderAdd4" => $inpDSAdd4,
			"shoulderInt1" => $inpDSIntRotate1,
			"shoulderInt2" => $inpDSIntRotate2,
			"shoulderInt3" => $inpDSIntRotate3,
			"shoulderInt4" => $inpDSIntRotate4,
			"shoulderExtFlex1" => $inpDSExtRotate1,
			"shoulderExtFlex2" => $inpDSExtRotate2,
			"shoulderExtFlex3" => $inpDSExtRotate3,
			"shoulderExtFlex4" => $inpDSExtRotate4,
			"elbowExt1" => $inpDEExt1,
			"elbowExt2" => $inpDEExt2,
			"elbowExt3" => $inpDEExt3,
			"elbowExt4" => $inpDEExt4,
			"forearmPro1" => $inpDFPro1,
			"forearmPro2" => $inpDFPro2,
			"forearmPro3" => $inpDFPro3,
			"forearmPro4" => $inpDFPro4,
			"forearmSup1" => $inpDFSupi1,
			"forearmSup2" => $inpDFSupi2,
			"forearmSup3" => $inpDFSupi3,
			"forearmSup4" => $inpDFSupi4,
			"wristFlex1" => $inpDWFlex1,
			"wristFlex2" => $inpDWFlex2,
			"wristFlex3" => $inpDWFlex3,
			"wristFlex4" => $inpDWFlex4,
			"wristDorsi1" => $inpDWDorsiFlex1,
			"wristDorsi2" => $inpDWDorsiFlex2,
			"wristDorsi3" => $inpDWDorsiFlex3,
			"wristDorsi4" => $inpDWDorsiFlex4,
			"wristUlna1" => $inpDWUlna1,
			"wristUlna2" => $inpDWUlna2,
			"wristUlna3" => $inpDWUlna3,
			"wristUlna4" => $inpDWUlna4,
			"thumbMP1" => $inpDTMP1,
			"thumbMP2" => $inpDTMP2,
			"thumbMP3" => $inpDTMP3,
			"thumbMP4" => $inpDTMP4,
			"thumbIP1" => $inpDTIP1,
			"thumbIP2" => $inpDTIP2,
			"thumbIP3" => $inpDTIP3,
			"thumbIP4" => $inpDTIP4,
			"thumbCMC1" => $inpDTCMC1,
			"thumbCMC2" => $inpDTCMC2,
			"thumbCMC3" => $inpDTCMC3,
			"thumbCMC4" => $inpDTCMC4,
			"thumbPalmar1" => $inpDTPal1,
			"thumbPalmar2" => $inpDTPal2,
			"thumbPalmar3" => $inpDTPal3,
			"thumbPalmar4" => $inpDTPal4,
			"thumbOppo1" => $inpDOppo1,
			"thumbOppo2" => $inpDOppo2,
			"thumbOppo3" => $inpDOppo3,
			"thumbOppo4" => $inpDOppo4,
			"thumbBase1" => $inpDT1,
			"thumbBase2" => $inpDT2,
			"thumbBase3" => $inpDT3,
			"thumbBase4" => $inpDT4,
			"indexMCP1" => $inpDIMCP1,
			"indexMCP2" => $inpDIMCP2,
			"indexMCP3" => $inpDIMCP3,
			"indexMCP4" => $inpDIMCP4,
			"indexPIP1" => $inpDIPIP1,
			"indexPIP2" => $inpDIPIP2,
			"indexPIP3" => $inpDIPIP3,
			"indexPIP4" => $inpDIPIP4,
			"indexDIP1" => $inpDIDIP1,
			"indexDIP2" => $inpDIDIP2,
			"indexDIP3" => $inpDIDIP3,
			"indexDIP4" => $inpDIDIP4,
			"middleMCP1" => $inpDMMCP1,
			"middleMCP2" => $inpDMMCP2,
			"middleMCP3" => $inpDMMCP3,
			"middleMCP4" => $inpDMMCP4,
			"middlePIP1" => $inpDMPIP1,
			"middlePIP2" => $inpDMPIP2,
			"middlePIP3" => $inpDMPIP3,
			"middlePIP4" => $inpDMPIP4,
			"middleDIP1" => $inpDMDIP1,
			"middleDIP2" => $inpDMDIP2,
			"middleDIP3" => $inpDMDIP3,
			"middleDIP4" => $inpDMDIP4,
			"ringMCP1" => $inpDRMCP1,
			"ringMCP2" => $inpDRMCP2,
			"ringMCP3" => $inpDRMCP3,
			"ringMCP4" => $inpDRMCP4,
		);
		
		// check
		$this->db->where("researchID", $researchID);
		$this->db->where("session", $session);
		$check = $this->db->get("tbl_stroke_arom");

		$res = $check->row();

		if(isset($res)){ // kalau dah ada data researchID dgn session dalam table, update table
			$this->db->where("researchID", $researchID);
			$this->db->where("session", $session);
			$query = $this->db->update("tbl_stroke_arom", $data);
		} else {
			$query = $this->db->insert("tbl_stroke_arom", $data);
		}

		if($query){
			return 1;
		} else {
			return 0;
		}

	}

	public function process_prom($researchID, $session){

		$inpDSExt1 = $this->input->post("inpDSExt1");
		$inpDSFlex1 = $this->input->post("inpDSFlex1");
		$inpDSAdd1 = $this->input->post("inpDSAdd1");
		$inpDSIntRotate1 = $this->input->post("inpDSIntRotate1");
		$inpDSExtRotate1 = $this->input->post("inpDSExtRotate1");
		$inpDEExt1 = $this->input->post("inpDEExt1");
		$inpDFPro1 = $this->input->post("inpDFPro1");
		$inpDFSupi1 = $this->input->post("inpDFSupi1");
		$inpDWFlex1 = $this->input->post("inpDWFlex1");
		$inpDWDorsiFlex1 = $this->input->post("inpDWDorsiFlex1");
		$inpDWUlna1 = $this->input->post("inpDWUlna1");
		$inpDTMP1 = $this->input->post("inpDTMP1");
		$inpDTIP1 = $this->input->post("inpDTIP1");
		$inpDTCMC1 = $this->input->post("inpDTCMC1");
		$inpDTPal1 = $this->input->post("inpDTPal1");
		$inpDOppo1 = $this->input->post("inpDOppo1");
		$inpDT1 = $this->input->post("inpDT1");
		$inpDIMCP1 = $this->input->post("inpDIMCP1");
		$inpDIPIP1 = $this->input->post("inpDIPIP1");
		$inpDIDIP1 = $this->input->post("inpDIDIP1");
		$inpDMMCP1 = $this->input->post("inpDMMCP1");
		$inpDMPIP1 = $this->input->post("inpDMPIP1");
		$inpDMDIP1 = $this->input->post("inpDMDIP1");
		$inpDRMCP1 = $this->input->post("inpDRMCP1");

		$data = array(
			"researchID" => $researchID,
			"session" => $session,
			"shoulderExt" => $inpDSExt1,
			"shoulderFlex" => $inpDSFlex1,
			"shoulderAdd" => $inpDSAdd1,
			"shoulderInt" => $inpDSIntRotate1,
			"shoulderExtFlex" => $inpDSExtRotate1,
			"elbowExt" => $inpDEExt1,
			"forearmPro" => $inpDFPro1,
			"forearmSup" => $inpDFSupi1,
			"wristFlex" => $inpDWFlex1,
			"wristDorsi" => $inpDWDorsiFlex1,
			"wristUlna" => $inpDWUlna1,
			"thumbMP" => $inpDTMP1,
			"thumbIP" => $inpDTIP1,
			"thumbCMC" => $inpDTCMC1,
			"thumbPalmar" => $inpDTPal1,
			"thumbOppo" => $inpDOppo1,
			"thumbBase" => $inpDT1,
			"indexMCP" => $inpDIMCP1,
			"indexPIP" => $inpDIPIP1,
			"indexDIP" => $inpDIDIP1,
			"middleMCP" => $inpDMMCP1,
			"middlePIP" => $inpDMPIP1,
			"middleDIP" => $inpDMDIP1,
			"ringMCP" => $inpDRMCP1,
		);
		
		// check
		$this->db->where("researchID", $researchID);
		$this->db->where("session", $session);
		$check = $this->db->get("tbl_stroke_prom");

		$res = $check->row();

		if(isset($res)){ // kalau dah ada data researchID dgn session dalam table, update table
			$this->db->where("researchID", $researchID);
			$this->db->where("session", $session);
			$query = $this->db->update("tbl_stroke_prom", $data);
		} else {
			$query = $this->db->insert("tbl_stroke_prom", $data);
		}

		if($query){
			return 1;
		} else {
			return 0;
		}

	}

	public function process_msgarom($researchID, $session){

		$input = array(
			"researchID" => $researchID,
			"session" => $session,
			"shoulderAbd" => $this->input->post("inpSAbd"),
			"shoulderAdd" => $this->input->post("inpSAdd"),
			"shoulderFlex" => $this->input->post("inpSFlex"),
			"shoulderExt" => $this->input->post("inpSExt"),
			"elbowFlex" => $this->input->post("inpEFlex"),
			"elbowExt" => $this->input->post("inpEExt"),
			"wristFlex" => $this->input->post("inpWFlex"),
			"wristExt" => $this->input->post("inpWExt"),
			"rtHand" => $this->input->post("inpRtHand"),
			"fingerFlex" => $this->input->post("inpFFlex"),
			"fingerExt" => $this->input->post("inpFExt"),
			"ltHand" => $this->input->post("inpLtHand"),
			"rtLateral" => $this->input->post("inpLRtHand"),
			"rtPad" => $this->input->post("inpPRtHand"),
			"rt3Jaw" => $this->input->post("inp3RtHand"),
			"ltLateral" => $this->input->post("inpLLtHand"),
			"ltPad" => $this->input->post("inpPLtHand"),
			"lt3Jaw" => $this->input->post("inp3LtHand"),
			"intactSharp" => $this->input->post("inpSIntact"),
			"intactDull" => $this->input->post("inpDIntact"),
			"intactLight" => $this->input->post("inpLTIntact"),
			"intactDeep" => $this->input->post("inpDTIntact"),
			"impairedSharp" => $this->input->post("inpSImpaired"),
			"impairedDull" => $this->input->post("inpDImpaired"),
			"impairedLight" => $this->input->post("inpLTImpaired"),
			"impairedDeep" => $this->input->post("inpDTImpaired"),
			"absentSharp" => $this->input->post("inpSAbsent"),
			"absentDull" => $this->input->post("inpDAbsent"),
			"absentLight" => $this->input->post("inpLTAbsent"),
			"absentDeep" => $this->input->post("inpDTAbsent"),
			"stereognosis" => $this->input->post("txtStereognosis"),
			"hookRt" => ($this->input->post("chkRtHook")) ? 1 : 0,
			"hookLt" => ($this->input->post("chkLtHook")) ? 1 : 0,
			"lateralRt" => ($this->input->post("chkRtLateral")) ? 1 : 0,
			"lateralLt" => ($this->input->post("chkLtLateral")) ? 1 : 0,
			"tipRt" => ($this->input->post("chkRtTip")) ? 1 : 0,
			"tipLt" => ($this->input->post("chkLtTip")) ? 1 : 0,
			"cylindricalRt" => ($this->input->post("chkRtCylindrical")) ? 1 : 0,
			"cylindricalLt" => ($this->input->post("chkLtCylindrical")) ? 1 : 0,
			"padRt" => ($this->input->post("chkRtPad")) ? 1 : 0,
			"patLt" => ($this->input->post("chkLtPad")) ? 1 : 0,
			"jawRt" => ($this->input->post("chkRt3Jaw")) ? 1 : 0,
			"jawLt" => ($this->input->post("chkLt3Jaw")) ? 1 : 0,
			"sphericalRt" => ($this->input->post("chkRtSpherical")) ? 1 : 0,
			"sphericalLt" => ($this->input->post("chkLtSpherical")) ? 1 : 0,
			"otherRemarks" => ($this->input->post("txtOtherRemarks")) ? 1 : 0,
			"odemaRt" => ($this->input->post("txtOdemaRt")) ? 1 : 0,
			"odemaLt" => ($this->input->post("txtOdemaLt")) ? 1 : 0,
			"odemaRemark" => ($this->input->post("txtOdemaRemarks")) ? 1 : 0,
			"writingRt" => ($this->input->post("chkRtWriting")) ? 1 : 0,
			"writingLt" => ($this->input->post("chkLtWriting")) ? 1 : 0,
			"coinsRt" => ($this->input->post("chkRtCoins")) ? 1 : 0,
			"coinsLt" => ($this->input->post("chkLtCoins")) ? 1 : 0,
			"pinsRt" => ($this->input->post("chkRtPins")) ? 1 : 0,
			"pinsLt" => ($this->input->post("chkLtPins")) ? 1 : 0,
			"buttonRt" => ($this->input->post("chkRtButton")) ? 1 : 0,
			"buttonLt" => ($this->input->post("chkLtButton")) ? 1 : 0,
			"spoonRt" => ($this->input->post("chkRtSpoon")) ? 1 : 0,
			"spoonLt" => ($this->input->post("chkLtSpoon")) ? 1 : 0,
			"handRt" => ($this->input->post("chkRtFeeding")) ? 1 : 0,
			"handLt" => ($this->input->post("chkLtFeeding") ? 1 : 0)
		);

		$this->db->where("researchID", $researchID);
		$this->db->where("session", $session);
		$check = $this->db->get("tbl_stroke_msgarom");

		$row = $check->row();

		if(isset($row)){
			$this->db->where("researchID", $researchID);
			$this->db->where("session", $session);
			$query = $this->db->update("tbl_stroke_msgarom", $input);
		} else {
			$query = $this->db->insert("tbl_stroke_msgarom", $input);
		}

		if($query){
			return 1;
		} else {
			return 0;
		}

	}

}