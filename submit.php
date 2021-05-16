<!DOCTYPE html>
<html>
<head>
	<title>The Mood Monitor</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
	<div class="container">
		<?php include 'php/jumbotron.php';?>
		<div class="panel panel-success">
			<div class="panel-heading">Your form has been submitted. <a href="#" tabindex="-1" data-toggle="popover" title="" data-content="If data has stored successfully this should be indicated below."><span class="glyphicon glyphicon-info-sign"></span></a> </div>
			<div class="panel-body">
				<div class="row">
					<div id="report" class="col-sm-6">
						<?php
						$pface = "'" . $_POST['face'] . "'";
						$pcomment = "'" . $_POST['comment'] . "'";
						
						// Attempt MySQL server connection.
						$link = mysqli_connect("localhost", "themood1_submit", "password", "themood1_database");
						 
						// Check connection
						if($link === false){
							die("Audit data could not be logged. The server returned the following error message: " . mysqli_connect_error());
						}
						
						// Attempt insert query execution
						$sql = "INSERT INTO mood_data (id, face, comment) VALUES (null, $pface, $pcomment)";
						if(mysqli_query($link, $sql)){
							echo "Your submission has been logged successfully. Redirecting to <a href=http://themoodmonitor.co.uk>start page</a> in 5 seconds...";
							$pass = "true";
						} else{
							echo "Data could not be logged. The server returned the following error message: " . mysqli_error($link);
							echo "<a href=http://themoodmonitor.co.uk>Click here to return to start page.</a>";
							$pass = "false";
						}
						 
						// Close connection
						mysqli_close($link);

						?>
					</div>
				</div>
			</div>
		</div>
		<div class="well">
			<!--Footer-->
			<?php include 'php/footer.php';?>
		</div>
	</div>

<!--redirect function (if successful SQL insert)-->
	<script>
		var pass = "<?php echo $pass ?>";
		if(pass === "true"){
			window.setTimeout(function(){
			window.location.replace("http://themoodmonitor.co.uk");
			}, 5000);
		}
	</script>

<!--Dependencies-->
	<?php include 'php/extDependencies.php';?>	
	<script src="js/faces.js"></script>
	<link rel="stylesheet" type="text/css" href="css/face.css">
	<!-- for popovers and tooltips-->
	<script>
		$(document).ready(function(){
			$('[data-toggle="popover"]').popover();
			$('[data-toggle="tooltip"]').tooltip(); 
		});
	</script>
</body>
</html>