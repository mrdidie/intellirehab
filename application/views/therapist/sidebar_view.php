<!-- doktor -->
<div class="off-canvas position-left hide-for-large" id="my-info" data-off-canvas data-position="left" style="background-color:#333;">
  <div class="top-bar" style="color:#fafafa;background-color: #4B646F;">
    <div class="top-bar-title" style="color:#fafafa;background-color: #4B646F;">
      <div class="row">
        <div class="large-12 small-12 columns">
          intelli<strong>Rehab</strong> <small>v1.1</small>
        </div>
      </div>
    </div>
  </div>
  <div class="row column">
    <div class="top-bar" style="background-color:#333;color:#fff;font-weight:bold;vertical-align: middle;display: table-cell; text-align:left;">
      <div class="top-bar-title">
        <div class="row">
          <div class="small-4 columns"><img src="http://placehold.it/200x200" style="width:350px;border-radius:50px;"></div>
          <div class="small-8 columns" style="font-size:11px;line-height: 18px;padding-top:1%;">
              <span><?php echo strtoupper($_SESSION['nama_user']);?></span><br>
              <span>ONLINE &nbsp;<i class="fa fa-circle " style="color:green;" aria-hidden="true"></i></span>
          </div>
        </div>
      </div>
    </div>
    <br>
    <ul class="menu vertical" style="color:#fff;">
      <li class="menu-text">Main Navigation</li>
      <li style="<?php echo $dashboard;?>"><a href="<?php echo base_url();?>therapist"><i class="fa fa-tachometer" style="color:<?php echo $icon_dashboard;?>" aria-hidden="true"></i> <span style="color:<?php echo $icon_dashboard;?>;font-weight:bold;">Dashboard</span></a></li>
      <li style="<?php echo $managePatient;?>"><a href="<?php echo base_url();?>therapist/manage_patient"><i class="fa fa-users" style="color:<?php echo $icon_managePatient;?>;" aria-hidden="true"></i> <span style="color:<?php echo $icon_managePatient;?>;font-weight:bold;">Patient</span></a></li>
      <li class="menu-text">Setting</li>
      <li style="<?php $manageProfile;?>"><a href="<?php echo base_url();?>therapist/manage_profile"><i class="fa fa-cog" style="color:#ccc;" aria-hidden="true"></i> <span style="color:#ccc;font-weight:bold;">Profile</span></a></li>
      <li class="hide-for-large"><a href="<?php echo base_url();?>logout"><i class="fa fa-power-off"  style="color:#ccc;" aria-hidden="true"></i> <span style="color:#ccc;font-weight:bold;">Logout</span>  </a></li>
  	</ul>
  </div>
</div>