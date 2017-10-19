<style>
	input[type="number"], input[type="text"], input[type="date"]{
		width:160px;
	}
</style>
<div class="row">
	<div class="small-12 columns">
		<div class="title-bar">
			<div class="title-bar-left">
				<div class="title-bar-title">
					<span>AROM</span>
				</div>
			</div>
		</div>
		<?php

		$shoulderExt1 = $shoulderExt2 = $shoulderExt3 = $shoulderExt4 = $shoulderFlex1 = $shoulderFlex2 = $shoulderFlex3 = $shoulderFlex4 = $shoulderAdd1 = $shoulderAdd2 = $shoulderAdd3 = $shoulderAdd4 = $shoulderInt1 = $shoulderInt2 = $shoulderInt3 = $shoulderInt4 = $shoulderExtFlex1 = $shoulderExtFlex2 = $shoulderExtFlex3 = $shoulderExtFlex4 = $elbowExt1 = $elbowExt2 = $elbowExt3 = $elbowExt4 = $forearmPro1 = $forearmPro2 = $forearmPro3 = $forearmPro4 = $forearmSup1 = $forearmSup2 = $forearmSup3 = $forearmSup4 = $wristFlex1 = $wristFlex2 = $wristFlex3 = $wristFlex4 = $wristDorsi1 = $wristDorsi2 = $wristDorsi3 = $wristDorsi4 = $wristUlna1 = $wristUlna2 = $wristUlna3 = $wristUlna4 = $thumbMP1 = $thumbMP2 = $thumbMP3 = $thumbMP4 = $thumbIP1 = $thumbIP2 = $thumbIP3 = $thumbIP4 = $thumbCMC1 = $thumbCMC2 = $thumbCMC3 = $thumbCMC4 = $thumbPalmar1 = $thumbPalmar2 = $thumbPalmar3 = $thumbPalmar4 = $thumbOppo1 = $thumbOppo2 = $thumbOppo3 = $thumbOppo4 = $thumbBase1 = $thumbBase2 = $thumbBase3 = $thumbBase4 = $indexMCP1 = $indexMCP2 = $indexMCP3 = $indexMCP4 = $indexPIP1 = $indexPIP2 = $indexPIP3 = $indexPIP4 = $indexDIP1 = $indexDIP2 = $indexDIP3 = $indexDIP4 = $middleMCP1 = $middleMCP2 = $middleMCP3 = $middleMCP4 = $middlePIP1 = $middlePIP2 = $middlePIP3 = $middlePIP4 = $middleDIP1 = $middleDIP2 = $middleDIP3 = $middleDIP4 = $ringMCP1 = $ringMCP2 = $ringMCP3 = $ringMCP4 = "0000-00-00";

		foreach($maklumat_arom as $arom){

			$shoulderExt1 = $arom->shoulderExt1;
			$shoulderExt2 = $arom->shoulderExt2;
			$shoulderExt3 = $arom->shoulderExt3;
			$shoulderExt4 = $arom->shoulderExt4;
			$shoulderFlex1 = $arom->shoulderFlex1;
			$shoulderFlex2 = $arom->shoulderFlex2;
			$shoulderFlex3 = $arom->shoulderFlex3;
			$shoulderFlex4 = $arom->shoulderFlex4;
			$shoulderAdd1 = $arom->shoulderAdd1;
			$shoulderAdd2 = $arom->shoulderAdd2;
			$shoulderAdd3 = $arom->shoulderAdd3;
			$shoulderAdd4 = $arom->shoulderAdd4;
			$shoulderInt1 = $arom->shoulderInt1;
			$shoulderInt2 = $arom->shoulderInt2;
			$shoulderInt3 = $arom->shoulderInt3;
			$shoulderInt4 = $arom->shoulderInt4;
			$shoulderExtFlex1 = $arom->shoulderExtFlex1;
			$shoulderExtFlex2 = $arom->shoulderExtFlex2;
			$shoulderExtFlex3 = $arom->shoulderExtFlex3;
			$shoulderExtFlex4 = $arom->shoulderExtFlex4;
			$elbowExt1 = $arom->elbowExt1;
			$elbowExt2 = $arom->elbowExt2;
			$elbowExt3 = $arom->elbowExt3;
			$elbowExt4 = $arom->elbowExt4;
			$forearmPro1 = $arom->forearmPro1;
			$forearmPro2 = $arom->forearmPro2;
			$forearmPro3 = $arom->forearmPro3;
			$forearmPro4 = $arom->forearmPro4;
			$forearmSup1 = $arom->forearmSup1;
			$forearmSup2 = $arom->forearmSup2;
			$forearmSup3 = $arom->forearmSup3;
			$forearmSup4 = $arom->forearmSup4;
			$wristFlex1 = $arom->wristFlex1;
			$wristFlex2 = $arom->wristFlex2;
			$wristFlex3 = $arom->wristFlex3;
			$wristFlex4 = $arom->wristFlex4;
			$wristDorsi1 = $arom->wristDorsi1;
			$wristDorsi2 = $arom->wristDorsi2;
			$wristDorsi3 = $arom->wristDorsi3;
			$wristDorsi4 = $arom->wristDorsi4;
			$wristUlna1 = $arom->wristUlna1;
			$wristUlna2 = $arom->wristUlna2;
			$wristUlna3 = $arom->wristUlna3;
			$wristUlna4 = $arom->wristUlna4;
			$thumbMP1 = $arom->thumbMP1;
			$thumbMP2 = $arom->thumbMP2;
			$thumbMP3 = $arom->thumbMP3;
			$thumbMP4 = $arom->thumbMP4;
			$thumbIP1 = $arom->thumbIP1;
			$thumbIP2 = $arom->thumbIP2;
			$thumbIP3 = $arom->thumbIP3;
			$thumbIP4 = $arom->thumbIP4;
			$thumbCMC1 = $arom->thumbCMC1;
			$thumbCMC2 = $arom->thumbCMC2;
			$thumbCMC3 = $arom->thumbCMC3;
			$thumbCMC4 = $arom->thumbCMC4;
			$thumbPalmar1 = $arom->thumbPalmar1;
			$thumbPalmar2 = $arom->thumbPalmar2;
			$thumbPalmar3 = $arom->thumbPalmar3;
			$thumbPalmar4 = $arom->thumbPalmar4;
			$thumbOppo1 = $arom->thumbOppo1;
			$thumbOppo2 = $arom->thumbOppo2;
			$thumbOppo3 = $arom->thumbOppo3;
			$thumbOppo4 = $arom->thumbOppo4;
			$thumbBase1 = $arom->thumbBase1;
			$thumbBase2 = $arom->thumbBase2;
			$thumbBase3 = $arom->thumbBase3;
			$thumbBase4 = $arom->thumbBase4;
			$indexMCP1 = $arom->indexMCP1;
			$indexMCP2 = $arom->indexMCP2;
			$indexMCP3 = $arom->indexMCP3;
			$indexMCP4 = $arom->indexMCP4;
			$indexPIP1 = $arom->indexPIP1;
			$indexPIP2 = $arom->indexPIP2;
			$indexPIP3 = $arom->indexPIP3;
			$indexPIP4 = $arom->indexPIP4;
			$indexDIP1 = $arom->indexDIP1;
			$indexDIP2 = $arom->indexDIP2;
			$indexDIP3 = $arom->indexDIP3;
			$indexDIP4 = $arom->indexDIP4;
			$middleMCP1 = $arom->middleMCP1;
			$middleMCP2 = $arom->middleMCP2;
			$middleMCP3 = $arom->middleMCP3;
			$middleMCP4 = $arom->middleMCP4;
			$middlePIP1 = $arom->middlePIP1;
			$middlePIP2 = $arom->middlePIP2;
			$middlePIP3 = $arom->middlePIP3;
			$middlePIP4 = $arom->middlePIP4;
			$middleDIP1 = $arom->middleDIP1;
			$middleDIP2 = $arom->middleDIP2;
			$middleDIP3 = $arom->middleDIP3;
			$middleDIP4 = $arom->middleDIP4;
			$ringMCP1 = $arom->ringMCP1;
			$ringMCP2 = $arom->ringMCP2;
			$ringMCP3 = $arom->ringMCP3;
			$ringMCP4 = $arom->ringMCP4;

		}

		?>
		<div class="callout">
			<form action="<?php echo base_url();?><?php echo $module;?>/page_process_arom/<?php echo $researcherID;?>/<?php echo $session;?>" method="POST">
				<table width="100%" style="border:1px solid #222;text-align:center;font-size:14px;" cellspacing="0" colspacing="0">
					<tr>
						<td style="border:1px solid #222;text-align:center;" colspan="8">RANGE OF MOTION</td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;" colspan="3">INDICATE : R / L</td>
						<td style="border:1px solid #222;text-align:center;">DATE :</td>
						<td style="border:1px solid #222;text-align:center;">DATE :</td>
						<td style="border:1px solid #222;text-align:center;">DATE :</td>
						<td style="border:1px solid #222;text-align:center;">DATE :</td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;" rowspan="5">Shoulder</td>
						<td style="border:1px solid #222;text-align:center;">0 - 50</td>
						<td style="border:1px solid #222;text-align:center;">Ext</td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDSExt1" value="<?php echo $shoulderExt1;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDSExt2" value="<?php echo $shoulderExt2;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDSExt3" value="<?php echo $shoulderExt3;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDSExt4" value="<?php echo $shoulderExt4;?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;">0 - 180</td>
						<td style="border:1px solid #222;text-align:center;">Flex</td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDSFlex1" value="<?php echo $shoulderFlex1; ?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDSFlex2" value="<?php echo $shoulderFlex2; ?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDSFlex3" value="<?php echo $shoulderFlex3; ?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDSFlex4" value="<?php echo $shoulderFlex4; ?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;">0 - 180</td>
						<td style="border:1px solid #222;text-align:center;">Add / Abd</td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDSAdd1" value="<?php echo $shoulderAdd1;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDSAdd2" value="<?php echo $shoulderAdd2;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDSAdd3" value="<?php echo $shoulderAdd3;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDSAdd4" value="<?php echo $shoulderAdd4;?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;">0 - 90</td>
						<td style="border:1px solid #222;text-align:center;">Internal Rotation</td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDSIntRotate1" value="<?php echo $shoulderInt1;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDSIntRotate2" value="<?php echo $shoulderInt2;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDSIntRotate3" value="<?php echo $shoulderInt3;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDSIntRotate4" value="<?php echo $shoulderInt4;?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;">0 - 90</td>
						<td style="border:1px solid #222;text-align:center;">External Rotation</td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDSExtRotate1" value="<?php echo $shoulderExtFlex1;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDSExtRotate2" value="<?php echo $shoulderExtFlex2;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDSExtRotate3" value="<?php echo $shoulderExtFlex3;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDSExtRotate4" value="<?php echo $shoulderExtFlex4;?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;">Elbow</td>
						<td style="border:1px solid #222;text-align:center;">0 - 160</td>
						<td style="border:1px solid #222;text-align:center;">Ext / Flex</td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDEExt1" value="<?php echo $elbowExt1;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDEExt2" value="<?php echo $elbowExt2;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDEExt3" value="<?php echo $elbowExt3;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDEExt4" value="<?php echo $elbowExt4;?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;" rowspan="2">Forearm</td>
						<td style="border:1px solid #222;text-align:center;">0 - 90</td>
						<td style="border:1px solid #222;text-align:center;">Pronation</td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDFPro1" value="<?php echo $forearmPro1;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDFPro2" value="<?php echo $forearmPro2;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDFPro3" value="<?php echo $forearmPro3;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDFPro4" value="<?php echo $forearmPro4;?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;">0 - 90</td>
						<td style="border:1px solid #222;text-align:center;">Supination</td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDFSupi1" value="<?php echo $forearmSup1;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDFSupi2" value="<?php echo $forearmSup2;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDFSupi3" value="<?php echo $forearmSup3;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDFSupi4" value="<?php echo $forearmSup4;?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;" colspan="8">HAND</td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;" rowspan="3">Wrist</td>
						<td style="border:1px solid #222;text-align:center;">0 - 90</td>
						<td style="border:1px solid #222;text-align:center;">Flex</td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDWFlex1" value="<?php echo $wristFlex1;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDWFlex2" value="<?php echo $wristFlex2;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDWFlex3" value="<?php echo $wristFlex3;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDWFlex4" value="<?php echo $wristFlex4;?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;">0 - 90</td>
						<td style="border:1px solid #222;text-align:center;">Dorsi Flexion</td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDWDorsiFlex1" value="<?php echo $wristDorsi1;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDWDorsiFlex2" value="<?php echo $wristDorsi2;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDWDorsiFlex3" value="<?php echo $wristDorsi3;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDWDorsiFlex4" value="<?php echo $wristDorsi4;?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;">0 - 30</td>
						<td style="border:1px solid #222;text-align:center;">Ulna / Radial Deviation</td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDWUlna1" value="<?php echo $wristUlna1;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDWUlna2" value="<?php echo $wristUlna2;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDWUlna3" value="<?php echo $wristUlna3;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDWUlna4" value="<?php echo $wristUlna4;?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;" rowspan="6">Thumb</td>
						<td style="border:1px solid #222;text-align:center;">0 - 50</td>
						<td style="border:1px solid #222;text-align:center;">Ext / Flex MP</td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDTMP1" value="<?php echo $thumbMP1;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDTMP2" value="<?php echo $thumbMP2;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDTMP3" value="<?php echo $thumbMP3;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDTMP4" value="<?php echo $thumbMP4;?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;">0 - 80</td>
						<td style="border:1px solid #222;text-align:center;">Ext / Flex IP</td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDTIP1" value="<?php echo $thumbIP1;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDTIP2" value="<?php echo $thumbIP2;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDTIP3" value="<?php echo $thumbIP3;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDTIP4" value="<?php echo $thumbIP4;?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;">0 - 15</td>
						<td style="border:1px solid #222;text-align:center;">CMC Ext / Flex </td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDTCMC1" value="<?php echo $thumbCMC1;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDTCMC2" value="<?php echo $thumbCMC2;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDTCMC3" value="<?php echo $thumbCMC3;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDTCMC4" value="<?php echo $thumbCMC4;?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;">0 - 75</td>
						<td style="border:1px solid #222;text-align:center;">Palmar Abduction</td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDTPal1" value="<?php echo $thumbPalmar1;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDTPal2" value="<?php echo $thumbPalmar1;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDTPal3" value="<?php echo $thumbPalmar1;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDTPal4" value="<?php echo $thumbPalmar1;?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;">&nbsp;</td>
						<td style="border:1px solid #222;text-align:center;">Opposition : Thumb to tip 5th digit</td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDOppo1" value="<?php echo $thumbOppo1;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDOppo2" value="<?php echo $thumbOppo2;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDOppo3" value="<?php echo $thumbOppo3;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDOppo4" value="<?php echo $thumbOppo4;?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;">&nbsp;</td>
						<td style="border:1px solid #222;text-align:center;">Thumb to base 5th digit</td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDT1" value="<?php echo $thumbBase1;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDT2" value="<?php echo $thumbBase2;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDT3" value="<?php echo $thumbBase3;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDT4" value="<?php echo $thumbBase4;?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;" rowspan="3">Index</td>
						<td style="border:1px solid #222;text-align:center;">0 - 90</td>
						<td style="border:1px solid #222;text-align:center;">MCP</td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDIMCP1" value="<?php echo $indexMCP1;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDIMCP2" value="<?php echo $indexMCP2;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDIMCP3" value="<?php echo $indexMCP3;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDIMCP4" value="<?php echo $indexMCP4;?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;">0 - 110</td>
						<td style="border:1px solid #222;text-align:center;">PIP</td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDIPIP1" value="<?php echo $indexPIP1;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDIPIP2" value="<?php echo $indexPIP2;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDIPIP3" value="<?php echo $indexPIP3;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDIPIP4" value="<?php echo $indexPIP4;?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;">0 - 90</td>
						<td style="border:1px solid #222;text-align:center;">DIP</td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDIDIP1" value="<?php echo $indexDIP1;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDIDIP2" value="<?php echo $indexDIP2;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDIDIP3" value="<?php echo $indexDIP3;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDIDIP4" value="<?php echo $indexDIP4;?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;" rowspan="3">Middle</td>
						<td style="border:1px solid #222;text-align:center;">0 - 90</td>
						<td style="border:1px solid #222;text-align:center;">MCP</td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDMMCP1" value="<?php echo $middleMCP1;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDMMCP2" value="<?php echo $middleMCP2;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDMMCP3" value="<?php echo $middleMCP3;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDMMCP4" value="<?php echo $middleMCP4;?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;">0 - 110</td>
						<td style="border:1px solid #222;text-align:center;">PIP</td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDMPIP1" value="<?php echo $middlePIP1;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDMPIP2" value="<?php echo $middlePIP2;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDMPIP3" value="<?php echo $middlePIP3;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDMPIP4" value="<?php echo $middlePIP4;?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;">0 - 90</td>
						<td style="border:1px solid #222;text-align:center;">DIP</td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDMDIP1" value="<?php echo $middleDIP1;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDMDIP2" value="<?php echo $middleDIP2;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDMDIP3" value="<?php echo $middleDIP3;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDMDIP4" value="<?php echo $middleDIP4;?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;">Ring</td>
						<td style="border:1px solid #222;text-align:center;">0 - 90</td>
						<td style="border:1px solid #222;text-align:center;">MCP</td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDRMCP1" value="<?php echo $ringMCP1;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDRMCP2" value="<?php echo $ringMCP2;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDRMCP3" value="<?php echo $ringMCP3;?>"></td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDRMCP4" value="<?php echo $ringMCP4;?>"></td>
					</tr>
				</table>
				<div class="row">
					<div class="small-12 column" style="text-align:center;">
						<input type="hidden" name="hdnJenis" value="<?php echo $jenis;?>">
						<input type="hidden" name="hdnPanel" value="panel1c">
						<input type="submit" class="button small" value="Submit">
						<input type="reset" class="button small alert" value="Reset">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>