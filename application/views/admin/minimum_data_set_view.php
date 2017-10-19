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
							<span>MINIMUM DATA SET</span>
						</div>
					</div>
				</div>
				<?php 

				$patientID = $patientDOB = $patientGender = $researchID = $source = $sourceDesc = $sourceIDPatient = $surName = $firstName = $address = $address1 = $address2 = $postcode = $state = $district = $contactNo = $race = $education = $employmentDesc = $employment = $pat04 = $stroke06 = $stroke07 = $discharge06 = $onAdmission07 = $discharge07 = $bowelPrestroke = $bowelDischarge = $feedingPrestroke = $feedingDischarge = $bladderPrestroke = $bladderDischarge = $dressingPrestroke = $dressingDischarge = $groomingPrestroke = $groomingDischarge = $mobilityPrestroke = $mobilityDischarge = $toiletPrestroke = $toiletDischarge = $transferPrestroke = $transferDischarge = $bathingDischarge = $bathingPrestroke = $stairsPrestroke = $stairsDischarge = $outcome = "";
				$today = date("d/m/Y");

				foreach($clinical as $clinic):
					$patientID = $clinic->pat_rn;
					$patientDOB = $clinic->pat_dob;
					$patientGender = $clinic->pat_gender;
					$researchID = $clinic->pat_researchID;
					$source = $clinic->pat_source;
					$sourceDesc = $clinic->pat_sourceDesc;
					$sourceIDPatient = $clinic->pat_sourceIDPatient;
					$surName = $clinic->pat_surname;
					$firstName = $clinic->pat_firstname;
					$address = $clinic->pat_address;
					$address1 = $clinic->pat_address1;
					$address2 = $clinic->pat_address2;
					$postcode = $clinic->pat_postcode;
					$district = $clinic->pat_district;
					$state = $clinic->pat_state;
					$contactNo = $clinic->pat_contactNo;
					$race = $clinic->pat_race;
					$raceDesc = $clinic->pat_raceDesc;
					$education = $clinic->pat_education;
					$employment = $clinic->pat_employment;
					$employmentDesc = $clinic->pat_employmentDesc;
					$pat04 = $clinic->pat_04;
					$pat05Desc = $clinic->pat_05Desc;
					$stroke06 = $clinic->pat_06PreStroke;
					$discharge06 = $clinic->pat_06Discharge;
					$stroke07 = $clinic->pat_07RankinPreStroke;
					$onAdmission07 = $clinic->pat_07RankinOnAdmission;
					$discharge07 = $clinic->pat_07RankinDischarge;
					$bowelPrestroke = $clinic->pat_BarthelBowelPreStroke;
					$bowelDischarge = $clinic->pat_BarthelBowelDischarge;
					$feedingPrestroke = $clinic->pat_BarthelFeedingPreStroke;
					$feedingDischarge = $clinic->pat_BarthelFeedingDischarge;
					$bladderPrestroke = $clinic->pat_BarthelBladderPreStroke;
					$bladderDischarge = $clinic->pat_BarthelBladderDischarge;
					$dressingPrestroke = $clinic->pat_BarthelDressingPreStroke;
					$dressingDischarge = $clinic->pat_BarthelDressingDischarge;
					$groomingPrestroke = $clinic->pat_BarthelGroomingPreStroke;
					$groomingDischarge = $clinic->pat_BarthelGroomingDischarge;
					$mobilityPrestroke = $clinic->pat_BarthelMobilityPreStroke;
					$mobilityDischarge = $clinic->pat_BarthelMobilityDischarge;
					$toiletPrestroke = $clinic->pat_BarthelToiletPreStroke;
					$toiletDischarge = $clinic->pat_BarthelToiletDischarge;
					$transferPrestroke = $clinic->pat_BarthelTransferPreStroke;
					$transferDischarge = $clinic->pat_BarthelTransferDischarge;
					$bathingPrestroke = $clinic->pat_BarthelBathingPreStroke;
					$bathingDischarge = $clinic->pat_BarthelBathingDischarge;
					$stairsPrestroke = $clinic->pat_BarthelStairsPreStroke;
					$stairsDischarge = $clinic->pat_BarthelStairsDischarge;
					$outcome = $clinic->pat_outcome;
					$submitBy = $clinic->nama_user;
					$submitDate = $clinic->saved_date;
				endforeach;

				?>
				<div class="callout">
					<form action="<?php echo base_url();?>admin/page_edit_patient/<?php echo $action;?>/<?php echo $session;?>" method="POST">
						<div class="row">
							<div class="small-2 columns">
						      <label for="middle-label" class="middle"><strong>RN (Patient ID)</strong></label>
						    </div>
						    <div class="small-2 columns">
						      <input type="text" id="middle-label" name="inpPatRN" id="inpPatRNAddNew" value="<?php echo $patientID;?>">
						    </div>
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Date Of Birth</strong></label>
							</div>
							<div class="small-2 columns">
								<input type="date" name="inpPatDateOfBirth" value="<?php echo $patientDOB;?>">
							</div>
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Gender</strong></label>
							</div>
							<div class="small-2 columns">
								<select name="slxPatGender" id="">
									<option value="">- CHOOSE -</option>
									<option value="male" <?php if($patientGender=="male"){ echo "SELECTED";}?>>Male</option>
									<option value="female" <?php if($patientGender=="female"){ echo "SELECTED";}?>>Female</option>
								</select>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Research ID Number</strong></label>
							</div>
							<div class="small-10 columns">
								<div class="input-group">
								    <span class="input-group-label">RID</span>
								    <input class="input-group-field" type="text" name="inpPatResearchID" id="inpPatResearchID" readonly value="<?php echo substr($researchID,3);?>">
								</div>
							</div>
						</div>
						<div class="row">
						    <div class="small-2 columns">
						      <label for="middle-label" class="middle"><strong>Source</strong></label>
						    </div>
						    <div class="small-4 columns">
						      <select name="slxPatSource" id="">
						      	<option value="">- CHOOSE -</option>
						      	<option value="1" <?php if($source=="1"){ echo "SELECTED";}?>>Hospital</option>
						      	<option value="2" <?php if($source=="2"){ echo "SELECTED";}?>>GP Surgery</option>
						      	<option value="3" <?php if($source=="3"){ echo "SELECTED";}?>>Other</option>
						      </select>
						    </div>
						    <div class="small-6 columns">
						    	<input type="text" name="inpPatSourceDesc" placeholder="Specify Source" value="<?php echo $sourceDesc;?>">
						    </div>
						</div>
						<div class="row">
						    <div class="small-2 columns">
						      <label for="middle-label" class="middle"><strong>Source ID no. for patient.</strong></label>
						    </div>
						    <div class="small-10 columns">
						      <input type="text" id="middle-label" class="float-left" name="inpPatSourceIDPatient" value="<?php echo $sourceIDPatient;?>">
						    </div>
						</div>
						<hr>
						<div class="row">
						    <div class="small-2 columns">
						      <label for="middle-label" class="middle"><strong>Surname</strong></label>
						    </div>
						    <div class="small-10 columns">
						      <input type="text" id="middle-label" class="float-left" name="inpPatSurname" value="<?php echo $surName;?>">
						    </div>
						</div>
						<div class="row">
						    <div class="small-2 columns">
						      <label for="middle-label" class="middle"><strong>Name</strong></label>
						    </div>
						    <div class="small-10 columns">
						      <input type="text" id="middle-label" class="float-left" name="inpPatName" value="<?php echo $firstName;?>">
						    </div>
						</div>
						<hr>
						<div class="row">
						    <div class="small-2 columns">
						      <label for="middle-label" class="middle"><strong>Address</strong></label>
						    </div>
						    <div class="small-10 columns">
						      <input type="text" id="middle-label" name="inpPatAddress" value="<?php echo $address;?>">
						    </div>
						</div>
						<div class="row">
						    <div class="small-2 columns">
						      <label for="middle-label" class="middle"></label>
						    </div>
						    <div class="small-10 columns">
						      <input type="text" id="middle-label" name="inpPatAddressV1" value="<?php echo $address1;?>">
						    </div>
						</div>
						<div class="row">
						    <div class="small-2 columns">
						      <label for="middle-label" class="middle"></label>
						    </div>
						    <div class="small-10 columns">
						      <input type="text" id="middle-label" name="inpPatAddressV2" value="<?php echo $address2;?>">
						    </div>
						</div>
						<div class="row">
						    <div class="small-2 columns">
						      <label for="middle-label" class="middle"><strong>Postcode</strong></label>
						    </div>
						    <div class="small-4 columns">
						      <input type="text" id="middle-label" name="inpPatPostcode" value="<?php echo $postcode;?>">
						    </div>
						    <div class="small-2 columns">
						      <label for="middle-label" class="middle"><strong>District</strong></label>
						    </div>
						    <div class="small-4 columns">
						      <input type="text" id="middle-label" name="inpPatDistrict" value="<?php echo $district;?>">
						    </div>
						</div>
						<div class="row">
						    <div class="small-2 columns">
						      <label for="middle-label" class="middle"><strong>State</strong></label>
						    </div>
						    <div class="small-4 columns float-left">
						      <input type="text" id="middle-label" name="inpPatState" value="<?php echo $state;?>">
						    </div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Contact No. (if known)</strong></label>
							</div>
							<div class="small-10 columns">
								<input type="text" name="inpContactNoIfKnown" value="<?php echo $contactNo;?>">
							</div>
						</div>
						<hr>
						<div class="row">
						    <div class="small-2 columns">
						      <label for="middle-label" class="middle"><strong>Ethnic Group</strong></label>
						    </div>
						    <div class="small-4 columns">
						      <select name="slxPatRace" id="">
						      	<option value="">- CHOOSE -</option>
						      	<option value="M" <?php if($race=="M"){ echo "SELECTED";}?>>Malay</option>
						      	<option value="C" <?php if($race=="C"){ echo "SELECTED";}?>>Chinese</option>
						      	<option value="I" <?php if($race=="I"){ echo "SELECTED";}?>>Indian</option>
						      	<option value="A" <?php if($race=="A"){ echo "SELECTED";}?>>Asian Other</option>
						      	<option value="O" <?php if($race=="O"){ echo "SELECTED";}?>>Other</option>
						      </select>
						    </div>
						    <div class="small-6 columns">
						    	<input type="text" name="inpPatRaceDesc" value="<?php echo $raceDesc;?>" placeholder="If Other or Asian Other, please specify">
						    </div>
						</div>
						<hr>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Highest Education</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slxPatHighEducation" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($education=="1"){ echo "SELECTED";}?>>Post-graduate higher degree completed</option>
									<option value="2" <?php if($education=="2"){ echo "SELECTED";}?>>Secondary school completed</option>
									<option value="3" <?php if($education=="3"){ echo "SELECTED";}?>>No formal schooling</option>
									<option value="4" <?php if($education=="4"){ echo "SELECTED";}?>>College/University completed</option>
									<option value="5" <?php if($education=="5"){ echo "SELECTED";}?>>Primary school completed</option>
									<option value="6" <?php if($education=="6"){ echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Employment (Over past 12 months)</strong></label>
							</div>
							<div class="small-4 columns">
								<select name="slxPatEmployment" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($employment=="1"){ echo "SELECTED";}?>>Working</option>
									<option value="2" <?php if($employment=="2"){ echo "SELECTED";}?>>Retired</option>
									<option value="3" <?php if($employment=="3"){ echo "SELECTED";}?>>Unemployed / Housewife</option>
									<option value="4" <?php if($employment=="4"){ echo "SELECTED";}?>>Disabled</option>
									<option value="5" <?php if($employment=="5"){ echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-6 columns">
								<input type="text" name="inpPatEmploymentDesc" alue="<?php echo $employmentDesc;?>" placeholder="If working, please specify">
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Cerebrovascular event diagnosed</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slxPat04" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($pat04=="1") {echo "SELECTED";} ?>>Cerebral Infarction</option>
									<option value="2" <?php if($pat04=="2") {echo "SELECTED";} ?>>Intracerebral Haemorrhage</option>
									<option value="3" <?php if($pat04=="3") {echo "SELECTED";} ?>>Subarachnoid Haemorrhage</option>
									<option value="4" <?php if($pat04=="4") {echo "SELECTED";} ?>>TIA</option>
									<option value="5" <?php if($pat04=="5") {echo "SELECTED";} ?>>Other</option>
									<option value="6" <?php if($pat04=="6") {echo "SELECTED";} ?>>Unknown</option>
								</select>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Presence of the following risk factors</strong></label>
							</div>
							<?php

								$chk1 = $chk2 = $chk3 = $chk4 = $chk5 = $chk6 = $chk7 = $chk8 = $chk9 = $chk10 = "";

							foreach($pat_05 as $pat):
							
								if($pat->value==1){
									$chk1 = "checked";
								} elseif($pat->value==2){
									$chk2 = "checked";
								} elseif($pat->value==3){
									$chk3 = "checked";
								} elseif($pat->value==4){
									$chk4 = "checked";
								} elseif($pat->value==5){
									$chk5 = "checked";
								} elseif($pat->value==6){
									$chk6 = "checked";
								} elseif($pat->value==7){
									$chk7 = "checked";
								} elseif($pat->value==8){
									$chk8 = "checked";
								} elseif($pat->value==9){
									$chk9 = "checked";
								} elseif($pat->value==10){
									$chk10 = "checked";
								}
							
							endforeach;

							?>
							<div class="small-4 columns">
								<input type="checkbox" name="chk05[]" <?php echo $chk1;?> value="1">&nbsp;<label for="" class="middle">Current Smoker</label><br>
								<input type="checkbox" name="chk05[]" <?php echo $chk2;?> value="2">&nbsp;<label for="" class="middle">Alcohol Abuse</label><br>
								<input type="checkbox" name="chk05[]" <?php echo $chk3;?> value="3">&nbsp;<label for="" class="middle">Obesity</label><br>
								<input type="checkbox" name="chk05[]" <?php echo $chk4;?> value="4">&nbsp;<label for="" class="middle">Hypertension</label><br>
								
								<input type="checkbox" name="chk05[]" <?php echo $chk10;?> value="10">&nbsp;<label for="" class="middle">Other</label>
							</div>
							<div class="small-4 columns">
								<input type="checkbox" name="chk05[]" <?php echo $chk5;?> value="5">&nbsp;<label for="" class="middle">Hypercholestrolaemia</label><br>
								<input type="checkbox" name="chk05[]" <?php echo $chk6;?> value="6">&nbsp;<label for="" class="middle">Atrial fibrillation</label><br>
								<input type="checkbox" name="chk05[]" <?php echo $chk7;?> value="7">&nbsp;<label for="" class="middle">Diabetes mellitus</label><br>
								<input type="checkbox" name="chk05[]" <?php echo $chk8;?> value="8">&nbsp;<label for="" class="middle">Carotid stanosis</label><br>
								<input type="checkbox" name="chk05[]" <?php echo $chk9;?> value="9">&nbsp;<label for="" class="middle">Previous stroke and / or TIA</label>
							</div>
							<div class="small-10 columns float-right">
								<input type="text" name="chk05Desc" id="chkPresenceOtherDesc" value="<?php echo $pat05Desc;?>" placeholder="If Other, please specify">
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Accomodation</strong></label>
							</div>
							<div class="small-5 columns">
								<select name="slx06Prestroke" id="">
									<option value="">- Pre-Stroke -</option>
									<option value="1" <?php if($stroke06=="1"){echo "SELECTED";}?>>Independent housing</option>
									<option value="2" <?php if($stroke06=="2"){echo "SELECTED";}?>>Warden controlled</option>
									<option value="3" <?php if($stroke06=="3"){echo "SELECTED";}?>>Residential/Nursing home</option>
									<option value="4" <?php if($stroke06=="4"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-5 columns">
								<select name="slx06AtDischarge" id="">
									<option value="">- At Discharge -</option>
									<option value="1" <?php if($discharge06){echo "SELECTED";}?>>Independent housing</option>
									<option value="2" <?php if($discharge06){echo "SELECTED";}?>>Warden controlled</option>
									<option value="3" <?php if($discharge06){echo "SELECTED";}?>>Residential/Nursing home</option>
									<option value="4" <?php if($discharge06){echo "SELECTED";}?>>Unknown</option>
									<option value="5" <?php if($discharge06){echo "SELECTED";}?>>Not Applicable (If patient died at discharge)</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-12 columns">
								<label for="" class="middle"><strong>Living functional Status</strong></label>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><u>A. Modified Rankin score</u></label>
							</div>
							<div class="small-3 columns">
								<select name="slx07Prestroke" id="">
									<option value="">- Pre-stroke -</option>
									<option value="1" <?php if($stroke07=="1"){echo "SELECTED";}?>>No symptoms at all</option>
									<option value="2" <?php if($stroke07=="2"){echo "SELECTED";}?>>No significant disability</option>
									<option value="3" <?php if($stroke07=="3"){echo "SELECTED";}?>>Slight disability</option>
									<option value="4" <?php if($stroke07=="4"){echo "SELECTED";}?>>Moderate disability but able to walk unaided</option>
									<option value="5" <?php if($stroke07=="5"){echo "SELECTED";}?>>Moderate disability but unable to walk without assistance</option>
									<option value="6" <?php if($stroke07=="6"){echo "SELECTED";}?>>Severe disability</option>
									<option value="7" <?php if($stroke07=="7"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-3 columns">
								<select name="slx07OnAdmission" id="">
									<option value="">- On Admission -</option>
									<option value="1" <?php if($onAdmission07=="1"){echo "SELECTED";}?>>No symptoms at all</option>
									<option value="2" <?php if($onAdmission07=="2"){echo "SELECTED";}?>>No significant disability</option>
									<option value="3" <?php if($onAdmission07=="3"){echo "SELECTED";}?>>Slight disability</option>
									<option value="4" <?php if($onAdmission07=="4"){echo "SELECTED";}?>>Moderate disability but able to walk unaided</option>
									<option value="5" <?php if($onAdmission07=="5"){echo "SELECTED";}?>>Moderate disability but unable to walk without assistance</option>
									<option value="6" <?php if($onAdmission07=="6"){echo "SELECTED";}?>>Severe disability</option>
									<option value="7" <?php if($onAdmission07=="7"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-4 columns">
								<select name="slx07AtDischarge" id="">
									<option value="">- At Discharge -</option>
									<option value="1" <?php if($discharge07=="1"){echo "SELECTED";}?>>No symptoms at all</option>
									<option value="2" <?php if($discharge07=="2"){echo "SELECTED";}?>>No significant disability</option>
									<option value="3" <?php if($discharge07=="3"){echo "SELECTED";}?>>Slight disability</option>
									<option value="4" <?php if($discharge07=="4"){echo "SELECTED";}?>>Moderate disability but able to walk unaided</option>
									<option value="5" <?php if($discharge07=="5"){echo "SELECTED";}?>>Moderate disability but unable to walk without assistance</option>
									<option value="6" <?php if($discharge07=="6"){echo "SELECTED";}?>>Severe disability</option>
									<option value="7" <?php if($discharge07=="7"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><u>B. Barthel's ADL Index</u> <a href="<?php echo base_url();?>documentation/barthel"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">Bowel</label>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLPreStrokeBowel" id="">
									<option value="">- Pre-Stroke -</option>
									<option value="0" <?php if($bowelPrestroke=="0"){echo "SELECTED";}?>>Incontinent (or needs to be given enemata)</option>
									<option value="1" <?php if($bowelPrestroke=="1"){echo "SELECTED";}?>>Occasional accident (once/week)</option>
									<option value="2" <?php if($bowelPrestroke=="2"){echo "SELECTED";}?>>Continent</option>
								</select>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLAtDischargeBowel" id="">
									<option value="">- At Discharge -</option>
									<option value="0" <?php if($bowelDischarge=="0"){echo "SELECTED";}?>>Incontinent (or needs to be given enemata)</option>
									<option value="1" <?php if($bowelDischarge=="1"){echo "SELECTED";}?>>Occasional accident (once/week)</option>
									<option value="2" <?php if($bowelDischarge=="2"){echo "SELECTED";}?>>Continent</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">Feeding</label>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLPreStrokeFeeding" id="">
									<option value="">- Pre-Stroke -</option>
									<option value="0" <?php if($feedingPrestroke=="0"){echo "SELECTED";}?>>Unable/dependent</option>
									<option value="1" <?php if($feedingPrestroke=="1"){echo "SELECTED";}?>>Needs help (e.g. food cutting)</option>
									<option value="2" <?php if($feedingPrestroke=="2"){echo "SELECTED";}?>>Independent (food in reach)</option>
								</select>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLAtDischargeFeeding" id="">
									<option value="">- At Discharge -</option>
									<option value="0" <?php if($feedingDischarge=="0"){echo "SELECTED";}?>>Unable/dependent</option>
									<option value="1" <?php if($feedingDischarge=="1"){echo "SELECTED";}?>>Needs help (e.g. food cutting)</option>
									<option value="2" <?php if($feedingDischarge=="2"){echo "SELECTED";}?>>Independent (food in reach)</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">Bladder</label>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLPreStrokeBladder" id="">
									<option value="">- Pre-Stroke -</option>
									<option value="0" <?php if($bladderPrestroke=="0"){echo "SELECTED";}?>>Incontinent or catheterized</option>
									<option value="1" <?php if($bladderPrestroke=="1"){echo "SELECTED";}?>>Occasional accident (max once per 24 hours)</option>
									<option value="2" <?php if($bladderPrestroke=="2"){echo "SELECTED";}?>>Continent</option>
								</select>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLAtDischargeBladder" id="">
									<option value="">- At Discharge -</option>
									<option value="0" <?php if($bladderDischarge=="0"){echo "SELECTED";}?>>Incontinent or catheterized</option>
									<option value="1" <?php if($bladderDischarge=="1"){echo "SELECTED";}?>>Occasional accident (max once per 24 hours)</option>
									<option value="2" <?php if($bladderDischarge=="2"){echo "SELECTED";}?>>Continent</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">Dressing</label>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLPreStrokeDressing" id="">
									<option value="">- Pre-Stroke -</option>
									<option value="0" <?php if($dressingPrestroke=="0"){echo "SELECTED";}?>>Dependent</option>
									<option value="1" <?php if($dressingPrestroke=="1"){echo "SELECTED";}?>>Need helps, can do half unaided</option>
									<option value="2" <?php if($dressingPrestroke=="2"){echo "SELECTED";}?>>Independent (including buttons, zips, laces, etc)</option>
								</select>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLAtDischargeDressing" id="">
									<option value="">- At Discharge -</option>
									<option value="0" <?php if($dressingDischarge=="0"){echo "SELECTED";}?>>Dependent</option>
									<option value="1" <?php if($dressingDischarge=="1"){echo "SELECTED";}?>>Need helps, can do half unaided</option>
									<option value="2" <?php if($dressingDischarge=="2"){echo "SELECTED";}?>>Independent (including buttons, zips, laces, etc)</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">Grooming</label>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLPreStrokeGrooming" id="">
									<option value="">- Pre-Stroke -</option>
									<option value="0" <?php if($groomingPrestroke=="0"){echo "SELECTED";}?>>Needs help with personal care</option>
									<option value="1" <?php if($groomingPrestroke=="1"){echo "SELECTED";}?>>Independent (hair/face/teeth/shaving)</option>
									<!-- <option value="2">Continent</option> -->
								</select>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLAtDischargeGrooming" id="">
									<option value="">- At Discharge -</option>
									<option value="0" <?php if($groomingDischarge=="0"){echo "SELECTED";}?>>Needs help with personal care</option>
									<option value="1" <?php if($groomingDischarge=="1"){echo "SELECTED";}?>>Independent (hair/face/teeth/shaving)</option>
									<!-- <option value="2">Continent</option> -->
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">Mobility</label>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLPreStrokeMobility" id="">
									<option value="">- Pre-Stroke -</option>
									<option value="0" <?php if($mobilityPrestroke=="0"){echo "SELECTED";}?>>Immobile</option>
									<option value="1" <?php if($mobilityPrestroke=="1"){echo "SELECTED";}?>>Wheelchair independent including corners etc</option>
									<option value="2" <?php if($mobilityPrestroke=="2"){echo "SELECTED";}?>>Walks with help of one person (verbal or physical)</option>
									<option value="3" <?php if($mobilityPrestroke=="3"){echo "SELECTED";}?>>Independent (may use stick, etc)</option>
								</select>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLAtDischargeMobility" id="">
									<option value="">- At Discharge -</option>
									<option value="0" <?php if($mobilityDischarge=="0"){echo "SELECTED";}?>>Immobile</option>
									<option value="1" <?php if($mobilityDischarge=="1"){echo "SELECTED";}?>>Wheelchair independent including corners etc</option>
									<option value="2" <?php if($mobilityDischarge=="2"){echo "SELECTED";}?>>Walks with help of one person (verbal or physical)</option>
									<option value="3" <?php if($mobilityDischarge=="3"){echo "SELECTED";}?>>Independent (may use stick, etc)</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns text-left">
								<label for="" class="middle">Toilet Use</label>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLPreStrokeToilet" id="">
									<option value="">- Pre-Stroke -</option>
									<option value="0" <?php if($toiletPrestroke=="0"){echo "SELECTED";}?>>Dependent</option>
									<option value="1" <?php if($toiletPrestroke=="1"){echo "SELECTED";}?>>Needs some help, can do something alone</option>
									<option value="2" <?php if($toiletPrestroke=="2"){echo "SELECTED";}?>>Independent (on and off, wiping/dressing)</option>
								</select>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLAtDischargeToilet" id="">
									<option value="">- At Discharge -</option>
									<option value="0" <?php if($toiletDischarge=="0"){echo "SELECTED";}?>>Dependent</option>
									<option value="1" <?php if($toiletDischarge=="1"){echo "SELECTED";}?>>Needs some help, can do something alone</option>
									<option value="2" <?php if($toiletDischarge=="2"){echo "SELECTED";}?>>Independent (on and off, wiping/dressing)</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns text-left">
								<label for="" class="middle">Transfer</label>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLPreStrokeTransfer" id="">
									<option value="">- Pre-Stroke -</option>
									<option value="0" <?php if($transferPrestroke=="0"){echo "SELECTED";}?>>Unable – no sitting balance</option>
									<option value="1" <?php if($transferPrestroke=="1"){echo "SELECTED";}?>>Major help (1 or 2 people, physical), can sit</option>
									<option value="2" <?php if($transferPrestroke=="2"){echo "SELECTED";}?>>Minor help (verbal or physical)t</option>
									<option value="3" <?php if($transferPrestroke=="3"){echo "SELECTED";}?>>Continent</option>
								</select>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLAtDischargeTransfer" id="">
									<option value="">- At Discharge -</option>
									<option value="0" <?php if($transferDischarge=="0"){echo "SELECTED";}?>>Unable – no sitting balance</option>
									<option value="1" <?php if($transferDischarge=="1"){echo "SELECTED";}?>>Major help (1 or 2 people, physical), can sit</option>
									<option value="2" <?php if($transferDischarge=="2"){echo "SELECTED";}?>>Minor help (verbal or physical)t</option>
									<option value="3" <?php if($transferDischarge=="3"){echo "SELECTED";}?>>Continent</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns text-left">
								<label for="" class="middle">Bathing</label>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLPreStrokeBathing" id="">
									<option value="">- Pre-Stroke -</option>
									<option value="0" <?php if($bathingPrestroke=="0"){echo "SELECTED";}?>>Dependent</option>
									<option value="1" <?php if($bathingPrestroke=="1"){echo "SELECTED";}?>>Independent</option>
									<!-- <option value="2">Continent</option> -->
								</select>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLAtDischargeBathing" id="">
									<option value="">- At Discharge -</option>
									<option value="0" <?php if($bathingDischarge=="0"){echo "SELECTED";}?>>Dependent</option>
									<option value="1" <?php if($bathingDischarge=="1"){echo "SELECTED";}?>>Independent</option>
									<!-- <option value="2">Continent</option> -->
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns text-left">
								<label for="" class="middle">Stairs</label>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLPreStrokeStairs" id="">
									<option value="">- Pre-Stroke -</option>
									<option value="0" <?php if($stairsPrestroke=="0"){echo "SELECTED";}?>>Unable</option>
									<option value="1" <?php if($stairsPrestroke=="1"){echo "SELECTED";}?>>Needs help (verbal or physical)</option>
									<option value="2" <?php if($stairsPrestroke=="2"){echo "SELECTED";}?>>Independent (up and down)</option>
								</select>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLAtDischargeStairs" id="">
									<option value="">- At Discharge -</option>
									<option value="0" <?php if($stairsDischarge=="0"){echo "SELECTED";}?>>Unable</option>
									<option value="1" <?php if($stairsDischarge=="1"){echo "SELECTED";}?>>Needs help (verbal or physical)</option>
									<option value="2" <?php if($stairsDischarge=="2"){echo "SELECTED";}?>>Independent (up and down)</option>
								</select>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Outcome at discharge</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slxOutcome" id="">
									<option value="">- CHOOSE -</option>
									<option value="1" <?php if($outcome=="0"){echo "SELECTED";}?>>Alive</option>
									<option value="2" <?php if($outcome=="1"){echo "SELECTED";}?>>Dead</option>
									<option value="3" <?php if($outcome=="2"){echo "SELECTED";}?>>Unknown / MIA</option>
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