<div class="row">
	<div class="small-12 columns">
		<div class="title-bar">
			<div class="title-bar-left">
				<div class="title-bar-title">
					<span>D74 to D84</span>
				</div>
			</div>
		</div>
		<?php

			$patDied = $died = $val1 = $val2 = $val3 = $val4 = $val5 = $val6 = $val7 = $foll75 = $foll76 = $foll77 = $foll77a = $foll77aDesc = $foll78 = $foll79 = $foll80a = $foll80b = $foll81 = $foll81a = $foll8b = $foll82 = $foll83 = $foll84 = "";

			foreach($maklumat_follow1 as $follow1){

				$patDied = $follow1->pat_died;
				$foll75 = $follow1->follow75;
				$foll76 = $follow1->follow76;
				$foll77 = $follow1->follow77;
				$foll77a = $follow1->follow77a;
				$foll77aDesc = $follow1->follow77aDesc;
				$foll78 = $follow1->follow78;
				$foll79 = $follow1->follow79;
				$foll80a = $follow1->follow80a;
				$foll80b = $follow1->follow80b;
				$foll81 = $follow1->follow81;
				$foll81a = $follow1->follow81a;
				$foll81b = $follow1->follow81b;
				$foll82 = $follow1->follow82;
				$foll83 = $follow1->follow83;
				$foll84 = $follow1->follow84;

			}

			if($patDied==1){
				$died = "checked";
			}

			foreach($followup74 as $foll74){
				if($foll74->value==1){
					$val1 = "checked";
				} elseif($foll74->value==2){
					$val2 = "checked";
				} elseif($foll74->value==3){
					$val3 = "checked";
				} elseif($foll74->value==4){
					$val4 = "checked";
				} elseif($foll74->value==5){
					$val5 = "checked";
				} elseif($foll74->value==6){
					$val6 = "checked";
				} elseif($foll74->value==7){
					$val7 = "checked";
				}
			}

		?>
		<div class="callout">
			<form action="<?php echo base_url();?>researcher/page_process_follow1/<?php echo $researchID;?>/<?php echo $session;?>" method="POST">
				<div class="row">
					<div class="small-12 columns">
						<label for=""><u>Care Planning/Outcome/Hospital Discharge:</u></label>
						<label for=""><input type="checkbox" name="chkDie[]" <?php echo $died;?> class="checkDie" value="1"><input type="hidden" name="chkDie[]" value="0" checked>  If patient died in-patient within 28 days of stroke, data entry <u>END HERE</u> </label>
					</div>
				</div>
				<div class="row HideKalauDie">
					<div class="small-2 columns">
						<label for="" class="middle"><strong>During the length of hospital stay, the ward(s) where patient received care:</strong></label>
					</div>
					<div class="small-5 columns">
						<input type="checkbox" name="chk74[]" <?php echo $val1;?> value="1">&nbsp;<label for="" class="middle">Stroke Unit (all types)</label><br>
						<input type="checkbox" name="chk74[]" <?php echo $val2;?> value="2">&nbsp;<label for="" class="middle">General Medical ward</label><br>
						<input type="checkbox" name="chk74[]" <?php echo $val3;?> value="3">&nbsp;<label for="" class="middle">Neurology or Neurosurgical ward</label><br>
						<input type="checkbox" name="chk74[]" <?php echo $val4;?> value="4">&nbsp;<label for="" class="middle">Intensive Care Unit</label>
					</div>
					<div class="small-5 columns">
						<input type="checkbox" name="chk74[]" <?php echo $val5;?> value="5">&nbsp;<label for="" class="middle">Rehabilitation Unit (generic)</label><br>
						<input type="checkbox" name="chk74[]" <?php echo $val6;?> value="6">&nbsp;<label for="" class="middle">Other</label><br>
						<input type="checkbox" name="chk74[]" <?php echo $val7;?> value="7">&nbsp;<label for="" class="middle">Unknown</label>
						<input type="hidden" name="chk74[]" value="0" checked>
					</div>
				</div>
				<div class="row align-middle HideKalauDie">
					<div class="small-2 columns">
						<label for="" class="middle"><strong>If patient alive at discharge from the acute hospital, place of discharge:</strong></label>
					</div>
					<div class="small-10 columns">
						<select name="slx75" id="">
							<option value="">- Select -</option>
							<option value="1" <?php if($foll75=="1"){echo "SELECTED";}?>>Independent Housing</option>
							<option value="2" <?php if($foll75=="2"){echo "SELECTED";}?>>Warden controlled</option>
							<option value="3" <?php if($foll75=="3"){echo "SELECTED";}?>>Residential / nursing home</option>
							<option value="4" <?php if($foll75=="4"){echo "SELECTED";}?>>Transfer to another hospital</option>
							<option value="5" <?php if($foll75=="5"){echo "SELECTED";}?>>Patient still in-patient</option>
							<option value="6" <?php if($foll75=="6"){echo "SELECTED";}?>>Unknown</option>
						</select>
					</div>
				</div>
				<div class="row align-middle HideKalauDie">
					<div class="small-2 columns">
						<label for="" class="middle"><strong>If discharge to independent housing</strong></label>
					</div>
					<div class="small-10 columns">
						<select name="slx76" id="">
							<option value="">- Select -</option>
							<option value="1" <?php if($foll76=="1"){echo "SELECTED";}?>>Lives alone</option>
							<option value="2" <?php if($foll76=="2"){echo "SELECTED";}?>>Lives with spouse/partner/carer</option>
						</select>
					</div>
				</div>
				<div class="row align-middle HideKalauDie">
					<div class="small-2 columns">
						<label for="" class="middle"><strong>If discharge to independent housing, a home visit was performed before discharged</strong></label>
					</div>
					<div class="small-10 columns">
						<select name="slx77" id="">
							<option value="">- Select -</option>
							<option value="1" <?php if($foll77=="1"){echo "SELECTED";}?>>Yes</option>
							<option value="2" <?php if($foll77=="2"){echo "SELECTED";}?>>No</option>
							<option value="3" <?php if($foll77=="3"){echo "SELECTED";}?>>Unknown</option>
						</select>
					</div>
				</div>
				<div class="row HideKalauDie">
					<div class="small-2 columns">
						<label for="" class="middle"><strong>If No</strong></label>
					</div>
					<div class="small-6 columns">
						<select name="slx77a" id="">
							<option value="">- Select -</option>
							<option value="1" <?php if($foll77a=="1"){echo "SELECTED";}?>>Patient considered competent functionally</option>
							<option value="2" <?php if($foll77a=="2"){echo "SELECTED";}?>>Patient refused a home visit</option>
							<option value="3" <?php if($foll77a=="3"){echo "SELECTED";}?>>Other</option>
						</select>
					</div>
					<div class="small-4 columns">
						<input type="text" name="slx77aDesc" placeholder="If other, please specify" value="<?php echo $foll77aDesc;?>">
					</div>
				</div>
				<div class="row align-middle HideKalauDie">
					<div class="small-2 columns">
						<label for="" class="middle"><strong>If discharged to independent housing, skill required to care for patient were taught to patient and/or carer</strong></label>
					</div>
					<div class="small-10 columns">
						<select name="slx78" id="">
							<option value="">- Select -</option>
							<option value="1" <?php if($foll78=="1"){echo "SELECTED";}?>>Yes</option>
							<option value="2" <?php if($foll78=="2"){echo "SELECTED";}?>>No</option>
							<option value="3" <?php if($foll78=="3"){echo "SELECTED";}?>>Not applicable (competent functionally)</option>
						</select>
					</div>
				</div>
				<hr class="HideKalauDie">
				<div class="row align-middle HideKalauDie">
					<div class="small-2 columns">
						<label for="" class="middle"><strong>If patient a smoker prior to stroke, smoking cessation advice and.or counselling given</strong></label>
					</div>
					<div class="small-10 columns">
						<select name="slx79" id="">
							<option value="">- Select -</option>
							<option value="1" <?php if($foll79=="1"){echo "SELECTED";}?>>Yes</option>
							<option value="2" <?php if($foll79=="2"){echo "SELECTED";}?>>No</option>
							<option value="3" <?php if($foll79=="3"){echo "SELECTED";}?>>Not applicable (competent functionally)</option>
							<option value="4" <?php if($foll79=="4"){echo "SELECTED";}?>>Unknown</option>
						</select>
					</div>
				</div>
				<div class="row HideKalauDie">
					<div class="small-12 columns">
						<label for="" class="middle"><strong>During the length of hospital stay, there were documented evidence of discussion with the patient on :</strong></label>
					</div>
				</div>
				<div class="row align-middle HideKalauDie">
					<div class="small-2 columns">
						<label for="" class="middle">Diagnosis and prognosis</label>
					</div>
					<div class="small-10 columns">
						<select name="slx80a" id="">
							<option value="">- Select -</option>
							<option value="1" <?php if($foll80a=="1"){echo "SELECTED";}?>>Yes</option>
							<option value="2" <?php if($foll80a=="2"){echo "SELECTED";}?>>No</option>
							<option value="3" <?php if($foll80a=="3"){echo "SELECTED";}?>>Not applicable (competent functionally)</option>
						</select>
					</div>
				</div>
				<div class="row align-middle HideKalauDie">
					<div class="small-2 columns">
						<label for="" class="middle">Goals of therapy</label>
					</div>
					<div class="small-10 columns">
						<select name="slx80b" id="">
							<option value="">- Select -</option>
							<option value="1" <?php if($foll80b=="1"){echo "SELECTED";}?>>Yes</option>
							<option value="2" <?php if($foll80b=="2"){echo "SELECTED";}?>>No</option>
							<option value="3" <?php if($foll80b=="3"){echo "SELECTED";}?>>Not applicable (competent functionally)</option>
						</select>
					</div>
				</div>
				<div class="row HideKalauDie">
					<div class="small-2 columns">
						<label for="" class="middle"><strong>Is it have carer</strong></label>
					</div>
					<div class="small-10 columns">
						<select name="slx81" id="">
							<option value="">- Select -</option>
							<option value="1" <?php if($foll81=="1"){echo "SELECTED";}?>>Yes</option>
							<option value="2" <?php if($foll81=="2"){echo "SELECTED";}?>>No</option>
							<option value="3" <?php if($foll81=="3"){echo "SELECTED";}?>>Not applicable (competent functionally)</option>
						</select>
					</div>
				</div>
				<div class="row HideKalauDie">
					<div class="small-12 columns">
						<label for="" class="middle"><strong><u>If Yes</u></strong></label>
						<label for="" class="middle"><strong>During the length of hospital stay, there were documented evidence of discussion with the carer on :</strong></label>
					</div>
				</div>
				<div class="row align-middle HideKalauDie">
					<div class="small-2 columns">
						<label for="" class="middle">Diagnosis and prognosis</label>
					</div>
					<div class="small-10 columns">
						<select name="slx81b" id="">
							<option value="">- Select -</option>
							<option value="1" <?php if($foll81a=="1"){echo "SELECTED";}?>>Yes</option>
							<option value="2" <?php if($foll81a=="2"){echo "SELECTED";}?>>No</option>
							<option value="3" <?php if($foll81a=="3"){echo "SELECTED";}?>>Not applicable (competent functionally)</option>
						</select>
					</div>
				</div>
				<div class="row align-middle HideKalauDie">
					<div class="small-2 columns">
						<label for="" class="middle">Goals of therapy</label>
					</div>
					<div class="small-10 columns">
						<select name="slx81c" id="">
							<option value="">- Select -</option>
							<option value="1" <?php if($foll81b=="1"){echo "SELECTED";}?>>Yes</option>
							<option value="2" <?php if($foll81b=="2"){echo "SELECTED";}?>>No</option>
							<option value="3" <?php if($foll81b=="3"){echo "SELECTED";}?>>Unknown</option>
						</select>
					</div>
				</div>
				<div class="row align-middle HideKalauDie">
					<div class="small-2 columns">
						<label for="" class="middle">Patient/carer aware of the plan for follow-up after discharge</label>
					</div>
					<div class="small-10 columns">
						<select name="slx82" id="">
							<option value="">- Select -</option>
							<option value="1" <?php if($foll82=="1"){echo "SELECTED";}?>>Yes</option>
							<option value="2" <?php if($foll82=="2"){echo "SELECTED";}?>>No</option>
							<option value="3" <?php if($foll82=="3"){echo "SELECTED";}?>>Unknown</option>
							<option value="4" <?php if($foll82=="4"){echo "SELECTED";}?>>Not applicable (patient is still in-patient)</option>
						</select>
					</div>
				</div>
				<div class="row align-middle HideKalauDie">
					<div class="small-2 columns">
						<label for="" class="middle">Carer's needs were assessed separately</label>
					</div>
					<div class="small-10 columns">
						<select name="slx83" id="">
							<option value="">- Select -</option>
							<option value="1" <?php if($foll83=="1"){echo "SELECTED";}?>>Yes</option>
							<option value="2" <?php if($foll83=="2"){echo "SELECTED";}?>>No</option>
							<option value="3" <?php if($foll83=="3"){echo "SELECTED";}?>>Unknown</option>
						</select>
					</div>
				</div>
				<hr>
				<div class="row align-middle HideKalauDie">
					<div class="small-2 columns">
						<label for="" class="middle"><strong>GP had contacted patient in the first week after hospital discharge</strong></label>
					</div>
					<div class="small-10 columns">
						<select name="slx84" id="">
							<option value="">- Select -</option>
							<option value="1" <?php if($foll84=="1"){echo "SELECTED";}?>>Yes</option>
							<option value="2" <?php if($foll84=="2"){echo "SELECTED";}?>>No</option>
							<option value="3" <?php if($foll84=="3"){echo "SELECTED";}?>>No, but GP did not receive a hospital discharge summary by the day of discharge</option>
							<option value="4" <?php if($foll84=="4"){echo "SELECTED";}?>>Unknown</option>
						</select>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="large-12 small-12 columns text-center">
						<input type="hidden" name="hdnPanel" value="panel1c">
						<input type="hidden" class="hdnURL" value="<?php echo base_url();?>">
						<input type="button" name="back_to_previous_page" value="Back" class="button small secondary">
						<input type="submit" name="submit_patient_details" value="Submit" class="button small">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>