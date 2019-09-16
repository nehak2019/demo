<!DOCTYPE html>
<html>
<head>
	<title>record</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <style>
	 	.main{
            border:1px solid black;
            margin-left: 420px;
            margin-top: 150px;
            width: 450px;
            height: 300px;
            text-align: center;
            padding: 20px;
            background-color: lightgray;

	 	}
	 	.group1 select{
	 		height: 50px;
	 		width: 250px;
	 		margin-top: 55px;

	 		
	 	}
	 	.group2 input{
	 		height: 45px;
	 		width: 200px;

	 	}
	 	button{
	 		height: 40px;
	 		width: 150px;
	 		margin-left:130px; 
	 		color: white;
            background-color:green; 
            border-radius: 15px;
            border:1px green;
	 	}
	 </style>
</head>
<body>
	<?php
	include 'connection.php';
	?>
<div class="main">
	<div class="group1">
	<form action="" method="post">
		<label>choose the month</label>
		<select name="month">
            <option value="1">JANUARY</option>
             <option value="2">FEBRUARY</option>
            <option value="3">MARCH</option>
            <option value="4">APRIL</option>
            <option value="5">MAY</option>
            <option value="6">JUNE</option>
            <option value="7">JULY</option>
            <option value="8">AUGUST</option>
            <option value="9">SEPTEMBER</option>
            <option value="10">OCTOMBER</option>
            <option value="11">NOVEMBER</option>
            <option value="12">DECEMBER</option>	
</select><br><br><br>
	</div>
	<div class="group2">
		<label>Amount of sell in rupee</label>
		<input type="text" name="amount"><br><br><br>
	</div>
	<div class="btn">
		   <button type="submit" name="submit" value="submit">SUBMIT</button>
	</div>
</div>
	</form><br><br>


<?php
	error_reporting(E_ALL);
			if (isset($_POST['submit'])) {

			$month=addslashes($_POST['month']);
			$amount=addslashes($_POST['amount']);
			
			$result = $db->query("SELECT * FROM record WHERE month='$month'");
			if (($result->num_rows)>0) {
	  	  		echo "Sorry... Record is already inserted."; 
	  	  	}else{ 
		  	  	
				$q="INSERT INTO record (month,amount) VALUES ('$month','$amount')";
				
				if($db->query($q)==true){
		     		echo"inserted successfully";
		     		echo '<script language="Javascript">';
			        echo 'document.location.replace("./index.php")'; // -->
			        echo '</script>';
			    }
					   
		    	else{
		    		echo $db->error;
		    	}
			}
		}

		
					   
	?>


</body>
</html>










