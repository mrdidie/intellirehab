<script>
	$(document).ready(function(){
		$("input[type='text']").prop("readonly", true);
		$("input[type='date']").prop("readonly", true);
		$("input[type='checkbox']").prop("disabled", true);
		$("select").prop("disabled", true);
	});
</script>
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

				$slx30 = $slx31 = $slx32 = $slx33 = $slx34 = $slx35 = $slx36 = $slx37a = $slx37b = $slx37c = $slx37d = $slx37e = $slx38 = $slx39 = $slx40a = $slx40a1 = $slx40a2 = $slx40b = $slx40b1 = $slx40b2 = $slx40b3 = $slx40c = $slx40d = $slx40e = $slx41 = "";
				$approvedBy = $approvedDate = $statusApproval = "";
				$today = date("d/m/Y");

				$this->load->helper("general");

				foreach($clinical as $clinic){

					$slx30 = $clinic->cli_30;
					$slx31 = $clinic->cli_31;
					$slx32 = $clinic->cli_32;
					$slx33 = $clinic->cli_33;
					$slx34 = $clinic->cli_34;
					$slx35 = $clinic->cli_35;
					$slx36 = $clinic->cli_36;
					$slx37a = $clinic->cli_37a;
					$slx37b = $clinic->cli_37b;
					$slx37c = $clinic->cli_37c;
					$slx37d = $clinic->cli_37d;
					$slx37e = $clinic->cli_37e;
					$slx38 = $clinic->cli_38;
					$slx39 = $clinic->cli_39;
					$slx40a = $clinic->cli_40a;
					$slx40a1 = $clinic->cli_40a1;
					$slx40a2 = $clinic->cli_40a2;
					$slx40b = $clinic->cli_40b;
					$slx40b1 = $clinic->cli_40b1;
					$slx40b2 = $clinic->cli_40b2;
					$slx40b3 = $clinic->cli_40b3;
					$slx40c = $clinic->cli_40c;
					$slx40d = $clinic->cli_40d;
					$slx40e = $clinic->cli_40e;
					$slx41 = $clinic->cli_41;
					$submitBy = $clinic->nama_user;
					$submitDate = $clinic->saved_date;

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

				?>
				<div class="callout">
					<form action="<?php echo base_url();?>admin/page_process_clinical2/<?php echo $action;?>/<?php echo $session;?>" method="POST">
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
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Prior TIA before this event</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx30" class="slx30">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx30=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($slx30=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($slx30=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>How long before the current event</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx31" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx31=="1"){echo "SELECTED";}?>>Within the last 28 days</option>
									<option value="2" <?php if($slx31=="2"){echo "SELECTED";}?>>More than 28 days prior</option>
									<option value="3" <?php if($slx31=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Prior TIA in the same territory as present neurological symptoms and signs</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx32" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx32=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($slx32=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($slx32=="3"){echo "SELECTED";}?>>Unknown</option>
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
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx33=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($slx33=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($slx33=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>How long before the current event</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx34" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx34=="1"){echo "SELECTED";}?>>Within the last 28 days</option>
									<option value="2" <?php if($slx34=="2"){echo "SELECTED";}?>>More than 28 days prior</option>
									<option value="3" <?php if($slx34=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Subtype of old stroke</strong></label>
							</div>
							<div class="small-5 columns">
								<select name="slx35" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx35=="1"){echo "SELECTED";}?>>Cerebral infarction</option>
									<option value="2" <?php if($slx35=="2"){echo "SELECTED";}?>>Intracerebral haemorrhage</option>
									<option value="3" <?php if($slx35=="3"){echo "SELECTED";}?>>Subarachnoid haemorrhage</option>
									<option value="4" <?php if($slx35=="4"){echo "SELECTED";}?>>Other</option>
									<option value="5" <?php if($slx35=="5"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-5 columns">
								<input type="date" name="inp35Date">
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Prior Stroke in the same territory as present neurological symptoms and signs</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx36" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx36=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($slx36=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($slx36=="3"){echo "SELECTED";}?>>Unknown</option>
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
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx37a=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($slx37a=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($slx37a=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle">Vomiting</label>
							</div>
							<div class="small-4 columns">
								<select name="slx37b" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx37b=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($slx37b=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($slx37b=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">Seizures</label>
							</div>
							<div class="small-4 columns">
								<select name="slx37c" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx37c=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($slx37c=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($slx37c=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle">Focal Deficits</label>
							</div>
							<div class="small-4 columns">
								<select name="slx37d" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx37d=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($slx37d=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($slx37d=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">Altered consciousness or coma</label>
							</div>
							<div class="small-4 columns float-left">
								<select name="slx37e" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx37e=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($slx37e=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($slx37e=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Duration of this event</strong></label>
							</div>
							<div class="small-5 columns">
								<select name="slx38" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx38=="1"){echo "SELECTED";}?>>More than 24 hr</option>
									<option value="2" <?php if($slx38=="2"){echo "SELECTED";}?>>Until death within 24 hr</option>
									<option value="3" <?php if($slx38=="3"){echo "SELECTED";}?>>Resolved within 24hr</option>
									<option value="4" <?php if($slx38=="4"){echo "SELECTED";}?>>Unknown</option>
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
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx39=="1"){echo "SELECTED";}?>>Fully conscious</option>
									<option value="2" <?php if($slx39=="2"){echo "SELECTED";}?>>Drowsy (responds to speech)</option>
									<option value="3" <?php if($slx39=="3"){echo "SELECTED";}?>>Semi-conscious (not fully rousable)</option>
									<option value="4" <?php if($slx39=="4"){echo "SELECTED";}?>>Unconscious (responds only to pain/no response)</option>
									<option value="5" <?php if($slx39=="5"){echo "SELECTED";}?>>Unknown</option>
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
							<div class="small-2 columns">Speech disturbances</div>
							<div class="small-10 columns">
								<select name="slx40a" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx40a=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($slx40a=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($slx40a=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-12 columns"><strong>If Yes</strong></div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">Dysarthria</label>
							</div>
							<div class="small-2 columns">
								<select name="slx40a1" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx40a1=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($slx40a1=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($slx40a1=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle">Dysphasia</label>
							</div>
							<div class="small-2 columns">
								<select name="slx40a2" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx40a2=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($slx40a2=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($slx40a2=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle">Visual disturbances</label>
							</div>
							<div class="small-2 columns">
								<select name="slx40b" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx40b=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($slx40b=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($slx40b=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-12 columns"><strong>If Yes</strong></div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">Diplopia</label>
							</div>
							<div class="small-2 columns">
								<select name="slx40b1" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx40b1=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($slx40b1=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($slx40b1=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle">Monocular visual loss</label>
							</div>
							<div class="small-2 columns">
								<select name="slx40b2" id="">
									<option value="">- CHOOSE -</option>
									<option value="1">Yes</option>
									<option value="2">No</option>
									<option value="3">Unknown</option>
								</select>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle">Visual field defect</label>
							</div>
							<div class="small-2 columns">
								<select name="slx40b3" id="">
									<option value="">- CHOOSE -</option>
									<option value="1">Yes</option>
									<option value="2">No</option>
									<option value="3">Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">Numbness, tingling or loss of feeling(face, arm or leg)</div>
							<div class="small-10 columns">
								<select name="slx40c" id="">
									<option value="">- CHOOSE -</option>
									<option value="1">Yes</option>
									<option value="2">No</option>
									<option value="3">Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">Paralysis or weakness (face, arm or leg)</div>
							<div class="small-10 columns">
								<select name="slx40d" id="">
									<option value="">- CHOOSE -</option>
									<option value="1">Yes</option>
									<option value="2">No</option>
									<option value="3">Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">Dizziness, vertigo, imbalance or ataxia</div>
							<div class="small-10 columns">
								<select name="slx40e" id="">
									<option value="">- CHOOSE -</option>
									<option value="1">Yes</option>
									<option value="2">No</option>
									<option value="3">Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Typical “lacunar syndrome” diagnosis was made (i.e. pure sensory, pure motor, ataxic hemiparesis, clumsy hand dysarthria, sensori-motor)?</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx41" id="">
									<option value="">- CHOOSE -</option>
									<option value="1">Yes</option>
									<option value="2">No</option>
									<option value="3">Unknown</option>
								</select>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">Submitted By</label>
							</div>
							<div class="small-4 columns">
								<input type="text" readonly value="<?php echo $submitBy;?>">
							</div>
							<div class="small-2 columns">
								<label for="" class="middle">Submitted Date</label>
							</div>
							<div class="small-4 columns">
								<input type="text" readonly value="<?php echo $submitDate;?>">
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">Approval</label>
							</div>
							<div class="small-10 columns">
								<input type="radio" name="rdoApproval" value="1" checked>&nbsp;<label for="" class="middle">Approve</label>
								<input type="radio" name="rdoApproval" value="2" >&nbsp;<label for="" class="middle">Reject</label>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">Approval By</label>
							</div>
							<div class="small-4 columns">
								<input type="text" name="inpApprovalBy" value="<?php echo $_SESSION['nama_user'];?>">
								<input type="hidden" name="hdnApprovalID" value="<?php echo $_SESSION['id_user'];?>">
							</div>
							<div class="small-2 columns">
								<label for="" class="middle">Approval Date</label>
							</div>
							<div class="small-4 columns">
								<input type="text" name="inpApprovalDate" value="<?php echo $today;?>">
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="large-12 small-12 columns text-center">
								<input type="hidden" class="hdnURL" value="<?php echo base_url();?>">
								<input type="button" name="back_to_previous_page" value="Back" class="button small secondary">
								<input type="submit" name="submit_patient_details" value="Submit" class="button small">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>