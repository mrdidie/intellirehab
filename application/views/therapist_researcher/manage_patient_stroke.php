<div class="row">
	<div class="small-12 columns">
		<div class="title-bar">
			<div class="title-bar-left">
				<div class="title-bar-title">
					<div class="small-12 columns">
						<i class="fa fa-list" style="color:#fff;"></i> <span>Patient List</span>
					</div>
				</div>
			</div>
		</div>
		<div class="callout">
			<div class="row">
				<div class="small-12 columns">
					<table width="100%">
						<thead>
							<tr>
								<th width="3">#</th>
								<th>Research ID</th>
								<th>Patient ID</th>
								<th>Patient Name</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php

							date_default_timezone_set("Asia/Kuala_Lumpur");
							$bil=0;
							foreach($senarai_patient as $pat):
								$bil++;
							?>
								<tr>
									<td><?php echo $bil;?></td>
									<td><?php echo $pat->pat_researchID;?></td>
									<td><?php echo $pat->pat_rn;?></td>
									<td><?php echo $pat->pat_firstname;?></td>
									<td width="10" style="text-align:center;"><a href="<?php echo base_url();?>researcher/new_stroke/<?php echo $pat->pat_researchID;?>/<?php echo $pat->session;?>"><i class="fa fa-pencil"></i></a></td>
								</tr>

							<?php endforeach;?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>