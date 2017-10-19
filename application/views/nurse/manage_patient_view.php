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
					<!-- <div class="row">
						<div class="small-12 columns">
							<div class="float-right">
								<button class="button small" onclick="location.href='<?php echo base_url();?>researcher/new_patient'">New Patient</button>
							</div>
						</div>
					</div> -->
					<div class="row">
						<div class="small-12 columns">
							<table width="100%" class="responsive">
								<thead>
									<tr>
										<td width="3">#</td>
										<td>Research ID</td>
										<td>Patient ID</td>
										<td>Patient Name</td>
										<td>Action</td>
									</tr>
								</thead>
								<tbody>
									<?php $bil = 0; foreach($patient_list as $patient): $bil++;?>
										<tr>
											<td><?php echo $bil;?></td>
											<td><?php echo $patient->pat_researchID;?></td>
											<td><?php echo $patient->pat_rn;?></td>
											<td><?php echo ucfirst($patient->pat_firstname);?></td>
											<td style="text-align:center;width:10px;"><a href="<?php echo base_url();?>nurse/view_patient/<?php echo $patient->pat_researchID;?>/<?php echo $patient->session;?>/min"><i class="fa fa-search"></i></a></td>
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