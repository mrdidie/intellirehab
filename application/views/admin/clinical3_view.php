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
							D41 to D52
						</div>
					</div>
				</div>
				<?php

				$slx42 = $slx43 = $slx43a = $slx44 = $slx44a = $slx44b = $slx44c = $slx44d = $slx45 = $slx45a = $slx45b = $slx46 = $slx47 = $slx48 = $slx48Desc = $slx49 = $slx50a = $slx50b = $slx50c = $slx50d = $slx50e = $slx50f = $slx51 = $slx51a = $slx51b = $slx51c = $slx52 = "";
				$approvedBy = $approvedDate = $statusApproval = "";
				$today = date("d/m/Y");

				$this->load->helper("general");

				foreach($clinical as $clinic){
					$slx42 = $clinic->cli_42;
					$slx43 = $clinic->cli_43;
					$slx43a = $clinic->cli_43a;
					$slx44 = $clinic->cli_44;
					$slx44a = $clinic->cli_44a;
					$slx44b = $clinic->cli_44b;
					$slx44c = $clinic->cli_44c;
					$slx44d = $clinic->cli_44d;
					$slx45 = $clinic->cli_45;
					$slx45a = $clinic->cli_45a;
					$slx45b = $clinic->cli_45b;
					$slx46 = $clinic->cli_46;
					$slx47 = $clinic->cli_47;
					$slx48 = $clinic->cli_48;
					$slx48Desc = $clinic->cli_48Desc;
					$slx49 = $clinic->cli_49;
					$slx50a = $clinic->cli_50a;
					$slx50b = $clinic->cli_50b;
					$slx50c = $clinic->cli_50c;
					$slx50d = $clinic->cli_50d;
					$slx50e = $clinic->cli_50e;
					$slx50f = $clinic->cli_50f;
					$slx51 = $clinic->cli_51;
					$slx51a = $clinic->cli_51a;
					$slx51b = $clinic->cli_51b;
					$slx51c = $clinic->cli_51c;
					$slx52 = $clinic->cli_52;
					$submitBy = $clinic->nama_user;
					$submitDate = $clinic->saved_date;

				}

				?>
				<div class="callout">
					<form action="<?php echo base_url();?>admin/page_process_clinical3/<?php echo $action;?>/<?php echo $session;?>" method="POST">
						<div class="row">
							<div class="small-12 columns">
								<label for="" class="middle"><strong><u>Examination findings on admission:</u></strong></label>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Neck stiffness:</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx42" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx42=="1"){echo "SELECTED";}?>>Present</option>
									<option value="2" <?php if($slx42=="2"){echo "SELECTED";}?>>Absent</option>
									<option value="3" <?php if($slx42=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Carotid bruit:</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx43" class="slx43">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx43=="1"){echo "SELECTED";}?>>Present</option>
									<option value="2" <?php if($slx43=="2"){echo "SELECTED";}?>>Absent</option>
									<option value="3" <?php if($slx43=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><u>If Present:</u></label>
							</div>
							<div class="small-10 columns">
								<select name="slx43a" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx43a=="1"){echo "SELECTED";}?>>L carotid</option>
									<option value="2" <?php if($slx43a=="2"){echo "SELECTED";}?>>R carotid</option>
									<option value="3" <?php if($slx43a=="3"){echo "SELECTED";}?>>Bilateral</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Visual fields:</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx44" class="slx44">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx44=="1"){echo "SELECTED";}?>>Normal</option>
									<option value="2" <?php if($slx44=="2"){echo "SELECTED";}?>>Abnormal</option>
									<option value="3" <?php if($slx44=="3"){echo "SELECTED";}?>>Untested</option>
									<option value="4" <?php if($slx44=="4"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-12 columns">
								<label for="" class="middle"><u>If Abnormal:</u></label>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">Monocular</label>
							</div>
							<div class="small-4 columns">
								<select name="slx44a" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx44a=="1"){echo "SELECTED";}?>>L</option>
									<option value="2" <?php if($slx44a=="2"){echo "SELECTED";}?>>R</option>
									<option value="3" <?php if($slx44a=="3"){echo "SELECTED";}?>>Both</option>
									<option value="4" <?php if($slx44a=="4"){echo "SELECTED";}?>>Unrelated</option>
									<option value="5" <?php if($slx44a=="5"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle">Quadrantanopia</label>
							</div>
							<div class="small-4 columns">
								<select name="slx44b" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx44b=="1"){echo "SELECTED";}?>>L</option>
									<option value="2" <?php if($slx44b=="2"){echo "SELECTED";}?>>R</option>
									<option value="3" <?php if($slx44b=="3"){echo "SELECTED";}?>>Both</option>
									<option value="4" <?php if($slx44b=="4"){echo "SELECTED";}?>>Unrelated</option>
									<option value="5" <?php if($slx44b=="5"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">Hemianopia</label>
							</div>
							<div class="small-4 columns">
								<select name="slx44c" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx44c=="1"){echo "SELECTED";}?>>L</option>
									<option value="2" <?php if($slx44c=="2"){echo "SELECTED";}?>>R</option>
									<option value="3" <?php if($slx44c=="3"){echo "SELECTED";}?>>Both</option>
									<option value="4" <?php if($slx44c=="4"){echo "SELECTED";}?>>Unrelated</option>
									<option value="5" <?php if($slx44c=="5"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle">Hemineglect</label>
							</div>
							<div class="small-4 columns">
								<select name="slx44d" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx44d=="1"){echo "SELECTED";}?>>L</option>
									<option value="2" <?php if($slx44d=="2"){echo "SELECTED";}?>>R</option>
									<option value="3" <?php if($slx44d=="3"){echo "SELECTED";}?>>Both</option>
									<option value="4" <?php if($slx44d=="4"){echo "SELECTED";}?>>Unrelated</option>
									<option value="5" <?php if($slx44d=="5"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Extraocular movements:</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx45" class="slx45">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx45=="1"){echo "SELECTED";}?>>Normal</option>
									<option value="2" <?php if($slx45=="2"){echo "SELECTED";}?>>Abnormal</option>
									<option value="3" <?php if($slx45=="3"){echo "SELECTED";}?>>Untested</option>
									<option value="4" <?php if($slx45=="4"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-12 columns">
								<label for="" class="middle"><u>If Abnormal:</u></label>
							</div>
						</div>
						<div class="row slx45a">
							<div class="small-2 columns">
								<label for="" class="middle">Horizontal gaze palsy</label>
							</div>
							<div class="small-4 columns">
								<select name="slx45a" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx45a=="1"){echo "SELECTED";}?>>L</option>
									<option value="2" <?php if($slx45a=="2"){echo "SELECTED";}?>>R</option>
									<option value="3" <?php if($slx45a=="3"){echo "SELECTED";}?>>Both</option>
									<option value="4" <?php if($slx45a=="4"){echo "SELECTED";}?>>Unrelated</option>
									<option value="5" <?php if($slx45a=="5"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle">Cranial nerve deficit (III, IV or VI)</label>
							</div>
							<div class="small-4 columns">
								<select name="slx45b" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx45b=="1"){echo "SELECTED";}?>>L</option>
									<option value="2" <?php if($slx45b=="2"){echo "SELECTED";}?>>R</option>
									<option value="3" <?php if($slx45b=="3"){echo "SELECTED";}?>>Both</option>
									<option value="4" <?php if($slx45b=="4"){echo "SELECTED";}?>>Unrelated</option>
									<option value="5" <?php if($slx45b=="5"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Dysphasia:</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx46" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx46=="1"){echo "SELECTED";}?>>Present</option>
									<option value="2" <?php if($slx46=="2"){echo "SELECTED";}?>>Absent</option>
									<option value="3" <?php if($slx46=="3"){echo "SELECTED";}?>>Present But Unrelated</option>
									<option value="4" <?php if($slx46=="4"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Dysarthria:</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx47" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx47=="1"){echo "SELECTED";}?>>Present</option>
									<option value="2" <?php if($slx47=="2"){echo "SELECTED";}?>>Absent</option>
									<option value="3" <?php if($slx47=="3"){echo "SELECTED";}?>>Present But Unrelated</option>
									<option value="4" <?php if($slx47=="4"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Other hemispherical signs (apraxia; neglect):</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx48" class="slx48">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx48=="1"){echo "SELECTED";}?>>Present</option>
									<option value="2" <?php if($slx48=="2"){echo "SELECTED";}?>>Absent</option>
									<option value="3" <?php if($slx48=="3"){echo "SELECTED";}?>>Present But Unrelated</option>
									<option value="4" <?php if($slx48=="4"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><u>If Present, specify:</u></label>
							</div>
							<div class="small-10 columns">
								<input type="text" name="inp48Desc">
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="small-12 columns">
								<label for="" class="middle"><strong><u>Examination findings on admission</u></strong></label>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Weakness</strong></label>
							</div>
							<div class="small-10 columns float-left">
								<select name="slx49" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx49=="1"){echo "SELECTED";}?>>Normal</option>
									<option value="2" <?php if($slx49=="2"){echo "SELECTED";}?>>L side (face, arm and/or leg)</option>
									<option value="3" <?php if($slx49=="3"){echo "SELECTED";}?>>R side (face, arm and/or leg)</option>
									<option value="4" <?php if($slx49=="4"){echo "SELECTED";}?>>Paraparesis</option>
									<option value="5" <?php if($slx49=="5"){echo "SELECTED";}?>>Quadraparesis</option>
									<option value="6" <?php if($slx49=="6"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-12 columns">
								<label for="" class="middle"><strong>Clarify the related site of weakness</strong></label>
							</div>
						</div>
						<div class="row">
							<div class="small-12 columns">
								<label for="" class="middle"><u>Left:</u></label>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">Face</label>
							</div>
							<div class="small-2 columns">
								<select name="slx50a" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx50a=="1"){echo "SELECTED";}?>>Normal</option>
									<option value="2" <?php if($slx50a=="2"){echo "SELECTED";}?>>Some weakness</option>
									<option value="3" <?php if($slx50a=="3"){echo "SELECTED";}?>>No movement</option>
									<option value="4" <?php if($slx50a=="4"){echo "SELECTED";}?>>Unrelated</option>
									<option value="5" <?php if($slx50a=="5"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle">Arm</label>
							</div>
							<div class="small-2 columns">
								<select name="slx50b" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx50b=="1"){echo "SELECTED";}?>>Normal</option>
									<option value="2" <?php if($slx50b=="2"){echo "SELECTED";}?>>Some weakness</option>
									<option value="3" <?php if($slx50b=="3"){echo "SELECTED";}?>>No movement</option>
									<option value="4" <?php if($slx50b=="4"){echo "SELECTED";}?>>Unrelated</option>
									<option value="5" <?php if($slx50b=="5"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle">Leg</label>
							</div>
							<div class="small-2 columns">
								<select name="slx50c" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx50c=="1"){echo "SELECTED";}?>>Normal</option>
									<option value="2" <?php if($slx50c=="2"){echo "SELECTED";}?>>Some weakness</option>
									<option value="3" <?php if($slx50c=="3"){echo "SELECTED";}?>>No movement</option>
									<option value="4" <?php if($slx50c=="4"){echo "SELECTED";}?>>Unrelated</option>
									<option value="5" <?php if($slx50c=="5"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-12 columns">
								<label for="" class="middle"><u>Right:</u></label>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">Face</label>
							</div>
							<div class="small-2 columns">
								<select name="slx50d" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx50d=="1"){echo "SELECTED";}?>>Normal</option>
									<option value="2" <?php if($slx50d=="2"){echo "SELECTED";}?>>Some weakness</option>
									<option value="3" <?php if($slx50d=="3"){echo "SELECTED";}?>>No movement</option>
									<option value="4" <?php if($slx50d=="4"){echo "SELECTED";}?>>Unrelated</option>
									<option value="5" <?php if($slx50d=="5"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle">Arm</label>
							</div>
							<div class="small-2 columns">
								<select name="slx50e" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx50e=="1"){echo "SELECTED";}?>>Normal</option>
									<option value="2" <?php if($slx50e=="2"){echo "SELECTED";}?>>Some weakness</option>
									<option value="3" <?php if($slx50e=="3"){echo "SELECTED";}?>>No movement</option>
									<option value="4" <?php if($slx50e=="4"){echo "SELECTED";}?>>Unrelated</option>
									<option value="5" <?php if($slx50e=="5"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle">Leg</label>
							</div>
							<div class="small-2 columns">
								<select name="slx50f" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx50f=="1"){echo "SELECTED";}?>>Normal</option>
									<option value="2" <?php if($slx50f=="2"){echo "SELECTED";}?>>Some weakness</option>
									<option value="3" <?php if($slx50f=="3"){echo "SELECTED";}?>>No movement</option>
									<option value="4" <?php if($slx50f=="4"){echo "SELECTED";}?>>Unrelated</option>
									<option value="5" <?php if($slx50f=="5"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Ataxia:</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx51" class="slx51">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx51=="1"){echo "SELECTED";}?>>Present</option>
									<option value="2" <?php if($slx51=="2"){echo "SELECTED";}?>>Absent</option>
									<option value="3" <?php if($slx51=="3"){echo "SELECTED";}?>>Present But Unrelated</option>
									<option value="4" <?php if($slx51=="4"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-12 columns">
								<label for="" class="middle"><u>If Present</u></label>
							</div>
						</div>
						<div class="row slx51a">
							<div class="small-2 columns">
								<label for="" class="middle">L side</label>
							</div>
							<div class="small-2 columns">
								<select name="slx51a" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx51a=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($slx51a=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($slx51a=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle">R side</label>
							</div>
							<div class="small-2 columns">
								<select name="slx51b" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx51b=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($slx51b=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($slx51b=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle">Gait ataxia</label>
							</div>
							<div class="small-2 columns">
								<select name="slx51c" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx51c=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($slx51c=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($slx51c=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Sensory Deficits</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx52" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx52=="1"){echo "SELECTED";}?>>Normal</option>
									<option value="2" <?php if($slx52=="2"){echo "SELECTED";}?>>Abnormal Right</option>
									<option value="3" <?php if($slx52=="3"){echo "SELECTED";}?>>Abnormal Left</option>
									<option value="4" <?php if($slx52=="4"){echo "SELECTED";}?>>Crossed</option>
									<option value="5" <?php if($slx52=="5"){echo "SELECTED";}?>>Both Sides</option>
									<option value="6" <?php if($slx52=="6"){echo "SELECTED";}?>>Untested</option>
									<option value="7" <?php if($slx52=="7"){echo "SELECTED";}?>>Unknown</option>
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
								<input type="submit" class="button small" value="Submit" name="submitTab3">
								<input type="button" class="button small secondary" value="Back" name="back">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>