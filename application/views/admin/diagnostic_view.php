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
							DIAGNOSTICS
						</div>
					</div>
				</div>
				<?php

				$slx53Desc = "";
				$slx62hDesc = "";
				$slx53 = $slx54 = $slx55 = $slx56 = $slx57 = $slx58 = $slx58a = $slx58aDesc = $slx59 = $slx60a = $slx60b = $slx60c = $slx611a = $slx611b = $slx611c = $slx612a = $slx612b = $slx612c = $slx613 = $slx614 = $slx615 = $slx616 = $slx62a = $slx62b = $slx62c = $slx62d = $slx62e = $slx62f = $slx62g = $slx62h = "";
				$approvedBy = $approvedDate = $statusApproval = "";
				$today = date("d/m/Y");

				$this->load->helper("general");

				foreach($clinical as $clinic){
					$slx53 = $clinic->diag_53;
					$slx53Desc = $clinic->diag_53Desc;
					$slx54 = $clinic->diag_54;
					$slx55 = $clinic->diag_55;
					$slx56 = $clinic->diag_56;
					$slx58 = $clinic->diag_58;
					$slx58a = $clinic->diag_58a;
					$slx58aDesc = $clinic->diag_58Desc;
					$slx59 = $clinic->diag_59;
					$slx60a = $clinic->diag_60a;
					$slx60b = $clinic->diag_60b;
					$slx60c = $clinic->diag_60c;
					$slx611a = $clinic->diag_611a;
					$slx611b = $clinic->diag_611b;
					$slx611c = $clinic->diag_611c;
					$slx612a = $clinic->diag_612a;
					$slx612b = $clinic->diag_612b;
					$slx612c = $clinic->diag_612c;
					$slx613 = $clinic->diag_613;
					$slx614 = $clinic->diag_614;
					$slx615 = $clinic->diag_615;
					$slx616 = $clinic->diag_616;
					$slx62a = $clinic->diag_62a;
					$slx62b = $clinic->diag_62b;
					$slx62c = $clinic->diag_62c;
					$slx62d = $clinic->diag_62d;
					$slx62e = $clinic->diag_62e;
					$slx62f = $clinic->diag_62f;
					$slx62g = $clinic->diag_62g;
					$slx62h = $clinic->diag_62h;
					$slx62hDesc = $clinic->diag_62hDesc;
					$submitBy = $clinic->nama_user;
					$submitDate = $clinic->saved_date;
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

				?>
				<div class="callout">
					<form action="<?php echo base_url();?>admin/page_process_diagnostic/<?php echo $action;?>/<?php echo $session;?>" method="POST">
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Subtype of stroke diagnosed</strong></label>
							</div>
							<div class="small-5 columns float-left">
								<select name="slx53" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx53=="1"){echo "SELECTED";}?>>Cerebral infarction</option>
									<option value="2" <?php if($slx53=="2"){echo "SELECTED";}?>>Intracerebral haemorrhage</option>
									<option value="3" <?php if($slx53=="3"){echo "SELECTED";}?>>Subarachnoid haemorrhage</option>
									<option value="4" <?php if($slx53=="4"){echo "SELECTED";}?>>TIA</option>
									<option value="5" <?php if($slx53=="5"){echo "SELECTED";}?>>Others</option>
									<option value="6" <?php if($slx53=="6"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-5 columns">
								<input type="text" name="inp53Desc" value="<?php echo $slx53Desc;?>" placeholder="If others, please specify">
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Diagnosis verified by</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx54" id="slx54">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx54=="1"){echo "SELECTED";}?>>Clinical diagnosis alone</option>
									<option value="2" <?php if($slx54=="2"){echo "SELECTED";}?>>Diagnosis verified with brain imaging</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Brain scan imaging used to verify diagnosis</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx55" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx55=="1"){echo "SELECTED";}?>>CT</option>
									<option value="2" <?php if($slx55=="2"){echo "SELECTED";}?>>MRI</option>
									<option value="3" <?php if($slx55=="3"){echo "SELECTED";}?>>CT & MRI</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Timing of 1st scan after onset</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx56" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx56=="1"){echo "SELECTED";}?>>Within 24hrs</option>
									<option value="2" <?php if($slx56=="2"){echo "SELECTED";}?>>Between 24hr and 7 days</option>
									<option value="3" <?php if($slx56=="3"){echo "SELECTED";}?>>Between 8 to 14 days</option>
									<option value="4" <?php if($slx56=="4"){echo "SELECTED";}?>>More than 14 days</option>
									<option value="5" <?php if($slx56=="5"){echo "SELECTED";}?>>Unknown</option>
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
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx58=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($slx58=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($slx58=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><u>If Yes</u></label>
							</div>
							<div class="small-5 columns float-left">
								<select name="slx58a" id="slx58a">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx58a=="1"){echo "SELECTED";}?>>Atrial fibrillation or flutter</option>
									<option value="2" <?php if($slx58a=="2"){echo "SELECTED";}?>>Acute coronary syndrome</option>
									<option value="3" <?php if($slx58a=="3"){echo "SELECTED";}?>>Other</option>
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
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx59=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($slx59=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($slx59=="3"){echo "SELECTED";}?>>Unknown</option>
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
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx60a=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($slx60a=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($slx60a=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">&gt; 70% stenosis</label>
							</div>
							<div class="small-10 columns">
								<select name="slx60b" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx60b=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($slx60b=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($slx60b=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">Vertebral artery abnormality</label>
							</div>
							<div class="small-10 columns">
								<select name="slx60c" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx60c=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($slx60c=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($slx60c=="3"){echo "SELECTED";}?>>Unknown</option>
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
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx611a=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($slx611a=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($slx611a=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle">L Carotid</label>
							</div>
							<div class="small-2 columns">
								<select name="slx611b" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx611b=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($slx611b=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($slx611b=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle">Vertebral</label>
							</div>
							<div class="small-2 columns">
								<select name="slx611c" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx611c=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($slx611c=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($slx611c=="3"){echo "SELECTED";}?>>Unknown</option>
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
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx612a=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($slx612a=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($slx612a=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle">Vertebral</label>
							</div>
							<div class="small-2 columns float-left">
								<select name="slx612b" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx612b=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($slx612b=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($slx612b=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle">Basilar</label>
							</div>
							<div class="small-2 columns">
								<select name="slx612c" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx612c=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($slx612c=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($slx612c=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">AVM</label>
							</div>
							<div class="small-10 columns float-left">
								<select name="slx613" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx613=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($slx613=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($slx613=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">Intracranial aneurysm</label>
							</div>
							<div class="small-10 columns float-left">
								<select name="slx614" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx614=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($slx614=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($slx614=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">Dissection</label>
							</div>
							<div class="small-10 columns float-left">
								<select name="slx615" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx615=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($slx615=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($slx615=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">Arteritis or vasculitis</label>
							</div>
							<div class="small-10 columns float-left">
								<select name="slx616" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx616=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($slx616=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($slx616=="3"){echo "SELECTED";}?>>Unknown</option>
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
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx62a=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($slx62a=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($slx62a=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">Valvular heart disease</div>
							<div class="small-10 columns">
								<select name="slx62b" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx62b=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($slx62b=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($slx62b=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">Valve vegetation</div>
							<div class="small-10 columns">
								<select name="slx62c" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx62c=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($slx62c=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($slx62c=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">Dilated ventricle or poor ventricular function</div>
							<div class="small-10 columns">
								<select name="slx62d" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx62d=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($slx62d=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($slx62d=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">Patent foreman ovale</div>
							<div class="small-10 columns">
								<select name="slx62e" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx62e=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($slx62e=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($slx62e=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">Aortic arch atheroma</div>
							<div class="small-10 columns">
								<select name="slx62f" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx62f=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($slx62f=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($slx62f=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">Atrioseptal aneurysm</div>
							<div class="small-10 columns">
								<select name="slx62g" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx62g=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($slx62g=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($slx62g=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">Prostethic valve</div>
							<div class="small-10 columns">
								<select name="slx62h" id="slx62h">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx62h=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($slx62h=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($slx62h=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-10 columns float-right">
								<input type="text" name="inp62hYes" id="inp62hYes" value="<?php echo $slx62hDesc;?>" placeholder="If yes for Prostethic valve, please specify">
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
								<input type="submit" class="button small" value="Submit" name="submitTab4">
								<input type="button" class="button small secondary" value="Back" name="back">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>