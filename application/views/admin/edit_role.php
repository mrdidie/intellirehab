<div class="row">
	<div class="small-12 columns">
		<div class="row">
			<div class="small-12 columns">
				<div class="title-bar">
					<div class="title-bar-left">
						<div class="title-bar-title">
							<span>New Role</span>
						</div>
					</div>
				</div>
				<div class="callout">
					<form action="<?php echo base_url();?>admin/page_process_role/<?php echo $jenis_action;?>" method="POST">
						<div class="row">
							<div class="small-12 columns">
								<label for="">Role Description</label>
								<input type="text" name="inpRoleDesc">
							</div>
						</div>
						<div class="row">
							<div class="small-12 columns">
								<input type="submit" class="small button" value="Submit">
								<input type="hidden" name="hdnIDRole" value="<?php echo $idrole;?>">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>