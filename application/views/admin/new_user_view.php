<div class="row">
	<div class="large-12 columns">
		<div class="row">
			<div class="large-12 columns">
				<div class="title-bar">
					<div class="title-bar-left">
						<div class="title-bar-title">
							Add New User
						</div>
					</div>
				</div>
				<div class="callout">
					<form action="<?php echo base_url();?>admin/add_new_user" method="POST">
						<div class="row">
							<div class="large-12 columns">
								<label for="">Username</label>
								<input type="text" name="inpUsername" required>
							</div>
						</div>
						<div class="row">
							<div class="large-12 columns">
								<label for="">Password</label>
								<input type="password" name="inpPassword" required>
							</div>
						</div>
						<div class="row">
							<div class="large-12 columns">
								<label for="">Name</label>
								<input type="text" name="inpFullName" required>
							</div>
						</div>
						<div class="row">
							<div class="large-6 columns">
								<label for="">ID</label>
								<input type="text" name="inpStaffID" required>
							</div>
							<div class="large-6 columns">
								<label for="">Email</label>
								<input type="email" name="inpEmail" required>
							</div>
						</div>
						<div class="row">
							<div class="large-12 columns">
								<label for="">Role User</label>
								<select name="slxRoleUser" id="" required>
									<option value="">- CHOOSE -</option>
									<?php foreach($role_user as $role):?>
										<option value="<?php echo $role->id;?>"><?php echo $role->description;?></option>
									<?php endforeach;?>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="large-12 columns">
								<input type="submit" name="submit" value="Submit" class="button small">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>