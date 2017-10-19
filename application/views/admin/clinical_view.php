<script>
	$(document).ready(function(){
		$("input[type='text']").prop("readonly", true);
		$("input[type='date']").prop("readonly", true);
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
							Clinical D13 to D28
						</div>
					</div>
				</div>
				<div class="callout">
					<form action="<?php echo base_url();?>admin/page_process_clinical1/<?php echo $action;?>/<?php echo $session;?>" method="POST">
						<?php 

						$cli18 = $cli19 = $cli20 = $cli21 = "";
						$cli13 = $cli14 = $cli15 = $cli16 = $cli17 = $cli18 = $cli19 = $cli19FollowUp = $cli20 = $cli21 = $cli22 = $cli24 = $cli25 = $cli26 = $bowel = $feeding = $bladder = $dressing = $grooming = $mobility = $toilet = $transfer = $bathing = $stairs = $cli27 = $cli27a = $cli27b = $cli27c = $cli28a = $cli28b = $cli28c = "";
						$approvedBy = $approvedDate = $statusApproval = "";
						$today = date("d/m/Y");

						$this->load->helper("general");

						foreach($clinical as $clinic){
							$cli13 = $clinic->cli_13;
							$cli14 = $clinic->cli_14;
							$cli15 = $clinic->cli_15;
							$cli16 = $clinic->cli_16;
							$cli17 = $clinic->cli_17;
							$cli18 = $clinic->cli_18;
							$cli19 = $clinic->cli_19;
							$cli20 = $clinic->cli_20;
							$cli21 = $clinic->cli_21;
							$cli22 = $clinic->cli_22;
							$cli24 = $clinic->cli_24;
							$cli25 = $clinic->cli_25;
							$cli26 = $clinic->cli_26;
							$bowel = $clinic->cli_BarthelBowel;
							$feeding = $clinic->cli_BarthelFeeding;
							$bladder = $clinic->cli_BarthelBladder;
							$dressing = $clinic->cli_BarthelDressing;
							$grooming = $clinic->cli_BarthelGrooming;
							$mobility = $clinic->cli_BarthelMobility;
							$toilet = $clinic->cli_BarthelToilet;
							$transfer = $clinic->cli_BarthelTransfer; 
							$bathing = $clinic->cli_BarthelBathing;
							$stairs = $clinic->cli_BarthelStairs;
							$cli27 = $clinic->cli_27;
							$cli27a = $clinic->cli_27a;
							$cli27b = $clinic->cli_27b;
							$cli27c = $clinic->cli_27c;
							$cli28a = $clinic->cli_28a;
							$cli28b = $clinic->cli_28b;
							$cli28c = $clinic->cli_28c;
							$submitBy = $clinic->nama_user;
							$submitDate = $clinic->saved_date;
						}

						?>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Handedness</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx13" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($cli13=="1"){echo "SELECTED";}?>>Right</option>
									<option value="2" <?php if($cli13=="2"){echo "SELECTED";}?>>Left</option>
									<option value="3" <?php if($cli13=="3"){echo "SELECTED";}?>>Ambidextrous</option>
									<option value="4" <?php if($cli13=="4"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Flu Vaccination</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx14" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($cli14=="1"){echo "SELECTED";} ?>>Yes</option>
									<option value="2" <?php if($cli14=="2"){echo "SELECTED";} ?>>No</option>
									<option value="3" <?php if($cli14=="3"){echo "SELECTED";} ?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row"> 
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Did the event occur whilst hospital admission for a different reason</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx15" class="slx15">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($cli15=="1"){echo "SELECTED";} ?>>Yes</option>
									<option value="2" <?php if($cli15=="2"){echo "SELECTED";} ?>>No</option>
									<option value="3" <?php if($cli15=="3"){echo "SELECTED";} ?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row"> 
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Did the event occur in a setting of a procedure?</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx16" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($cli16=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($cli16=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($cli16=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row"> 
							<div class="small-2 columns">
								<label for="" class="middle"><strong>If Yes: what was the procedure</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx17" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($cli17=="1"){echo "SELECTED";}?>>Carotid endarterectomy</option>
									<option value="2" <?php if($cli17=="2"){echo "SELECTED";}?>>Cardiac surgery</option>
									<option value="3" <?php if($cli17=="3"){echo "SELECTED";}?>>Angiogram</option>
									<option value="4" <?php if($cli17=="4"){echo "SELECTED";}?>>Other</option>
								</select>
								<input type="text" placeholder="If Other, please specify">
							</div>
						</div>
						<div class="row"> 
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Date of symptoms onset</strong></label>
							</div>
							<div class="small-4 columns float-left">
								<input type="date" name="inpDate18" value="<?php echo $cli18;?>">
							</div>
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Date of admission</strong></label>
							</div>
							<div class="small-4 columns float-left">
								<input type="date" name="inpDate19" value="<?php echo $cli19;?>">
							</div>
						</div>
						<div class="row"> 
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Date of discharge</strong></label>
							</div>
							<div class="small-4 columns float-left">
								<input type="date" name="inpDate20" value="<?php echo $cli20;?>">
							</div>
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Date of death</strong></label>
							</div>
							<div class="small-4 columns float-left">
								<input type="date" name="inpDate21" value="<?php echo $cli21;?>">
							</div>
						</div>
						<div class="row"> 
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Time of onset of symptoms known</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx22" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($cli22=="1"){ echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($cli22=="2"){ echo "SELECTED";}?>>No, woke up from sleep with deficits</option>
									<option value="3" <?php if($cli22=="3"){ echo "SELECTED";}?>>No, patient was found with deficits</option>
									<option value="4" <?php if($cli22=="4"){ echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<?php

							$chk1 = $chk2 = $chk3 = $chk4 = $chk5 = $chk6 = $chk7 = "";

							foreach($pat_23 as $pat){
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
								} elseif($pat->value=="6"){
									$chk6 = "checked";
								} elseif($pat->value=="7"){
									$chk7 = "checked";
								}
							}

						?>
						<div class="row"> 
							<div class="small-2 columns">
								<label for="" class="middle"><strong>The ward where patient received care</strong></label>
							</div>
							<div class="small-5 large-5 columns" style="text-align:justify;">
								<input type="checkbox" name="chk23[]" <?php echo $chk1;?> value="1">&nbsp;<label for="" class="middle">Stroke Unit</label><br>
								<input type="checkbox" name="chk23[]" <?php echo $chk2;?> value="2">&nbsp;<label for="" class="middle">General Medical ward</label><br>
								<input type="checkbox" name="chk23[]" <?php echo $chk3;?> value="3">&nbsp;<label for="" class="middle">Neurology or Neurosurgery ward</label><br>
								<input type="checkbox" name="chk23[]" <?php echo $chk4;?> value="4">&nbsp;<label for="" class="middle">Intensive Care Unit</label><br>
							</div>
							<div class="small-5 columns">
								<input type="checkbox" name="chk23[]" <?php echo $chk5;?> value="5">&nbsp;<label for="" class="middle">Rehabilitation Unit</label><br>
								<input type="checkbox" name="chk23[]" <?php echo $chk6;?> value="6">&nbsp;<label for="" class="middle">Other</label><br>
								<input type="checkbox" name="chk23[]" <?php echo $chk7;?> value="7">&nbsp;<label for="" class="middle">Unknown</label>
							</div>
						</div>
						<hr>
						<div class="row"> 
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Pre-event living accommodation</strong></label>
							</div>
							<div class="small-4 columns">
								<select name="slx24" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($cli24=="1"){echo "SELECTED";}?>>Independent housing</option>
									<option value="2" <?php if($cli24=="2"){echo "SELECTED";}?>>Warden controlled</option>
									<option value="3" <?php if($cli24=="3"){echo "SELECTED";}?>>Residential/nursing home</option>
									<option value="4" <?php if($cli24=="4"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle"><strong>(Pre-event) If living at home</strong></label>
							</div>
							<div class="small-4 columns">
								<select name="slx25" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($cli25=="1"){echo "SELECTED";}?>>Lives alone</option>
									<option value="2" <?php if($cli25=="2"){echo "SELECTED";}?>>Lives with spouse/partner/carer</option>
								</select>
							</div>
						</div>
						<div class="row"> 
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Pre-event living functional status <i>Modified Rankin score (select one)</i></strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx26" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($cli26=="1"){echo "SELECTED";}?>>No symptoms at all</option>
									<option value="2" <?php if($cli26=="2"){echo "SELECTED";}?>>No significant disability despite symptoms</option>
									<option value="3" <?php if($cli26=="3"){echo "SELECTED";}?>>Slight disability</option>
									<option value="4" <?php if($cli26=="4"){echo "SELECTED";}?>>Moderate disability but able to walk unaided</option>
									<option value="5" <?php if($cli26=="5"){echo "SELECTED";}?>>Moderate disability but unable to walk without assistance</option>
									<option value="6" <?php if($cli26=="6"){echo "SELECTED";}?>>Severe disability</option>
									<option value="7" <?php if($cli26=="7"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-12 columns">
								<label for="" class="middle"><strong>Barthel’s ADL index score <i class="fa fa-question-circle" aria-hidden="true"></i></strong></label>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns text-left">
								<label for="" class="middle">Bowel</label>
							</div>
							<div class="small-4 columns text-center">
								<select name="slxBarthelBowel" id="">
									<option value="">- CHOOSE-</option>
									<option value="0" <?php if($bowel=="0"){echo "SELECTED";}?>>Incontinent (or needs to be given enemata)</option>
									<option value="1" <?php if($bowel=="1"){echo "SELECTED";}?>>Occasional accident (once/week)</option>
									<option value="2" <?php if($bowel=="2"){echo "SELECTED";}?>>Continent</option>
								</select>
							</div>
							<div class="small-2 columns text-left">
								<label for="" class="middle">Feeding</label>
							</div>
							<div class="small-4 columns text-center">
								<select name="slxBarthelFeeding" id="">
									<option value="">- CHOOSE-</option>
									<option value="0" <?php if($feeding=="0"){echo "SELECTED";}?>>Unable/dependent</option>
									<option value="1" <?php if($feeding=="1"){echo "SELECTED";}?>>Needs help (e.g. food cutting)</option>
									<option value="2" <?php if($feeding=="2"){echo "SELECTED";}?>>Independent (food in reach)</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns text-left">
								<label for="" class="middle">Bladder</label>
							</div>
							<div class="small-4 columns text-center">
								<select name="slxBarthelBladder" id="">
									<option value="">- CHOOSE-</option>
									<option value="0" <?php if($bladder=="0"){echo "SELECTED";}?>>Incontinent or catheterized</option>
									<option value="1" <?php if($bladder=="1"){echo "SELECTED";}?>>Occasional accident (max once per 24 hours)</option>
									<option value="2" <?php if($bladder=="2"){echo "SELECTED";}?>>Continent</option>
								</select>
							</div>
							<div class="small-2 columns text-left">
								<label for="" class="middle">Dressing</label>
							</div>
							<div class="small-4 columns text-center">
								<select name="slxBarthelDressing" id="">
									<option value="">- CHOOSE-</option>
									<option value="0" <?php if($dressing=="0"){echo "SELECTED";}?>>Dependent</option>
									<option value="1" <?php if($dressing=="1"){echo "SELECTED";}?>>Need helps, can do half unaided</option>
									<option value="2" <?php if($dressing=="2"){echo "SELECTED";}?>>Independent (including buttons, zips, laces, etc)</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns text-left">
								<label for="" class="middle">Grooming</label>
							</div>
							<div class="small-4 columns text-center">
								<select name="slxBarthelGrooming" id="">
									<option value="">- CHOOSE-</option>
									<option value="0" <?php if($grooming=="0"){echo "SELECTED";}?>>Needs help with personal care</option>
									<option value="1" <?php if($grooming=="1"){echo "SELECTED";}?>>Independent (hair/face/teeth/shaving)</option>
									<!-- <option value="2">Continent</option> -->
								</select>
							</div>
							<div class="small-2 columns text-left">
								<label for="" class="middle">Mobility</label>
							</div>
							<div class="small-4 columns text-center">
								<select name="slxBarthelMobility" id="">
									<option value="">- CHOOSE-</option>
									<option value="0" <?php if($mobility=="0"){echo "SELECTED";}?>>Immobile</option>
									<option value="1" <?php if($mobility=="1"){echo "SELECTED";}?>>Wheelchair independent including corners etc</option>
									<option value="2" <?php if($mobility=="2"){echo "SELECTED";}?>>Walks with help of one person (verbal or physical)</option>
									<option value="3" <?php if($mobility=="3"){echo "SELECTED";}?>>Independent (may use stick, etc)</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns text-left">
								<label for="" class="middle">Toilet Use</label>
							</div>
							<div class="small-4 columns text-center">
								<select name="slxBarthelToilet" id="">
									<option value="">- CHOOSE-</option>
									<option value="0" <?php if($toilet=="0"){echo "SELECTED";}?>>Dependent</option>
									<option value="1" <?php if($toilet=="1"){echo "SELECTED";}?>>Needs some help, can do something alone</option>
									<option value="2" <?php if($toilet=="2"){echo "SELECTED";}?>>Independent (on and off, wiping/dressing)</option>
								</select>
							</div>
							<div class="small-2 columns text-left">
								<label for="" class="middle">Transfer</label>
							</div>
							<div class="small-4 columns text-center">
								<select name="slxBarthelTransfer" id="">
									<option value="">- CHOOSE-</option>
									<option value="0" <?php if($transfer=="0"){echo "SELECTED";}?>>Unable – no sitting balance</option>
									<option value="1" <?php if($transfer=="1"){echo "SELECTED";}?>>Major help (1 or 2 people, physical), can sit</option>
									<option value="2" <?php if($transfer=="2"){echo "SELECTED";}?>>Minor help (verbal or physical)t</option>
									<option value="3" <?php if($transfer=="3"){echo "SELECTED";}?>>Continent</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns text-left">
								<label for="" class="middle">Bathing</label>
							</div>
							<div class="small-4 columns text-center">
								<select name="slxBarthelBathing" id="">
									<option value="">- CHOOSE-</option>
									<option value="0" <?php if($bathing=="0"){echo "SELECTED";}?>>Dependent</option>
									<option value="1" <?php if($bathing=="1"){echo "SELECTED";}?>>Independent</option>
									<!-- <option value="2">Continent</option> -->
								</select>
							</div>
							<div class="small-2 columns text-left">
								<label for="" class="middle">Stairs</label>
							</div>
							<div class="small-4 columns text-center">
								<select name="slxBarthelStairs" id="">
									<option value="">- CHOOSE-</option>
									<option value="0" <?php if($stairs=="0"){echo "SELECTED";}?>>Unable</option>
									<option value="1" <?php if($stairs=="1"){echo "SELECTED";}?>>Needs help (verbal or physical)</option>
									<option value="2" <?php if($stairs=="2"){echo "SELECTED";}?>>Independent (up and down)</option>
								</select>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Surgical or autopsy evidence of stroke</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slx27" class="slx27">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($cli27=="1"){echo "SELECTED";}?> >Yes</option>
									<option value="2" <?php if($cli27=="2"){echo "SELECTED";}?> >No</option>
									<option value="3" <?php if($cli27=="3"){echo "SELECTED";}?> >Unknown</option>
									<option value="4" <?php if($cli27=="4"){echo "SELECTED";}?> >Not Applicable</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-12 columns">
								<label for="" class="middle"><strong>If Yes</strong></label>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">Intraparenchymal haemorrhage</label>
							</div>
							<div class="small-2 columns">
								<select name="slx27a" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($cli27a=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($cli27a=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($cli27a=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle">Subarachnoid haemorrhage</label>
							</div>
							<div class="small-2 columns">
								<select name="slx27b" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($cli27b=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($cli27b=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($cli27b=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle">Cerebral infarction</label>
							</div>
							<div class="small-2 columns">
								<select name="slx27c" class="slx27c">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($cli27c=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($cli27c=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($cli27c=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-12 columns">
								<label for="" class="middle"><strong>If yes for cerebral infarction</strong></label>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">Lacunae</label>
							</div>
							<div class="small-2 columns">
								<select name="slx28a" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($cli28a=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($cli28a=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($cli28a=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle">Embolic</label>
							</div>
							<div class="small-2 columns">
								<select name="slx28b" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($cli28b=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($cli28b=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($cli28b=="3"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle">Atherosclerotic</label>
							</div>
							<div class="small-2 columns">
								<select name="slx28c" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($cli28c=="1"){echo "SELECTED";}?>>Yes</option>
									<option value="2" <?php if($cli28c=="2"){echo "SELECTED";}?>>No</option>
									<option value="3" <?php if($cli28c=="3"){echo "SELECTED";}?>>Unknown</option>
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