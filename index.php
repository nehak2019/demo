<!DOCTYPE html>
<html>
      <title>rice selling</title>
      <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  .main{
    margin-left: 400px;
    margin-top: 150px;
    border: 1px solid black;
    width: 35%;
    text-align: center;
    height: 350px;
    background-color: lightgray;
    border-radius: 15px;
  }
  button{
    margin-top: 65px;
    color: white;
    background-color:green; 
    border-radius: 15px;
    border: 1px green;
  }
  

</style>
</head>

<body>
  <?php
  include 'connection.php';
  ?>
     <div class="main">
           
          <a href = "record.php" class="rec"><button class="btn btn-lg btn-success btn-block text-uppercase" style="height: 50px; width: 180px;" >SUBMIT RECORDS</button></a><br>
          <a href = "line_chart.php"><button class="btn btn-lg btn-primary btn-block text-uppercase" style="height: 50px; width: 180px;">VIEW CHARTS</button></a>

          </div>





</body>
</html>
