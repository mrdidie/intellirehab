<!-- <div class="row">
	<div class="small-12 columns">
		<div class="title-bar">
			<div class="title-bar-left">
				<div class="title-bar-title">
					<span>Therapy submitted</span>
				</div>
			</div>
		</div>
		<div class="callout">
			<div class="row">
				<div class="small-12 columns">
					<table width="100%">
						<thead>
							<tr>
								<th width="3">#</th>
								<th>Research ID</th>
								<th>Part</th>
								<th>Session</th>
								<th>By</th>
								<th width="8">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $this->load->helper("general"); $bil = 0; foreach($maklumat_notification as $notify): $bil++;?>
								<tr>
									<td><?php echo $bil;?></td>
									<td><?php echo $notify->pat_researchID;?></td>
									<td><?php echo therapy_part($notify->part,1);?></td>
									<td><?php echo $notify->session;?></td>
									<td><?php echo $notify->nama_user;?></td>
									<td style="text-align:center;"><a href="<?php echo base_url();?>admin/view_clinical/<?php echo $notify->pat_researchID;?>/<?php echo $notify->session;?>/<?php echo therapy_part($notify->part,2);?>"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
								</tr>
							<?php endforeach;?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div> -->

<div class="row">
	<div class="small-12 columns">	
		<div class="calloutx">
			<ul class="tabs" data-active-collapse="true" data-tabs id="collapsing-tabs">
			  <li class="tabs-title"><a href="#panel0c">MIN. DATA SET</a></li>
			  <li class="tabs-title is-active"><a href="#panel1c" aria-selected="true">CLI. D13 TO D28</a></li>
			  <li class="tabs-title"><a href="#panel2c">CLI. D29 TO D41</a></li>
			  <li class="tabs-title"><a href="#panel3c">CLI. D42 TO D52</a></li>
			  <li class="tabs-title"><a href="#panel4c">DIAGNOSTIS</a></li>
			  <li class="tabs-title"><a href="#panel5c">MANAGEMENT</a></li>
			  <li class="tabs-title"><a href="#panel6c">OTHER INFO</a></li>
			</ul>

			<div class="tabs-content" data-tabs-content="collapsing-tabs">
			  <div class="tabs-panel" id="panel0c">
			    <?php echo $tab_0;?>
			  </div>
			  <div class="tabs-panel is-active" id="panel1c">
			    <?php echo $tab_1;?>
			  </div>
			  <div class="tabs-panel" id="panel2c">
			    <?php echo $tab_2;?>
			  </div>
			  <div class="tabs-panel" id="panel3c">
			    <?php echo $tab_3;?>
			  </div>
			  <div class="tabs-panel" id="panel4c">
			    <?php echo $tab_4;?>
			  </div>
			  <div class="tabs-panel" id="panel5c">
			    <?php echo $tab_5;?>
			  </div>
			  <div class="tabs-panel" id="panel6c">
			    <?php echo $tab_6;?>
			  </div>
			</div>
		</div>	
	</div>
</div>