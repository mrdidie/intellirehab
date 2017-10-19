<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function verify(){

		$username = trim($this->input->post("emailLogin"));
		$katalaluan = trim($this->input->post("passwordLogin"));
		$password = md5("usim".$katalaluan."rehab");

		$query = "SELECT * FROM usim_login WHERE katanama=? and katalaluan=? and status='9' LIMIT 1";
		$result = $this->db->query($query, array($username,$password));

		$row = $result->row();
		if(isset($row)){
			$_SESSION['id_user'] = $row->id;
			$_SESSION['nama_user'] = $row->nama_user;
			$_SESSION['role_user'] = $row->role_user;
			if($row->role_user==1 or $row->role_user==6 or $row->role_user==7 or $row->role_user==8){
				$_SESSION['gelaran'] = "DR";
			}
			$_SESSION['login'] = 1;

			$this->last_login($row->id);
			$this->update_login($row->id);

			return $row->role_user;
		} else {
			return 0;
		}

	}

	function last_login($id){

		date_default_timezone_set("Asia/Kuala_Lumpur");

		$this->db->set("last_login", date("Y-m-d H:i:s"));
		$this->db->where("id", $id);
		$query = $this->db->update("usim_login");

	}

	function update_login($id){

		date_default_timezone_set("Asia/Kuala_Lumpur");

		$data = array(
			"last_login" => date("Y-m-d H:i:s"),
			"iduser" => $id
		);

		$query = $this->db->insert("tbl_log", $data);

		$this->db->select_max("id");
		$this->db->where("iduser", $id);
		$user = $this->db->get("tbl_log");

		$row = $user->row();

		if(isset($row)){
			$_SESSION['id_login'] = $row->id;
		}

	}

}