<!DOCTYPE html>
<html lang="en">
<head>
	<title>The Mood Monitor</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

	<?php include 'php/extDependencies.php';?>	
	<?php include 'php/loader.php';?>

</head>
<body>
	<div class="loader"></div>
	<div class="container">
		<?php include 'php/jumbotron.php';?>

		<form id="facesForm" method="post" action="submit.php">
			<div class="panel panel-default">
				<div class="panel-heading" align="center">Choose one of the faces below to let us know how your shift was today.<a href="#" tabindex="-1" data-toggle="popover" title="" data-content="Please only do this once for each shift. All responses are confidential."><span class="glyphicon glyphicon-info-sign"></span></a> </div>
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-8 col-md-offset-2 align='center'">
							<div id="select">
								<br>
								<label>
									<input type="radio" name="face" value="smile" id="smile">
									<i id="a" style='font-size:13vw;color:green;margin-right:2vw' class='far fa-smile hvr-bounce-in' onclick="selectFaces()"></i>
								</label>
								<label>
									<input type="radio" name="face" value="meh" id="meh">
									<i id="b" style='font-size:13vw;color:orange;margin-right:2vw' class='far fa-meh hvr-bounce-in' onclick="selectFaces()"></i>
								</label>
								<label>
									<input type="radio" name="face" value="frown" id="frown">
									<i id="c" style='font-size:13vw;color:red' class='far fa-frown hvr-bounce-in' onclick="selectFaces()"></i>
								</label>
							</div>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-sm-6 col-md-offset-3">
							<div id="reactive"></div>
							<input type="hidden" name="comment" id="comment" value="" size ="40" />
						</div>
					</div>
					<br><br>
					<div class="row">
						<div class="col-sm-8 col-md-offset-2"><!--Submit button-->
							<button type="button" id="btnsubmit" class="btn btn-default btn-block hvr-shutter-out-horizontal invisible" onclick="submitFaces()">Submit</button>
						</div>
					</div>
				</div>
			</div>
		</form>
		<div class="well">
			<!--Footer-->
			<?php include 'php/footer.php';?>

			<!--admin login button and module-->
			<?php include 'php/pswModal.php';?>
			
			<!--Preloading fas style faces-->
			<i style='font-size:10px;color:green;visibility:hidden' class='fas fa-smile'></i>
			<i style='font-size:10px;color:orange;visibility:hidden' class='fas fa-meh'></i>
			<i style='font-size:10px;color:red;visibility:hidden' class='fas fa-frown'></i>

			<!--Dependencies-->
				<script src="js/faces.js"></script>
				<link rel="stylesheet" type="text/css" href="css/face.css">
				<link rel="stylesheet" type="text/css" href="css/selectFace.css">
				<link rel="stylesheet" type="text/css" href="css/psw.css">
				<!-- for popovers and tooltips-->
				<script>
					$(document).ready(function(){
						$('[data-toggle="popover"]').popover();
						$('[data-toggle="tooltip"]').tooltip(); 
					});
				</script>
		</div>
	</div>
</body>
</html>			