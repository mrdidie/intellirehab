<script type="text/javascript">

    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

  	function drawChart() {

	    var data = google.visualization.arrayToDataTable([
	      ['Submit to Admin', 'Task'],
	      ['Submitted',  <?php echo $dah_hantar;?>],
	      ['In Progress', <?php echo $pending;?>]
	    ]);

	    var options = {
	      title: 'Patient Therapy Statistic'
	    };

	    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

	    chart.draw(data, options);
    }

    google.charts.load("current", {'packages':["corechart"]});
      google.charts.setOnLoadCallback(drawChart_pie);
      function drawChart_pie() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Men',    <?php echo $jantina_lelaki;?>],
          ['Women',  <?php echo $jantina_perempuan;?>],
          ['Not assigned',  <?php echo $jantina_others;?>]
        ]);

        var options = {
          title: 'Patient Gender',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }


      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart_Line);

      function drawChart_Line() {
        var data = google.visualization.arrayToDataTable([
          ['RID', 'Complete', 'Progress'],
          <?php 
          $bil = 0;
          foreach($maklumat_pesakit as $jump): 

          	$bil++;

          	$baki = $jumlah_pesakit - $bil;

          	if($baki==0){
          		$titik = "";
          	} else {
          		$titik = ",";
          	}

          	$complete = $percentage->kira_percentage($jump->pat_researchID, $jump->session);
          	$progress = 100 - (float) $complete;

          	// die($haha);

          ?>
          	['<?php echo $jump->pat_researchID;?>', <?php echo $complete;?>, <?php echo $progress;?>]<?php echo $titik;?>
          <?php endforeach;?>
        ]);

        var options = {
          title: 'Therapy progress',
          hAxis: {title: 'Research ID',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
</script>
<div class="row">
	<div class="small-6 columns">
		<div class="small-12 columns">
			<div class="card" style="width: 100%;" >
			  <div class="card-divider" style="background-color:#222;color:#fff;">
			    <h6><strong>USER INFORMATION</strong></h6>
			  </div>
			  <div class="card-section">
			  	<div class="row align-middle">
			  		<div class="small-4 columns text-center">
			  			<div class="fa fa-user-md fa-lg fa-5x" aria-hidden="true" style="color:#2BA6CB;"></div>
			  		</div>
			  		<div class="small-8 columns">
			  			<?php foreach($maklumat_user as $pat): ?>
					    <div class="row">
					    	<div class="small-12 columns">
					    		<label for=""><small>ID NO</small></label>
					    		<strong><?php echo $pat->idno;?></strong>
					    	</div>
					    </div>
					    <div class="row">
					    	<div class="small-12 columns">
					    		<label for=""><small>NAME</small></label>
					    		<strong><?php echo ucfirst($pat->nama_user);?></strong>
					    	</div>
					    </div>
					    <div class="row">
					    	<div class="small-12 columns">
					    		<label for=""><small>ROLE</small></label>
					    		<strong><?php echo ucfirst($pat->description);?></strong>
					    	</div>
					    </div>
						<?php endforeach;?>
			  		</div>
			  	</div>
			  </div>
			</div>
		</div>
		<div class="small-12 columns">
			<div class="row small-up-2 medium-up-2 large-up-2">
				<div class="column">
		          <div class="card" > 
		            <div class="card-divider alert-box success" style="background-color: #fff;color:#222;font-weight:bold;font-size:20px;">
		            	<span class="" style="font-size:40px;"><?php echo $jumlah_pesakit;?></span> <br>
			            <span>Patient</span>
		            </div>
		          </div>
		        </div>
		        <div class="column">
		          <div class="card" > 
		            <div class="card-divider alert-box alert" style="background-color: #fff;color:#222;font-weight:bold;font-size:20px;">
		              	<span class="" style="font-size:40px;"><?php echo $jumlah_followup;?></span> <br>
		              	<span>Follow Up</span>
		            </div>
		          </div>
		        </div>
		        <div class="column">
		          <div class="card" > 
		            <div class="card-divider alert-box success" style="background-color: #fff;color:#222;font-weight:bold;font-size:20px;">
		              	<span class="" style="font-size:40px;"><?php echo $jumlah_approval;?></span> <br>
		              	<span>Approval</span>
		            </div>
		          </div>
		        </div>
			</div>
		</div>
	</div>
	<div class="small-6 columns">
		<div class="small-12 columns">
			<div class="title-bar">
				<div class="title-bar-left">
					<div class="title-bar-title">
						<span>APPOINTMENTS</span>
					</div>
				</div>
			</div>
			<div class="callout">
				<?php echo $cal;?>
			</div>
		</div>
		<!-- <div class="small-12 columns">
			<div class="title-bar">
				<div class="title-bar-left">
					<div class="title-bar-title">
						<span>NOTICE BOARD</span>
					</div>
				</div>
			</div>
			<div class="callout">
				<?php echo $schedule;?>
			</div>
		</div> -->
	</div>
</div>
<div class="row">
	<div class="small-12 columns">
		<div class="small-12 columns">
			<div class="title-bar">
				<div class="title-bar-left">
					<div class="title-bar-title">
						<span>STATISTICS</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<br>
<div class="row">
	<div class="small-12 columns">
		<div class="small-12 columns">
			<div class="callout">
			<div id="chart_div" style="width: 100%;"></div>
		</div>
		</div>
	</div>
	<div class="small-6 columns">
		<div class="small-12 columns">
			<div class="callout">
				<div id="piechart" style="width: 100%;"></div>
			</div>
		</div>
	</div>
	<div class="small-6 columns">
		<div class="small-12 columns">
			<div class="callout">
				<div id="donutchart" style="width: 100%;"></div>
			</div>
		</div>
	</div>
</div>
