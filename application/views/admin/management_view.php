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
							<span>Management</span>
						</div>
					</div>
				</div>
				<?php

					$slx64 = $slx65 = $slx66 = $slx67 = $slx68 = $slx69 = "";
					$approvedBy = $approvedDate = $statusApproval = "";
					$today = date("d/m/Y");

					foreach($clinical as $clinic){
						$slx64 = $clinic->mgt_64;
						$slx65 = $clinic->mgt_65;
						$slx66 = $clinic->mgt_66;
						$slx67 = $clinic->mgt_67;
						$slx68 = $clinic->mgt_68;
						$slx69 = $clinic->mgt_69;
						$submitBy = $clinic->nama_user;
						$submitDate = $clinic->saved_date;
					}

					$chk631 = $chk632 = $chk633 = $chk634 = $chk635 = $chk636 = "";
					$chk73a1 = $chk73a2 = $chk73a3 = $chk73a4 = $chk73a5 = "";
					$chk73b1 = $chk73b2 = $chk73b3 = $chk73b4 = $chk73b5 = $chk73b6 = $chk73b7 = "";
					$chk73c1 = $chk73c2 = $chk73c3 = $chk73c4 = "";
					$chk701 = $chk702 = $chk703 = $chk704 = $chk705 = $chk706 = $chk707 = $chk708 = "";
					$chk711 = $chk712 = $chk713 = $chk714 = $chk715 = "";

					foreach($pat_63 as $pat63){
						if($pat63->value=="1"){
							$chk631 = "checked";
						} elseif($pat63->value=="2"){
							$chk632 = "checked";
						} elseif($pat63->value=="3"){
							$chk633 = "checked";
						} elseif($pat63->value=="4"){
							$chk634 = "checked";
						} elseif($pat63->value=="5"){
							$chk635 = "checked";
						} elseif($pat63->value=="6"){
							$chk636 = "checked";
						}
					}

					foreach($pat_73a as $pat73a){
						if($pat73a->value=="1"){
							$chk73a1 = "checked";
						} elseif($pat73a->value=="2"){
							$chk73a2 = "checked";
						} elseif($pat73a->value=="3"){
							$chk73a3 = "checked";
						} elseif($pat73a->value=="4"){
							$chk73a4 = "checked";
						} elseif($pat73a->value=="5"){
							$chk73a5 = "checked";
						} 
					}

					foreach($pat_73b as $pat73b){
						if($pat73b->value=="1"){
							$chk73b1 = "checked";
						} elseif($pat73b->value=="2"){
							$chk73b2 = "checked";
						} elseif($pat73b->value=="3"){
							$chk73b3 = "checked";
						} elseif($pat73b->value=="4"){
							$chk73b4 = "checked";
						} elseif($pat73b->value=="5"){
							$chk73b5 = "checked";
						} elseif($pat73b->value=="6"){
							$chk73b6 = "checked";
						} elseif($pat73b->value=="7"){
							$chk73b7 = "checked";
						}
					}

					foreach($pat_73c as $pat73c){
						if($pat73c->value=="1"){
							$chk73c1 = "checked";
						} elseif($pat73c->value=="2"){
							$chk73c2 = "checked";
						} elseif($pat73c->value=="3"){
							$chk73c3 = "checked";
						} elseif($pat73c->value=="4"){
							$chk73c4 = "checked";
						} 
					}

					foreach($pat_70 as $pat70){
						if($pat70->value=="1"){
							$chk701 = "checked";
						} elseif($pat70->value=="2"){
							$chk702 = "checked";
						} elseif($pat70->value=="3"){
							$chk703 = "checked";
						} elseif($pat70->value=="4"){
							$chk704 = "checked";
						} elseif($pat70->value=="5"){
							$chk705 = "checked";
						} elseif($pat70->value=="6"){
							$chk706 = "checked";
						} elseif($pat70->value=="7"){
							$chk707 = "checked";
						} elseif($pat70->value=="8"){
							$chk708 = "checked";
						} 
					}

					foreach($pat_71 as $pat71){
						if($pat71->value=="1"){
							$chk711 = "checked";
						} elseif($pat71->value=="2"){
							$chk712 = "checked";
						} elseif($pat71->value=="3"){
							$chk713 = "checked";
						} elseif($pat71->value=="4"){
							$chk714 = "checked";
						} elseif($pat71->value=="5"){
							$chk715 = "checked";
						} 
					}

				?>
				<div class="callout">
					<form action="<?php echo base_url();?>admin/page_process_management/<?php echo $action;?>/<?php echo $session;?>" method="POST">
						<div class="row">
							<div class="small-12 columns">
								<label for="" class="middle"><strong><u>Treatment/Secondary prevention/Assessment/Complication</u></strong></label>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Patient received the following therapy</strong></label>
							</div>
							<div class="small-5 columns">
								<input type="checkbox" name="chk63[]" id="jawab63" <?php echo $chk631;?> value="1">&nbsp;<label for="" class="middle">Thrombolysis</label><br>
								<input type="checkbox" name="chk63[]" id="jawab63" <?php echo $chk632;?> value="2">&nbsp;<label for="" class="middle">Anticoagulant drug</label><br>
								<input type="checkbox" name="chk63[]" id="jawab63" <?php echo $chk633;?> value="3">&nbsp;<label for="" class="middle">Antiplatelet drugs</label><br>
							</div>
							<div class="small-5 columns">
								<input type="checkbox" name="chk63[]" id="jawab63" <?php echo $chk634;?> value="4">&nbsp;<label for="" class="middle">Cholesterol lowering drugs</label><br>
								<input type="checkbox" name="chk63[]" id="jawab63" <?php echo $chk635;?> value="5">&nbsp;<label for="" class="middle">Anti-hypertensive drugs</label><br>
								<input type="checkbox" name="chk63[]" id="jawab63" <?php echo $chk636;?> value="6">&nbsp;<label for="" class="middle">DVT prophylaxis</label>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="small-12 columns">
								<label for="" class="middle"><strong>On current admission, patient is on the following medications</strong></label>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">Anti-platelet/anti-thrombotic agent(s):</label>
							</div>
							<div class="small-10 columns">
								<input type="checkbox" name="chk73a[]" <?php echo $chk73a1;?> value="1">&nbsp;<label for="" class="middle">Aspirin</label>
								<input type="checkbox" name="chk73a[]" <?php echo $chk73a2;?> value="2">&nbsp;<label for="" class="middle">Dipyridamole MR</label>
								<input type="checkbox" name="chk73a[]" <?php echo $chk73a3;?> value="3">&nbsp;<label for="" class="middle">Clopidogrel</label>
								<input type="checkbox" name="chk73a[]" <?php echo $chk73a4;?> value="4">&nbsp;<label for="" class="middle">Warfarin/other anticoagulant</label>
								<input type="checkbox" name="chk73a[]" <?php echo $chk73a5;?> value="5">&nbsp;<label for="" class="middle">Other</label>
								<input type="text" placeholder="If Other, please specify">
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">Anti-hypertensive drugs:</label>
							</div>
							<div class="small-5 columns">
								<input type="checkbox" name="chk73b[]" <?php echo $chk73b1;?> value="1">&nbsp;<label for="" class="middle">ACE inhibitor</label><br>
								<input type="checkbox" name="chk73b[]" <?php echo $chk73b2;?> value="2">&nbsp;<label for="" class="middle">Angiotensin-II receptor blocker</label><br>
								<input type="checkbox" name="chk73b[]" <?php echo $chk73b3;?> value="3">&nbsp;<label for="" class="middle">Alpha-blocker</label><br>
								<input type="checkbox" name="chk73b[]" <?php echo $chk73b4;?> value="4">&nbsp;<label for="" class="middle">Beta-blocker</label>
							</div>
							<div class="small-5 columns">
								<input type="checkbox" name="chk73b[]" <?php echo $chk73b5;?> value="5">&nbsp;<label for="" class="middle">Calcium channel blocker</label><br>
								<input type="checkbox" name="chk73b[]" <?php echo $chk73b6;?> value="6">&nbsp;<label for="" class="middle">Thiazide diuretic</label><br>
								<input type="checkbox" name="chk73b[]" <?php echo $chk73b7;?> value="7">&nbsp;<label for="" class="middle">Other</label>
							</div>
							<div class="small-10 columns float-right">
								<input type="text" placeholder="If Other, please specify">
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">Lipid lowering drugs:</label>
							</div>
							<div class="small-10 columns">
								<input type="checkbox" name="chk73c[]" <?php echo $chk73c1;?> value="1">&nbsp;<label for="" class="middle">Anion-exchange resins</label>
								<input type="checkbox" name="chk73c[]" <?php echo $chk73c2;?> value="2">&nbsp;<label for="" class="middle">Fibrates</label>
								<input type="checkbox" name="chk73c[]" <?php echo $chk73c3;?> value="3">&nbsp;<label for="" class="middle">Statin</label>
								<input type="checkbox" name="chk73c[]" <?php echo $chk73c4;?> value="4">&nbsp;<label for="" class="middle">Other</label>
								<input type="text" placeholder="If Other, please specify">
							</div>
						</div>
						<hr class="">
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Blood pressure recorded above normal (SBP > 140; DBP > 85) on ≥ 3 occasions</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx64" id="slx64">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx64=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($slx64=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($slx64=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Swallowing assessment by SALT within 72 hours of admission</strong></label>
							</div>
							<div class="small-4 columns">
								<select name="slx65" id="slx65">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx65=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($slx65=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($slx65=="3"){echo "SELECTED";}?>>Patient still unconscious</option>
									<option value="4" <?php if($slx65=="4"){echo "SELECTED";}?>>Patient died within 72 hours</option>
									<option value="5" <?php if($slx65=="5"){echo "SELECTED";}?>>Patient on palliative care pathway</option>
									<option value="6" <?php if($slx65=="6"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Physiotherapist assessment within 72 hours of admission</strong></label>
							</div>
							<div class="small-4 columns">
								<select name="slx66" id="slx66">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx66=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($slx66=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($slx66=="3"){echo "SELECTED";}?>>Patient still unconscious</option>
									<option value="4" <?php if($slx66=="4"){echo "SELECTED";}?>>Patient died within 72 hours</option>
									<option value="5" <?php if($slx66=="5"){echo "SELECTED";}?>>Patient on palliative care pathway</option>
									<option value="6" <?php if($slx66=="6"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Nutrition/dietetic needs documented</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx67" id="slx67">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx67=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($slx67=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($slx67=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Patient was weighed at least once during admission</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx68" id="slx68">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx68=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($slx68=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($slx68=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Urinary incontinence in the 1st week</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx69" id="slx69">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($slx69=="1"){echo "SELECTED";}?>>Incontinent/catheterised</option>
									<option value="2" <?php if($slx69=="2"){echo "SELECTED";}?>>Occasional accident (max once per 24-hr)</option>
									<option value="3" <?php if($slx69=="3"){echo "SELECTED";}?>>Continent (over previous 48 hours)</option>
									<option value="4" <?php if($slx69=="4"){echo "SELECTED";}?>>Patient died within seven days</option>
									<option value="5" <?php if($slx69=="5"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Assessments in the 1st week of stroke were undertaken by member(s) of a recognised multidisciplinary stroke team:</strong></label>
							</div>
							<div class="small-5 columns">
								<input type="checkbox" name="chk70[]" <?php echo $chk701;?> value="1">&nbsp;<label for="" class="middle">Doctor</label><br>
								<input type="checkbox" name="chk70[]" <?php echo $chk702;?> value="2">&nbsp;<label for="" class="middle">Nurse</label><br>
								<input type="checkbox" name="chk70[]" <?php echo $chk703;?> value="3">&nbsp;<label for="" class="middle">Physiotherapist</label><br>
								<input type="checkbox" name="chk70[]" <?php echo $chk704;?> value="4">&nbsp;<label for="" class="middle">OT</label><br>
								<input type="checkbox" name="chk70[]" <?php echo $chk705;?> value="5">&nbsp;<label for="" class="middle">SALT</label><br>
							</div>
							<div class="small-5 columns">
								<input type="checkbox" name="chk70[]" <?php echo $chk706;?> value="6">&nbsp;<label for="" class="middle">Dietitian</label><br>
								<input type="checkbox" name="chk70[]" <?php echo $chk707;?> value="7">&nbsp;<label for="" class="middle">Social worker</label><br>
								<input type="checkbox" name="chk70[]" <?php echo $chk708;?> value="8">&nbsp;<label for="" class="middle">Other</label>
							</div>
							<div class="small-10 columns float-right">
								<input type="text" placeholder="If Other, please specify">
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>One or more of the following complications were managed</strong></label>
							</div>
							<div class="small-5 columns">
								<input type="checkbox" name="chk71[]" <?php echo $chk711;?> value="1">&nbsp;<label for="" class="middle">DVT</label><br>
								<input type="checkbox" name="chk71[]" <?php echo $chk712;?> value="2">&nbsp;<label for="" class="middle">PE</label><br>
								<input type="checkbox" name="chk71[]" <?php echo $chk713;?> value="3">&nbsp;<label for="" class="middle">Pneumonia</label><br>
							</div>
							<div class="small-5 columns">
								<input type="checkbox" name="chk71[]" <?php echo $chk714;?> value="4">&nbsp;<label for="" class="middle">UTI</label><br>
								<input type="checkbox" name="chk71[]" <?php echo $chk715;?> value="5">&nbsp;<label for="" class="middle">Other complication(s)</label>
							</div>
							<div class="small-10 columns float-right">
								<input type="text" placeholder="If Other, please specify">
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
								<input type="submit" class="button small" value="Submit" name="submitTab5">
								<input type="button" class="button small secondary" value="Back" name="back">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>