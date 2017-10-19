<script>
	$(document).ready(function(){
		$("input[type=text]").attr("readonly", true);
		$("select").attr("disabled", true);
		$("input[type=checkbox]").attr("disabled", true);
		$("input[type=date]").attr("readonly", true);
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
				<div class="callout">
					<form action="" method="POST" data-abide novalidate>
						<?php $this->load->helper("general"); foreach($maklumat_minimum_data as $min):?>
						<div class="row">
							<div class="small-2 columns">
						      <label for="middle-label" class="middle"><strong>RN (Patient ID)</strong></label>
						    </div>
						    <div class="small-2 columns">
						      <input type="text" id="middle-label" name="inpPatRN" id="inpPatRNAddNew" value="<?php echo $min->pat_rn;?>" required>
						      <input type="hidden" name="hdnIDTherapy" value="<?php echo $min->idtherapy;?>">
						      <span class="form-error">
						         Patient ID is required.
						       </span>
						    </div>
							<div class="small-1 columns">
								<label for="" class="middle"><strong>DOB</strong></label>
							</div>
							<div class="small-3 columns">
								<input type="date" name="inpPatDateOfBirth" value="<?php echo $min->pat_dob;?>" required>
								<span class="form-error">
						         B.O.D is required.
						       </span>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Gender</strong></label>
							</div>
							<div class="small-2 columns">
								<select name="slxPatGender" id="" required>
									<option value="">- Select -</option>
									<option value="male" <?php if($min->pat_gender=="male"){ echo "SELECTED";}?>>Male</option>
									<option value="female" <?php if($min->pat_gender=="female"){ echo "SELECTED";}?>>Female</option>
								</select>
								<span class="form-error">
							       Gender is required.
							    </span>
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
								    <input class="input-group-field" type="text" name="inpPatResearchID" id="inpPatResearchID" readonly value="<?php echo substr($min->pat_researchID,3);?>">
								</div>
							</div>
						</div>
						<div class="row">
						    <div class="small-2 columns">
						      <label for="middle-label" class="middle"><strong>Source</strong></label>
						    </div>
						    <div class="small-4 columns">
						      <select name="slxPatSource" id="" required>
						      	<option value="">- Select -</option>
						      	<option value="1" <?php if($min->pat_source=="1"){ echo "SELECTED";}?>>Hospital</option>
						      	<option value="2" <?php if($min->pat_source=="2"){ echo "SELECTED";}?>>GP Surgery</option>
						      	<option value="3" <?php if($min->pat_source=="3"){ echo "SELECTED";}?>>Other</option>
						      </select>
						      <span class="form-error">
						         Source is required.
						        </span>
						    </div>
						    <div class="small-6 columns" required>
						    	<input type="text" name="inpPatSourceDesc" placeholder="Specify Source" value="<?php echo $min->pat_sourceDesc;?>">
						    	<span class="form-error">
						         Source specification is required.
						        </span>
						    </div>
						</div>
						<div class="row">
						    <div class="small-2 columns">
						      <label for="middle-label" class="middle"><strong>Source ID no. for patient.</strong></label>
						    </div>
						    <div class="small-10 columns">
						      <input type="text" id="middle-label" class="float-left" name="inpPatSourceIDPatient" required value="<?php echo $min->pat_sourceIDPatient;?>">
						      <span class="form-error">
						         Source ID No. is required.
						        </span>
						    </div>
						</div>
						<hr>
						<div class="row">
						    <div class="small-2 columns">
						      <label for="middle-label" class="middle"><strong>Surname</strong></label>
						    </div>
						    <div class="small-10 columns">
						      <input type="text" id="middle-label" class="float-left" name="inpPatSurname" value="<?php echo $min->pat_surname;?>">
						      
						    </div>
						</div>
						<div class="row">
						    <div class="small-2 columns">
						      <label for="middle-label" class="middle"><strong>Name</strong></label>
						    </div>
						    <div class="small-10 columns">
						      <input type="text" id="middle-label" class="float-left" name="inpPatName" required value="<?php echo $min->pat_firstname;?>">
						      <span class="form-error">
						        Your name is required.
						        </span>
						    </div>
						</div>
						<hr>
						<div class="row">
						    <div class="small-2 columns">
						      <label for="middle-label" class="middle"><strong>Address</strong></label>
						    </div>
						    <div class="small-10 columns">
						      <input type="text" id="middle-label" name="inpPatAddress" value="<?php echo $min->pat_address;?>" required>
						      <span class="form-error">
						         Address is required
						        </span>
						    </div>
						</div>
						<div class="row">
						    <div class="small-2 columns">
						      <label for="middle-label" class="middle"></label>
						    </div>
						    <div class="small-10 columns">
						      <input type="text" id="middle-label" name="inpPatAddressV1" value="<?php echo $min->pat_address1;?>">
						    </div>
						</div>
						<div class="row">
						    <div class="small-2 columns">
						      <label for="middle-label" class="middle"></label>
						    </div>
						    <div class="small-10 columns">
						      <input type="text" id="middle-label" name="inpPatAddressV2" value="<?php echo $min->pat_address2;?>">
						    </div>
						</div>
						<div class="row">
						    <div class="small-2 columns">
						      <label for="middle-label" class="middle"><strong>Postcode</strong></label>
						    </div>
						    <div class="small-4 columns">
						      <input type="text" id="middle-label" name="inpPatPostcode" value="<?php echo $min->pat_postcode;?>" pattern="number" required>
						      <span class="form-error">
						         Postcode is required.
						        </span>
						    </div>
						    <div class="small-2 columns">
						      <label for="middle-label" class="middle"><strong>District</strong></label>

						    </div>
						    <div class="small-4 columns">
						      <input type="text" id="middle-label" name="inpPatDistrict" value="<?php echo $min->pat_district;?>" required>
						      <span class="form-error">
						         District is required.
						        </span>
						    </div>
						</div>
						<div class="row">
						    <div class="small-2 columns">
						      <label for="middle-label" class="middle"><strong>State</strong></label>
						    </div>
						    <div class="small-4 columns float-left">
						      <input type="text" id="middle-label" name="inpPatState" required value="<?php echo $min->pat_state;?>">
						      <span class="form-error">
						         State is required.
						        </span>
						    </div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Contact No. (if known)</strong></label>
							</div>
							<div class="small-10 columns">
								<input type="text" name="inpContactNoIfKnown" value="<?php echo $min->pat_contactNo;?>">
							</div>
						</div>
						<hr>
						<div class="row">
						    <div class="small-2 columns">
						      <label for="middle-label" class="middle"><strong>Ethnic Group</strong></label>
						    </div>
						    <div class="small-4 columns">
						      <select name="slxPatRace" id="">
						      	<option value="">- Select -</option>
						      	<option value="M" <?php if($min->pat_race=="M"){ echo "SELECTED";}?>>Malay</option>
						      	<option value="C" <?php if($min->pat_race=="C"){ echo "SELECTED";}?>>Chinese</option>
						      	<option value="I" <?php if($min->pat_race=="I"){ echo "SELECTED";}?>>Indian</option>
						      	<option value="A" <?php if($min->pat_race=="A"){ echo "SELECTED";}?>>Asian Other</option>
						      	<option value="O" <?php if($min->pat_race=="O"){ echo "SELECTED";}?>>Other</option>
						      </select>
						    </div>
						    <div class="small-6 columns">
						    	<input type="text" name="inpPatRaceDesc" value="<?php echo $min->pat_raceDesc;?>" placeholder="If Other or Asian Other, please specify">
						    </div>
						</div>
						<hr>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Highest Education</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slxPatHighEducation" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($min->pat_education=="1"){ echo "SELECTED";}?>>Post-graduate higher degree completed</option>
									<option value="2" <?php if($min->pat_education=="2"){ echo "SELECTED";}?>>Secondary school completed</option>
									<option value="3" <?php if($min->pat_education=="3"){ echo "SELECTED";}?>>No formal schooling</option>
									<option value="4" <?php if($min->pat_education=="4"){ echo "SELECTED";}?>>College/University completed</option>
									<option value="5" <?php if($min->pat_education=="5"){ echo "SELECTED";}?>>Primary school completed</option>
									<option value="6" <?php if($min->pat_education=="6"){ echo "SELECTED";}?>>Unknown</option>
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
									<option value="">- Select -</option>
									<option value="1" <?php if($min->pat_employment=="1"){ echo "SELECTED";}?>>Working</option>
									<option value="2" <?php if($min->pat_employment=="2"){ echo "SELECTED";}?>>Retired</option>
									<option value="3" <?php if($min->pat_employment=="3"){ echo "SELECTED";}?>>Unemployed / Housewife</option>
									<option value="4" <?php if($min->pat_employment=="4"){ echo "SELECTED";}?>>Disabled</option>
									<option value="5" <?php if($min->pat_employment=="5"){ echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-6 columns">
								<input type="text" name="inpPatEmploymentDesc" alue="<?php echo $min->pat_employmentDesc;?>" placeholder="If working, please specify">
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Cerebrovascular event diagnosed</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slxPat04" id="">
									<option value="">- Select -</option>
									<option value="1" <?php if($min->pat_04=="1") {echo "SELECTED";} ?>>Cerebral Infarction</option>
									<option value="2" <?php if($min->pat_04=="2") {echo "SELECTED";} ?>>Intracerebral Haemorrhage</option>
									<option value="3" <?php if($min->pat_04=="3") {echo "SELECTED";} ?>>Subarachnoid Haemorrhage</option>
									<option value="4" <?php if($min->pat_04=="4") {echo "SELECTED";} ?>>TIA</option>
									<option value="5" <?php if($min->pat_04=="5") {echo "SELECTED";} ?>>Other</option>
									<option value="6" <?php if($min->pat_04=="6") {echo "SELECTED";} ?>>Unknown</option>
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
							?>
							<?php
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
							?>
							<?php endforeach;?>
							<div class="small-5 columns">
								<input type="checkbox" name="chk05[]" <?php echo $chk1;?> value="1">&nbsp;<label for="" class="middle">Current Smoker</label><br>
								<input type="checkbox" name="chk05[]" <?php echo $chk2;?> value="2">&nbsp;<label for="" class="middle">Alcohol Abuse</label><br>
								<input type="checkbox" name="chk05[]" <?php echo $chk3;?> value="3">&nbsp;<label for="" class="middle">Obesity</label><br>
								<input type="checkbox" name="chk05[]" <?php echo $chk4;?> value="4">&nbsp;<label for="" class="middle">Hypertension</label><br>
								
								<input type="checkbox" name="chk05[]" <?php echo $chk10;?> value="10">&nbsp;<label for="" class="middle">Other</label>
							</div>
							<div class="small-5 columns">
								<input type="checkbox" name="chk05[]" <?php echo $chk5;?> value="5">&nbsp;<label for="" class="middle">Hypercholestrolaemia</label><br>
								<input type="checkbox" name="chk05[]" <?php echo $chk6;?> value="6">&nbsp;<label for="" class="middle">Atrial fibrillation</label><br>
								<input type="checkbox" name="chk05[]" <?php echo $chk7;?> value="7">&nbsp;<label for="" class="middle">Diabetes mellitus</label><br>
								<input type="checkbox" name="chk05[]" <?php echo $chk8;?> value="8">&nbsp;<label for="" class="middle">Carotid stanosis</label><br>
								<input type="checkbox" name="chk05[]" <?php echo $chk9;?> value="9">&nbsp;<label for="" class="middle">Previous stroke and / or TIA</label>
								<input type="hidden" name="chk05[]" value="0" checked>
							</div>
							<div class="small-2 columns">
								&nbsp;
							</div>
							<div class="small-10 columns">
								<input type="text" name="chk05Desc" id="chkPresenceOtherDesc" value="<?php echo $min->pat_05Desc;?>" placeholder="If Other, please specify">
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Accomodation</strong></label>
							</div>
							<div class="small-5 columns">
								<select name="slx06Prestroke" id="">
									<option value="">- Pre-Stroke -</option>
									<option value="1" <?php if($min->pat_06PreStroke=="1"){echo "SELECTED";}?>>Independent housing</option>
									<option value="2" <?php if($min->pat_06PreStroke=="2"){echo "SELECTED";}?>>Warden controlled</option>
									<option value="3" <?php if($min->pat_06PreStroke=="3"){echo "SELECTED";}?>>Residential/Nursing home</option>
									<option value="4" <?php if($min->pat_06PreStroke=="4"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-5 columns">
								<select name="slx06AtDischarge" id="">
									<option value="">- At Discharge -</option>
									<option value="1" <?php if($min->pat_06Discharge=="1"){echo "SELECTED";}?>>Independent housing</option>
									<option value="2" <?php if($min->pat_06Discharge=="2"){echo "SELECTED";}?>>Warden controlled</option>
									<option value="3" <?php if($min->pat_06Discharge=="3"){echo "SELECTED";}?>>Residential/Nursing home</option>
									<option value="4" <?php if($min->pat_06Discharge=="4"){echo "SELECTED";}?>>Unknown</option>
									<option value="5" <?php if($min->pat_06Discharge=="5"){echo "SELECTED";}?>>Not Applicable (If patient died at discharge)</option>
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
									<option value="1" <?php if($min->pat_07RankinPreStroke=="1"){echo "SELECTED";}?>>No symptoms at all</option>
									<option value="2" <?php if($min->pat_07RankinPreStroke=="2"){echo "SELECTED";}?>>No significant disability</option>
									<option value="3" <?php if($min->pat_07RankinPreStroke=="3"){echo "SELECTED";}?>>Slight disability</option>
									<option value="4" <?php if($min->pat_07RankinPreStroke=="4"){echo "SELECTED";}?>>Moderate disability but able to walk unaided</option>
									<option value="5" <?php if($min->pat_07RankinPreStroke=="5"){echo "SELECTED";}?>>Moderate disability but unable to walk without assistance</option>
									<option value="6" <?php if($min->pat_07RankinPreStroke=="6"){echo "SELECTED";}?>>Severe disability</option>
									<option value="7" <?php if($min->pat_07RankinPreStroke=="7"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-3 columns">
								<select name="slx07OnAdmission" id="">
									<option value="">- On Admission -</option>
									<option value="1" <?php if($min->pat_07RankinOnAdmission=="1"){echo "SELECTED";}?>>No symptoms at all</option>
									<option value="2" <?php if($min->pat_07RankinOnAdmission=="2"){echo "SELECTED";}?>>No significant disability</option>
									<option value="3" <?php if($min->pat_07RankinOnAdmission=="3"){echo "SELECTED";}?>>Slight disability</option>
									<option value="4" <?php if($min->pat_07RankinOnAdmission=="4"){echo "SELECTED";}?>>Moderate disability but able to walk unaided</option>
									<option value="5" <?php if($min->pat_07RankinOnAdmission=="5"){echo "SELECTED";}?>>Moderate disability but unable to walk without assistance</option>
									<option value="6" <?php if($min->pat_07RankinOnAdmission=="6"){echo "SELECTED";}?>>Severe disability</option>
									<option value="7" <?php if($min->pat_07RankinOnAdmission=="7"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
							<div class="small-4 columns">
								<select name="slx07AtDischarge" id="">
									<option value="">- At Discharge -</option>
									<option value="1" <?php if($min->pat_07RankinDischarge=="1"){echo "SELECTED";}?>>No symptoms at all</option>
									<option value="2" <?php if($min->pat_07RankinDischarge=="2"){echo "SELECTED";}?>>No significant disability</option>
									<option value="3" <?php if($min->pat_07RankinDischarge=="3"){echo "SELECTED";}?>>Slight disability</option>
									<option value="4" <?php if($min->pat_07RankinDischarge=="4"){echo "SELECTED";}?>>Moderate disability but able to walk unaided</option>
									<option value="5" <?php if($min->pat_07RankinDischarge=="5"){echo "SELECTED";}?>>Moderate disability but unable to walk without assistance</option>
									<option value="6" <?php if($min->pat_07RankinDischarge=="6"){echo "SELECTED";}?>>Severe disability</option>
									<option value="7" <?php if($min->pat_07RankinDischarge=="7"){echo "SELECTED";}?>>Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><u>B. Barthel's ADL Index</u> <a data-toggle="barthelDocumentation"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label>

								<!-- <p><a data-toggle="barthelDocumentation">Click me for an overlay-lacking modal</a></p> -->
								<!-- <a href="<?php echo base_url();?>documentation/barthel" target="_blank"> -->
							</div>
							<div class="small-5 columns">
								<label for="" class="middle text-center"><b>Pre-stroke</b></label>
							</div>
							<div class="small-5 columns">
								<label for="" class="middle text-center"><b>At Discharge</b></label>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">Bowel</label>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLPreStrokeBowel" id="">
									<option value="9">- Pre-Stroke -</option>
									<option value="0" <?php if($min->pat_BarthelBowelPreStroke=="0"){echo "SELECTED";}?>>Incontinent (or needs to be given enemata)</option>
									<option value="1" <?php if($min->pat_BarthelBowelPreStroke=="1"){echo "SELECTED";}?>>Occasional accident (once/week)</option>
									<option value="2" <?php if($min->pat_BarthelBowelPreStroke=="2"){echo "SELECTED";}?>>Continent</option>
								</select>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLAtDischargeBowel" id="">
									<option value="9">- At Discharge -</option>
									<option value="0" <?php if($min->pat_BarthelBowelDischarge=="0"){echo "SELECTED";}?>>Incontinent (or needs to be given enemata)</option>
									<option value="1" <?php if($min->pat_BarthelBowelDischarge=="1"){echo "SELECTED";}?>>Occasional accident (once/week)</option>
									<option value="2" <?php if($min->pat_BarthelBowelDischarge=="2"){echo "SELECTED";}?>>Continent</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">Feeding</label>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLPreStrokeFeeding" id="">
									<option value="9">- Pre-Stroke -</option>
									<option value="0" <?php if($min->pat_BarthelFeedingPreStroke=="0"){echo "SELECTED";}?>>Unable/dependent</option>
									<option value="1" <?php if($min->pat_BarthelFeedingPreStroke=="1"){echo "SELECTED";}?>>Needs help (e.g. food cutting)</option>
									<option value="2" <?php if($min->pat_BarthelFeedingPreStroke=="2"){echo "SELECTED";}?>>Independent (food in reach)</option>
								</select>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLAtDischargeFeeding" id="">
									<option value="9">- At Discharge -</option>
									<option value="0" <?php if($min->pat_BarthelFeedingDischarge=="0"){echo "SELECTED";}?>>Unable/dependent</option>
									<option value="1" <?php if($min->pat_BarthelFeedingDischarge=="1"){echo "SELECTED";}?>>Needs help (e.g. food cutting)</option>
									<option value="2" <?php if($min->pat_BarthelFeedingDischarge=="2"){echo "SELECTED";}?>>Independent (food in reach)</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">Bladder</label>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLPreStrokeBladder" id="">
									<option value="9">- Pre-Stroke -</option>
									<option value="0" <?php if($min->pat_BarthelBladderPreStroke=="0"){echo "SELECTED";}?>>Incontinent or catheterized</option>
									<option value="1" <?php if($min->pat_BarthelBladderPreStroke=="1"){echo "SELECTED";}?>>Occasional accident (max once per 24 hours)</option>
									<option value="2" <?php if($min->pat_BarthelBladderPreStroke=="2"){echo "SELECTED";}?>>Continent</option>
								</select>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLAtDischargeBladder" id="">
									<option value="9">- At Discharge -</option>
									<option value="0" <?php if($min->pat_BarthelBladderDischarge=="0"){echo "SELECTED";}?>>Incontinent or catheterized</option>
									<option value="1" <?php if($min->pat_BarthelBladderDischarge=="1"){echo "SELECTED";}?>>Occasional accident (max once per 24 hours)</option>
									<option value="2" <?php if($min->pat_BarthelBladderDischarge=="2"){echo "SELECTED";}?>>Continent</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">Dressing</label>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLPreStrokeDressing" id="">
									<option value="9">- Pre-Stroke -</option>
									<option value="0" <?php if($min->pat_BarthelDressingPreStroke=="0"){echo "SELECTED";}?>>Dependent</option>
									<option value="1" <?php if($min->pat_BarthelDressingPreStroke=="1"){echo "SELECTED";}?>>Need helps, can do half unaided</option>
									<option value="2" <?php if($min->pat_BarthelDressingPreStroke=="2"){echo "SELECTED";}?>>Independent (including buttons, zips, laces, etc)</option>
								</select>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLAtDischargeDressing" id="">
									<option value="9">- At Discharge -</option>
									<option value="0" <?php if($min->pat_BarthelDressingDischarge=="0"){echo "SELECTED";}?>>Dependent</option>
									<option value="1" <?php if($min->pat_BarthelDressingDischarge=="1"){echo "SELECTED";}?>>Need helps, can do half unaided</option>
									<option value="2" <?php if($min->pat_BarthelDressingDischarge=="2"){echo "SELECTED";}?>>Independent (including buttons, zips, laces, etc)</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle">Grooming</label>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLPreStrokeGrooming" id="">
									<option value="9">- Pre-Stroke -</option>
									<option value="0" <?php if($min->pat_BarthelGroomingPreStroke=="0"){echo "SELECTED";}?>>Needs help with personal care</option>
									<option value="1" <?php if($min->pat_BarthelGroomingPreStroke=="1"){echo "SELECTED";}?>>Independent (hair/face/teeth/shaving)</option>
									<!-- <option value="2">Continent</option> -->
								</select>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLAtDischargeGrooming" id="">
									<option value="9">- At Discharge -</option>
									<option value="0" <?php if($min->pat_BarthelGroomingDischarge=="0"){echo "SELECTED";}?>>Needs help with personal care</option>
									<option value="1" <?php if($min->pat_BarthelGroomingDischarge=="1"){echo "SELECTED";}?>>Independent (hair/face/teeth/shaving)</option>
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
									<option value="9">- Pre-Stroke -</option>
									<option value="0" <?php if($min->pat_BarthelMobilityPreStroke=="0"){echo "SELECTED";}?>>Immobile</option>
									<option value="1" <?php if($min->pat_BarthelMobilityPreStroke=="1"){echo "SELECTED";}?>>Wheelchair independent including corners etc</option>
									<option value="2" <?php if($min->pat_BarthelMobilityPreStroke=="2"){echo "SELECTED";}?>>Walks with help of one person (verbal or physical)</option>
									<option value="3" <?php if($min->pat_BarthelMobilityPreStroke=="3"){echo "SELECTED";}?>>Independent (may use stick, etc)</option>
								</select>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLAtDischargeMobility" id="">
									<option value="9">- At Discharge -</option>
									<option value="0" <?php if($min->pat_BarthelMobilityDischarge=="0"){echo "SELECTED";}?>>Immobile</option>
									<option value="1" <?php if($min->pat_BarthelMobilityDischarge=="1"){echo "SELECTED";}?>>Wheelchair independent including corners etc</option>
									<option value="2" <?php if($min->pat_BarthelMobilityDischarge=="2"){echo "SELECTED";}?>>Walks with help of one person (verbal or physical)</option>
									<option value="3" <?php if($min->pat_BarthelMobilityDischarge=="3"){echo "SELECTED";}?>>Independent (may use stick, etc)</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns text-left">
								<label for="" class="middle">Toilet Use</label>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLPreStrokeToilet" id="">
									<option value="9">- Pre-Stroke -</option>
									<option value="0" <?php if($min->pat_BarthelToiletPreStroke=="0"){echo "SELECTED";}?>>Dependent</option>
									<option value="1" <?php if($min->pat_BarthelToiletPreStroke=="1"){echo "SELECTED";}?>>Needs some help, can do something alone</option>
									<option value="2" <?php if($min->pat_BarthelToiletPreStroke=="2"){echo "SELECTED";}?>>Independent (on and off, wiping/dressing)</option>
								</select>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLAtDischargeToilet" id="">
									<option value="9">- At Discharge -</option>
									<option value="0" <?php if($min->pat_BarthelToiletDischarge=="0"){echo "SELECTED";}?>>Dependent</option>
									<option value="1" <?php if($min->pat_BarthelToiletDischarge=="1"){echo "SELECTED";}?>>Needs some help, can do something alone</option>
									<option value="2" <?php if($min->pat_BarthelToiletDischarge=="2"){echo "SELECTED";}?>>Independent (on and off, wiping/dressing)</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns text-left">
								<label for="" class="middle">Transfer</label>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLPreStrokeTransfer" id="">
									<option value="9">- Pre-Stroke -</option>
									<option value="0" <?php if($min->pat_BarthelTransferPreStroke=="0"){echo "SELECTED";}?>>Unable – no sitting balance</option>
									<option value="1" <?php if($min->pat_BarthelTransferPreStroke=="1"){echo "SELECTED";}?>>Major help (1 or 2 people, physical), can sit</option>
									<option value="2" <?php if($min->pat_BarthelTransferPreStroke=="2"){echo "SELECTED";}?>>Minor help (verbal or physical)t</option>
									<option value="3" <?php if($min->pat_BarthelTransferPreStroke=="3"){echo "SELECTED";}?>>Continent</option>
								</select>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLAtDischargeTransfer" id="">
									<option value="9">- At Discharge -</option>
									<option value="0" <?php if($min->pat_BarthelTransferDischarge=="0"){echo "SELECTED";}?>>Unable – no sitting balance</option>
									<option value="1" <?php if($min->pat_BarthelTransferDischarge=="1"){echo "SELECTED";}?>>Major help (1 or 2 people, physical), can sit</option>
									<option value="2" <?php if($min->pat_BarthelTransferDischarge=="2"){echo "SELECTED";}?>>Minor help (verbal or physical)t</option>
									<option value="3" <?php if($min->pat_BarthelTransferDischarge=="3"){echo "SELECTED";}?>>Continent</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns text-left">
								<label for="" class="middle">Bathing</label>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLPreStrokeBathing" id="">
									<option value="9">- Pre-Stroke -</option>
									<option value="0" <?php if($min->pat_BarthelBathingPreStroke=="0"){echo "SELECTED";}?>>Dependent</option>
									<option value="1" <?php if($min->pat_BarthelBathingPreStroke=="1"){echo "SELECTED";}?>>Independent</option>
									<!-- <option value="2">Continent</option> -->
								</select>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLAtDischargeBathing" id="">
									<option value="9">- At Discharge -</option>
									<option value="0" <?php if($min->pat_BarthelBathingDischarge=="0"){echo "SELECTED";}?>>Dependent</option>
									<option value="1" <?php if($min->pat_BarthelBathingDischarge=="1"){echo "SELECTED";}?>>Independent</option>
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
									<option value="9">- Pre-Stroke -</option>
									<option value="0" <?php if($min->pat_BarthelStairsPreStroke=="0"){echo "SELECTED";}?>>Unable</option>
									<option value="1" <?php if($min->pat_BarthelStairsPreStroke=="1"){echo "SELECTED";}?>>Needs help (verbal or physical)</option>
									<option value="2" <?php if($min->pat_BarthelStairsPreStroke=="2"){echo "SELECTED";}?>>Independent (up and down)</option>
								</select>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLAtDischargeStairs" id="">
									<option value="9">- At Discharge -</option>
									<option value="0" <?php if($min->pat_BarthelStairsDischarge=="0"){echo "SELECTED";}?>>Unable</option>
									<option value="1" <?php if($min->pat_BarthelStairsDischarge=="1"){echo "SELECTED";}?>>Needs help (verbal or physical)</option>
									<option value="2" <?php if($min->pat_BarthelStairsDischarge=="2"){echo "SELECTED";}?>>Independent (up and down)</option>
								</select>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Outcome at discharge</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slxOutcome" id="" required>
									<option value="">- Select -</option>
									<option value="1" <?php if($min->pat_outcome=="0"){echo "SELECTED";}?>>Alive</option>
									<option value="2" <?php if($min->pat_outcome=="1"){echo "SELECTED";}?>>Dead</option>
									<option value="3" <?php if($min->pat_outcome=="2"){echo "SELECTED";}?>>Unknown / MIA</option>
								</select>
								<span class="form-error">
						         Outcome is required.
						        </span>
							</div>
						</div>
						<?php endforeach;?>
						<hr>
						<div class="row">
							<div class="small-12 columns text-center">
								<input type="button" class="button small secondary" value="Back" onclick="location.href='<?php echo base_url();?>nurse/manage_patient'">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="large reveal" id="barthelDocumentation" data-reveal>
  <h1>Barthel's ADL Index</h1>
  <p><?php $this->load->view("documentation/barthel_view");?></p>
  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>