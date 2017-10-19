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
					<form action="<?php echo base_url();?>researcher/page_add_new_patient" method="POST" data-abide novalidate>
						<div class="row">
							<div class="small-2 columns">
						      <label for="middle-label" class="middle"><strong>RN (Patient ID)</strong> <span style="color:red;">*</span></label>
						    </div>
						    <div class="small-2 columns">
						      <input type="text" id="middle-label" name="inpPatRN" id="inpPatRNAddNew" class="inpPatRNAddNew" required>
						      <span class="form-error">
						         Patient ID is required.
						       </span>
						    </div>
							<div class="small-1 columns">
								<label for="" class="middle"><strong>D.O.B</strong> <span style="color:red;">*</span></label>
							</div>
							<div class="small-3 columns">
								<input type="date" name="inpPatDateOfBirth" id="inpPatDateOfBirth" required>
								<span class="dob_error"></span>
								<span class="form-error">
						         B.O.D is required.
						       </span>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Gender</strong> <span style="color:red;">*</span></label>
							</div>
							<div class="small-2 columns">
								<select name="slxPatGender" id="" required>
									<option value="">- Select -</option>
									<option value="male">Male</option>
									<option value="female">Female</option>
								</select>
								<span class="form-error">
							       Gender is required.
							    </span>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Research ID Number</strong> <span style="color:red;">*</span></label>
							</div>
							<div class="small-10 columns">
								<div class="input-group">
								    <span class="input-group-label">RID</span>
								    <input class="input-group-field" type="text" name="inpPatResearchID" id="inpPatResearchID" readonly>
								</div>
							</div>
						</div>
						<div class="row">
						    <div class="small-2 columns">
						      <label for="middle-label" class="middle"><strong>Source</strong> <span style="color:red;">*</span></label>
						    </div>
						    <div class="small-4 columns">
						      <select name="slxPatSource" id="" required>
						      	<option value="">- Select -</option>
						      	<option value="1">Hospital</option>
						      	<option value="2">GP Surgery</option>
						      	<option value="3">Other</option>
						      </select>
						      <span class="form-error">
						         Source is required.
						        </span>
						    </div>
						    <div class="small-6 columns">
						    	<input type="text" name="inpPatSourceDesc" placeholder="Specify Source" required>
						    	<span class="form-error">
						         Source specification is required.
						        </span>
						    </div>
						</div>
						<div class="row">
						    <div class="small-2 columns">
						      <label for="middle-label" class="middle"><strong>Source ID no. for patient.</strong> <span style="color:red;">*</span></label>
						    </div>
						    <div class="small-10 columns">
						      <input type="text" id="middle-label" class="float-left" name="inpPatSourceIDPatient" required pattern="[a-zA-Z0-9\s]+">
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
						      <input type="text" id="middle-label" class="float-left" name="inpPatSurname">
						    </div>
						</div>
						<div class="row">
						    <div class="small-2 columns">
						      <label for="middle-label" class="middle"><strong>Name</strong> <span style="color:red;">*</span></label>
						    </div>
						    <div class="small-10 columns">
						      <input type="text" id="middle-label" class="float-left" name="inpPatName" required>
						      <span class="form-error">
						         Patient name is required.
						       </span>
						    </div>
						</div>
						<hr>
						<div class="row">
						    <div class="small-2 columns">
						      <label for="middle-label" class="middle"><strong>Address</strong> <span style="color:red;">*</span></label>
						    </div>
						    <div class="small-10 columns">
						      <input type="text" id="middle-label" name="inpPatAddress" required>
						      <span class="form-error">
						         Address is required.
						        </span>
						    </div>
						</div>
						<div class="row">
						    <div class="small-2 columns">
						      <label for="middle-label" class="middle"></label>
						    </div>
						    <div class="small-10 columns">
						      <input type="text" id="middle-label" name="inpPatAddressV1">
						    </div>
						</div>
						<div class="row">
						    <div class="small-2 columns">
						      <label for="middle-label" class="middle"></label>
						    </div>
						    <div class="small-10 columns">
						      <input type="text" id="middle-label" name="inpPatAddressV2">
						    </div>
						</div>
						<div class="row">
						    <div class="small-2 columns">
						      <label for="middle-label" class="middle"><strong>Postcode</strong> <span style="color:red;">*</span></label>
						    </div>
						    <div class="small-4 columns">
						      <input type="text" id="middle-label" name="inpPatPostcode" required pattern="number">
						      <span class="form-error">
						         Postcode is required.
						        </span>
						    </div>
						    <div class="small-2 columns">
						      <label for="middle-label" class="middle"><strong>District</strong> <span style="color:red;">*</span></label>
						    </div>
						    <div class="small-4 columns">
						      <input type="text" id="middle-label" name="inpPatDistrict" required>
						      <span class="form-error">
						         District area is required.
						        </span>
						    </div>
						</div>
						<div class="row">
						    <div class="small-2 columns">
						      <label for="middle-label" class="middle"><strong>State</strong> <span style="color:red;">*</span></label>
						    </div>
						    <div class="small-4 columns float-left">
						      <input type="text" id="middle-label" name="inpPatState" required>
						      <span class="form-error">
						         State area is required.
						        </span>
						    </div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Contact No. (if known)</strong> </label>
							</div>
							<div class="small-10 columns">
								<input type="text" name="inpContactNoIfKnown" >
							</div>
						</div>
						<hr>
						<div class="row">
						    <div class="small-2 columns">
						      <label for="middle-label" class="middle"><strong>Ethnic Group</strong> <span style="color:red;">*</span></label>
						    </div>
						    <div class="small-4 columns">
						      <select name="slxPatRace" class="slxPatRace" required>
						      	<option value="">- Select -</option>
						      	<option value="M">Malay</option>
						      	<option value="C">Chinese</option>
						      	<option value="I">Indian</option>
						      	<option value="A">Asian Other</option>
						      	<option value="O">Other</option>
						      </select>
						      <span class="form-error">
						         Race is required.
						        </span>
						    </div>
						    <div class="small-6 columns slxPatRaceDesc">
						    	<input type="text" name="inpPatRaceDesc" placeholder="If Other, please specify">
						    </div>
						</div>
						<hr>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Highest Education</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slxPatHighEducation" id="" required>
									<option value="">- Select -</option>
									<option value="1">Post-graduate higher degree completed</option>
									<option value="2">Secondary school completed</option>
									<option value="3">No formal schooling</option>
									<option value="4">College/University completed</option>
									<option value="5">Primary school completed</option>
									<option value="6">Unknown</option>
								</select>
								<span class="form-error">
						         Education is required.
						        </span>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Employment (Over past 12 months)</strong></label>
							</div>
							<div class="small-4 columns">
								<select name="slxPatEmployment" id="" required>
									<option value="">- Select -</option>
									<option value="1">Working</option>
									<option value="2">Retired</option>
									<option value="3">Unemployed / Housewife</option>
									<option value="4">Disabled</option>
									<option value="5">Unknown</option>
								</select>
								<span class="form-error">
						         Employment is required.
						        </span>
							</div>
							<div class="small-6 columns">
								<input type="text" name="inpPatEmploymentDesc" id="inpPatEmploymentDesc" placeholder="If working, please specify">
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Cerebrovascular event diagnosed</strong></label>
							</div>
							<div class="small-10 columns">
								<select name="slxPat04" id="" required>
									<option value="">- Select -</option>
									<option value="1">Cerebral Infarction</option>
									<option value="2">Intracerebral Haemorrhage</option>
									<option value="3">Subarachnoid Haemorrhage</option>
									<option value="4">TIA</option>
									<option value="5">Other</option>
									<option value="6">Unknown</option>
								</select>
								<span class="form-error">
						         Cerebrovascular is required.
						        </span>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Presence of the following risk factors</strong></label>
							</div>
							<div class="small-4 columns">
								<input type="checkbox" name="chk05[]" value="1">&nbsp;<label for="" class="middle">Current Smoker</label><br>
								<input type="checkbox" name="chk05[]" value="2">&nbsp;<label for="" class="middle">Alcohol Abuse</label><br>
								<input type="checkbox" name="chk05[]" value="3">&nbsp;<label for="" class="middle">Obesity</label><br>
								<input type="checkbox" name="chk05[]" value="4">&nbsp;<label for="" class="middle">Hypertension</label><br>
								
								<input type="checkbox" name="chk05[]" class="chkPresenceOther" value="10">&nbsp;<label for="" class="middle">Other</label>
							</div>
							<div class="small-4 columns">
								<input type="checkbox" name="chk05[]" value="5">&nbsp;<label for="" class="middle">Hypercholestrolaemia</label><br>
								<input type="checkbox" name="chk05[]" value="6">&nbsp;<label for="" class="middle">Atrial fibrillation</label><br>
								<input type="checkbox" name="chk05[]" value="7">&nbsp;<label for="" class="middle">Diabetes mellitus</label><br>
								<input type="checkbox" name="chk05[]" value="8">&nbsp;<label for="" class="middle">Carotid stanosis</label><br>
								<input type="checkbox" name="chk05[]" value="9">&nbsp;<label for="" class="middle">Previous stroke and / or TIA</label>
								<input type="hidden" name="chk05[]" value="0" checked>
							</div>
							<div class="small-10 columns float-right chkOtherDesc">
								<input type="text" name="chk05Desc" id="chkPresenceOtherDesc" placeholder="If Other, please specify">
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Accomodation</strong></label>
							</div>
							<div class="small-5 columns">
								<select name="slx06Prestroke" id="">
									<option value="">- Pre-Stroke -</option>
									<option value="1">Independent housing</option>
									<option value="2">Warden controlled</option>
									<option value="3">Residential/Nursing home</option>
									<option value="4">Unknown</option>
								</select>
							</div>
							<div class="small-5 columns">
								<select name="slx06AtDischarge" id="">
									<option value="">- At Discharge -</option>
									<option value="1">Independent housing</option>
									<option value="2">Warden controlled</option>
									<option value="3">Residential/Nursing home</option>
									<option value="4">Unknown</option>
									<option value="5">Not Applicable (If patient died at discharge)</option>
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
									<option value="1">No symptoms at all</option>
									<option value="2">No significant disability</option>
									<option value="3">Slight disability</option>
									<option value="4">Moderate disability but able to walk unaided</option>
									<option value="5">Moderate disability but unable to walk without assistance</option>
									<option value="6">Severe disability</option>
									<option value="7">Unknown</option>
								</select>
							</div>
							<div class="small-3 columns">
								<select name="slx07OnAdmission" id="">
									<option value="">- On Admission -</option>
									<option value="1">No symptoms at all</option>
									<option value="2">No significant disability</option>
									<option value="3">Slight disability</option>
									<option value="4">Moderate disability but able to walk unaided</option>
									<option value="5">Moderate disability but unable to walk without assistance</option>
									<option value="6">Severe disability</option>
									<option value="7">Unknown</option>
								</select>
							</div>
							<div class="small-4 columns">
								<select name="slx07AtDischarge" id="">
									<option value="">- At Discharge -</option>
									<option value="1">No symptoms at all</option>
									<option value="2">No significant disability</option>
									<option value="3">Slight disability</option>
									<option value="4">Moderate disability but able to walk unaided</option>
									<option value="5">Moderate disability but unable to walk without assistance</option>
									<option value="6">Severe disability</option>
									<option value="7">Unknown</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><u>B. Barthel's ADL Index </u> <a data-toggle="barthelDocumentation"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label>
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
									<option value="">- Pre-Stroke -</option>
									<option value="0">Incontinent (or needs to be given enemata)</option>
									<option value="1">Occasional accident (once/week)</option>
									<option value="2">Continent</option>
								</select>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLAtDischargeBowel" id="">
									<option value="">- At Discharge -</option>
									<option value="0">Incontinent (or needs to be given enemata)</option>
									<option value="1">Occasional accident (once/week)</option>
									<option value="2">Continent</option>
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
									<option value="0">Unable/dependent</option>
									<option value="1">Needs help (e.g. food cutting)</option>
									<option value="2">Independent (food in reach)</option>
								</select>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLAtDischargeFeeding" id="">
									<option value="">- At Discharge -</option>
									<option value="0">Unable/dependent</option>
									<option value="1">Needs help (e.g. food cutting)</option>
									<option value="2">Independent (food in reach)</option>
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
									<option value="0">Incontinent or catheterized</option>
									<option value="1">Occasional accident (max once per 24 hours)</option>
									<option value="2">Continent</option>
								</select>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLAtDischargeBladder" id="">
									<option value="">- At Discharge -</option>
									<option value="0">Incontinent or catheterized</option>
									<option value="1">Occasional accident (max once per 24 hours)</option>
									<option value="2">Continent</option>
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
									<option value="0">Dependent</option>
									<option value="1">Need helps, can do half unaided</option>
									<option value="2">Independent (including buttons, zips, laces, etc)</option>
								</select>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLAtDischargeDressing" id="">
									<option value="">- At Discharge -</option>
									<option value="0">Dependent</option>
									<option value="1">Need helps, can do half unaided</option>
									<option value="2">Independent (including buttons, zips, laces, etc)</option>
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
									<option value="0">Needs help with personal care</option>
									<option value="1">Independent (hair/face/teeth/shaving)</option>
									<!-- <option value="2">Continent</option> -->
								</select>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLAtDischargeGrooming" id="">
									<option value="">- At Discharge -</option>
									<option value="0">Needs help with personal care</option>
									<option value="1">Independent (hair/face/teeth/shaving)</option>
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
									<option value="0">Immobile</option>
									<option value="1">Wheelchair independent including corners etc</option>
									<option value="2">Walks with help of one person (verbal or physical)</option>
									<option value="3">Independent (may use stick, etc)</option>
								</select>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLAtDischargeMobility" id="">
									<option value="">- At Discharge -</option>
									<option value="0">Immobile</option>
									<option value="1">Wheelchair independent including corners etc</option>
									<option value="2">Walks with help of one person (verbal or physical)</option>
									<option value="3">Independent (may use stick, etc)</option>
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
									<option value="0">Dependent</option>
									<option value="1">Needs some help, can do something alone</option>
									<option value="2">Independent (on and off, wiping/dressing)</option>
								</select>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLAtDischargeToilet" id="">
									<option value="">- At Discharge -</option>
									<option value="0">Dependent</option>
									<option value="1">Needs some help, can do something alone</option>
									<option value="2">Independent (on and off, wiping/dressing)</option>
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
									<option value="0">Unable – no sitting balance</option>
									<option value="1">Major help (1 or 2 people, physical), can sit</option>
									<option value="2">Minor help (verbal or physical)t</option>
									<option value="3">Continent</option>
								</select>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLAtDischargeTransfer" id="">
									<option value="">- At Discharge -</option>
									<option value="0">Unable – no sitting balance</option>
									<option value="1">Major help (1 or 2 people, physical), can sit</option>
									<option value="2">Minor help (verbal or physical)t</option>
									<option value="3">Continent</option>
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
									<option value="0">Dependent</option>
									<option value="1">Independent</option>
									<!-- <option value="2">Continent</option> -->
								</select>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLAtDischargeBathing" id="">
									<option value="">- At Discharge -</option>
									<option value="0">Dependent</option>
									<option value="1">Independent</option>
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
									<option value="0">Unable</option>
									<option value="1">Needs help (verbal or physical)</option>
									<option value="2">Independent (up and down)</option>
								</select>
							</div>
							<div class="small-5 columns text-center">
								<select name="slxBarthelADLAtDischargeStairs" id="">
									<option value="">- At Discharge -</option>
									<option value="0">Unable</option>
									<option value="1">Needs help (verbal or physical)</option>
									<option value="2">Independent (up and down)</option>
								</select>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Outcome at discharge</strong> <span style="color:red;">*</span></label>
							</div>
							<div class="small-10 columns">
								<select name="slxOutcome" id="" required>
									<option value="">- Select -</option>
									<option value="1">Alive</option>
									<option value="2">Dead</option>
									<option value="3">Unknown / MIA</option>
								</select>
								<span class="form-error">
						         Outcome is required.
						        </span>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Date of data entry</strong></label>
							</div>
							<div class="small-4 columns">
								<input type="text" value="<?php echo date("d/m/Y");?>" readonly>
							</div>
							<div class="small-2 columns">
								<label for="" class="middle"><strong>Initials</strong></label>
							</div>
							<div class="small-4 columns">
								<input type="text" value="<?php echo $_SESSION['nama_user'];?>" readonly>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="large-12 small-12 columns text-center">
								<input type="hidden" class="hdnURL" value="<?php echo base_url();?>">
								<input type="button" name="back_to_previous_page" value="Back" class="button small secondary">
								<input type="submit" name="submit_patient_details" value="Submit" class="button small btnSubmit">
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