<!doctype html>
<html>

<head>
	<title>Line Chart</title>
	<script src="js/chart.min.js"></script>
	<script src="js/utils.js"></script>
	<style>
	canvas{
		-moz-user-select: none;
		-webkit-user-select: none;
		-ms-user-select: none;
	}
	.btn-back a{
		
		background-color: lightblue;
		text-decoration: none;
		color:white;

	}
	</style>
</head>

<body>
	<?php
	include 'connection.php';
	?>
	<div class="btn-back">
			<a href="index.php">Back</a>
		</div>
	<center>
	<div style="width:75%;">
		<canvas id="canvas"></canvas>
	</div>
	</center>
	<script>
		var MONTHS = ['Jan', 'Feb', 'March', 'April', 'May', 'June', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
		var config = {
			type: 'line',
			data: {
				labels: ['Jan', 'Feb', 'March', 'April', 'May', 'June', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
				datasets: [{
					label: 'My First dataset',
					backgroundColor: window.chartColors.red,
					borderColor: window.chartColors.red,
					data: [
					<?php
					//for january
					$result = mysqli_query($db, "SELECT * FROM record WHERE month = '1'");
					$row = mysqli_num_rows($result);

				    if($row>0){
				        while($rows = mysqli_fetch_assoc($result)) {
				    	$amount=$rows['amount'];
				    	echo $amount;
					    }
					}
				    else{
				    	echo 0;
				    }
				    ?>,
				    <?php
					//for february
					$result = mysqli_query($db, "SELECT * FROM record WHERE month = '2'");
					$row = mysqli_num_rows($result);

				    if($row>0){
				        while($rows = mysqli_fetch_assoc($result)) {
				    	$amount=$rows['amount'];
				    	echo $amount;
					    }
					}
				    else{
				    	echo 0;
				    }
				    ?>,
				    <?php
					//for march
					$result = mysqli_query($db, "SELECT * FROM record WHERE month = '3'");
					$row = mysqli_num_rows($result);

				    if($row>0){
				        while($rows = mysqli_fetch_assoc($result)) {
				    	$amount=$rows['amount'];
				    	echo $amount;
					    }
					}
				    else{
				    	echo 0;
				    }
				    ?>,
				    <?php
					//for april
					$result = mysqli_query($db, "SELECT * FROM record WHERE month = '4'");
					$row = mysqli_num_rows($result);

				    if($row>0){
				        while($rows = mysqli_fetch_assoc($result)) {
				    	$amount=$rows['amount'];
				    	echo $amount;
					    }
					}
				    else{
				    	echo 0;
				    }
				    ?>,
				    <?php
					//for may
					$result = mysqli_query($db, "SELECT * FROM record WHERE month = '5'");
					$row = mysqli_num_rows($result);

				    if($row>0){
				        while($rows = mysqli_fetch_assoc($result)) {
				    	$amount=$rows['amount'];
				    	echo $amount;
					    }
					}
				    else{
				    	echo 0;
				    }
				    ?>,
				    <?php
					//for june
					$result = mysqli_query($db, "SELECT * FROM record WHERE month = '6'");
					$row = mysqli_num_rows($result);

				    if($row>0){
				        while($rows = mysqli_fetch_assoc($result)) {
				    	$amount=$rows['amount'];
				    	echo $amount;
					    }
					}
				    else{
				    	echo 0;
				    }
				    ?>,
				    <?php
					//for july
					$result = mysqli_query($db, "SELECT * FROM record WHERE month = '7'");
					$row = mysqli_num_rows($result);

				    if($row>0){
				        while($rows = mysqli_fetch_assoc($result)) {
				    	$amount=$rows['amount'];
				    	echo $amount;
					    }
					}
				    else{
				    	echo 0;
				    }
				    ?>,
				    <?php
					//for augst
					$result = mysqli_query($db, "SELECT * FROM record WHERE month = '8'");
					$row = mysqli_num_rows($result);

				    if($row>0){
				        while($rows = mysqli_fetch_assoc($result)) {
				    	$amount=$rows['amount'];
				    	echo $amount;
					    }
					}
				    else{
				    	echo 0;
				    }
				    ?>,
				    <?php
					//for september
					$result = mysqli_query($db, "SELECT * FROM record WHERE month = '9'");
					$row = mysqli_num_rows($result);

				    if($row>0){
				        while($rows = mysqli_fetch_assoc($result)) {
				    	$amount=$rows['amount'];
				    	echo $amount;
					    }
					}
				    else{
				    	echo 0;
				    }
				    ?>,
				    <?php
					//for october
					$result = mysqli_query($db, "SELECT * FROM record WHERE month = '10'");
					$row = mysqli_num_rows($result);

				    if($row>0){
				        while($rows = mysqli_fetch_assoc($result)) {
				    	$amount=$rows['amount'];
				    	echo $amount;
					    }
					}
				    else{
				    	echo 0;
				    }
				    ?>,
				    <?php
					//for november
					$result = mysqli_query($db, "SELECT * FROM record WHERE month = '11'");
					$row = mysqli_num_rows($result);

				    if($row>0){
				        while($rows = mysqli_fetch_assoc($result)) {
				    	$amount=$rows['amount'];
				    	echo $amount;
					    }
					}
				    else{
				    	echo 0;
				    }
				    ?>,
				    <?php
					//for december
					$result = mysqli_query($db, "SELECT * FROM record WHERE month = '12'");
					$row = mysqli_num_rows($result);

				    if($row>0){
				        while($rows = mysqli_fetch_assoc($result)) {
				    	$amount=$rows['amount'];
				    	echo $amount;
					    }
					}
				    else{
				    	echo 0;
				    }
				    ?>
					],
					fill: false,
				}]
			},
			options: {
				responsive: true,
				title: {
					display: true,
					text: 'RICE SELLING RECORD',
				},
				tooltips: {
					mode: 'index',
					intersect: false,
				},
				hover: {
					mode: 'nearest',
					intersect: true
				},
				scales: {
					xAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Month'
						}
					}],
					yAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Value'
						}
					}]
				}
			}
		};

		window.onload = function() {
			var ctx = document.getElementById('canvas').getContext('2d');
			window.myLine = new Chart(ctx, config);
		};

	</script>
</body>

</html>