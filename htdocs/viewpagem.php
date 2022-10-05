<?php

session_start();
?>
<?php
if (isset($_SESSION["admin_id"])){
?>

<?php
include("database.php");

$idURL = $_GET['idm'];

$query = "SELECT * FROM selenggara WHERE idm = '$idURL'";
$result = mysqli_query($conn,$query) or die ("Could not execute query in ubah.php");
$row = mysqli_fetch_assoc($result);
            $idm = $row['idm'];
            $nokontrakm = $row['nokontrakm'];
            $namakontrakm = $row['namakontrakm'];
            $tarikhkontrakm = $row['tarikhkontrakm'];
            $tarikhkontrakendm = $row['tarikhkontrakendm'];
            $statusm = $row['statusm'];
            $pcnamem = $row['pcnamem'];
            $pcvaluem =$row['pcvaluem'];
            $pcspecm =$row['pcspecm'];
            $printnamem =$row['printnamem'];
            $printvaluem =$row['printvaluem'];
            $printspecm =$row['printspecm'];
            $notenamem =$row['notenamem'];
            $notevaluem =$row['notevaluem'];
            $notespecm =$row['notespecm'];
            $pronamem =$row['pronamem'];
            $provaluem =$row['provaluem'];
            $prospecm =$row['prospecm'];
            $scanamem =$row['scanamem'];
            $scavaluem =$row['scavaluem'];
            $scaspecm =$row['scaspecm'];
            $camnamem =$row['camnamem'];
            $camvaluem =$row['camvaluem'];
            $camspecm =$row['camspecm'];
            $sernamem =$row['sernamem'];
            $servaluem =$row['servaluem'];
            $serspecm =$row['serspecm'];
    
        if($statusm=="ACTIVE")
	{
		$clr='green';
	}
     else
	    { 
        $clr='red';
        }
	?> 

<html>
<title>E-Contract IPK Pahang</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
    
 <style>  
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%; 
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
    width: 10%;
}
 
#customers td {
    padding: 8px;
    background-color: #f2f2f2;
    width: 10%;
}

#customers td:hover {background-color: #ddd;}
    
@media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
} 
</style>
    
<body>
   <img style="float:left;" src="images/logo1.png" alt="Trulli" width="90px" height="90px">
    <h3 style=" color:black;  font-size:26px; font-family:Trebuchet MS, Arial, Helvetica, sans-serif; margin-bottom:2px; text-align: left;">Telecommunication & Information Division IPK Pahang<br>Maintenance Contract(E-Contract)</h3><hr>
    
 <div class="panel"><br>

<table id="customers">
   <tr>
  <th style="border-color:darkblue">Contract Number</th>  
  </tr>
  <tr>
  <td><?php echo $nokontrakm; ?></td>
  </tr>   
</table>     
     
<table id="customers">
   <tr>
  <th style="border-color:darkblue">Contract Name</th>  
  </tr>
  <tr>
  <td><?php echo $namakontrakm; ?></td>
  </tr>   
</table>
     
     <table id="customers">
   <tr>
  <th style="border-color:darkblue">Date Period</th>  
  </tr>
  <tr>
  <td>valid
    <?php echo $tarikhkontrakm; ?>
    until
   <?php echo $tarikhkontrakendm; ?></td>
  </tr>   
</table>
 
<table id="customers">
   <tr>
  <th style="border-color:darkblue">Contract Status</th>  
  </tr>
  <tr>
  <td><font color="<?php echo $clr; ?>"><div><b><?php echo $statusm; ?></b></div></font></td>
  </tr>   
</table>     
     
<table id="customers">
   <tr>
  <th style="border-color:darkblue">Assets Type</th>  
  </tr>   
</table>    
    
<table id="customers">
  <tr>
    <th style="background-color:lightgrey; color:black;">PC</th>
    <th style="background-color:ghostwhite; color:black;">Printer</th>
    <th style="background-color:lightgrey; color:black;">Notebook</th>
    <th style="background-color:ghostwhite; color:black;">Projector</th>
    <th style="background-color:lightgrey; color:black;">Scanner</th>
    <th style="background-color:ghostwhite; color:black;">Camera</th>
    <th style="background-color:lightgrey; color:black;">Server</th>     
  </tr>

  <tr>
    <th style="border-color:darkblue"></th>
    <th style="border-color:darkblue"></th>
    <th style="border-color:darkblue"></th>
    <th style="border-color:darkblue">Name</th>
    <th style="border-color:darkblue"></th>
    <th style="border-color:darkblue"></th>
    <th style="border-color:darkblue"></th>     
  </tr>

  <tr>
    <td style="background-color:lightgrey"><?php echo $pcnamem; ?></td>
    <td style="background-color:ghostwhite"><?php echo $printnamem; ?></td>
    <td style="background-color:lightgrey"><?php echo $notenamem; ?></td>
    <td style="background-color:ghostwhite"><?php echo $pronamem; ?></td>
    <td style="background-color:lightgrey"><?php echo $scanamem; ?></td>
    <td style="background-color:ghostwhite"><?php echo $camnamem; ?></td>
    <td style="background-color:lightgrey"><?php echo $sernamem; ?></td>   
  </tr>

    <tr>
    <th style="border-color:darkblue"></th>
    <th style="border-color:darkblue"></th>
    <th style="border-color:darkblue"></th>
    <th style="border-color:darkblue">Value</th>
    <th style="border-color:darkblue"></th>
    <th style="border-color:darkblue"></th>
    <th style="border-color:darkblue"></th>     
  </tr>

  <tr>
    <td style="background-color:lightgrey"><?php echo $pcvaluem; ?></td>
    <td style="background-color:ghostwhite"><?php echo $printvaluem; ?></td>
    <td style="background-color:lightgrey"><?php echo $notevaluem; ?></td>
    <td style="background-color:ghostwhite"><?php echo $provaluem; ?></td>
    <td style="background-color:lightgrey"><?php echo $scavaluem; ?></td>
    <td style="background-color:ghostwhite"><?php echo $camvaluem; ?></td>
    <td style="background-color:lightgrey"><?php echo $servaluem; ?></td>   
  </tr>
    
    <tr>
    <th style="border-color:darkblue"></th>
    <th style="border-color:darkblue"></th>
    <th style="border-color:darkblue"></th>
    <th style="border-color:darkblue">Specifications</th>
    <th style="border-color:darkblue"></th>
    <th style="border-color:darkblue"></th>
    <th style="border-color:darkblue"></th>     
  </tr>

  <tr>
    <td style="background-color:lightgrey"><?php echo $pcspecm; ?></td>
    <td style="background-color:ghostwhite"><?php echo $printspecm; ?></td>
    <td style="background-color:lightgrey"><?php echo $notespecm; ?></td>
    <td style="background-color:ghostwhite"><?php echo $prospecm; ?></td>
    <td style="background-color:lightgrey"><?php echo $scaspecm; ?></td>
    <td style="background-color:ghostwhite"><?php echo $camspecm; ?></td>
    <td style="background-color:lightgrey"><?php echo $serspecm; ?></td>   
  </tr>
</table>

<br>
<input type="submit" onclick="myFunction2()" value="Print">
<br><br></div>   
</body>
</html>

<script>
function myFunction2() {
    window.print();
}
</script>

<?php
}else{ echo"<script>alert('Please login first.');</script>";
       echo "<script type='text/javascript'> window.location='login.php' </script>";
     }
?>