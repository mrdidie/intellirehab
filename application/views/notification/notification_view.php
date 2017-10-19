<div class="row">
	<div class="small-12 columns">
		<div class="row">
			<div class="small-12 columns">
				<div class="title-bar">
					<div class="title-bar-left">
						<div class="title-bar-title">
							<span>Item Need For Approval</span>
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
										<th>Part</th>
										<th>Session</th>
										<th>By</th>
										<th width="8">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $this->load->helper("general"); $bil = 0; foreach($maklumat_notification as $notify): $bil++;?>
										<tr>
											<td><?php echo $bil;?></td>
											<td><?php echo $notify->pat_researchID;?></td>
											<td><?php echo therapy_part($notify->part,1);?></td>
											<td><?php echo $notify->session;?></td>
											<td><?php echo $notify->nama_user;?></td>
											<td style="text-align:center;"><a href="<?php echo base_url();?>admin/view_clinical/<?php echo $notify->pat_researchID;?>/<?php echo $notify->session;?>/<?php echo therapy_part($notify->part,2);?>"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
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