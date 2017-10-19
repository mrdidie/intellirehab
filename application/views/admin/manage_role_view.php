<div class="row">
	<div class="small-12 columns">
		<div class="row">
			<div class="small-12 columns">
				<div class="title-bar">
					<div class="title-bar-left">
						<div class="title-bar-title">
							<span>Role</span>
						</div>
					</div>
				</div>
				<div class="callout">
					<div class="row">
						<div class="small-12 columns">
							<span class="float-right">
								<button class="small button" onclick="location.href='<?php echo base_url();?>admin/new_role'">Add New Role</button>
							</span>
						</div>
						<div class="small-12 columns">
							<table width="100%">
								<thead>
									<tr>
										<th width="3">#</th>
										<th>Description</th>
										<th colspan="2">Action</th>
									</tr>
								</thead>
								<?php $bil=0; foreach($role_user as $role): $bil++;?>
									<tr>
										<td><?php echo $bil;?></td>
										<td><?php echo $role->description;?></td>
										<td width="10"><a href="<?php echo base_url();?>admin/edit_role/<?php echo $role->id;?>"><i class="fa fa-pencil"></i></a></td>
										<td width="10"><a href="<?php echo base_url();?>admin/delete_role/<?php echo $role->id;?>" onclick="return confirm('Delete Role?');"><i class="fa fa-trash"></i></a></td>
									</tr>
								<?php endforeach;?>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>