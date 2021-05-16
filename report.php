<!DOCTYPE html>
<html lang="en">

<head>
	<title>The Mood Monitor</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
	<div class="container">
		<?php
			$psw = $_POST["psw"];
			if ($psw==NULL){
				echo "This page can only be accessed via the login button. <a href=http://themoodmonitor.co.uk>Click here</a> to return to start page...";
				die();
			};
			if ($psw!="password"){
				echo "Incorrect password. <a href=http://themoodmonitor.co.uk>Click here</a> to return to start page...";
			die();
			};
		?>
		<?php include 'php/jumbotron.php';?>
		<?php include 'php/connect.php';?>
		<div class="panel panel-default">
			<div class="panel-heading" align="center">Quick Look<a href="#" tabindex="-1"></a> </div>
			<div class="panel-body">
				<div class="row">
					<div class="col-sm-6 align='center'">
						<canvas id="quickLook1" width="100%" height="70%"></canvas>
					</div>
					<div class="col-sm-6 align='center'">
						<canvas id="quickLook2" width="100%" height="70%"></canvas>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 align='center'">
						<?php include 'php/quickLook3.php';?>
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading" align="center">Detailed Mood Data<a href="#" tabindex="-1"></a> </div>
			<div class="panel-body">
				<div class="row">
					<div class="col-sm-10 col-md-offset-1 align='center'">
						<canvas id="mood1" width="100%" height="30%"></canvas>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-10 col-md-offset-1 align='center'">
						<hr style="height:5px; border:none; color:#828282; background-color:#828282;">
						<canvas id="mood2" width="100%" height="30%"></canvas>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-10 col-md-offset-1 align='center'">
						<hr style="height:5px; border:none; color:#828282; background-color:#828282;">
						<canvas id="mood3" width="100%" height="30%"></canvas>
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading" align="center">Detailed Comments Data<a href="#" tabindex="-1"></a> </div>
			<div class="panel-body">
				<div class="row">
					<?php include 'php/reportComments.php';?>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading" align="center">Detailed Engagement Data<a href="#" tabindex="-1"></span></a> </div>
			<div class="panel-body">
				<div class="row">
					<div class="col-sm-10 col-md-offset-1 align='center'">
						<canvas id="engagement1" width="100%" height="30%"></canvas>
					</div>
					<div class="col-sm-10 col-md-offset-1 align='center'">
						<canvas id="engagement2" width="100%" height="30%"></canvas>
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading" align="center">Plain Data Output<a href="#" tabindex="-1"></a> </div>
			<div class="panel-body">
				<div class="row">
					<div class="col-sm-10 col-md-offset-1 align='center'">
						<table id="plainData" style="width:100%">
							<tr>
								<th>ID</th>
								<th>Face</th> 
								<th style="max-width: 50px">Comment</th>
								<th>Datetime</th>
							</tr>
							<?php include 'php/reportPlain.php';?>
						</table>
						<br>
						<a download="faces_data.xlsx" href="#" onclick="return ExcellentExport.convert({ anchor: this, filename: 'faces_data', format: 'xlsx'},[{name: 'faces_data', from: {table: 'plainData'}}]);">Export to Excel<i style='font-size:20px;color:green;margin-left:5px' class="fas fa-file-excel"></i></a>
					</div>
				</div>
			</div>
		</div>
		</form>
		<div class="well">
			<!--Footer-->
			<?php include 'php/footer.php';?>
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
			<?php include 'php/reportVariables.php';?>
			<?php include 'php/chartsConfig.php'; ?>
			<?php include 'php/disconnect.php';?>
		</div>
</div>
</body>
</html>			