<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar_model extends CI_Model {


	public function get_followup($year,$month, $iduser){

		$query = $this->db->select("cli_19FollowUp, pat_researchID")->from("tbl_clinicalD13_D28")->like("cli_19FollowUp","$year-$month","after")->where("saved_by", $iduser)->get();

		$cal_data = array();

		foreach($query->result() as $row){
			$cal_data[substr($row->cli_19FollowUp,8,2)] = $row->pat_researchID;
		}

		return $cal_data;

	}

	public function generate($iduser){

		date_default_timezone_set("Asia/Kuala_Lumpur");

		$kulit['template'] = '

        {table_open}<table border="0" cellpadding="0" cellspacing="0" class="calendar">{/table_open}

        {heading_row_start}<tr>{/heading_row_start}

        {heading_previous_cell}<th><a href="{previous_url}">&lt;&lt;</a></th>{/heading_previous_cell}
        {heading_title_cell}<th colspan="{colspan}">{heading}</th>{/heading_title_cell}
        {heading_next_cell}<th><a href="{next_url}">&gt;&gt;</a></th>{/heading_next_cell}

        {heading_row_end}</tr>{/heading_row_end}

        {week_row_start}<tr>{/week_row_start}
        {week_day_cell}<td>{week_day}</td>{/week_day_cell}
        {week_row_end}</tr>{/week_row_end}

        {cal_row_start}<tr class="days">{/cal_row_start}
        {cal_cell_start}<td>{/cal_cell_start}
        {cal_cell_start_today}<td>{/cal_cell_start_today}
        {cal_cell_start_other}<td class="other-month">{/cal_cell_start_other}

        {cal_cell_content}{day}<br/><span style="border-bottom:1px solid #222;">{content}</span>{/cal_cell_content}
        {cal_cell_content_today}<div class="highlight">{day}</div><a href="researcher/follow_up">{content}</span>{/cal_cell_content_today}

        {cal_cell_no_content}{day}{/cal_cell_no_content}
        {cal_cell_no_content_today}<div class="highlight">{day}</div>{/cal_cell_no_content_today}

        {cal_cell_blank}&nbsp;{/cal_cell_blank}

        {cal_cell_other}{day}{/cal_cel_other}

        {cal_cell_end}</td>{/cal_cell_end}
        {cal_cell_end_today}</td>{/cal_cell_end_today}
        {cal_cell_end_other}</td>{/cal_cell_end_other}
        {cal_row_end}</tr>{/cal_row_end}

        {table_close}</table>{/table_close}';

        $this->load->library('calendar', $kulit);

		$year = date("Y");
		$month = date("m");

		// die($month);

		$prefs = $this->get_followup($year,$month,$iduser);


		return $this->calendar->generate($year, $month, $prefs);

	}

	public function schedule($iduser){

		return "No new information for today.";

	}

	public function submit_approval($iduser,$jenis){

		$this->db->where("saved_by", $iduser);
		$query = $this->db->get("tbl_for_notification");

		$amount_dah_hantar = $query->num_rows();

		$jumlah_pesakit = $this->kira_patient_semua($iduser);

		$amount_semua = $jumlah_pesakit * 7;

		if($jenis==1){ // dah submit
			$baki = $amount_dah_hantar;
		} elseif($jenis==2) {
			$baki = $amount_semua - $amount_dah_hantar;
		}

		return $baki;

	}

	public function kira_patient_semua($iduser){

		$this->db->where("doctor_who", $iduser);
		$query = $this->db->get("tbl_patient_information");

		return $query->num_rows();
	}

}



