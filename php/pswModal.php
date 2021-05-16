<div style="text-align: left">
	<br><button class="btn btn-default" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><a href="#" class="hvr-icon-buzz-out">Admin<i style="margin-left:10px" class="fas fa-lock hvr-icon"></i>
</a></i></button>
</div>

<div id="id01" class="modal">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-md-offset-2 align='center'"> 
				<form class="modal-content animate" method="post" action="report.php">
					<label for="psw"><b></b></label><br>
					<input type="password" placeholder="Enter Password" name="psw" required><br>
					<button type="submit">Login</button><br>
					<label for="psw"><b></b></label>
				</form>
			</div>
		</div>
	</div>
</div>
<script>
	var modal = document.getElementById('id01');

	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}
</script>
