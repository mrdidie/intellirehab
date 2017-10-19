<div class="row">
	<div class="large-12 small-12 columns">
		<div class="title-bar">
			<div class="title-bar-left">
				<div class="title-bar-title">
					<div class="fa fa-user" style="color:#fff;" aria-hidden="true"></div> <span>USER LIST</span>
				</div>
			</div>
		</div>
		<div class="callout">
			<div class="row">
				<div class="large-12 small-12 columns">
					<div class="float-right"><button class="small button" onclick="location.href='<?php echo base_url();?>admin/new_user'">Add New User</button></div>
				</div>
			</div>
			<table width="100%">
				<thead>
					<tr>
						<th width="3">#</th>
						<th>Name</th>
						<th>Role</th>
						<th>Status</th>
						<th colspan="2">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 

						$bil=0; foreach($maklumat_user as $user): $bil++;

						$status_user = $user->status;

						if($status_user==9){
							$stats = "Active";
							$color = "success";
						} else {
							$stats = "Inactive";
							$color = "alert";
						}
						

					?>
						<tr>
							<td><?php echo $bil;?></td>
							<td><?php echo $user->nama_user;?></td>
							<td><?php echo $user->description;?></td>
							<td><span class="label <?php echo $color;?>" style="color:#fff;font-weight:bold;"><?php echo $stats?></span></td>
							<td width="10"><a href="<?php echo base_url();?>admin/edit_user/<?php echo $user->id;?>"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
							<td width="10"><a href="<?php echo base_url();?>admin/delete_user/<?php echo $user->id;?>" onclick="return confirm('Delete User?');"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
						</tr>
					<?php endforeach;?>
				</tbody>
			</table>
		</div>
	</div>
</div>