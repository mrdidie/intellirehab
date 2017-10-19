<style>
	/*input[type="number"], input[type="text"], input[type="date"]{
		width:20px;
	}*/
	table { 
	    border-spacing: 0;
	    border-collapse: separate;

	}
</style>
<div class="row">
	<div class="small-12 columns">
		<div class="title-bar">
			<div class="title-bar-left">
				<div class="title-bar-title">
					<span>MUSCLE STRENGTH GRADE AT AROM</span>
				</div>
			</div>
		</div>
		<?php

		$shoulderAbd = $shoulderAdd = $shoulderFlex = $shoulderExt = $elbowFlex = $elbowExt = $wristFlex = $wristExt = $rtHand = $fingerFlex = $fingerExt = $ltHand = $rtLateral = $rtPad = $rt3Jaw = $ltLateral = $ltPad = $lt3Jaw = $intactSharp = $intactDull = $intactLight = $intactDeep = $impairedSharp = $impairedDull = $impairedLight = $impairedDeep = $absentSharp = $absentDull = $absentLight = $absentDeep = $hookRt = $hookLt = $lateralRt = $lateralLt = $tipRt = $tipLt = $cylindricalRt = $cylindricalLt = $padRt = $padLt = $jawRt = $jawLt = $sphericalRt = $sphericalLt = $otherRemarks = $odemaRt = $odemaLt = $odemaRemark = $writingRt = $writingLt = $coinsRt = $coinsLt = $pinsRt = $pinsLt = $buttonRt = $buttonLt = $spoonRt = $spoonLt = $handRt = $handLt = $stereognosis = "";
		$chkHookRt = $chkHookLt = "";

		foreach($maklumat_msgarom as $msgarom){

			$shoulderAbd = $msgarom->shoulderAbd;
			$shoulderAdd = $msgarom->shoulderAdd;
			$shoulderFlex = $msgarom->shoulderFlex;
			$shoulderExt = $msgarom->shoulderExt;
			$elbowFlex = $msgarom->elbowFlex;
			$elbowExt = $msgarom->elbowExt;
			$wristFlex = $msgarom->wristFlex;
			$wristExt = $msgarom->wristExt;
			$rtHand = $msgarom->rtHand;
			$fingerFlex = $msgarom->fingerFlex;
			$fingerExt = $msgarom->fingerExt;
			$ltHand = $msgarom->ltHand;
			$rtLateral = $msgarom->rtLateral;
			$rtPad = $msgarom->rtPad;
			$rt3Jaw = $msgarom->rt3Jaw;
			$ltLateral = $msgarom->ltLateral;
			$ltPad = $msgarom->ltPad;
			$lt3Jaw = $msgarom->lt3Jaw;
			$intactSharp = $msgarom->intactSharp;
			$intactDull = $msgarom->intactDull;
			$intactLight = $msgarom->intactLight;
			$intactDeep = $msgarom->intactDeep;
			$impairedSharp = $msgarom->impairedSharp;
			$impairedDull = $msgarom->impairedDull;
			$impairedLight = $msgarom->impairedLight;
			$impairedDeep = $msgarom->impairedDeep;
			$absentSharp = $msgarom->absentSharp;
			$absentDull = $msgarom->absentDull; 
			$absentLight = $msgarom->absentLight;
			$absentDeep = $msgarom->absentDeep;
			$stereognosis = $msgarom->stereognosis;
			$hookRt = $msgarom->hookRt;
			if($hookRt==1){
				$chkHookRt = "checked";
			}
			$hookLt = $msgarom->hookLt;
			if($hookLt==1){
				$chkHookLt = "checked";
			}
			$lateralRt = $msgarom->lateralRt;
			if($lateralRt==1){
				$chkLateralRt = "checked";
			}
			$lateralLt = $msgarom->lateralLt;
			if($lateralLt==1){
				$chkLateralLt = "checked";
			}
			$tipRt = $msgarom->tipRt;
			$tipLt = $msgarom->tipLt;
			$cylindricalRt = $msgarom->cylindricalRt;
			$cylindricalLt = $msgarom->cylindricalLt;
			$padRt = $msgarom->padRt;
			$padLt = $msgarom->padLt;
			$jawRt = $msgarom->jawRt;
			$jawLt = $msgarom->jawLt;
			$sphericalRt = $msgarom->sphericalRt;
			$sphericalLt = $msgarom->sphericalLt;
			$otherRemarks = $msgarom->otherRemarks;
			$odemaRt = $msgarom->odemaRt;
			$odemaLt = $msgarom->odemaLt;
			$odemaRemark = $msgarom->odemaRemark;
			$writingRt = $msgarom->writingRt;
			$writingLt = $msgarom->writingLt;
			$coinsRt = $msgarom->coinsRt;
			$coinsLt = $msgarom->coinsLt;
			$pinsRt = $msgarom->pinsRt;
			$pinsLt = $msgarom->pinsLt;
			$buttonRt = $msgarom->buttonRt;
			$buttonLt = $msgarom->buttonLt;
			$spoonRt = $msgarom->spoonRt;
			$spoonLt = $msgarom->spoonLt;
			$handRt = $msgarom->handRt;
			$handLt = $msgarom->handLt;

		}

		?>
		<div class="callout">
			<form action="<?php echo base_url();?><?php echo $module;?>/page_process_msgarom/<?php echo $researcherID;?>/<?php echo $session;?>" method="POST">
				<table width="100%" style="border:1px solid #222;text-align:center;font-size:14px;" cellspacing="0" colspacing="0">
					<tr>
						<td style="border:1px solid #222;text-align:center;" colspan="10">MUSCLE STRENGTH</td>
					</tr>
					<tr>
						<td colspan="3" style="border:1px solid #222;text-align:center;width:50%">
							MUSCLE TESTING SCALE ( Right / Left )
						</td>
						<td colspan="3" style="border:1px solid #222;text-align:center;width:50%">
							Dynamometer
						</td>
					</tr>
					<tr>
						<td rowspan="2" style="border:1px solid #222;">Shoulder</td>
						<td style="border:1px solid #222;">	
							<div class="input-group">
							  <span class="input-group-label">Abd :</span>
							  <input class="input-group-field" type="number" min="0" max="5" style="width:60px;" name="inpSAbd" value="<?php echo $shoulderAbd;?>">
							  <span class="input-group-label">/5</span>
							</div>
						</td>
						<td style="border:1px solid #222;">
							<div class="input-group">
						      <span class="input-group-label">Add :</span>
							  <input class="input-group-field" type="number" min="0" max="5" style="width:60px;" name="inpSAdd" value="<?php echo $shoulderAdd;?>">
							  <span class="input-group-label">/5</span>
							</div>
						</td>
						<td rowspan="2" colspan="3" style="border:1px solid #222;text-align:center;">GRIP STRENGTH</td>
					</tr>
					<tr>
						<td style="border:1px solid #222;">	
							<div class="input-group">
							  <span class="input-group-label">Flex :</span>
							  <input class="input-group-field" type="number" min="0" max="5" style="width:60px;" name="inpSFlex" value="<?php echo $shoulderFlex;?>">
							  <span class="input-group-label">/5</span>
							</div>
						</td>
						<td style="border:1px solid #222;">
							<div class="input-group">
						      <span class="input-group-label">Ext :</span>
							  <input class="input-group-field" type="number" min="0" max="5" style="width:60px;" name="inpSExt" value="<?php echo $shoulderExt;?>">
							  <span class="input-group-label">/5</span>
							</div>
						</td>
					</tr>
					<tr>
						<td style="border:1px solid #222;">Elbow</td>
						<td style="border:1px solid #222;">
							<div class="input-group">
						      <span class="input-group-label">Flex :</span>
							  <input class="input-group-field" type="number" min="0" max="5" style="width:60px;" name="inpEFlex" value="<?php echo $elbowFlex;?>">
							  <span class="input-group-label">/5</span>
							</div>
						</td>
						<td style="border:1px solid #222;">
							<div class="input-group">
						      <span class="input-group-label">Ext :</span>
							  <input class="input-group-field" type="number" min="0" max="5" style="width:60px;" name="inpEExt" value="<?php echo $elbowExt;?>">
							  <span class="input-group-label">/5</span>
							</div>
						</td>
						<td style="border:1px solid #222;"></td>
						<td colspan="2" style="border:1px solid #222;"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;">Wrist</td>
						<td style="border:1px solid #222;">
							<div class="input-group">
						      <span class="input-group-label">Flex :</span>
							  <input class="input-group-field" type="number" min="0" max="5" style="width:60px;" name="inpWFlex" value="<?php echo $wristFlex;?>">
							  <span class="input-group-label">/5</span>
							</div>
						</td>
						<td style="border:1px solid #222;">
							<div class="input-group">
						      <span class="input-group-label">Ext :</span>
							  <input class="input-group-field" type="number" min="0" max="5" style="width:60px;" name="inpWExt" value="<?php echo $wristExt;?>">
							  <span class="input-group-label">/5</span>
							</div>
						</td>
						<td style="border:1px solid #222;">Rt Hand</td>
						<td colspan="2" style="border:1px solid #222;"><input type="text" name="inpRtHand" value="<?php echo $rtHand;?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;">Fingers</td>
						<td style="border:1px solid #222;">
							<div class="input-group">
						      <span class="input-group-label">Flex :</span>
							  <input class="input-group-field" type="number" min="0" max="5" style="width:60px;" name="inpFFlex" value="<?php echo $fingerFlex;?>">
							  <span class="input-group-label">/5</span>
							</div>
						</td>
						<td style="border:1px solid #222;">
							<div class="input-group">
						      <span class="input-group-label">Ext :</span>
							  <input class="input-group-field" type="number" min="0" max="5" style="width:60px;" name="inpFExt" value="<?php echo $fingerExt;?>">
							  <span class="input-group-label">/5</span>
							</div>
						</td>
						<td style="border:1px solid #222;">Lt Hand</td>
						<td colspan="2" style="border:1px solid #222;"><input type="text" name="inpLtHand" value="<?php echo $ltHand;?>"></td>
					</tr>
					<tr>
						<td colspan="6" style="border:1px solid #222;text-align:center;">PINCH STRENGTH</td>
					</tr>
					<tr>
						<td colspan="2" style="border:1px solid #222;text-align:center;"></td>
						<td style="border:1px solid #222;text-align:center;">Lateral</td>
						<td style="border:1px solid #222;text-align:center;">Pad</td>
						<td colspan="2" style="border:1px solid #222;text-align:center;">3-Jaw Chuck</td>
					</tr>
					<tr>
						<td colspan="2" style="border:1px solid #222;text-align:center;">Rt Hand</td>
						<td style="border:1px solid #222;text-align:center;"><input type="text" name="inpLRtHand" value="<?php echo $rtLateral;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="text" name="inpPRtHand" value="<?php echo $rtPad;?>"></td>
						<td colspan="2" style="border:1px solid #222;text-align:center;"><input type="text" name="inp3RtHand" value="<?php echo $rt3Jaw;?>"></td>
					</tr>
					<tr>
						<td colspan="2" style="border:1px solid #222;text-align:center;">Lt Hand</td>
						<td style="border:1px solid #222;text-align:center;"><input type="text" name="inpLLtHand" value="<?php echo $ltLateral;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="text" name="inpPLtHand" value="<?php echo $ltPad;?>"></td>
						<td colspan="2" style="border:1px solid #222;text-align:center;"><input type="text" name="inp3LtHand" value="<?php echo $lt3Jaw;?>"></td>
					</tr>
					<tr>
						<td colspan="6" style="border:1px solid #222;text-align:center;">SENSATION</td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;"></td>
						<td style="border:1px solid #222;text-align:center;">Sharp</td>
						<td style="border:1px solid #222;text-align:center;">Dull</td>
						<td style="border:1px solid #222;text-align:center;">Light Touch</td>
						<td style="border:1px solid #222;text-align:center;">Deep Touch</td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;">Intact</td>
						<td style="border:1px solid #222;text-align:center;"><input type="text" name="inpSIntact" value="<?php echo $intactSharp;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="text" name="inpDIntact" value="<?php echo $intactDull;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="text" name="inpLTIntact" value="<?php echo $intactLight;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="text" name="inpDTIntact" value="<?php echo $intactDeep;?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;">Impaired</td>
						<td style="border:1px solid #222;text-align:center;"><input type="text" name="inpSImpaired" value="<?php echo $impairedSharp;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="text" name="inpDImpaired" value="<?php echo $impairedDull;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="text" name="inpLTImpaired" value="<?php echo $impairedLight;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="text" name="inpDTImpaired" value="<?php echo $impairedDeep;?>"></td>
						<!-- <td style="border:1px solid #222;text-align:center;"></td> -->
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;">Absent</td>
						<td style="border:1px solid #222;text-align:center;"><input type="text" name="inpSAbsent" value="<?php echo $absentSharp;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="text" name="inpDAbsent" value="<?php echo $absentDull;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="text" name="inpLTAbsent" value="<?php echo $absentLight;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="text" name="inpDTAbsent" value="<?php echo $absentDeep;?>"></td>
						<!-- <td style="border:1px solid #222;text-align:center;"></td> -->
					</tr>
					<tr>
						<td colspan="6" style="border:1px solid #222;text-align:center;">Stereognosis</td>
					</tr>
					<tr>
						<td colspan="6" style="border:1px solid #222;text-align:center;"><textarea name="txtStereognosis" id="" cols="30" rows="10"><?php echo $stereognosis;?></textarea></td>
					</tr>
					<tr>
						<td colspan="6" style="border:1px solid #222;text-align:center;">PREHENSIVE PATTERN</td>
					</tr>
					<tr>
						<td colspan="6" style="border:1px solid #222;text-align:center;">Check which patient able to achieve (Please tick at the appropriate box)</td>
					</tr>
					<tr>
						<td colspan="2" style="border:1px solid #222;text-align:center;"></td>
						<td colspan="2" style="border:1px solid #222;text-align:center;">Right Hand</td>
						<td colspan="2" style="border:1px solid #222;text-align:center;">Left Hand</td>
					</tr>
					<tr>
						<td colspan="2" style="border:1px solid #222;text-align:center;">Hook grasp</td>
						<td colspan="2" style="border:1px solid #222;text-align:center;"><input class="middle" type="checkbox" name="chkRtHook" value="1" <?php echo $chkHookRt;?>></td>
						<td colspan="2" style="border:1px solid #222;text-align:center;"><input class="middle" type="checkbox" name="inpLtHook" value="1" <?php echo $chkHookLt;?>></td>
					</tr>
					<tr>
						<td colspan="2" style="border:1px solid #222;text-align:center;">Lateral Pinch</td>
						<td colspan="2" style="border:1px solid #222;text-align:center;"><input class="middle" type="checkbox" name="chkRtLateral" value="1"></td>
						<td colspan="2" style="border:1px solid #222;text-align:center;"><input class="middle" type="checkbox" name="chkLtLateral" value="1"></td>
					</tr>
					<tr>
						<td colspan="2" style="border:1px solid #222;text-align:center;">Tip Pinch</td>
						<td colspan="2" style="border:1px solid #222;text-align:center;"><input class="middle" type="checkbox" name="chkRtTip" value="1"></td>
						<td colspan="2" style="border:1px solid #222;text-align:center;"><input class="middle" type="checkbox" name="chkLtTip" value="1"></td>
					</tr>
					<tr>
						<td colspan="2" style="border:1px solid #222;text-align:center;">Cylindrical grasp</td>
						<td colspan="2" style="border:1px solid #222;text-align:center;"><input class="middle" type="checkbox" name="chkRtCylindrical" value="1"></td>
						<td colspan="2" style="border:1px solid #222;text-align:center;"><input class="middle" type="checkbox" name="chkLtCylindrical" value="1"></td>
					</tr>
					<tr>
						<td colspan="2" style="border:1px solid #222;text-align:center;">Pad pinch</td>
						<td colspan="2" style="border:1px solid #222;text-align:center;"><input class="middle" type="checkbox" name="chkRtPad" value="1"></td>
						<td colspan="2" style="border:1px solid #222;text-align:center;"><input class="middle" type="checkbox" name="chkLtPad" value="1"></td>
					</tr>
					<tr>
						<td colspan="2" style="border:1px solid #222;text-align:center;">3-Jaw Chuck</td>
						<td colspan="2" style="border:1px solid #222;text-align:center;"><input class="middle" type="checkbox" name="chkRt3Jaw" value="1"></td>
						<td colspan="2" style="border:1px solid #222;text-align:center;"><input class="middle" type="checkbox" name="chkLt3Jaw" value="1"></td>
					</tr>
					<tr>
						<td colspan="2" style="border:1px solid #222;text-align:center;">Spherical grasp</td>
						<td colspan="2" style="border:1px solid #222;text-align:center;"><input class="middle" type="checkbox" name="chkRtSpherical" value="1"></td>
						<td colspan="2" style="border:1px solid #222;text-align:center;"><input class="middle" type="checkbox" name="chkLtSpherical" value="1"></td>
					</tr>
					<tr>
						<td colspan="6" style="border:1px solid #222;">
							<span>Other Remarks</span>
							<textarea name="txtOtherRemarks" id="" cols="30" rows="10"></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="6" style="border:1px solid #222;text-align:center;">OEDEMA</td>
					</tr>
					<tr>
						<td colspan="2" style="border:1px solid #222;text-align:center;">Right Hand</td>
						<td colspan="2" style="border:1px solid #222;text-align:center;">Left Hand</td>
						<td colspan="2" style="border:1px solid #222;text-align:center;">Remarks</td>
					</tr>
					<tr>
						<td colspan="2" style="border:1px solid #222;text-align:center";"><textarea name="txtOdemaRt" id="" cols="30" rows="5"></textarea></td>
						<td colspan="2" style="border:1px solid #222;text-align:center";"><textarea name="txtOdemaLt" id="" cols="30" rows="5"></textarea></td>
						<td colspan="2" style="border:1px solid #222;text-align:center";"><textarea name="txtOdemaRemarks" id="" cols="30" rows="5"></textarea></td>
					</tr>
					<tr>
						<td colspan="6" style="border:1px solid #222;text-align:center";">FUNCTIONAL ACTIVITIES</td>
					</tr>
					<tr>
						<td colspan="2" style="border:1px solid #222;text-align:center;">&nbsp;</td>
						<td colspan="2" style="border:1px solid #222;text-align:center;">Right Hand</td>
						<td colspan="2" style="border:1px solid #222;text-align:center;">Left Hand</td>
					</tr>
					<tr>
						<td colspan="2" style="border:1px solid #222;text-align:center;">Writing</td>
						<td colspan="2" style="border:1px solid #222;text-align:center;"><input class="middle" type="checkbox" name="chkRtWriting"></td>
						<td colspan="2" style="border:1px solid #222;text-align:center;"><input class="middle" type="checkbox" name="chkLtWriting"></td>
					</tr>
					<tr>
						<td colspan="2" style="border:1px solid #222;text-align:center;">Pick Up Coins</td>
						<td colspan="2" style="border:1px solid #222;text-align:center;"><input class="middle" type="checkbox" name="chkRtCoins"></td>
						<td colspan="2" style="border:1px solid #222;text-align:center;"><input class="middle" type="checkbox" name="chkLtCoins"></td>
					</tr>
					<tr>
						<td colspan="2" style="border:1px solid #222;text-align:center;">Pick Up Pins</td>
						<td colspan="2" style="border:1px solid #222;text-align:center;"><input class="middle" type="checkbox" name="chkRtPins"></td>
						<td colspan="2" style="border:1px solid #222;text-align:center;"><input class="middle" type="checkbox" name="chkLtPins"></td>
					</tr>
					<tr>
						<td colspan="2" style="border:1px solid #222;text-align:center;">Buttoning</td>
						<td colspan="2" style="border:1px solid #222;text-align:center;"><input class="middle" type="checkbox" name="chkRtButton"></td>
						<td colspan="2" style="border:1px solid #222;text-align:center;"><input class="middle" type="checkbox" name="chkLtButton"></td>
					</tr>
					<tr>
						<td colspan="2" style="border:1px solid #222;text-align:center;">Feeding Spoon</td>
						<td colspan="2" style="border:1px solid #222;text-align:center;"><input class="middle" type="checkbox" name="chkRtSpoon"></td>
						<td colspan="2" style="border:1px solid #222;text-align:center;"><input class="middle" type="checkbox" name="chkLtSpoon"></td>
					</tr>
					<tr>
						<td colspan="2" style="border:1px solid #222;text-align:center;">Feeding Hand</td>
						<td colspan="2" style="border:1px solid #222;text-align:center;"><input class="middle" type="checkbox" name="chkRtFeeding"></td>
						<td colspan="2" style="border:1px solid #222;text-align:center;"><input class="middle" type="checkbox" name="chkLtFeeding"></td>
					</tr>
				</table>
				<div class="row">
					<div class="small-12 column" style="text-align:center;">
						<input type="hidden" name="hdnJenis" value="<?php echo $jenis;?>">
						<input type="hidden" name="hdnPanel" value="panel3c">
						<input type="submit" class="button small" value="Submit">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>