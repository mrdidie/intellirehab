$(document).ready(function(){

	$(document).on("change",".inpPatRNAddNew",function(){
		// alert("test");

		var hdnURL = $(".hdnURL").val();

		// alert("hdnURL"+hdnURL);

		var patientID = $(this).val();

		$.ajax({
			type:"POST",
			url : hdnURL+"therapist_researcher/counter_rid",
			data:"patientID"+patientID,
			success: function(data){
				// alert(data);
				$("#inpPatResearchID").val(data);
			}

		});

	});

	$(".slxPatRaceDesc").hide();

	$(".slx62hDesc").hide();
	$(".showchk72no1").hide();
	$(".showchk72no3").hide();
	$(".showchk72no4").hide();
	$(".open721").show();

	$(document).on("change",".slxPatRace",function(){

		var value = $(this).val();

		if(value=="A" || value=="O"){
			$(".slxPatRaceDesc").show();
		} else {
			$(".slxPatRaceDesc").hide();
		}
	});

	$(".chkOtherDesc").hide();
	
	$(".chkPresenceOther").click(function(){
		// alert("klik");
		if(this.checked){
			$(".chkOtherDesc").show();
		} else {
			$(".chkOtherDesc").hide();
		}
	});

	$(".slx16").hide();
	$(".slx17").hide();

	$(document).on("change",".slx15",function(){

		var value = $(this).val();

		if(value==1){
			$(".slx16").show();
			$(".slx17").show();
		} else {
			$(".slx16").hide();
			$(".slx17").hide();
		}

	});

	$(".slx27yes").hide();
	$(".slx27a").hide();
	$(".slx27cYes").hide();
	$(".slx28").hide();

	$(document).on("change",".slx27",function(){

		var value = $(this).val();

		if(value==1){
			$(".slx27yes").show();
			$(".slx27a").show();
		} else {
			$(".slx27yes").hide();
			$(".slx27a").hide();
		}

	});

	$(document).on("change",".slx27c",function(){

		var value = $(this).val();

		if(value==1){
			$(".slx27cYes").show();
			$(".slx28").show();
		} else {
			$(".slx27cYes").hide();
			$(".slx28").hide();
		}

	});

	$(".slx31").hide();
	$(".slx32").hide();

	$(document).on("change",".slx30",function(){

		var value = $(this).val();

		if(value==1){
			$(".slx31").show();
			$(".slx32").show();
		} else {
			$(".slx31").hide();
			$(".slx32").hide();
		}

	});

	$(".slx34").hide();
	$(".slx35").hide();
	$(".slx36").hide();

	$(document).on("change",".slx33",function(){

		var value = $(this).val();

		if(value==1){
			$(".slx34").show();
			$(".slx35").show();
			$(".slx36").show();
		} else {
			$(".slx34").hide();
			$(".slx35").hide();
			$(".slx36").hide();
		}

	});

	$(".slx40a1").hide();
	$(".slx40a1Yes").hide();
	
	$(document).on("change",".slx40aBodoh",function(){
		// alert("masuk");

		var value = $(this).val();

		// alert(value);

		if(value==1){
			$(".slx40a1Yes").show();
			$(".slx40a1").show();
		} else {
			$(".slx40a1Yes").hide();
			$(".slx40a1").hide();
		}
	});

	$(".slx40b1").hide();
	$(".slx40b1Yes").hide();
	
	$(document).on("change",".slx40b",function(){
		// alert("masuk");

		var value = $(this).val();

		// alert(value);

		if(value==1){
			$(".slx40b1Yes").show();
			$(".slx40b1").show();
		} else {
			$(".slx40b1Yes").hide();
			$(".slx40b1").hide();
		}
	});

	$(".slx43a").hide();

	$(document).on("change",".slx43",function(){
		
		var value = $(this).val();

		if(value==1){
			$(".slx43a").show();
		} else {
			$(".slx43a").hide();
		}

	});

	$(".slx44Abnormal").hide();
	$(".slx44a").hide();
	$(".slx44c").hide();

	$(document).on("change",".slx44",function(){
		
		var value = $(this).val();

		if(value==2){
			$(".slx44Abnormal").show();
			$(".slx44a").show();
			$(".slx44c").show();
		} else {
			$(".slx44Abnormal").hide();
			$(".slx44a").hide();
			$(".slx44c").hide();
		}

	});

	$(".slx45Abnormal").hide();
	$(".slx45a").hide();

	$(document).on("change",".slx45",function(){
		
		var value = $(this).val();

		if(value==2){
			$(".slx45Abnormal").show();
			$(".slx45a").show();
		} else {
			$(".slx45Abnormal").hide();
			$(".slx45a").hide();
		}

	});

	$(".slx48Desc").hide();

	$(document).on("change",".slx48",function(){
		
		var value = $(this).val();

		if(value==1){
			$(".slx48Desc").show();;
		} else {
			$(".slx48Desc").hide();
		}

	});

	$(".slx51a").hide();
	$(".slx51Present").hide();

	$(document).on("change",".slx51",function(){
		
		var value = $(this).val();

		if(value==1){
			$(".slx51a").show();
			$(".slx51Present").show();
		} else {
			$(".slx51a").hide();
			$(".slx51Present").hide();
		}

	});

	$(".slx55").hide();
	$(".slx56").hide();

	$(document).on("change","#slx54",function(){

		var value = $(this).val();

		// alert("masuk");

		if(value==2){
			$(".slx55").show();
			$(".slx56").show();
		} else {
			$(".slx55").hide();
			$(".slx56").hide();
		}

	});

	$("#chk57Desc").hide();

	$(document).on("change","#chk57Others",function(){

		if(this.checked){
			$("#chk57Desc").show();
		} else {
			$("#chk57Desc").hide();
		}

	});

	$(".slx58Yes").hide();
	$("#slx58aDesc").hide();

	$(document).on("change","#slx58",function(){

		var value = $(this).val();

		if(value==1){
			$(".slx58Yes").show();
		} else {
			$(".slx58Yes").hide();
		}

	});

	$(document).on("change","#slx58a",function(){

		var value = $(this).val();

		if(value==3){
			$("#slx58aDesc").show();
		} else {
			$("#slx58aDesc").hide();
		}

	});

	

	$(document).on("change","#slx62h",function(){

		var value = $(this).val();

		if(value==1){
			$(".slx62hDesc").show();
		} else {
			$(".slx62hDesc").hide();
		}

	});

	$(document).on("change","#chk72no1",function(){

		if(this.checked){
			$(".showchk72no1").show();
		} else {
			$(".showchk72no1").hide();
		}

	});

	$(document).on("change","#chk72no2",function(){

		if(this.checked){
			$(".showchk72no1").show();
		} else {
			$(".showchk72no1").hide();
		}

	});

	$(document).on("change","#chk72no3",function(){

		if(this.checked){
			$(".showchk72no4").show();
		} else {
			$(".showchk72no4").hide();
		}

	});

	$(document).on("change","#chk72no4",function(){

		if(this.checked){
			$(".showchk72no3").show();
		} else {
			$(".showchk72no3").hide();
		}

	});

	$(".showboxno63yes").hide();

	$(document).on("change","#jawab63",function(){

		if(this.checked){
			$(".showboxno63yes").show();
		} else {
			$(".showboxno63yes").hide();
		}

	});

});