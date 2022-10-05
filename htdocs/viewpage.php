<?php

session_start();
?>
<?php
if (isset($_SESSION["admin_id"])){
?>

<?php
include("database.php");

$idURL = $_GET['id'];

$query = "SELECT * FROM senaraikontrak WHERE id = '$idURL'";
$result = mysqli_query($conn,$query) or die ("Could not execute query in ubah.php");
$row = mysqli_fetch_assoc($result);
$id = $row['id'];
$nokontrak = $row['nokontrak'];
$namakontrak = $row['namakontrak'];
$tarikhkontrak = $row['tarikhkontrak'];
$tarikhkontrakend = $row['tarikhkontrakend'];
        $status = $row['status'];
		$pcname = $row['pcname'];
        $pcvalue =$row['pcvalue'];
        $pcspec =$row['pcspec'];
        $printname =$row['printname'];
        $printvalue =$row['printvalue'];
        $printspec =$row['printspec'];
        $notename =$row['notename'];
        $notevalue =$row['notevalue'];
        $notespec =$row['notespec'];
        $proname =$row['proname'];
        $provalue =$row['provalue'];
        $prospec =$row['prospec'];
        $scaname =$row['scaname'];
        $scavalue =$row['scavalue'];
        $scaspec =$row['scaspec'];
        $camname =$row['camname'];
        $camvalue =$row['camvalue'];
        $camspec =$row['camspec'];
        $sername =$row['sername'];
        $servalue =$row['servalue'];
        $serspec =$row['serspec'];

    if($status=="ACTIVE")
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
  <td><?php echo $nokontrak; ?></td>
  </tr>   
</table>     
     
<table id="customers">
   <tr>
  <th style="border-color:darkblue">Contract Name</th>  
  </tr>
  <tr>
  <td><?php echo $namakontrak; ?></td>
  </tr>   
</table>
     
     <table id="customers">
   <tr>
  <th style="border-color:darkblue">Date Period</th>  
  </tr>
  <tr>
  <td>valid
    <?php echo $tarikhkontrak; ?>
    until
   <?php echo $tarikhkontrakend; ?></td>
  </tr>   
</table>
 
<table id="customers">
   <tr>
  <th style="border-color:darkblue">Contract Status</th>  
  </tr>
  <tr>
  <td><font color="<?php echo $clr; ?>"><div><b><?php echo $status; ?></b></div></font></td>
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
    <td style="background-color:lightgrey"><?php echo $pcname; ?></td>
    <td style="background-color:ghostwhite"><?php echo $printname; ?></td>
    <td style="background-color:lightgrey"><?php echo $notename; ?></td>
    <td style="background-color:ghostwhite"><?php echo $proname; ?></td>
    <td style="background-color:lightgrey"><?php echo $scaname; ?></td>
    <td style="background-color:ghostwhite"><?php echo $camname; ?></td>
    <td style="background-color:lightgrey"><?php echo $sername; ?></td>   
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
    <td style="background-color:ghostwhite"><?php echo $pcvalue; ?></td>
    <td style="background-color:ghostwhite"><?php echo $printvalue; ?></td>
    <td style="background-color:ghostwhite"><?php echo $notevalue; ?></td>
    <td style="background-color:ghostwhite"><?php echo $provalue; ?></td>
    <td style="background-color:lightgrey"><?php echo $scavalue; ?></td>
    <td style="background-color:ghostwhite"><?php echo $camvalue; ?></td>
    <td style="background-color:lightgrey"><?php echo $servalue; ?></td>   
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
    <td style="background-color:lightgrey"><?php echo $pcspec; ?></td>
    <td style="background-color:ghostwhite"><?php echo $printspec; ?></td>
    <td style="background-color:lightgrey"><?php echo $notespec; ?></td>
    <td style="background-color:ghostwhite"><?php echo $prospec; ?></td>
    <td style="background-color:lightgrey"><?php echo $scaspec; ?></td>
    <td style="background-color:ghostwhite"><?php echo $camspec; ?></td>
    <td style="background-color:lightgrey"><?php echo $serspec; ?></td>   
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