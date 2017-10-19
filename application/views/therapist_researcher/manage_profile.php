<div class="row">
	<div class="small-12 columns">
		<div class="title-bar">
			<div class="title-bar-left">
				<div class="title-bar-title">
					<i class="fa fa-user"></i> <span>User Profile</span>
				</div>
			</div>
		</div>
		<?php

		$password = "Fill in your password";
		$image = "http://placehold.it/400x400";

		foreach($data_profile as $profile){
			$username = $profile->katanama;
			$password = "Leave it empty if not changing password";
			$namauser = $profile->nama_user;
			$idno = $profile->idno;
			$roleuser = $profile->role_user;
			$email = $profile->email_user;
			$address = $profile->address;
			$address1 = $profile->address1;
			$address2 = $profile->address2;
			$postcode = $profile->postcode;
			$district = $profile->district;
			$phoneNo = $profile->telephone_no;
			$state = $profile->state;
			$faxNo = $profile->fax_no;
			$image = base_url()."images/".$profile->image;
			$status = $profile->status;
			$department = $profile->dept_user;

		}

		?>
		<div class="callout">
			<form action="<?php echo base_url();?>researcher/page_process_profile" method="POST" data-abide novalidate enctype="multipart/form-data">
				<div class="row">
					<div class="small-2 columns">
						<img src="<?php echo $image;?>" alt="">
						&nbsp;
						<input type="file" id="exampleFileUpload" class="show-for-large button small" name="fileUpload" accept="image/*">
					</div>
				</div>
				<br>
				<div class="row">
					<div class="small-6 columns">
						<label for="">Username</label>
						<input type="text" readonly value="<?php echo $username;?>">
					</div>
					<div class="small-6 columns">
						<label for="">Password</label>
						<input type="password" name="inpPassword" placeholder="<?php echo $password;?>">
					</div>
				</div>
				<br>
				<div class="row">
					<div class="small-6 columns">
						<label for="">ID No.</label>
						<input type="text" name="inpIDNo" value="<?php echo $idno;?>" required>
					</div>
					<div class="small-6 columns">
						<label for="">Name</label>
						<input type="text" name="inpName" value="<?php echo $namauser;?>" required>
					</div>
				</div>
				<div class="row">
					<div class="small-6 columns">
						<label for="">Role</label>
						<select name="slxRole" id="" required>
							<option value="">- Select -</option>
							<?php foreach($data_role as $role):?>
								<option <?php if($roleuser==$role->id){echo "SELECTED";}?> value="<?php echo $role->id;?>"><?php echo $role->description;?></option>
							<?php endforeach;?>
						</select>
					</div>
					<div class="small-6 columns">
						<label for="">Department</label>
						<input type="text" name="inpDepartment" required value="<?php echo $department;?>">
					</div>
				</div>
				<div class="row">
					<div class="small-12 columns">
						<label for="">Email</label>
						<input type="email" name="inpEmail" value="<?php echo $email;?>" required>
					</div>
				</div>
				<div class="row">
					<div class="small-12 columns">
						<label for="">Address</label>
						<input type="text" name="inpAddress" value="<?php echo $address;?>">
					</div>
					<div class="small-12 columns">
						<input type="text" name="inpAddress1" value="<?php echo $address1;?>">
					</div>
					<div class="small-12 columns">
						<input type="text" name="inpAddress2" value="<?php echo $address2;?>">
					</div>
				</div>
				<div class="row">
					<div class="small-6 columns">
						<label for="">Postcode</label>
						<input type="text" pattern="number" maxlength="5" name="inpPostcode" value="<?php echo $postcode;?>">
					</div>
					<div class="small-6 columns">
						<label for="">District</label>
						<input type="text" name="inpDistrict" value="<?php echo $district;?>">
					</div>
				</div>
				<div class="row">
					<div class="small-6 columns">
						<label for="">State</label>
						<input type="text" name="inpState" value="<?php echo $state;?>">
					</div>
				</div>
				<div class="row">
					<div class="small-6 columns">
						<label for="">Phone Number</label>
						<input type="text" name="inpPhoneNumber" required value="<?php echo $phoneNo;?>">
					</div>
					<div class="small-6 columns">
						<label for="">Fax Number</label>
						<input type="text" name="inpFaxNumber" required value="<?php echo $faxNo;?>">
					</div>
				</div>
				<div class="row">
					<div class="small-12 columns">
						<label for="">Status : Active?</label>
						<div class="switch large">
						  <input class="switch-input" id="activeness" type="checkbox" <?php if($status=="9"){echo "CHECKED";}?> name="activeness" value="9">
						  <label class="switch-paddle" for="activeness">
						    <span class="show-for-sr">Status : Active?</span>
						    <span class="switch-active" aria-hidden="true">Yes</span>
						    <span class="switch-inactive" aria-hidden="true">No</span>
						  </label>
						</div>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="large-12 small-12 columns text-center">
						<input type="hidden" class="hdnURL" value="<?php echo base_url();?>">
						<input type="button" name="back_to_previous_page" value="Back" class="button small secondary">
						<input type="submit" name="submit_patient_details" value="Submit" class="button small">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>