<?php

function getdesc($table,$view,$field,$item){

	$ci =& get_instance();
	$ci->load->database();	

	$sql = "SELECT $view FROM $table WHERE $field='{$item}'";
	$query = $ci->db->query($sql);
	foreach($query->result() as $row){
		return $row->$view;
	}


}

function status_approval($researchID, $session){

}

function getstatus($status){
	if($status==9){
		$return = "Active";
	} else {
		$return = "Inactive";
	}

	echo $return;
}

function therapy_part($part,$jenis){

	if($part==1){
		$keluar = "Minimum Data Set";
		$type = "min";
	} elseif($part==2){
		$keluar = "Clinical D13 to D28";
		$type = "c1";
	} elseif($part==3){
		$keluar = "Clinical D29 to D41";
		$type = "c2";
	} elseif($part==4){
		$keluar = "Clinical D42 to D52";
		$type = "c3";
	} elseif($part==5){
		$keluar = "Diagnostic";
		$type = "diag";
	} elseif($part==6){
		$keluar = "Management";
		$type = "mgt";
	} elseif($part==7){
		$keluar = "Other Information";
		$type = "info";
	}

	if($jenis==1){
		return $keluar;
	} elseif($jenis==2){
		return $type;
	}

}


function getStatusApproval($status){
	if($status==0){
		$return = "Waiting For Approval";
	} elseif($status==1){
		$return = "Approved";
	} elseif($status==2){
		$return = "Rejected";
	} elseif($status==4){
		$return = "Pending";
	} else {
		$return = "Waiting For Approval";
	}

	return $return;
}

function fmtdate($date){
	if($date<>"0000-00-00"){
		$pieces = explode("-", $date);

		return $pieces[2]."/".$pieces[1]."/".$pieces[0];
	}
}