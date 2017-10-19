<div class="row">
	<div class="small-12 columns">
		<div class="row">
			<div class="small-12 columns">
				<div class="title-bar">
					<div class="title-bar-left">
						<div class="title-bar-title">
							DIAGNOSTICS
						</div>
					</div>
				</div>
				<?php

				$diag53Desc = "";
				$diag62hDesc = "";
				$diag53 = $diag54 = $diag55 = $diag56 = $diag57 = $diag58 = $diag58a = $diag58aDesc = $diag59 = $diag60a = $diag60b = $diag60c = $diag611a = $diag611b = $diag611c = $diag612a = $diag612b = $diag612c = $diag613 = $diag614 = $diag615 = $diag616 = $diag62a = $diag62b = $diag62c = $diag62d = $diag62e = $diag62f = $diag62g = $diag62h = "";
				$approvedBy = $approvedDate = $statusApproval = $stat = "";
				$slx55 = "slx55";
				$slx56 = "slx56";
				$slx58Yes = "slx58Yes";
				$slx62hDesc = "slx62hDesc";
				$savedDate = date("d/m/Y");
				$savedBy = getdesc("usim_login","nama_user","id",$_SESSION['id_user']);

				$this->load->helper("general");

				foreach($diagnostic as $diag){
					$diag53 = $diag->diag_53;
					$diag53Desc = $diag->diag_53Desc;
					$diag54 = $diag->diag_54;
					$diag55 = $diag->diag_55;
					$diag56 = $diag->diag_56;
					$diag58 = $diag->diag_58;
					$diag58a = $diag->diag_58a;
					$diag58aDesc = $diag->diag_58Desc;
					$diag59 = $diag->diag_59;
					$diag60a = $diag->diag_60a;
					$diag60b = $diag->diag_60b;
					$diag60c = $diag->diag_60c;
					$diag611a = $diag->diag_611a;
					$diag611b = $diag->diag_611b;
					$diag611c = $diag->diag_611c;
					$diag612a = $diag->diag_612a;
					$diag612b = $diag->diag_612b;
					$diag612c = $diag->diag_612c;
					$diag613 = $diag->diag_613;
					$diag614 = $diag->diag_614;
					$diag615 = $diag->diag_615;
					$diag616 = $diag->diag_616;
					$diag62a = $diag->diag_62a;
					$diag62b = $diag->diag_62b;
					$diag62c = $diag->diag_62c;
					$diag62d = $diag->diag_62d;
					$diag62e = $diag->diag_62e;
					$diag62f = $diag->diag_62f;
					$diag62g = $diag->diag_62g;
					$diag62h = $diag->diag_62h;
					$diag62hDesc = $diag->diag_62hDesc;
					$savedBy = $diag->nama_user;
					$savedDate = $diag->saved_date;
					$approvedBy = getdesc("usim_login","nama_user","id",$diag->approval_by);
					$approvedDate = $diag->approval_date;
					$stat = $diag->approval_status;
					$statusApproval = getStatusApproval($stat);
				}

				$chk1 = $chk2 = $chk3 = $chk4 = $chk5 = "";

				foreach($pat_57 as $diag57){

					if($diag57->value=="1"){
						$chk1 = "checked";
					} elseif($diag57->value=="2"){
						$chk2 = "checked";
					} elseif($diag57->value=="3"){
						$chk3 = "checked";
					} elseif($diag57->value=="4"){
						$chk4 = "checked";
					} elseif($diag57->value=="5"){
						$chk5 = "checked";
					}

				}

				if($diag54==2){
					$slx55 = "";
					$slx56 = "";
				}

				if($diag58==1){
					$slx58Yes = "";
				}

				if($diag62h==3){
					$slx62hDesc = "";
				}

				?>
				<div class="callout">
					<form action="<?php echo base_url();?>researcher/page_process_diagnostic/<?php echo $action;?>/<?php echo $session;?>" method="POST">
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Subtype of stroke diagnosed</strong></label>
							</div>
							<div class="small-5 columns float-left">
								<select name="slx53" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($diag53=="1"){echo "SELECTED";}?>>Cerebral infarction</option>
									<option value="2" <?php if($diag53=="2"){echo "SELECTED";}?>>Intracerebral haemorrhage</option>
									<option value="3" <?php if($diag53=="3"){echo "SELECTED";}?>>Subarachnoid haemorrhage</option>
									<option value="4" <?php if($diag53=="4"){echo "SELECTED";}?>>TIA</option>
									<option value="5" <?php if($diag53=="5"){echo "SELECTED";}?>>Others</option>
									<option value="6" <?php if($diag53=="6"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-5 columns">
								<input type="text" name="inp53Desc" value="<?php echo $diag53Desc;?>" placeholder="If others, please specify">
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Diagnosis verified by</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx54" id="slx54">
									<option value="">- Select -</option>
									<option value="1" <?php if($diag54=="1"){echo "SELECTED";}?>>Clinical diagnosis alone</option>
									<option value="2" <?php if($diag54=="2"){echo "SELECTED";}?>>Diagnosis verified with brain imaging</option>
								</select>
							</div>
						</div>
						<div class="row <?php echo $slx55;?>">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Brain scan imaging used to verify diagnosis</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx55" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($diag55=="1"){echo "SELECTED";}?>>CT</option>
									<option value="2" <?php if($diag55=="2"){echo "SELECTED";}?>>MRI</option>
									<option value="3" <?php if($diag55=="3"){echo "SELECTED";}?>>CT & MRI</option>
								</select>
							</div>
						</div>
						<div class="row <?php echo $slx56;?>">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Timing of 1st scan after onset</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx56" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($diag56=="1"){echo "SELECTED";}?>>Within 24hrs</option>
									<option value="2" <?php if($diag56=="2"){echo "SELECTED";}?>>Between 24hr and 7 days</option>
									<option value="3" <?php if($diag56=="3"){echo "SELECTED";}?>>Between 8 to 14 days</option>
									<option value="4" <?php if($diag56=="4"){echo "SELECTED";}?>>More than 14 days</option>
									<option value="5" <?php if($diag56=="5"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Other diagnostic tests performed</strong></label>
							</div>
							<div class="small-5 columns">
								<input type="checkbox" name="chk57[]" <?php echo $chk1;?> value="1">&nbsp;<label for="" class="middle">Lumbar puncture</label><br>
								<input type="checkbox" name="chk57[]" <?php echo $chk2;?> value="2">&nbsp;<label for="" class="middle">Carotid Doppler</label><br>
								<input type="checkbox" name="chk57[]" <?php echo $chk3;?> value="3">&nbsp;<label for="" class="middle">Echocardiogram (TTE/TOE)</label><br>
							</div>
							<div class="small-5 columns">
								<input type="checkbox" name="chk57[]" <?php echo $chk4;?> value="4">&nbsp;<label for="" class="middle">Angiography</label><br>
								<input type="checkbox" name="chk57[]" <?php echo $chk5;?> value="5" id="chk57Others">&nbsp;<label for="" class="middle">Other (please specify):</label><br>
								<input type="hidden" name="chk57[]" value="0" checked>
								<input type="text" name="chk57Desc" id="chk57Desc" placeholder="If Other, please specify">
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Abnormal findings on the initial ECG</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx58" id="slx58">
									<option value="">- Select -</option>
									<option value="1" <?php if($diag58=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($diag58=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($diag58=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row <?php echo $slx58Yes;?>">
							<div class="small-2 columns">
								<label for="" class="middle"><u>If Yes</u></label>
							</div>
							<div class="small-5 columns float-left">
								<select name="slx58a" id="slx58a">
									<option value="">- Select -</option>
									<option value="1" <?php if($diag58a=="1"){echo "SELECTED";}?>>Atrial fibrillation or flutter</option>
									<option value="2" <?php if($diag58a=="2"){echo "SELECTED";}?>>Acute coronary syndrome</option>
									<option value="3" <?php if($diag58a=="3"){echo "SELECTED";}?>>Other</option>
								</select>
							</div>
							<div class="small-5 columns">
								<input type="text" name="slx58aDesc" id="slx58aDesc" placeholder="If Other, please specify">
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>If lumbar puncture performed, was there evidence of haemorrhage?</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx59" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($diag59=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($diag59=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($diag59=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="small-12 columns">
								<label for="" class="middle"><strong>If Carotid Doppler performed</strong></label>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">Normal carotid or &lt; 70% stenosis</label>
							</div>
							<div class="small-10 columns">
								<select name="slx60a" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($diag60a=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($diag60a=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($diag60a=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">&gt; 70% stenosis</label>
							</div>
							<div class="small-10 columns">
								<select name="slx60b" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($diag60b=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($diag60b=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($diag60b=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">Vertebral artery abnormality</label>
							</div>
							<div class="small-10 columns">
								<select name="slx60c" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($diag60c=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($diag60c=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($diag60c=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-12 columns">
								<label for="" class="middle"><strong>If Angiogram performed (MRA, CT or conventional angiogram):</strong></label>
							</div>
						</div>
						<div class="row">
							<div class="small-12 columns">
								<label for="" class="middle">&ge; 70% stenosis or occlusion of:</label>
							</div>
						</div>
						<div class="row">
							<div class="small-12 columns">
								<label for="" class="middle"><u>Extracranial arteries</u></label>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">R Carotid</label>
							</div>
							<div class="small-2 columns">
								<select name="slx611a" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($diag611a=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($diag611a=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($diag611a=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle">L Carotid</label>
							</div>
							<div class="small-2 columns">
								<select name="slx611b" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($diag611b=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($diag611b=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($diag611b=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle">Vertebral</label>
							</div>
							<div class="small-2 columns">
								<select name="slx611c" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($diag611c=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($diag611c=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($diag611c=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-12 columns">
								<label for="" class="middle"><u>Intracranial arteries</u></label>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">Major cerebral stem (MCA, ACA, PCA)</label>
							</div>
							<div class="small-2 columns">
								<select name="slx612a" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($diag612a=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($diag612a=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($diag612a=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle">Vertebral</label>
							</div>
							<div class="small-2 columns float-left">
								<select name="slx612b" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($diag612b=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($diag612b=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($diag612b=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle">Basilar</label>
							</div>
							<div class="small-2 columns">
								<select name="slx612c" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($diag612c=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($diag612c=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($diag612c=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">AVM</label>
							</div>
							<div class="small-10 columns float-left">
								<select name="slx613" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($diag613=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($diag613=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($diag613=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">Intracranial aneurysm</label>
							</div>
							<div class="small-10 columns float-left">
								<select name="slx614" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($diag614=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($diag614=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($diag614=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">Dissection</label>
							</div>
							<div class="small-10 columns float-left">
								<select name="slx615" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($diag615=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($diag615=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($diag615=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">Arteritis or vasculitis</label>
							</div>
							<div class="small-10 columns float-left">
								<select name="slx616" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($diag616=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($diag616=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($diag616=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="small-12 columns">
								<label for="" class="middle"><strong>If TTE/TOE performed :</strong></label>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">Intracardiac thrombus</div>
							<div class="small-10 columns">
								<select name="slx62a" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($diag62a=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($diag62a=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($diag62a=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">Valvular heart disease</div>
							<div class="small-10 columns">
								<select name="slx62b" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($diag62b=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($diag62b=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($diag62b=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">Valve vegetation</div>
							<div class="small-10 columns">
								<select name="slx62c" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($diag62c=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($diag62c=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($diag62c=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">Dilated ventricle or poor ventricular function</div>
							<div class="small-10 columns">
								<select name="slx62d" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($diag62d=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($diag62d=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($diag62d=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">Patent foreman ovale</div>
							<div class="small-10 columns">
								<select name="slx62e" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($diag62e=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($diag62e=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($diag62e=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">Aortic arch atheroma</div>
							<div class="small-10 columns">
								<select name="slx62f" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($diag62f=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($diag62f=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($diag62f=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">Atrioseptal aneurysm</div>
							<div class="small-10 columns">
								<select name="slx62g" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($diag62g=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($diag62g=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($diag62g=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">Prostethic valve</div>
							<div class="small-10 columns">
								<select name="slx62h" id="slx62h">
									<option value="">- Select -</option>
									<option value="1" <?php if($diag62h=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($diag62h=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($diag62h=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row <?php echo $slx62hDesc;?>">
							<div class="small-2 columns">
								&nbsp;
							</div>
							<div class="small-10 columns">
								<input type="text" name="inp62hYes" id="inp62hYes" value="<?php echo $diag62hDesc;?>" placeholder="If yes for Prostethic valve, please specify">
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
								<input type="hidden" name="hdnTab" value="panel5c">
								<input type="button" class="button small secondary" value="Back" name="back">
								<?php if($stat<>1){?>
								<input type="submit" class="button small" value="Submit" name="submitTab4">
								<?php } ?>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>