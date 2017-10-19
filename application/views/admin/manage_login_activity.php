<div class="row">
	<div class="small-12 columns">
		<div class="row">
			<div class="small-12 columns">
				<div class="title-bar">
					<div class="title-bar-left">
						<div class="title-bar-title">
							<i class="fa fa-sign-in" aria-hidden="true"></i> <span>Login Activity </span>
						</div>
					</div>
				</div>
				<table width="100%">
					<thead>
						<tr>
							<td width="3">#</td>
							<td>Name</td>
							<td>Role</td>
							<td>Login</td>
							<td>Logout</td>
						</tr>
					</thead>
					<tbody>
						<?php $bil=0; foreach($login_info as $info): $bil++;?>
							
							<tr>
								<td><?php echo $bil;?></td>
								<td><?php echo $info->nama_user;?></td>
								<td><?php echo $info->description;?></td>
								<td><?php echo $info->last_login;?></td>
								<td><?php echo $info->last_logout;?></td>
							</tr>

						<?php endforeach;?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>