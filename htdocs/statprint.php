<?php

session_start();
?>
<?php
if (isset($_SESSION["admin_id"])){
?>

<html>
<title>E-Contract IPK Pahang</title>
<head>    
<style>   

    #customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 90%;
    margin-left: 70px;
}

#customers td, #customers th {
    border: 1px solid black;
    text-align: center;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    text-align: center;
    background-color: darkblue;
    color: white;
    padding: 8px;
     width: 50%;
}
 
#customers td {
    padding: 8px;
    background-color: #f2f2f2;
    width: 50%;
}

#customers td:hover {background-color: #ddd;}
    
@media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}

 
 body {
  margin: 0;
  background-color: grey;
  font-family: Arial, Helvetica, sans-serif;
}

#navbar {
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
  display: block;
  transition: top 0.3s;
  text-decoration: none;
  z-index: 1;
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 15px;
  text-decoration: none;
  font-size: 17px;
}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}

#navbar a.active {
  background-color: darkblue; 
  color: white;
}
  

#dropbtn {
    background-color: darkblue;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display:inline-block;
    float: left;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: black;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 15px;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    width: 165px;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
    display: block;
    padding: 6px;
}

.dropdown1 {
    position: relative;
    display:inline-block;
    float: left;
}

.dropdown-content1 {
    display: none;
    position: absolute;
    background-color: black;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content1 a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    width: 165px;
}

.dropdown-content1 a:hover {
    background-color: #f1f1f1;
    }

.dropdown1:hover .dropdown-content1 {
    display: block;
    padding: 16px;
}     
    
i {
  border: solid white;
  border-width: 0 3px 3px 0;
  display: inline-block;
  padding: 3px;
}    

.down {
    transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
}
    
#dropbtn1 {
    background-color: #333;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}    
</style>
    </head>   

 
     <script>
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-50px";
  }
  prevScrollpos = currentScrollPos;
}
</script>
    
<body>  
    
<div id="navbar">
  <a href="senaraikontrak.php">Debriefing Contract Form</a>
  <a href="displaypage.php">Debriefing Contract List</a>
  <a href="displaypagem.php">Maintenance Contract List</a>
  <div class="dropdown">
    <button class="active" href="statistic.php" id="dropbtn">Debriefing Statistic 
      <i class="down"></i>
    </button>
    <div class="dropdown-content">
      <a href="statistic.php">PC</a>
      <a class="active" href="statprint.php">Printer</a>
      <a href="statnote.php">Notebook</a>
      <a href="statpro.php">Projector</a>
      <a href="statscan.php">Scanner</a>
      <a href="statcam.php">Camera</a>
      <a href="statser.php">Server</a>
    </div>
  </div>
    <div class="dropdown1">
    <button href="statistic.php" id="dropbtn1">Maintenance Statistic 
      <i class="down"></i>
    </button>
    <div class="dropdown-content1">
      <a href="statpcm.php">PC</a>
      <a href="statprintm.php">Printer</a>
      <a href="statnotem.php">Notebook</a>
      <a href="statprom.php">Projector</a>
      <a href="statscanm.php">Scanner</a>
      <a href="statcamm.php">Camera</a>
      <a href="statserm.php">Server</a>
    </div>
  </div>
  <a href="logout.php">Log Out</a>
    <h3 style="margin-left:90%; color:white; margin-top:14px; width:50%">e-Contract<img style=" color:white; margin-left:-27%; margin-top:-10px;" src="images/logo1.png" alt="Trulli" width="50" height="40"></h3>
</div> 
    <br><br><br>

<?php
include('database.php');
$connect = mysqli_connect("localhost","root","","ipk");
$query = "SELECT printname, SUM(printvalue) AS totalprint FROM senaraikontrak GROUP BY printname";
$result = mysqli_query($connect, $query);
?>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/main5.css">
  <link rel="stylesheet" type="text/css" href="css/main6.css">
  <link rel="stylesheet" type="text/css" href="css/main7.css">
  <link rel="stylesheet" type="text/css" href="css/main8.css">
  <link rel="stylesheet" type="text/css" href="css/main2.css">
  <link rel="stylesheet" type="text/css" href="css/main3.css">
  <script src="js/chart2.js"></script>
  <script src="js/chart3.js"></script>
    <script src="js/chart.js"></script>
      
    <script type="text/javascript">
	
		
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() 
	  {
        var data = google.visualization.arrayToDataTable([
				['Printer','Number'],
				<?php
				while($row = mysqli_fetch_array($result))
				{
					echo "['".$row["printname"]."',".$row["totalprint"]."],";
				}
				?>
        ]);

        var options = {
		  is3D : true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    <h2 style="text-align:center; background-color:darkblue; width:90%; color:white; margin-left:66px;"><b>Percentage/Total of <font color="yellow">Printer</font><br>Debriefing Contract</b></h2><br><br>
    <div id="piechart" style="margin:0 auto;width: 100%; height: 50%; padding-left: 31%; padding-right: 19%;"></div>  
   
          <table id="customers">
        <tr>
            <th>Printer Name</th>
            <th>Total Value</th>
        </tr>
              </table>
   
<?php
    
    $query="SELECT printname, SUM(printvalue) AS totalprint FROM senaraikontrak GROUP BY printname";
    $result = mysqli_query($conn,$query);
    
if (mysqli_num_rows($result) > 0){
        
    // output data each row
    while($row = mysqli_fetch_assoc($result)){
		$printname = $row['printname'];
        $printvalue =$row['totalprint'];
   

	?>
	

     <table id="customers">

        <tr>
            <td style="background-color:white; color:black;"><?php echo $printname; ?></td>
            <td style="background-color:white; color:black;"><?php echo $printvalue; ?></td>
        </tr>
    </table>
<?php
         }
 }
    ?><br>
</body>

</html>
<?php
}else{ echo"<script>alert('Please login first.');</script>";
       echo "<script type='text/javascript'> window.location='login.php' </script>";
     }
?>