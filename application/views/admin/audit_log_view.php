<div class="row">
	<div class="small-12 columns">
		<div class="row">
			<div class="small-12 columns">
				<div class="title-bar">
					<div class="title-bar-left">
						<div class="title-bar-title">
							Audit Log
						</div>
					</div>
				</div>
				<div class="callout">
					<ul class="tabs" data-active-collapse="true" data-tabs id="collapsing-tabs">
					  <li class="tabs-title is-active"><a href="#panel1c" aria-selected="true">Login Activity</a></li>
					  <li class="tabs-title"><a href="#panel2c">User Activity</a></li>
					</ul>

					<div class="tabs-content" data-tabs-content="collapsing-tabs">
					  <div class="tabs-panel is-active" id="panel1c">
					    <?php echo $tab_login;?>
					  </div>
					  <div class="tabs-panel" id="panel2c">
					    <?php echo $tab_user;?>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>