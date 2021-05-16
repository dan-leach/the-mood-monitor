function selectFaces(){
	// on selecting a face changes to solid type face icon and shows the comment input and submit button
	window.setTimeout(function(){
		if (document.getElementById("smile").checked == true){
			$("#reactive").html("<input id='details' type='text' autocomplete='off' class='form-control' name='details' placeholder='Optional: tell us what made your day great...'>");
			$("#btnsubmit").removeClass("invisible");			
			$("#a").addClass("fas").removeClass("far");
			$("#b").addClass("far").removeClass("fas");
			$("#c").addClass("far").removeClass("fas");
		} else if(document.getElementById("meh").checked == true){
			$("#reactive").html("<input id='details' type='text' autocomplete='off' class='form-control' name='details' placeholder='Optional: tell us what took the edge off...'>");
			$("#btnsubmit").removeClass("invisible");
			$("#a").addClass("far").removeClass("fas");
			$("#b").addClass("fas").removeClass("far");
			$("#c").addClass("far").removeClass("fas");
		} else if(document.getElementById("frown").checked == true){
			$("#reactive").html("<input id='details' type='text' autocomplete='off' class='form-control' name='details' placeholder='Optional: tell us what went wrong...'>");
			$("#btnsubmit").removeClass("invisible");
			$("#a").addClass("far").removeClass("fas");
			$("#b").addClass("far").removeClass("fas");
			$("#c").addClass("fas").removeClass("far");
		} else {
			alert("Selection error");
		}
	}, 10);
}

function submitFaces(){
	//copies comment value from dynamically added input to POST readable static(hidden) input field
	document.getElementById("comment").value = document.getElementById("details").value;
	$("#facesForm").submit();
}

