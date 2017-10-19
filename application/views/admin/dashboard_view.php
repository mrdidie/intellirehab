<script>
	google.charts.load('current', {'packages':['geochart']});
      google.charts.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {

        var data = google.visualization.arrayToDataTable([
          ['Country', 'Patients'],
          ['Germany', 200],
          ['United States', 300],
          ['Brazil', 400],
          ['Canada', 500],
          ['France', 600],
          ['RU', 700],
          ['Malaysia', 500]
        ]);

        var options = {};

        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

        chart.draw(data, options);
      }
</script>
<div class="row">
	<div class="large-12 small-12 columns">
		<div class="row">
			<div class="large-12 columns">
				<div class="row small-up-2 medium-up-3 large-up-4">
					<div class="column">
						<div class="card">
				            
				            <div class="card-divider" style="background-color: #fff;color:#222;font-weight:bold;font-size:20px;">
				              <span class="" style="font-size:40px;"><?php echo $jumlah_users;?></span> <br>
				              <span>Users</span>
				            </div>
				            
				         </div>
					</div>
					<div class="column">
						<div class="card">
				            
				            <div class="card-divider" style="background-color: #fff;color:#222;font-weight:bold;font-size:20px;">
				              <span class="" style="font-size:40px;"><?php echo $jumlah_patient;?></span> <br>
				              <span>Patients</span>
				            </div>
				            
				         </div>
					</div>
					<div class="column">
						<div class="card">
				            
				            <div class="card-divider" style="background-color: #fff;color:#222;font-weight:bold;font-size:20px;">
				              <span class="" style="font-size:40px;"><?php echo $jumlah_submitted;?></span> <br>
				              <span>Therapy Submitted</span>
				            </div>
				            
				         </div>
					</div>
					<div class="column">
						<div class="card">
				            
				            <div class="card-divider" style="background-color: #fff;color:#222;font-weight:bold;font-size:20px;">
				              <span class="" style="font-size:40px;"><?php echo $jumlah_approval;?></span> <br>
				              <span>Approval</span>
				            </div>
				            
				         </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<p>&nbsp;</p>
	<div class="small-12 columns">
		<h6 style="font-weight:bold;">STATISTIC</h6>
	</div>
	<div class="small-12 columns">
		<div class="callout">
			<div id="regions_div" style="width: 900px; height: 500px;"></div>
		</div>
	</div>
</div>