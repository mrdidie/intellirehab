<div class="row">
	<div class="small-12 columns">
		<div class="title-bar">
			<div class="title-bar-left">
				<div class="title-bar-title">
					<span>D85 to D91</span>
				</div>
			</div>
		</div>
		<?php

		$foll86 = $bowel = $dressing = $grooming = $bathing = $toilet = $bladder = $feeding = $transfer = $mobility = $stairs = $telephone = $shopping = $preparefood = $housekeeping = $laundry = $transport = $medication = $finance = $hads = $foll88 = $fast = $mme = $csi = $val1 = $val2 = $val3 = $val4 = $val5 = $val6 = "";

		foreach($maklumat_follow2 as $follow2){
			$foll86 = $follow2->follow86;
			$bowel = $follow2->Bowel;
			$dressing = $follow2->Dressing;
			$grooming = $follow2->Grooming;
			$bathing = $follow2->Bathing;
			$toilet = $follow2->Toilet;
			$bladder = $follow2->Bladder;
			$feeding = $follow2->Feeding;
			$transfer = $follow2->Transfer;
			$mobility = $follow2->Mobility;
			$stairs = $follow2->Stairs;
			$telephone = $follow2->telephone;
			$shopping = $follow2->shopping;
			$preparefood = $follow2->preparefood;
			$housekeeping = $follow2->housekeeping;
			$laundry = $follow2->laundry;
			$transport = $follow2->transport;
			$medication = $follow2->medications;
			$finance = $follow2->finances;
			$hads = $follow2->hads;
			$foll88 = $follow2->follow88;
			$fast = $follow2->fast;
			$mme = $follow2->mme;
			$csi = $follow2->csi;
		}


		foreach($followup85 as $val85){
			if($val85->value=="1"){
				$val1 = "checked";
			} elseif($val85->value=="2"){
				$val2 = "checked";
			} elseif($val85->value=="3"){
				$val3 = "checked";
			} elseif($val85->value=="4"){
				$val4 = "checked";
			} elseif($val85->value=="5"){
				$val5 = "checked";
			} elseif($val85->value=="6"){
				$val6 = "checked";
			}
		}

		?>
		<div class="callout">
			<form action="<?php echo base_url();?>researcher/page_process_follow2/<?php echo $researchID;?>/<?php echo $session;?>" method="POST">
				<div class="row">
					<div class="small-2 columns">
						<label for="" class="middle"><strong>Patient is currently on the following medication(s)</strong></label>
					</div>
					<div class="small-5 columns">
						<input type="checkbox" name="chk85[]" <?php echo $val1;?> value="1">&nbsp;<label for="" class="middle">Anticoagulant drugs</label><br>
						<input type="checkbox" name="chk85[]" <?php echo $val2;?> value="2">&nbsp;<label for="" class="middle">Antiplatelet drugs</label><br>
						<input type="checkbox" name="chk85[]" <?php echo $val3;?> value="3">&nbsp;<label for="" class="middle">Cholestrol lowering drugs</label>
					</div>
					<div class="small-5 columns">
						<input type="checkbox" name="chk85[]" <?php echo $val4;?> value="4">&nbsp;<label for="" class="middle">Anti-hypertensive drugs</label><br>
						<input type="checkbox" name="chk85[]" <?php echo $val5;?> value="5">&nbsp;<label for="" class="middle">Antidiabetic drugs</label><br>
						<input type="checkbox" name="chk85[]" <?php echo $val6;?> value="6">&nbsp;<label for="" class="middle">Others</label>
						<input type="hidden" name="chk85[]" value="0" checked>
					</div>
				</div>
				<div class="row">
					<div class="small-2 columns">
						<label for="" class="middle"><strong>Physical functional status</strong></label>
					</div>
					<div class="small-10 columns">
						<select name="slx86" id="">
							<option value="9">- Select -</option>
							<option value="1" <?php if($foll86=="1"){echo "SELECTED";}?>>No symptoms at all</option>
							<option value="2" <?php if($foll86=="2"){echo "SELECTED";}?>>No significant disability despite symptoms</option>
							<option value="3" <?php if($foll86=="3"){echo "SELECTED";}?>>Slight disability</option>
							<option value="4" <?php if($foll86=="4"){echo "SELECTED";}?>>Moderate disability but able to walk unaided</option>
							<option value="5" <?php if($foll86=="5"){echo "SELECTED";}?>>Moderate disability but unable to walk without assistance</option>
							<option value="6" <?php if($foll86=="6"){echo "SELECTED";}?>>Severe disability</option>
							<option value="7" <?php if($foll86=="7"){echo "SELECTED";}?>>Unknown</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="small-12 columns">
						<label for="" class="middle"><strong>Barthel’s ADL index score <a data-toggle="barthelDocumentation"><i class="fa fa-question-circle" aria-hidden="true"></i></a></strong></label>
					</div>
				</div>
				<div class="row">
					<div class="small-2 columns text-left">
						<label for="" class="middle">Bowel</label>
					</div>
					<div class="small-4 columns text-center">
						<select name="slxBarthelBowel" id="">
							<option value="9">- Select-</option>
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
							<option value="9">- Select-</option>
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
							<option value="9">- Select-</option>
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
							<option value="9">- Select-</option>
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
							<option value="9">- Select-</option>
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
							<option value="9">- Select-</option>
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
							<option value="9">- Select-</option>
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
							<option value="9">- Select-</option>
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
							<option value="9">- Select-</option>
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
							<option value="9">- Select-</option>
							<option value="0" <?php if($stairs=="0"){echo "SELECTED";}?>>Unable</option>
							<option value="1" <?php if($stairs=="1"){echo "SELECTED";}?>>Needs help (verbal or physical)</option>
							<option value="2" <?php if($stairs=="2"){echo "SELECTED";}?>>Independent (up and down)</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="small-12 columns">
						<label for="" class="middle"><strong>Lawton's IADL <a data-toggle="lawtonDocumentation"><i class="fa fa-question-circle" aria-hidden="true"></i></a></strong></label>
					</div>
				</div>
				<div class="row">
					<div class="small-4 columns">
						<label for="" class="middle">Using the telephone</label>
					</div>
					<div class="small-2 columns">
						<input type="text" name="inpTelephone" value="<?php echo $telephone;?>">
					</div>
					<div class="small-4 columns">
						<label for="" class="middle">Shopping</label>
					</div>
					<div class="small-2 columns">
						<input type="text" name="inpShopping" value="<?php echo $shopping;?>">
					</div>
				</div>
				<div class="row">
					<div class="small-4 columns">
						<label for="" class="middle">Preparing food</label>
					</div>
					<div class="small-2 columns">
						<input type="text" name="inpPreparingFood" value="<?php echo $preparefood;?>">
					</div>
					<div class="small-4 columns">
						<label for="" class="middle">Housekeeping</label>
					</div>
					<div class="small-2 columns">
						<input type="text" name="inpHousekeeping" value="<?php echo $housekeeping;?>">
					</div>
				</div>
				<div class="row">
					<div class="small-4 columns">
						<label for="" class="middle">Doing laundry</label>
					</div>
					<div class="small-2 columns">
						<input type="text" name="inpDoingLaundry" value="<?php echo $laundry;?>">
					</div>
					<div class="small-4 columns">
						<label for="" class="middle">Using Transportation</label>
					</div>
					<div class="small-2 columns">
						<input type="text" name="inpTransportation" value="<?php echo $transport;?>">
					</div>
				</div>
				<div class="row">
					<div class="small-4 columns">
						<label for="" class="middle">Handling Medication</label>
					</div>
					<div class="small-2 columns">
						<input type="text" name="inpHandlingMedication" value="<?php echo $medication;?>">
					</div>
					<div class="small-4 columns">
						<label for="" class="middle">Handling Finances</label>
					</div>
					<div class="small-2 columns">
						<input type="text" name="inpHandlingFinances" value="<?php echo $finance;?>">
					</div>
				</div>
				<div class="row">
					<div class="small-12 columns">
						<label for="" class="middle"><strong>Hospital Anxiety and Depression Scale (HADS) <a data-toggle="HADSDocumentation"><i class="fa fa-question-circle" aria-hidden="true"></i></a></strong></label>
					</div>
				</div>
				<div class="row">
					<div class="small-10 columns">
						<label for="" class="middle">HADS total score</label>
					</div>
					<div class="small-2 columns">
						<div class="input-group">
						  <input class="input-group-field" type="text" name="inpHADSTotalScore" value="<?php echo $hads;?>">
						  <div class="input-group-button">
						    <input type="submit" class="button secondary" value="/ 21">
						  </div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="small-12 columns">
						<label for="" class="middle"><strong>Functional Ambulation Categories (FAC) <a data-toggle="FACDocumentation"><i class="fa fa-question-circle" aria-hidden="true"></i></a></strong></label>
					</div>
				</div>
				<div class="row">
					<div class="small-2 columns">
						<label for="" class="middle">Ambulation</label>
					</div>
					<div class="small-10 columns">
						<select name="slx88" id="">
							<option value="9">- Select -</option>
							<option value="0" <?php if($foll88=="1"){echo "SELECTED";}?>>0 - Non functional (unable)</option>
							<option value="1" <?php if($foll88=="2"){echo "SELECTED";}?>>I - Dependent (level 2)</option>
							<option value="2" <?php if($foll88=="3"){echo "SELECTED";}?>>II - Dependent (level 1)</option>
							<option value="3" <?php if($foll88=="4"){echo "SELECTED";}?>>III - Dependent (supervision)</option>
							<option value="4" <?php if($foll88=="5"){echo "SELECTED";}?>>IV - Independent (ground level)</option>
							<option value="5" <?php if($foll88=="6"){echo "SELECTED";}?>>V - Independent</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="small-12 columns">
						<label for="" class="middle"><strong>Frenchy Aphasia Screening Test (FAST) <a data-toggle="FASTDocumentation"><i class="fa fa-question-circle" aria-hidden="true"></i></a></strong></label>
					</div>
				</div>
				<div class="row">
					<div class="small-10 columns">
						<label for="" class="middle">FAST total score</label>
					</div>
					<div class="small-2 columns">
						<div class="input-group">
						  <input class="input-group-field" type="text" name="inpFastScore" value="<?php echo $fast;?>">
						  <div class="input-group-button">
						    <input type="submit" class="button secondary" value="/ 13">
						  </div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="small-12 columns">
						<label for="" class="middle"><strong>Mini-mental State Examination (MMSE) <a data-toggle="MMSEDocumentation"><i class="fa fa-question-circle" aria-hidden="true"></i></a></strong></label>
					</div>
				</div>
				<div class="row">
					<div class="small-10 columns">
						<label for="" class="middle">Memory and orientation</label>
					</div>
					<div class="small-2 columns">
						<div class="input-group">
						  <input class="input-group-field" type="text" name="inpMMSEScore" value="<?php echo $mme;?>">
						  <div class="input-group-button">
						    <input type="submit" class="button secondary" value="/ 30">
						  </div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="small-12 columns">
						<label for="" class="middle"><strong>Carer's well-being assessment : <br> </strong></label>
						<span>If patient has a regular, primary caregiver</span>
					</div>
				</div>
				<div class="row">
					<div class="small-12 columns">
						<label for="" class="middle"><strong>Caregiver Strain Index (CSI) <a data-toggle="CSIDocumentation"><i class="fa fa-question-circle" aria-hidden="true"></i></a></strong></label>
					</div>
				</div>
				<div class="row">
					<div class="small-10 columns">
						<label for="" class="middle">CSI total score</label>
					</div>
					<div class="small-2 columns">
						<div class="input-group">
						  <input class="input-group-field" type="text" name="inpCSIScore" value="<?php echo $csi;?>">
						  <div class="input-group-button">
						    <input type="submit" class="button secondary" value="/ 13">
						  </div>
						</div>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="large-12 small-12 columns text-center">
						<input type="hidden" name="hdnPanel" value="panel2c">
						<input type="hidden" class="hdnURL" value="<?php echo base_url();?>">
						<input type="button" name="back_to_previous_page" value="Back" class="button small secondary">
						<input type="submit" name="submit_patient_details" value="Submit" class="button small">
					</div>
				</div>
			</form>
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

<div class="large reveal" id="lawtonDocumentation" data-reveal>
  <h1>Lawton's IADL </h1>
  <p><?php $this->load->view("documentation/lawton_view");?></p>
  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<div class="large reveal" id="HADSDocumentation" data-reveal>
  <h1>Hospital Anxiety and Depression Scale (HADS)</h1>
  <p><?php $this->load->view("documentation/hads_view");?></p>
  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<div class="large reveal" id="FACDocumentation" data-reveal>
  <h1>Functional Ambulation Categories (FAC)</h1>
  <p><?php $this->load->view("documentation/fac_view");?></p>
  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<div class="large reveal" id="FASTDocumentation" data-reveal>
  <h1>Frenchy Aphasia Screening Test (FAST)</h1>
  <p><?php $this->load->view("documentation/fast_view");?></p>
  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<div class="large reveal" id="MMSEDocumentation" data-reveal>
  <h1>Mini-mental State Examination (MMSE)</h1>
  <p><?php $this->load->view("documentation/mmse_view");?></p>
  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<div class="large reveal" id="CSIDocumentation" data-reveal>
  <h1>Caregiver Strain Index (CSI)</h1>
  <p><?php $this->load->view("documentation/csi_view");?></p>
  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>