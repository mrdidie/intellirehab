<div class="row">
	<div class="small-12 columns">
		<div class="row">
			<div class="small-12 columns">
				<div class="title-bar">
					<div class="title-bar-left">
						<div class="title-bar-title">
							<div class="small-12 columns">
								<i class="fa fa-list" style="color:#fff;" aria-hidden="true"></i> <span>Patient List</span>
							</div>
						</div>
					</div>
				</div>
				<div class="callout">
					<div class="row">
						<div class="small-12 columns">
							<div class="float-right">
								<button class="button small" onclick="location.href='<?php echo base_url();?>researcher/new_patient'">New Patient</button>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="small-12 columns">
							<table width="100%" class="responsive">
								<thead>
									<tr>
										<td width="3">#</td>
										<td>Research ID</td>
										<td>Patient ID</td>
										<td>Patient Name</td>
										<td>Admission Date</td>
										<td>Follow up Date</td>
										<td>Progress</td>
										<td>Action</td>
									</tr>
								</thead>
								<tbody>
									<?php $bil = 0; foreach($maklumat_therapy as $therapy): $bil++;?>
										<tr>
											<td><?php echo $bil;?></td>
											<td>
												<?php echo $therapy->pat_researchID;?>
												
											</td>
											<td><?php echo $therapy->pat_rn;?></td>
											<td><?php echo ucfirst($therapy->pat_firstname);?></td>
											<td><?php echo $therapy->cli_19;?></td>
											<td><?php echo $therapy->cli_19FollowUp;?></td>
											<td>
												<a href="javascript:void(0);" rowid="<?php echo $bil;?>"><?php echo $percentage->kira_percentage($therapy->pat_researchID, $therapy->session);?>% (<?php echo $atas->kira_table_ada_isi($therapy->pat_researchID, $therapy->session);?>/<?php echo $bawah;?>)</a>
												<input type="hidden" class="cls_research_id" rowid="<?php echo $bil;?>" value="<?php echo $therapy->pat_researchID;?>">
												<input type="hidden" class="cls_session" rowid="<?php echo $bil;?>" value="<?php echo $therapy->session;?>">
												<input type="hidden" class="cls_hdnURL" rowid="<?php echo $bil;?>" value="<?php echo base_url();?>">
											</td>
											<!-- <td width="10" style="text-align:center;"><a href="<?php echo base_url();?>researcher/manage_therapy/<?php echo $therapy->pat_researchID;?>/<?php echo $therapy->session;?>"><i class="fa fa-pencil" aria-hidden="true"></i></a></td> -->
											<td width="10" style="text-align:center;"><a href="<?php echo base_url();?>researcher/patient_theraphy/<?php echo $therapy->pat_researchID;?>/<?php echo $therapy->session;?>"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
											<!-- <td width="10"><i class="fa fa-trash" aria-hidden="true"></i></td> -->
										</tr>
										<tr>
											<td colspan="10"><div id="research_<?php echo $bil;?>"></div></td>
										</tr>
									<?php endforeach;?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>