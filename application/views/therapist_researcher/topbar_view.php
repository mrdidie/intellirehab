<div data-sticky-container>
 <div class="top-bar" style="background-color:#2BA6CB;box-shadow: 1px 1px 0 #ccc;width:100%;" data-sticky data-options="marginTop:0;" > 
    <div class="top-bar-title show-for-large">
      <div class="small-12 columns" style="color:#fff;letter-spacing: 2px;">
          <strong>intelli<strong>Rehab<small>v1.1</small></strong> \ Hello, <?php echo strtoupper($_SESSION['gelaran']." ".$_SESSION['nama_user']);?>
      </div>
    </div>
    <div>
      <div class="top-bar-left">
        <ul class="menu show-for-small-only" style="background-color:#2BA6CB;">
            <li><a href=""><i class="fa fa-bell" style="color:#fff;" aria-hidden="true"></i> <span class="label edumix-notf-test">12</span></a></li>
        </ul>
      </div>
      <div class="top-bar-right hide-for-small-only" >
        <ul class="menu top-menu" style="background-color:#2BA6CB;">
          <li style="<?php echo $dashboard;?>"><a href="<?php echo base_url();?>index.php/researcher"> <span style="color:<?php echo $icon_dashboard;?>;font-weight:bold;">Dashboard</span></a></li>
          <li style="<?php echo $managePatient;?>"><a href="<?php echo base_url();?>index.php/researcher/manage_patient"><span style="color:<?php echo $icon_managePatient;?>;font-weight:bold;">Patient</span></a></li>
          <li style="<?php echo $stroke;?>"><a href="<?php echo base_url();?>index.php/researcher/manage_stroke"><span style="color:<?php echo $icon_stroke;?>;font-weight:bold;">Stroke</span></a></li>
          <li style="<?php echo $followUP;?>"><a href="<?php echo base_url();?>index.php/researcher/follow_up"><span style="color:<?php echo $icon_followUP;?>;font-weight:bold;">Follow Up</span></a></li>
          <!-- <li><img src="http://placehold.it/200x200" style="width:30px;border-radius:30px;"></li> -->
          <li style="<?php $manageProfile;?>"><a href="<?php echo base_url();?>index.php/researcher/manage_profile"><i class="fa fa-cog" style="color:<?php echo $icon_profile;?>" aria-hidden="true"></i> <span style="color:<?php echo $icon_profile;?>;font-weight:bold;">Profile</span></a></li>
          <!-- <li style="font-weight:500;"><a href="" style="color:#ccc;"><?php echo ucfirst($_SESSION['gelaran'].". ".$_SESSION['nama_user']);?></a> </li> -->
         <!--  <li><i class="fa fa-circle " style="color:#99FF00;" aria-hidden="true"></i></li> -->
          <li><a href=""><i class="fa fa-bell" style="color:#fff;" aria-hidden="true"></i></a></li>
          <li><a href="<?php echo base_url();?>index.php/logout"><i class="fa fa-power-off"  style="color:#fff;" aria-hidden="true"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
  <div class="title-bar hide-for-large">
    <div class="title-bar-left">
      <button class="menu-icon" type="button" data-open="my-info"></button>
      <span class="title-bar-title"><?php echo strtoupper($_SESSION['gelaran']." ".$_SESSION['nama_user']);?></span>
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
      </ul>
    </nav>
  </div>