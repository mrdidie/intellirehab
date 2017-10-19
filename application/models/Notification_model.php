<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notification_model extends CI_Model {

	public function kira_approval(){

		$query = "SELECT COUNT(*) as total FROM tbl_for_notification GROUP BY session";

		$result = $query->num_rows();

		return $result;

	}

	public function allNotification(){

		$this->db->select("tbl_for_notification.pat_researchID,part, tbl_for_notification.session, usim_login.nama_user");
		$this->db->from("tbl_for_notification");
		$this->db->join("usim_login","tbl_for_notification.saved_by=usim_login.id","LEFT");
		$query = $this->db->get();

		return $query->result();

	}

}