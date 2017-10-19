<div class="row">
	<div class="small-12 columns">
		<div class="row">
			<div class="small-12 columns">
				<div class="title-bar">
					<div class="title-bar-left">
						<div class="title-bar-title">
							D29 to D41
						</div>
					</div>
				</div>
				<?php

				$cli30 = $cli31 = $cli32 = $cli33 = $cli34 = $cli35 = $cli36 = $cli37a = $cli37b = $cli37c = $cli37d = $cli37e = $cli38 = $cli39 = $cli40a = $cli40a1 = $cli40a2 = $cli40b = $cli40b1 = $cli40b2 = $cli40b3 = $cli40c = $cli40d = $cli40e = $cli41 = "";
				$approvedBy = $approvedDate = $statusApproval = $stat = "";
				$slx31 = "slx31";
				$slx32 = "slx32";
				$slx34 = "slx34";
				$slx35 = "slx35";
				$slx36 = "slx36";
				$slx40bYes = "slx40bYes";
				$slx40b1 = "slx40b1";
				$slx40a1Yes = "slx40a1Yes";
				$slx40a1 = "slx40a1";
				$savedDate = date("d/m/Y");
				$savedBy = getdesc("usim_login","nama_user","id",$_SESSION['id_user']);

				$this->load->helper("general");

				foreach($clinicalD29 as $d29){

					$cli30 = $d29->cli_30;
					$cli31 = $d29->cli_31;
					$cli32 = $d29->cli_32;
					$cli33 = $d29->cli_33;
					$cli34 = $d29->cli_34;
					$cli35 = $d29->cli_35;
					$cli36 = $d29->cli_36;
					$cli37a = $d29->cli_37a;
					$cli37b = $d29->cli_37b;
					$cli37c = $d29->cli_37c;
					$cli37d = $d29->cli_37d;
					$cli37e = $d29->cli_37e;
					$cli38 = $d29->cli_38;
					$cli39 = $d29->cli_39;
					$cli40a = $d29->cli_40a;
					$cli40a1 = $d29->cli_40a1;
					$cli40a2 = $d29->cli_40a2;
					$cli40b = $d29->cli_40b;
					$cli40b1 = $d29->cli_40b1;
					$cli40b2 = $d29->cli_40b2;
					$cli40b3 = $d29->cli_40b3;
					$cli40c = $d29->cli_40c;
					$cli40d = $d29->cli_40d;
					$cli40e = $d29->cli_40e;
					$cli41 = $d29->cli_41;
					$savedBy = $d29->nama_user;
					$savedDate = $d29->saved_date;
					$approvedBy = getdesc("usim_login","nama_user","id",$d29->approval_by);
					$approvedDate = $d29->approval_date;
					$stat = $d29->approval_status;
					$statusApproval = getStatusApproval($stat);

				}

				$chk1 = $chk2 = $chk3 = $chk4 = $chk5 = "";

				foreach($pat_29 as $pat){

					if($pat->value=="1"){
						$chk1 = "checked";
					} elseif($pat->value=="2"){
						$chk2 = "checked";
					} elseif($pat->value=="3"){
						$chk3 = "checked";
					} elseif($pat->value=="4"){
						$chk4 = "checked";
					} elseif($pat->value=="5"){
						$chk5 = "checked";
					}

				}


				if($cli30==1){
					$slx31 = "";
					$slx32 = "";
				}

				if($cli33==1){
					$slx34 = "";
					$slx35 = "";
					$slx36 = "";
				}

				if($cli40a==1){
					$slx40a1Yes = "";
					$slx40a1 = "";
				}

				if($cli40b==1){
					$slx40bYes = "";
					$slx40b1 = "";
				}

				?>
				<div class="callout">
					<form action="<?php echo base_url();?>researcher/page_process_clinical2/<?php echo $action;?>/<?php echo $session;?>" method="POST">
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Presence of the following risk factors</strong></label>
							</div>
							<div class="small-5 columns">
								<input type="checkbox" name="chk29[]" <?php echo $chk1;?> value="1">&nbsp;<label for="" class="middle">Current smoker</label><br>
								<input type="checkbox" name="chk29[]" <?php echo $chk2;?> value="2">&nbsp;<label for="" class="middle">Hypertension</label><br>
								<input type="checkbox" name="chk29[]" <?php echo $chk3;?> value="3">&nbsp;<label for="" class="middle">Hypercholesterolaemia</label>
							</div>
							<div class="small-5 columns">
								<input type="checkbox" name="chk29[]" <?php echo $chk4;?> value="4">&nbsp;<label for="" class="middle">Atrial fibrillation</label><br>
								<input type="checkbox" name="chk29[]" <?php echo $chk5;?> value="5">&nbsp;<label for="" class="middle">Diabetes mellitus</label>
								<input type="hidden" name="chk29[]" value="0" checked>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Prior TIA before this event</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx30" class="slx30">
									<option value="">- Select -</option>
									<option value="1" <?php if($cli30=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($cli30=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($cli30=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row <?php echo $slx31;?>">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>How long before the current event</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx31" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($cli31=="1"){echo "SELECTED";}?>>Within the last 28 days</option>
									<option value="2" <?php if($cli31=="2"){echo "SELECTED";}?>>More than 28 days prior</option>
									<option value="3" <?php if($cli31=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row <?php echo $slx32;?>">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Prior TIA in the same territory as present neurological symptoms and signs</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx32" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($cli32=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($cli32=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($cli32=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Prior stroke before this event?</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx33" class="slx33">
									<option value="">- Select -</option>
									<option value="1" <?php if($cli33=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($cli33=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($cli33=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row <?php echo $slx34;?>">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>How long before the current event</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx34" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($cli34=="1"){echo "SELECTED";}?>>Within the last 28 days</option>
									<option value="2" <?php if($cli34=="2"){echo "SELECTED";}?>>More than 28 days prior</option>
									<option value="3" <?php if($cli34=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row <?php echo $slx35;?>">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Subtype of old stroke</strong></label>
							</div>
							<div class="small-5 columns">
								<select name="slx35" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($cli35=="1"){echo "SELECTED";}?>>Cerebral infarction</option>
									<option value="2" <?php if($cli35=="2"){echo "SELECTED";}?>>Intracerebral haemorrhage</option>
									<option value="3" <?php if($cli35=="3"){echo "SELECTED";}?>>Subarachnoid haemorrhage</option>
									<option value="4" <?php if($cli35=="4"){echo "SELECTED";}?>>Other</option>
									<option value="5" <?php if($cli35=="5"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-5 columns">
								<input type="date" name="inp35Date">
							</div>
						</div>
						<div class="row <?php echo $slx36;?>">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Prior Stroke in the same territory as present neurological symptoms and signs</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx36" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($cli36=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($cli36=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($cli36=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="small-12 columns">
								<label for="" class="middle"><strong><u>Clinical status on admission of current event</u></strong></label>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Presence of the following at onset</strong></label>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">Severe headache</label>
							</div>
							<div class="small-4 columns">
								<select name="slx37a" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($cli37a=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($cli37a=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($cli37a=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle">Vomiting</label>
							</div>
							<div class="small-4 columns">
								<select name="slx37b" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($cli37b=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($cli37b=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($cli37b=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">Seizures</label>
							</div>
							<div class="small-4 columns">
								<select name="slx37c" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($cli37c=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($cli37c=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($cli37c=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle">Focal Deficits</label>
							</div>
							<div class="small-4 columns">
								<select name="slx37d" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($cli37d=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($cli37d=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($cli37d=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">Altered consciousness or coma</label>
							</div>
							<div class="small-4 columns float-left">
								<select name="slx37e" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($cli37e=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($cli37e=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($cli37e=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Duration of this event</strong></label>
							</div>
							<div class="small-5 columns">
								<select name="slx38" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($cli38=="1"){echo "SELECTED";}?>>More than 24 hr</option>
									<option value="2" <?php if($cli38=="2"){echo "SELECTED";}?>>Until death within 24 hr</option>
									<option value="3" <?php if($cli38=="3"){echo "SELECTED";}?>>Resolved within 24hr</option>
									<option value="4" <?php if($cli38=="4"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-5 columns">
								<input type="text" placeholder="If resolve within 24hr, please specify durations {HH:mm:ss}">
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Worst level of consciousness</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx39" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($cli39=="1"){echo "SELECTED";}?>>Fully conscious</option>
									<option value="2" <?php if($cli39=="2"){echo "SELECTED";}?>>Drowsy (responds to speech)</option>
									<option value="3" <?php if($cli39=="3"){echo "SELECTED";}?>>Semi-conscious (not fully rousable)</option>
									<option value="4" <?php if($cli39=="4"){echo "SELECTED";}?>>Unconscious (responds only to pain/no response)</option>
									<option value="5" <?php if($cli39=="5"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="small-12 columns">
								<label for="" class="middle"><strong><u>Other symptoms at onset/on admission</u></strong></label>
							</div>
						</div>
						<div class="row">
							<div class="small-12 columns">
								<label for="" class="middle"><strong>Presence of the following symptoms</strong></label>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label class="">Speech disturbances</label>
							</div>
							<div class="small-10 columns">
								<select name="slx40a" class="slx40aBodoh">
									<option value="">- Select -</option>
									<option value="1" <?php if($cli40a=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($cli40a=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($cli40a=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row <?php echo $slx40a1Yes;?>">
							<div class="small-12 columns"><strong>If Yes</strong></div>
						</div>
						<div class="row <?php echo $slx40a1;?>">
							<div class="small-2 columns">
								<label for="" class="middle">Dysarthria</label>
							</div>
							<div class="small-4 columns">
								<select name="slx40a1" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($cli40a1=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($cli40a1=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($cli40a1=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle">Dysphasia</label>
							</div>
							<div class="small-4 columns">
								<select name="slx40a2" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($cli40a2=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($cli40a2=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($cli40a2=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">Visual disturbances</label>
							</div>
							<div class="small-10 columns">
								<select name="slx40b" class="slx40b">
									<option value="">- Select -</option>
									<option value="1" <?php if($cli40b=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($cli40b=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($cli40b=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row <?php echo $slx40bYes;?>">
							<div class="small-12 columns"><strong>If Yes</strong></div>
						</div>
						<div class="row <?php echo $slx40b1;?>">
							<div class="small-2 columns">
								<label for="" class="middle">Diplopia</label>
							</div>
							<div class="small-2 columns">
								<select name="slx40b1" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($cli40b1=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($cli40b1=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($cli40b1=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle">Monocular visual loss</label>
							</div>
							<div class="small-2 columns">
								<select name="slx40b2" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($cli40b2=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($cli40b2=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($cli40b2=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle">Visual field defect</label>
							</div>
							<div class="small-2 columns">
								<select name="slx40b3" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($cli40b3=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($cli40b3=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($cli40b3=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row align-middle">
							<div class="small-2 columns">Numbness, tingling or loss of feeling(face, arm or leg)</div>
							<div class="small-10 columns">
								<select name="slx40c" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($cli40c=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($cli40c=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($cli40c=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row align-middle">
							<div class="small-2 columns">Paralysis or weakness (face, arm or leg)</div>
							<div class="small-10 columns">
								<select name="slx40d" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($cli40d=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($cli40d=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($cli40d=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row align-middle">
							<div class="small-2 columns">Dizziness, vertigo, imbalance or ataxia</div>
							<div class="small-10 columns">
								<select name="slx40e" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($cli40e=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($cli40e=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($cli40e=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row align-middle">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Typical “lacunar syndrome” diagnosis was made (i.e. pure sensory, pure motor, ataxic hemiparesis, clumsy hand dysarthria, sensori-motor)?</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx41" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($cli41=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($cli41=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($cli41=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="small-2 columns">
								<label for="">Initials</label>
							</div>
							<div class="small-4 columns">
								<input type="text" readonly value="<?php echo $savedBy;?>">
							</div>
							<div class="small-2 columns">
								<label for="">Date of data entry</label>
							</div>
							<div class="small-4 columns">
								<input type="text" readonly value="<?php echo $savedDate;?>">
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Date of approval</strong></label>
							</div>
							<div class="small-2 columns">
								<input type="text" value="<?php echo $approvedDate;?>" readonly>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Approved By</strong></label>
							</div>
							<div class="small-2 columns">
								<input type="text" value="<?php echo $approvedBy;?>" readonly>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Status</strong></label>
							</div>
							<div class="small-2 columns">
								<input type="text" readonly value="<?php echo $statusApproval;?>">
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="large-12 small-12 columns text-center">
								<input type="hidden" name="hdnTab" value="panel3c">
								<input type="hidden" class="hdnURL" value="<?php echo base_url();?>">
								<input type="button" name="back_to_previous_page" value="Back" class="button small secondary">
								<?php if($stat<>1){?>
								<input type="submit" name="submit_patient_details" value="Submit" class="button small">
								<?php } ?>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>