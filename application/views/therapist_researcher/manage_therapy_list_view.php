<div class="row">
	<div class="small-12 columns">
		<div class="row">
			<div class="small-12 columns">
				<div class="title-bar">
					<div class="title-bar-left">
						<div class="title-bar-title">
							<div class="small-12 columns">
								<i class="fa fa-list" style="color:#fff;" aria-hidden="true"></i> <span>Therapy List</span>
							</div>
						</div>
					</div>
				</div>
				<div class="callout">
					<div class="row align-middle">
						<div class="small-6 columns">
							<div class="card" style="width: 300px;">
							  <div class="card-divider">
							    <h6><strong>INFORMATION</strong></h6>
							  </div>
							  <div class="card-section">
							  	<?php foreach($maklumat_patient as $pat): ?>
							    <div class="row">
							    	<div class="small-12 columns">
							    		<label for=""><small>RESEARCH ID / PATIENT ID</small></label>
							    		<strong><?php echo $pat->pat_researchID;?> / <?php echo $pat->pat_rn;?></strong>
							    	</div>
							    </div>
							    <div class="row">
							    	<div class="small-12 columns">
							    		<label for=""><small>NAME</small></label>
							    		<strong><?php echo ucfirst($pat->pat_firstname);?></strong>
							    	</div>
							    </div>
								<?php endforeach;?>
							  </div>
							</div>
						</div>
						<div class="small-6 columns" style="padding-top:11.8%;">
							<div class="float-right">
								<button class="button small" onclick="location.href='<?php echo base_url();?>researcher/patient_theraphy/<?php echo $action;?>/<?php echo $new_session;?>'">New Therapy</button>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="small-12 columns">
							<table width="100%" class="responsive">
								<thead>
									<tr>
										<td width="3">#</td>
										<td>Admission Date</td>
										<td>Follow up Date</td>
										<td>Session</td>
										<td>Complete</td>
										<td>Action</td>
									</tr>
								</thead>
								<tbody>
									<?php 

									$bil = 0; foreach($maklumat_patient as $patient): $bil++;

									$pession = $patient->session;
									if($pession==""){
										$pession = 1;
									}

									?>
										<tr>
											<td><?php echo $bil;?></td>
											<td><?php echo $patient->cli_19;?></td>
											<td><?php echo $patient->cli_19FollowUp;?></td>
											<td><?php echo $pession;?></td>
											<td>
												<a href="javascript:void(0);" rowid="<?php echo $bil;?>"><?php echo $percentage;?>% (<?php echo $atas;?>/<?php echo $bawah;?>)</a>
												<input type="hidden" class="cls_research_id" rowid="<?php echo $bil;?>" value="<?php echo $patient->pat_researchID;?>">
												<input type="hidden" class="cls_session" rowid="<?php echo $bil;?>" value="<?php echo $pession?>">
												<input type="hidden" class="cls_hdnURL" rowid="<?php echo $bil;?>" value="<?php echo base_url();?>">
											</td>
											<td width="10" style="text-align:center;"><a href="<?php echo base_url();?>researcher/patient_theraphy/<?php echo $patient->pat_researchID;?>/<?php echo $pession;?>"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
											<!-- <td width="10"><i class="fa fa-trash" aria-hidden="true"></i></td> -->
										</tr>
										<tr>
											<td colspan="6"><div id="research_<?php echo $bil;?>"></div></td>
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