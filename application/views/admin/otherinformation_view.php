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
							Other Information
						</div>
					</div>
				</div>
				<?php

				$slx72aDesc = $slx72bDesc = $slx72cDesc = $otherInfo = "";
				$chk721 = $chk722 = $chk723 = $chk724 = $chk72a1 = $chk72a2 = $chk72a3 = $chk72a4 = $chk72a5 = $chk72b1 = $chk72b2 = $chk72b3 = $chk72b4 = $chk72b5 = $chk72b6 = $chk72b7 = $chk72c1 = $chk72c2 = $chk72c3 = $chk72c4 = ""; 
				$approvedBy = $approvedDate = $statusApproval = "";
				$today = date("d/m/Y");

				$this->load->helper("general");

				foreach($clinical as $clinic){

					$slx72aDesc = $clinic->slx72aDesc;
					$slx72aDesc = $clinic->slx72bDesc;
					$slx72cDesc = $clinic->slx72cDesc;
					$otherInfo = $clinic->otherInfo;
					$submitBy = $clinic->nama_user;
					$submitDate = $clinic->saved_date;

				}

				foreach($pat_72 as $pat72){

					if($pat72->value=="1"){
						$chk721 = "checked";
					} elseif($pat72->value=="2"){
						$chk722 = "checked";
					} elseif($pat72->value=="3"){
						$chk723 = "checked";
					} elseif($pat72->value=="4"){
						$chk724 = "checked";
					}

				}

				foreach($pat_72a as $pat72a){

					if($pat72a->value=="1"){
						$chk72a1 = "checked";
					} elseif($pat72a->value=="2"){
						$chk72a2 = "checked";
					} elseif($pat72a->value=="3"){
						$chk72a3 = "checked";
					} elseif($pat72a->value=="4"){
						$chk72a4 = "checked";
					} elseif($pat72a->value=="5"){
						$chk72a5 = "checked";
					}

				}

				foreach($pat_72b as $pat72b){

					if($pat72b->value=="1"){
						$chk72b1 = "checked";
					} elseif($pat72b->value=="2"){
						$chk72b2 = "checked";
					} elseif($pat72b->value=="3"){
						$chk72b3 = "checked";
					} elseif($pat72b->value=="4"){
						$chk72b4 = "checked";
					} elseif($pat72b->value=="5"){
						$chk72b5 = "checked";
					} elseif($pat72b->value=="6"){
						$chk72b6 = "checked";
					} elseif($pat72b->value=="7"){
						$chk72b7 = "checked";
					}

				}

				foreach($pat_72c as $pat72c){

					if($pat72c->value=="1"){
						$chk72c1 = "checked";
					} elseif($pat72c->value=="2"){
						$chk72c2 = "checked";
					} elseif($pat72c->value=="3"){
						$chk72c3 = "checked";
					} elseif($pat72c->value=="4"){
						$chk72c4 = "checked";
					} 

				}

				?>
				<div class="callout">
					<form action="<?php echo base_url();?>admin/page_process_other_information/<?php echo $action;?>/<?php echo $session;?>" method="POST">
						<div class="row">
							<div class="small-12 columns">
								<label for="" class="middle"><strong><u>Other related information</u></strong></label>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Prior to current admission, patient was on the following medications</strong></label>
							</div>
							<div class="small-10 columns">
								<input type="checkbox" name="chk72[]" <?php echo $chk721;?> id="chk72no1" value="1">&nbsp;<label for="" class="middle">Anticoagulant drug</label>
								<input type="checkbox" name="chk72[]" <?php echo $chk722;?> id="chk72no2" value="2">&nbsp;<label for="" class="middle">Antiplatelet drugs</label>
								<input type="checkbox" name="chk72[]" <?php echo $chk723;?> id="chk72no3" value="3">&nbsp;<label for="" class="middle">Cholesterol lowering drugs</label>
								<input type="checkbox" name="chk72[]" <?php echo $chk724;?> id="chk72no4" value="4">&nbsp;<label for="" class="middle">Anti-hypertensive drugs</label>
								<input type="hidden" name="chk72[]" value="0" checked>
							</div>
						</div>
						<div class="row">
							<div class="small-12 columns">
								<label for="" class="middle"><u>If yes to any of the above, please complete details below (whichever applicable):</u></label>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">Anti-platelet/anti-thrombotic agent(s):</label>
							</div>
							<div class="small-10 columns">
								<input type="checkbox" name="chk72a[]" <?php echo $chk72a1;?> value="1">&nbsp;<label for="" class="middle">Aspirin</label>
								<input type="checkbox" name="chk72a[]" <?php echo $chk72a2;?> value="2">&nbsp;<label for="" class="middle">Dipyridamole MR</label>
								<input type="checkbox" name="chk72a[]" <?php echo $chk72a3;?> value="3">&nbsp;<label for="" class="middle">Clopidogrel</label>
								<input type="checkbox" name="chk72a[]" <?php echo $chk72a4;?> value="4">&nbsp;<label for="" class="middle">Warfarin/other anticoagulant</label>
								<input type="checkbox" name="chk72a[]" <?php echo $chk72a5;?> value="5">&nbsp;<label for="" class="middle">Other</label>
								<input type="hidden" name="chk72a[]" value="0" checked>
							</div>
							<div class="small-10 columns float-right">
								<input type="text" name="inp72aDesc" value="<?php echo $slx72aDesc;?>" placeholder="If Other, please specify">
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">Anti-hypertensive drugs:</label>
							</div>
							<div class="small-5 columns">
								<input type="checkbox" name="chk72b[]" <?php echo $chk72b1;?> value="1">&nbsp;<label for="" class="middle">ACE inhibitor</label><br>
								<input type="checkbox" name="chk72b[]" <?php echo $chk72b2;?> value="2">&nbsp;<label for="" class="middle">Angiotensin-II receptor blocker</label><br>
								<input type="checkbox" name="chk72b[]" <?php echo $chk72b3;?> value="3">&nbsp;<label for="" class="middle">Alpha-blocker</label><br>
								<input type="checkbox" name="chk72b[]" <?php echo $chk72b4;?> value="4">&nbsp;<label for="" class="middle">Beta-blocker</label>
								<input type="hidden" name="chk72b[]" value="0" checked>
							</div>
							<div class="small-5 columns">
								<input type="checkbox" name="chk72b[]" <?php echo $chk72b5;?> value="5">&nbsp;<label for="" class="middle">Calcium channel blocker</label><br>
								<input type="checkbox" name="chk72b[]" <?php echo $chk72b6;?> value="6">&nbsp;<label for="" class="middle">Thiazide diuretic</label><br>
								<input type="checkbox" name="chk72b[]" <?php echo $chk72b7;?> value="7">&nbsp;<label for="" class="middle">Other</label>
							</div>
							<div class="small-10 columns float-right">
								<input type="text" name="inp72bDesc" value="<?php echo $slx72bDesc;?>" placeholder="If Other, please specify">
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">Lipid lowering drugs:</label>
							</div>
							<div class="small-10 columns">
								<input type="checkbox" name="chk72c[]" <?php echo $chk72c1;?> value="1">&nbsp;<label for="" class="middle">Anion-exchange resins</label>
								<input type="checkbox" name="chk72c[]" <?php echo $chk72c2;?> value="2">&nbsp;<label for="" class="middle">Fibrates</label>
								<input type="checkbox" name="chk72c[]" <?php echo $chk72c3;?> value="3">&nbsp;<label for="" class="middle">Statin</label>
								<input type="checkbox" name="chk72c[]" <?php echo $chk72c4;?> value="4">&nbsp;<label for="" class="middle">Other</label>
								<input type="hidden" name="chk72c[]" value="0" checked>
								<input type="text" name="inp72cDesc" value="<?php echo $slx72cDesc;?>" placeholder="If Other, please specify">
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">Any other information</label>
							</div>
							<div class="small-10 columns">
								<textarea name="txtAnyOtherInformation" id="" cols="30" rows="10"><?php echo $otherInfo;?></textarea>
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
								<input type="button" class="button small secondary" value="Back" name="back">
								<input type="submit" class="button small" value="Submit" name="submitTab5">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>