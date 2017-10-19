
  <div class="top-bar " style="background-color:#4B646F;box-shadow: 1px 1px 0 #ccc">
    <div class="top-bar-title show-for-large">
      <div class="small-12 columns" style="color:#fff;letter-spacing: 2px;">
          <strong>intelli<strong>Rehab</strong>&nbsp;/&nbsp;<?php echo strtoupper($page);?></strong>
      </div>
    </div>
    <div>
      <div class="top-bar-left ">
        <ul class="menu show-for-small-only" style="background-color:#4B646F;">
          <li><a href=""><i class="fa fa-envelope" style="color:#fff;" aria-hidden="true"></i> <span class="label edumix-notf-test">80</span></a></li>
          <li><a href="<?php echo base_url();?>notification/approval"><i class="fa fa-thumbs-up" style="color:#fff;" aria-hidden="true"></i> <span class="label edumix-notf-test"><?php echo $count_approval;?></span></a></li>
          <li><a href=""><i class="fa fa-bell" style="color:#fff;" aria-hidden="true"></i> <span class="label edumix-notf-test">12</span></a></li>
        </ul>
      </div>
      <div class="top-bar-right ">
        <ul class="menu hide-for-small-only" style="background-color:#4B646F;">
          <li style="<?php echo $dashboard;?>"><a href="<?php echo base_url();?>admin"><span style="color:<?php echo $icon_dashboard;?>;font-weight:bold;">Dashboard</span></a></li>
          <li style="<?php echo $manageUsers;?>"><a href="<?php echo base_url();?>admin/manage_users"><span style="color:<?php echo $icon_manageUsers;?>;font-weight:bold;">Users</span></a></li>
          <li style="<?php echo $manageApproval;?>"><a href="<?php echo base_url();?>admin/manage_approval"><span style="color:<?php echo $icon_manageApproval;?>;font-weight:bold;">Approval</span>&nbsp;<span class="badge"><?php echo $count_approval;?></span></a></li>
          <li style="<?php echo $auditLog;?>"><a href="<?php echo base_url();?>admin/audit_log"><span style="color:<?php echo $icon_auditLog;?>;font-weight:bold;">Audit Log</span></a></li>
          <li style="<?php echo $manageRole;?>"><a href="<?php echo base_url();?>admin/manage_role"><span style="color:<?php echo $icon_manageRole;?>;font-weight:bold;">Role</span></a></li>
          <li style="<?php $manageProfile;?>"><a href="<?php echo base_url();?>admin/manage_profile"><i class="fa fa-cog" style="color:#ccc;" aria-hidden="true"></i> <span style="color:#ccc;font-weight:bold;">Profile</span></a></li>
          <li><a href=""><i class="fa fa-envelope" style="color:#fff;" aria-hidden="true"></i>&nbsp;<span class="badge">80</span></a></li>
          <!-- <li><a href="<?php echo base_url();?>notification/approval"><i class="fa fa-thumbs-up" style="color:#fff;" aria-hidden="true"></i> <span class="label edumix-notf-test"><?php echo $count_approval;?></span></a></li> -->
          <li><a href=""><i class="fa fa-bell" style="color:#fff;" aria-hidden="true"></i>&nbsp;<span class="badge">12</span></a></li>
          <li><a href="<?php echo base_url();?>logout"><i class="fa fa-power-off"  style="color:#fff;" aria-hidden="true"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="title-bar hide-for-large">
    <div class="title-bar-left">
      <button class="menu-icon" type="button" data-open="my-info"></button>
      <span class="title-bar-title">ADMINISTRATOR</span>
    </div>
  </div>
  <br>
  <div class="large-12 columns">
    <nav aria-label="You are here:" role="navigation" class="show-for-small-only">
      <ul class="breadcrumbs">
        <li><i class="fa fa-home" aria-hidden="true"></i></li>
        <li><?php echo $page;?></li>
        <?php if($action<>""):?>
        <li><?php echo $action;?></li>
        <?php endif;?>
        <!-- <li class="disabled">Gene Splicing</li>
        <li>
          <span class="show-for-sr">Current: </span> Cloning
        </li> -->
      </ul>
    </nav>
  </div>