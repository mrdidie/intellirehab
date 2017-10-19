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

				$cli42 = $cli43 = $cli43a = $cli44 = $cli44a = $cli44b = $cli44c = $cli44d = $cli45 = $cli45a = $cli45b = $cli46 = $cli47 = $cli48 = $cli48Desc = $cli49 = $cli50a = $cli50b = $cli50c = $cli50d = $cli50e = $cli50f = $cli51 = $cli51a = $cli51b = $cli51c = $cli52 = "";
				$approvedBy = $approvedDate = $statusApproval = $stat = "";
				$slx43a = "slx43a";
				$slx44Abnormal = "slx44Abnormal";
				$slx44a = "slx44a";
				$slx44c = "slx44c";
				$slx45Abnormal = "slx45Abnormal";
				$slx48Desc = "slx48Desc";
				$slx51Present = "slx51Present";
				$slx51a = "slx51a";
				$savedDate = date("d/m/Y");
				$savedBy = getdesc("usim_login","nama_user","id",$_SESSION['id_user']);

				$this->load->helper("general");

				foreach($clinicalD42 as $d42){
					$cli42 = $d42->cli_42;
					$cli43 = $d42->cli_43;
					$cli43a = $d42->cli_43a;
					$cli44 = $d42->cli_44;
					$cli44a = $d42->cli_44a;
					$cli44b = $d42->cli_44b;
					$cli44c = $d42->cli_44c;
					$cli44d = $d42->cli_44d;
					$cli45 = $d42->cli_45;
					$cli45a = $d42->cli_45a;
					$cli45b = $d42->cli_45b;
					$cli46 = $d42->cli_46;
					$cli47 = $d42->cli_47;
					$cli48 = $d42->cli_48;
					$cli48Desc = $d42->cli_48Desc;
					$cli49 = $d42->cli_49;
					$cli50a = $d42->cli_50a;
					$cli50b = $d42->cli_50b;
					$cli50c = $d42->cli_50c;
					$cli50d = $d42->cli_50d;
					$cli50e = $d42->cli_50e;
					$cli50f = $d42->cli_50f;
					$cli51 = $d42->cli_51;
					$cli51a = $d42->cli_51a;
					$cli51b = $d42->cli_51b;
					$cli51c = $d42->cli_51c;
					$cli52 = $d42->cli_52;
					$savedBy = $d42->nama_user;
					$savedDate = $d42->saved_date;
					$approvedBy = getdesc("usim_login","nama_user","id",$d42->approval_by);
					$approvedDate = $d42->approval_date;
					$stat = $d42->approval_status;
					$statusApproval = getStatusApproval($stat);
				}

				if($cli43==1){
					$slx43a = "";
				}

				if($cli44==2){
					$slx44Abnormal = "";
					$slx44a = "";
					$slx44c = "";
				}

				if($cli45){
					$slx45Abnormal = "";
				}

				if($cli48==3){
					$slx48Desc = "";
				}

				if($cli51==1){
					$slx51Present = "";
					$slx51a = "";
				}

				?>
				<div class="callout">
					<form action="<?php echo base_url();?>researcher/page_process_clinical3/<?php echo $action;?>/<?php echo $session;?>" method="POST">
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
									<option value="">- Select -</option>
									<option value="1" <?php if($cli42=="1"){echo "SELECTED";}?>>Present</option>
									<option value="2" <?php if($cli42=="2"){echo "SELECTED";}?>>Absent</option>
									<option value="3" <?php if($cli42=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Carotid bruit:</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx43" class="slx43">
									<option value="">- Select -</option>
									<option value="1" <?php if($cli43=="1"){echo "SELECTED";}?>>Present</option>
									<option value="2" <?php if($cli43=="2"){echo "SELECTED";}?>>Absent</option>
									<option value="3" <?php if($cli43=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row <?php echo $slx43a;?>">
							<div class="small-2 columns">
								<label for="" class="middle"><u>If Present:</u></label>
							</div>
							<div class="small-10 columns">
								<select name="slx43a" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($cli43a=="1"){echo "SELECTED";}?>>L carotid</option>
									<option value="2" <?php if($cli43a=="2"){echo "SELECTED";}?>>R carotid</option>
									<option value="3" <?php if($cli43a=="3"){echo "SELECTED";}?>>Bilateral</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Visual fields:</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx44" class="slx44">
									<option value="">- Select -</option>
									<option value="1" <?php if($cli44=="1"){echo "SELECTED";}?>>Normal</option>
									<option value="2" <?php if($cli44=="2"){echo "SELECTED";}?>>Abnormal</option>
									<option value="3" <?php if($cli44=="3"){echo "SELECTED";}?>>Untested</option>
									<option value="4" <?php if($cli44=="4"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row <?php echo $slx44Abnormal;?>">
							<div class="small-12 columns">
								<label for="" class="middle"><u>If Abnormal:</u></label>
							</div>
						</div>
						<div class="row <?php echo $slx44a;?>">
							<div class="small-2 columns">
								<label for="" class="middle">Monocular</label>
							</div>
							<div class="small-4 columns">
								<select name="slx44a" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($cli44a=="1"){echo "SELECTED";}?>>L</option>
									<option value="2" <?php if($cli44a=="2"){echo "SELECTED";}?>>R</option>
									<option value="3" <?php if($cli44a=="3"){echo "SELECTED";}?>>Both</option>
									<option value="4" <?php if($cli44a=="4"){echo "SELECTED";}?>>Unrelated</option>
									<option value="5" <?php if($cli44a=="5"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle">Quadrantanopia</label>
							</div>
							<div class="small-4 columns">
								<select name="slx44b" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($cli44b=="1"){echo "SELECTED";}?>>L</option>
									<option value="2" <?php if($cli44b=="2"){echo "SELECTED";}?>>R</option>
									<option value="3" <?php if($cli44b=="3"){echo "SELECTED";}?>>Both</option>
									<option value="4" <?php if($cli44b=="4"){echo "SELECTED";}?>>Unrelated</option>
									<option value="5" <?php if($cli44b=="5"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row <?php echo $slx44c;?>">
							<div class="small-2 columns">
								<label for="" class="middle">Hemianopia</label>
							</div>
							<div class="small-4 columns">
								<select name="slx44c" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($cli44c=="1"){echo "SELECTED";}?>>L</option>
									<option value="2" <?php if($cli44c=="2"){echo "SELECTED";}?>>R</option>
									<option value="3" <?php if($cli44c=="3"){echo "SELECTED";}?>>Both</option>
									<option value="4" <?php if($cli44c=="4"){echo "SELECTED";}?>>Unrelated</option>
									<option value="5" <?php if($cli44c=="5"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle">Hemineglect</label>
							</div>
							<div class="small-4 columns">
								<select name="slx44d" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($cli44d=="1"){echo "SELECTED";}?>>L</option>
									<option value="2" <?php if($cli44d=="2"){echo "SELECTED";}?>>R</option>
									<option value="3" <?php if($cli44d=="3"){echo "SELECTED";}?>>Both</option>
									<option value="4" <?php if($cli44d=="4"){echo "SELECTED";}?>>Unrelated</option>
									<option value="5" <?php if($cli44d=="5"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Extraocular movements:</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx45" class="slx45">
									<option value="">- Select -</option>
									<option value="1" <?php if($cli45=="1"){echo "SELECTED";}?>>Normal</option>
									<option value="2" <?php if($cli45=="2"){echo "SELECTED";}?>>Abnormal</option>
									<option value="3" <?php if($cli45=="3"){echo "SELECTED";}?>>Untested</option>
									<option value="4" <?php if($cli45=="4"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row <?php echo $slx45Abnormal;?>">
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
									<option value="">- Select -</option>
									<option value="1" <?php if($cli45a=="1"){echo "SELECTED";}?>>L</option>
									<option value="2" <?php if($cli45a=="2"){echo "SELECTED";}?>>R</option>
									<option value="3" <?php if($cli45a=="3"){echo "SELECTED";}?>>Both</option>
									<option value="4" <?php if($cli45a=="4"){echo "SELECTED";}?>>Unrelated</option>
									<option value="5" <?php if($cli45a=="5"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle">Cranial nerve deficit (III, IV or VI)</label>
							</div>
							<div class="small-4 columns">
								<select name="slx45b" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($cli45b=="1"){echo "SELECTED";}?>>L</option>
									<option value="2" <?php if($cli45b=="2"){echo "SELECTED";}?>>R</option>
									<option value="3" <?php if($cli45b=="3"){echo "SELECTED";}?>>Both</option>
									<option value="4" <?php if($cli45b=="4"){echo "SELECTED";}?>>Unrelated</option>
									<option value="5" <?php if($cli45b=="5"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Dysphasia:</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx46" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($cli46=="1"){echo "SELECTED";}?>>Present</option>
									<option value="2" <?php if($cli46=="2"){echo "SELECTED";}?>>Absent</option>
									<option value="3" <?php if($cli46=="3"){echo "SELECTED";}?>>Present But Unrelated</option>
									<option value="4" <?php if($cli46=="4"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Dysarthria:</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx47" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($cli47=="1"){echo "SELECTED";}?>>Present</option>
									<option value="2" <?php if($cli47=="2"){echo "SELECTED";}?>>Absent</option>
									<option value="3" <?php if($cli47=="3"){echo "SELECTED";}?>>Present But Unrelated</option>
									<option value="4" <?php if($cli47=="4"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Other hemispherical signs (apraxia; neglect):</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx48" class="slx48">
									<option value="">- Select -</option>
									<option value="1" <?php if($cli48=="1"){echo "SELECTED";}?>>Present</option>
									<option value="2" <?php if($cli48=="2"){echo "SELECTED";}?>>Absent</option>
									<option value="3" <?php if($cli48=="3"){echo "SELECTED";}?>>Present But Unrelated</option>
									<option value="4" <?php if($cli48=="4"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row <?php echo $slx48Desc;?>">
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
									<option value="">- Select -</option>
									<option value="1" <?php if($cli49=="1"){echo "SELECTED";}?>>Normal</option>
									<option value="2" <?php if($cli49=="2"){echo "SELECTED";}?>>L side (face, arm and/or leg)</option>
									<option value="3" <?php if($cli49=="3"){echo "SELECTED";}?>>R side (face, arm and/or leg)</option>
									<option value="4" <?php if($cli49=="4"){echo "SELECTED";}?>>Paraparesis</option>
									<option value="5" <?php if($cli49=="5"){echo "SELECTED";}?>>Quadraparesis</option>
									<option value="6" <?php if($cli49=="6"){echo "SELECTED";}?>>Unknown</option>
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
									<option value="">- Select -</option>
									<option value="1" <?php if($cli50a=="1"){echo "SELECTED";}?>>Normal</option>
									<option value="2" <?php if($cli50a=="2"){echo "SELECTED";}?>>Some weakness</option>
									<option value="3" <?php if($cli50a=="3"){echo "SELECTED";}?>>No movement</option>
									<option value="4" <?php if($cli50a=="4"){echo "SELECTED";}?>>Unrelated</option>
									<option value="5" <?php if($cli50a=="5"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle">Arm</label>
							</div>
							<div class="small-2 columns">
								<select name="slx50b" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($cli50b=="1"){echo "SELECTED";}?>>Normal</option>
									<option value="2" <?php if($cli50b=="2"){echo "SELECTED";}?>>Some weakness</option>
									<option value="3" <?php if($cli50b=="3"){echo "SELECTED";}?>>No movement</option>
									<option value="4" <?php if($cli50b=="4"){echo "SELECTED";}?>>Unrelated</option>
									<option value="5" <?php if($cli50b=="5"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle">Leg</label>
							</div>
							<div class="small-2 columns">
								<select name="slx50c" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($cli50c=="1"){echo "SELECTED";}?>>Normal</option>
									<option value="2" <?php if($cli50c=="2"){echo "SELECTED";}?>>Some weakness</option>
									<option value="3" <?php if($cli50c=="3"){echo "SELECTED";}?>>No movement</option>
									<option value="4" <?php if($cli50c=="4"){echo "SELECTED";}?>>Unrelated</option>
									<option value="5" <?php if($cli50c=="5"){echo "SELECTED";}?>>Unknown</option>
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
									<option value="">- Select -</option>
									<option value="1" <?php if($cli50d=="1"){echo "SELECTED";}?>>Normal</option>
									<option value="2" <?php if($cli50d=="2"){echo "SELECTED";}?>>Some weakness</option>
									<option value="3" <?php if($cli50d=="3"){echo "SELECTED";}?>>No movement</option>
									<option value="4" <?php if($cli50d=="4"){echo "SELECTED";}?>>Unrelated</option>
									<option value="5" <?php if($cli50d=="5"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle">Arm</label>
							</div>
							<div class="small-2 columns">
								<select name="slx50e" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($cli50e=="1"){echo "SELECTED";}?>>Normal</option>
									<option value="2" <?php if($cli50e=="2"){echo "SELECTED";}?>>Some weakness</option>
									<option value="3" <?php if($cli50e=="3"){echo "SELECTED";}?>>No movement</option>
									<option value="4" <?php if($cli50e=="4"){echo "SELECTED";}?>>Unrelated</option>
									<option value="5" <?php if($cli50e=="5"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle">Leg</label>
							</div>
							<div class="small-2 columns">
								<select name="slx50f" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($cli50f=="1"){echo "SELECTED";}?>>Normal</option>
									<option value="2" <?php if($cli50f=="2"){echo "SELECTED";}?>>Some weakness</option>
									<option value="3" <?php if($cli50f=="3"){echo "SELECTED";}?>>No movement</option>
									<option value="4" <?php if($cli50f=="4"){echo "SELECTED";}?>>Unrelated</option>
									<option value="5" <?php if($cli50f=="5"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Ataxia:</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx51" class="slx51">
									<option value="">- Select -</option>
									<option value="1" <?php if($cli51=="1"){echo "SELECTED";}?>>Present</option>
									<option value="2" <?php if($cli51=="2"){echo "SELECTED";}?>>Absent</option>
									<option value="3" <?php if($cli51=="3"){echo "SELECTED";}?>>Present But Unrelated</option>
									<option value="4" <?php if($cli51=="4"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row <?php echo $slx51Present;?>">
							<div class="small-12 columns">
								<label for="" class="middle"><u>If Present</u></label>
							</div>
						</div>
						<div class="row <?php echo $slx51a;?>">
							<div class="small-2 columns">
								<label for="" class="middle">L side</label>
							</div>
							<div class="small-2 columns">
								<select name="slx51a" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($cli51a=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($cli51a=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($cli51a=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle">R side</label>
							</div>
							<div class="small-2 columns">
								<select name="slx51b" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($cli51b=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($cli51b=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($cli51b=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle">Gait ataxia</label>
							</div>
							<div class="small-2 columns">
								<select name="slx51c" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($cli51c=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($cli51c=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($cli51c=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Sensory Deficits</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx52" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($cli52=="1"){echo "SELECTED";}?>>Normal</option>
									<option value="2" <?php if($cli52=="2"){echo "SELECTED";}?>>Abnormal Right</option>
									<option value="3" <?php if($cli52=="3"){echo "SELECTED";}?>>Abnormal Left</option>
									<option value="4" <?php if($cli52=="4"){echo "SELECTED";}?>>Crossed</option>
									<option value="5" <?php if($cli52=="5"){echo "SELECTED";}?>>Both Sides</option>
									<option value="6" <?php if($cli52=="6"){echo "SELECTED";}?>>Untested</option>
									<option value="7" <?php if($cli52=="7"){echo "SELECTED";}?>>Unknown</option>
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
								<input type="hidden" name="hdnTab" value="panel4c">
								<input type="button" class="button small secondary" value="Back" name="back">
								<?php if($stat<>1){?>
								<input type="submit" class="button small" value="Submit" name="submitTab3">
								<?php } ?>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>