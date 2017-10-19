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

		$shoulderPromExt1 = $shoulderFlex1 = $shoulderAdd1 = $shoulderInt1 = $shoulderExtFlex1 = $elbowExt1 = $forearmPro1 = $forearmSup1 = $wristFlex1 = $wristDorsi1 = $wristUlna1 = $thumbMP1 = $thumbIP1 = $thumbCMC1 = $thumbPalmar1 = $thumbOppo1 = $thumbBase1 = $indexMCP1 = $indexPIP1 = $indexDIP1 = $middleMCP1 = $middlePIP1 = $middleDIP1 = $ringMCP1 = "0000-00-00";

		foreach($maklumat_prom as $prom){

			$shoulderPromExt1 = $prom->shoulderExt;
			$shoulderFlex1 = $prom->shoulderFlex;
			$shoulderAdd1 = $prom->shoulderAdd;
			$shoulderInt1 = $prom->shoulderInt;
			$shoulderExtFlex1 = $prom->shoulderExtFlex;
			$elbowExt1 = $prom->elbowExt;
			$forearmPro1 = $prom->forearmPro;
			$forearmSup1 = $prom->forearmSup;
			$wristFlex1 = $prom->wristFlex;
			$wristDorsi1 = $prom->wristDorsi;
			$wristUlna1 = $prom->wristUlna;
			$thumbMP1 = $prom->thumbMP;
			$thumbIP1 = $prom->thumbIP;
			$thumbCMC1 = $prom->thumbCMC;
			$thumbPalmar1 = $prom->thumbPalmar;
			$thumbOppo1 = $prom->thumbOppo;
			$thumbBase1 = $prom->thumbBase;
			$indexMCP1 = $prom->indexMCP;
			$indexPIP1 = $prom->indexPIP;
			$indexDIP1 = $prom->indexDIP;
			$middleMCP1 = $prom->middleMCP;
			$middlePIP1 = $prom->middlePIP;
			$middleDIP1 = $prom->middleDIP;
			$ringMCP1 = $prom->ringMCP;

		}

		?>
		<div class="callout">
			<form action="<?php echo base_url();?><?php echo $module;?>/page_process_prom/<?php echo $researcherID;?>/<?php echo $session;?>" method="POST">
				<table width="100%" style="border:1px solid #222;text-align:center;font-size:14px;" cellspacing="0" colspacing="0">
					<tr>
						<td style="border:1px solid #222;text-align:center;" colspan="8">RANGE OF MOTION</td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;" colspan="3">INDICATE : R / L</td>
						<td style="border:1px solid #222;text-align:center;">DATE :</td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;" rowspan="5">Shoulder</td>
						<td style="border:1px solid #222;text-align:center;">0 - 50</td>
						<td style="border:1px solid #222;text-align:center;">Ext</td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDSExt1" value="<?php echo $shoulderPromExt1;?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;">0 - 180</td>
						<td style="border:1px solid #222;text-align:center;">Flex</td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDSFlex1" value="<?php echo $shoulderFlex1; ?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;">0 - 180</td>
						<td style="border:1px solid #222;text-align:center;">Add / Abd</td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDSAdd1" value="<?php echo $shoulderAdd1;?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;">0 - 90</td>
						<td style="border:1px solid #222;text-align:center;">Internal Rotation</td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDSIntRotate1" value="<?php echo $shoulderInt1;?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;">0 - 90</td>
						<td style="border:1px solid #222;text-align:center;">External Rotation</td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDSExtRotate1" value="<?php echo $shoulderExtFlex1;?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;">Elbow</td>
						<td style="border:1px solid #222;text-align:center;">0 - 160</td>
						<td style="border:1px solid #222;text-align:center;">Ext / Flex</td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDEExt1" value="<?php echo $elbowExt1;?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;" rowspan="2">Forearm</td>
						<td style="border:1px solid #222;text-align:center;">0 - 90</td>
						<td style="border:1px solid #222;text-align:center;">Pronation</td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDFPro1" value="<?php echo $forearmPro1;?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;">0 - 90</td>
						<td style="border:1px solid #222;text-align:center;">Supination</td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDFSupi1" value="<?php echo $forearmSup1;?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;" colspan="8">HAND</td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;" rowspan="3">Wrist</td>
						<td style="border:1px solid #222;text-align:center;">0 - 90</td>
						<td style="border:1px solid #222;text-align:center;">Flex</td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDWFlex1" value="<?php echo $wristFlex1;?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;">0 - 90</td>
						<td style="border:1px solid #222;text-align:center;">Dorsi Flexion</td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDWDorsiFlex1" value="<?php echo $wristDorsi1;?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;">0 - 30</td>
						<td style="border:1px solid #222;text-align:center;">Ulna / Radial Deviation</td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDWUlna1" value="<?php echo $wristUlna1;?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;" rowspan="6">Thumb</td>
						<td style="border:1px solid #222;text-align:center;">0 - 50</td>
						<td style="border:1px solid #222;text-align:center;">Ext / Flex MP</td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDTMP1" value="<?php echo $thumbMP1;?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;">0 - 80</td>
						<td style="border:1px solid #222;text-align:center;">Ext / Flex IP</td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDTIP1" value="<?php echo $thumbIP1;?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;">0 - 15</td>
						<td style="border:1px solid #222;text-align:center;">CMC Ext / Flex </td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDTCMC1" value="<?php echo $thumbCMC1;?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;">0 - 75</td>
						<td style="border:1px solid #222;text-align:center;">Palmar Abduction</td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDTPal1" value="<?php echo $thumbPalmar1;?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;">&nbsp;</td>
						<td style="border:1px solid #222;text-align:center;">Opposition : Thumb to tip 5th digit</td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDOppo1" value="<?php echo $thumbOppo1;?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;">&nbsp;</td>
						<td style="border:1px solid #222;text-align:center;">Thumb to base 5th digit</td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDT1" value="<?php echo $thumbBase1;?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;" rowspan="3">Index</td>
						<td style="border:1px solid #222;text-align:center;">0 - 90</td>
						<td style="border:1px solid #222;text-align:center;">MCP</td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDIMCP1" value="<?php echo $indexMCP1;?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;">0 - 110</td>
						<td style="border:1px solid #222;text-align:center;">PIP</td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDIPIP1" value="<?php echo $indexPIP1;?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;">0 - 90</td>
						<td style="border:1px solid #222;text-align:center;">DIP</td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDIDIP1" value="<?php echo $indexDIP1;?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;" rowspan="3">Middle</td>
						<td style="border:1px solid #222;text-align:center;">0 - 90</td>
						<td style="border:1px solid #222;text-align:center;">MCP</td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDMMCP1" value="<?php echo $middleMCP1;?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;">0 - 110</td>
						<td style="border:1px solid #222;text-align:center;">PIP</td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDMPIP1" value="<?php echo $middlePIP1;?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;">0 - 90</td>
						<td style="border:1px solid #222;text-align:center;">DIP</td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDMDIP1" value="<?php echo $middleDIP1;?>"></td>
					</tr>
					<tr>
						<td style="border:1px solid #222;text-align:center;">Ring</td>
						<td style="border:1px solid #222;text-align:center;">0 - 90</td>
						<td style="border:1px solid #222;text-align:center;">MCP</td>
						<td style="border:1px solid #222;text-align:center;"><input type="date" maxlength="10" name="inpDRMCP1" value="<?php echo $ringMCP1;?>"></td>
					</tr>
				</table>
				<div class="row">
					<div class="small-12 column" style="text-align:center;">
						<input type="hidden" name="hdnJenis" value="<?php echo $jenis;?>">
						<input type="hidden" name="hdnPanel" value="panel2c">
						<input type="submit" class="button small" value="Submit">
						<input type="reset" class="button small alert" value="Reset">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>