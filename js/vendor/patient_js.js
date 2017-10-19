$(document).ready(function(){

	$(document).on("click","a",function(){
			// alert("masuk");
		var bilsub = $(this).attr("rowid");

		if (document.getElementById("research_"+bilsub).style.display=="block"){
		     document.getElementById("research_"+bilsub).style.display="none";
		     return;
		}
		document.getElementById("research_"+bilsub).style.display="block";

		var research_id = $(".cls_research_id[rowid='"+bilsub+"']").val();
		var session = $(".cls_session[rowid='"+bilsub+"']").val();
		var hdnURL = $(".cls_hdnURL[rowid='"+bilsub+"']").val();

		$.ajax({
			type:"POST",
			url:hdnURL+"researcher/keterangan_patient",
			data:"researchID="+research_id+"&session="+session,
			success: function(data){
				$("#research_"+bilsub).html(data);
			}
		});

		// $.post("module/keterangan_sub_pfs.php",{categorytype:idsub,pfsnumber:pfsnumber,pfstype:pfs_type,jenisSummary:jenisSummary,revision:revisionnumber}).done(function(x){
		// 	// alert(x);
		// 	// alert("vendor_sub_"+bilsub);
		// 	$("#pfs_sub_"+bilsub).html(x);
		// });
	});

	$(document).on("change","#inpPatDateOfBirth",function(){

		// alert("haha");
		var dob = $(this).val();
		var hdnURL = $(".hdnURL").val();

		// alert(hdnURL);

		$.ajax({
			type:"POST",
			url:hdnURL+"researcher/maklumat_dob",
			data:"dob="+dob,
			success: function(data){
				// alert(data);
				if(data==0){
					$(".dob_error").html("Age of patient must be 18 and above.");
					$(".btnSubmit").prop("disabled", true);
				} else {
					$(".dob_error").html("");
					$(".btnSubmit").prop("disabled", false);
				}
			}
		});

	});

	$('.checkDie').click(function(event) {

		// alert("haha");

        if(this.checked) {
            $(".HideKalauDie").hide();
        } else {
            $(".HideKalauDie").show();
        }
    });

});