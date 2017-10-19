<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_model extends CI_Model {

	public function profile($iduser){

		// $this->db->select("nama_user,description");
		$this->db->where("usim_login.id", $iduser);
		$this->db->from("usim_login");
		$this->db->join("tbl_role","usim_login.role_user=tbl_role.id","LEFT");
		$this->db->join("tbl_profile","usim_login.id=tbl_profile.idlogin","LEFT");
		$query = $this->db->get();

		return $query->result();

	}

	public function allRole(){

		$query = $this->db->get("tbl_role");

		return $query->result();

	}

	public function process_profile(){

		$config['upload_path']          = './images/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

		$password = $this->input->post("inpPassword");
		$newpassword = md5("time".$password."sheet");
		$name = $this->input->post("inpName");
		$idno = $this->input->post("inpIDNo");
		$role = $this->input->post("slxRole");
		$department = $this->input->post("inpDepartment");
		$email = $this->input->post("inpEmail");
		$address = $this->input->post("inpAddress");
		$address1 = $this->input->post("inpAddress1");
		$address2 = $this->input->post("inpAddress2");
		$postcode = $this->input->post("inpPostcode");
		$district = $this->input->post("inpDistrict");
		$state = $this->input->post("inpState");
		$phone = $this->input->post("inpPhoneNumber");
		$fax = $this->input->post("inpFaxNumber");
		$status = $this->input->post("activeness");
		$filesname = $_FILES["fileUpload"]["name"];
		$iduser = $_SESSION['id_user'];

		if($password<>""){
			$login = array(
				"katalaluan"=>$newpassword,
				"nama_user"=> $name,
				"role_user"=> $role,
				"dept_user"=> $department,
				"email_user"=> $email,
				"idno"=> $idno,
				"status"=> $status
			);
		} else {
			$login = array(
				"nama_user"=> $name,
				"role_user"=> $role,
				"dept_user"=> $department,
				"email_user"=> $email,
				"idno"=> $idno,
				"status"=> $status
			);
		}

		$this->db->where("id", $iduser);
		$query = $this->db->update("usim_login", $login);

		if($query){

			$this->db->where("idlogin", $iduser);
			$check = $this->db->get("tbl_profile");

			$row = $check->row();

			if(isset($row)){

				$data = array(

					"fullname"=>$name,
					"image"=>$filesname,
					"telephone_no"=>$phone,
					"fax_no"=>$fax,
					"address"=>$address,
					"address1"=>$address1,
					"address2"=>$address2,
					"postcode"=>$postcode,
					"state"=>$state,
					"district"=>$district

				);

				$this->db->where("idlogin", $iduser);
				$insert = $this->db->update("tbl_profile", $data);

			} else {

				$data = array(
					"idlogin"=>$iduser,
					"fullname"=>$name,
					"image"=>$filesname,
					"telephone_no"=>$phone,
					"fax_no"=>$fax,
					"address"=>$address,
					"address1"=>$address1,
					"address2"=>$address2,
					"postcode"=>$postcode,
					"state"=>$state,
					"district"=>$district

				);

				$insert = $this->db->insert("tbl_profile", $data);
			}
		}

		if ( ! $this->upload->do_upload('fileUpload'))
        {
                $error = array('error' => $this->upload->display_errors());

                $return = 0;
        }
        else
        {
                $data = array('upload_data' => $this->upload->data());

                $return = 1;
        }

       	return 1;

	}

}