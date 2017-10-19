<!-- doktor -->
<div class="off-canvas position-left hide-for-large" id="my-info" data-off-canvas data-position="left" style="background-color:#333;">
  <div class="top-bar" style="color:#fafafa;background-color:#4B646F;">
    <div class="top-bar-title" style="color:#fafafa;background-color:#4B646F;">
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
          <div class="small-4 columns"><img src="http://placehold.it/200x200" style="width:90px;border-radius:50px;"></div>
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
      <li style="<?php echo $dashboard;?>"><a href="<?php echo base_url();?>admin"><i class="fa fa-tachometer" style="color:<?php echo $icon_dashboard;?>" aria-hidden="true"></i> <span style="color:<?php echo $icon_dashboard;?>;font-weight:bold;">Dashboard</span></a></li>
      <li style="<?php echo $manageUsers;?>"><a href="<?php echo base_url();?>admin/manage_users"><i class="fa fa-users" style="color:<?php echo $icon_manageUsers;?>" aria-hidden="true"></i> <span style="color:<?php echo $icon_manageUsers;?>;font-weight:bold;">Users</span></a></li>
      <li style="<?php echo $manageApproval;?>"><a href="<?php echo base_url();?>admin/manage_approval"><i class="fa fa-thumbs-up" style="color:<?php echo $icon_manageApproval;?>;" aria-hidden="true"></i> <span style="color:<?php echo $icon_manageApproval;?>;font-weight:bold;">Approval</span></a></li>
  	  <li style="<?php echo $auditLog;?>"><a href="<?php echo base_url();?>admin/audit_log"><i class="fa fa-book" style="color:<?php echo $icon_auditLog;?>" aria-hidden="true"></i> <span style="color:<?php echo $icon_auditLog;?>;font-weight:bold;">Audit Log</span></a></li>
      <li class="menu-text">Setting</li>
      <li style="<?php echo $manageRole;?>"><a href="<?php echo base_url();?>admin/manage_role"><i class="fa fa-cog" style="color:<?php echo $icon_manageRole;?>" aria-hidden="true"></i> <span style="color:<?php echo $icon_manageRole;?>;font-weight:bold;">Role</span></a></li>
      <li class="hide-for-large"><a href="<?php echo base_url();?>logout"><i class="fa fa-power-off"  style="color:#ccc;" aria-hidden="true"></i> <span style="color:#ccc;font-weight:bold">Logout</span></a></li>
  	</ul>
  </div>
  <!-- <div>
    <div class="row">
      <div class="small-12 columns">
        <div class="callout success tutup" data-closable>
            <h5>New Notification</h5>
        </div>
      </div>
    </div>
  </div> -->
</div>