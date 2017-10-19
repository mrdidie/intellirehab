<div class="row">
	<div class="large-12 columns">
		<div class="row">
			<div class="large-12 columns">
				<div class="title-bar">
					<div class="title-bar-left">
						<div class="title-bar-title">
							Edit User
						</div>
					</div>
				</div>
				<div class="callout">
					<?php foreach($maklumat_user as $user):?>
					<form action="<?php echo base_url();?>admin/edit_new_user" method="POST">
						<div class="row">
							<div class="large-12 columns">
								<label for="">Username</label>
								<input type="text" name="inpUsername" readonly value="<?php echo $user->katanama;?>">
							</div>
						</div>
						<div class="row">
							<div class="large-12 columns">
								<label for="">Password</label>
								<input type="password" name="inpPassword" placeholder="Leave it empty if not changing the password">
							</div>
						</div>
						<div class="row">
							<div class="large-12 columns">
								<label for="">Name</label>
								<input type="text" name="inpFullName" value="<?php echo $user->nama_user;?>">
							</div>
						</div>
						<div class="row">
							<div class="large-6 columns">
								<label for="">ID</label>
								<input type="text" name="inpStaffID" value="<?php echo $user->idno;?>">
							</div>
							<div class="large-6 columns">
								<label for="">Email</label>
								<input type="email" name="inpEmail" value="<?php echo $user->email_user;?>">
							</div>
						</div>
						<div class="row">
							<div class="large-12 columns">
								<label for="">Role User</label>
								<select name="slxRoleUser" id="">
									<option value="">- CHOOSE -</option>
									<?php foreach($role_user as $role):?>
										<option <?php if($user->role_user==$role->id){echo "SELECTED";}?> value="<?php echo $role->id;?>"><?php echo $role->description;?></option>
									<?php endforeach;?>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="large-12 columns">
								<input type="submit" name="submit" value="Update" class="button small">
								<input type="hidden" name="hdnID" value="<?php echo $user->id + 10;?>">
							</div>
						</div>
					</form>
					<?php endforeach;?>
				</div>
			</div>
		</div>
	</div>
</div>