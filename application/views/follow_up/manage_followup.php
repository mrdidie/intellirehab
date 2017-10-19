<div class="row">
	<div class="small-12 columns">
		<div class="title-bar">
			<div class="title-bar-left">
				<div class="title-bar-title">
					<div class="small-12 columns">
						<span><i class="fa fa-list"></i> Follow Up</span>
					</div>
				</div>
			</div>
		</div>
		<div class="callout">
			<table width="100%">
				<thead>
					<tr>
						<th width="3">#</th>
						<th>Research ID</th>
						<th>Patient ID</th>
						<th>Patient Name</th>
						<th>Follow Up Date</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 

						date_default_timezone_set("Asia/Kuala_Lumpur");

						$today = date("Y-m-d");

						$bil=0; foreach($senarai_patient as $pat): $bil++;

						// $today_dt = strtotime($today);
						// $expire_dt = strtotime($pat->cli_19FollowUp);

						$followup_date = $pat->cli_19FollowUp;

						// echo $today."--".$followup_date;

						$status = $status_followup->kebenaran_followup($pat->pat_researchID,$pat->session);
						if($today >= $followup_date and $followup_date<>""){
							$pat_status = "Follow up available";
							$bukak = 1;
						} elseif($today < $followup_date and $followup_date<>"") {
							$pat_status = "Follow up not available";
							$bukak = 0;
						} elseif($followup_date=="") {
							$pat_status = "No Date available";
							$bukak = 0;
						}

					?>
						<tr>
							<td><?php echo $bil;?></td>
							<td><?php echo $pat->pat_researchID;?></td>
							<td><?php echo $pat->pat_rn;?></td>
							<td><?php echo ucfirst($pat->pat_firstname);?></td>
							<td><?php echo $pat->cli_19FollowUp;?></td>
							<td><?php echo $pat_status;?></td>
							<td width="10" style="text-align:center;">
								<?php if($bukak==1):?>
									<a href="<?php echo base_url();?>researcher/manage_followup/<?php echo $pat->pat_researchID;?>/<?php echo $pat->session;?>"><i class="fa fa-pencil"></i></a>
								<?php else:?>
									<i class="fa fa-times"></i>
									<!-- <a href="<?php echo base_url();?>researcher/manage_followup/<?php echo $pat->pat_researchID;?>/<?php echo $pat->session;?>"><i class="fa fa-pencil"></i></a> -->
								<?php endif;?>
							</td>
						</tr>
					<?php endforeach;?>
				</tbody>
			</table>
		</div>
	</div>
</div>