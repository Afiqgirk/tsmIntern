<!-- paper.php -->
<!-- To display all information of database. -->
<?php

session_start();
?>
<?php
if (isset($_SESSION["admin_id"])){
?>

<html>
<head>
<title>E-Contract IPK Pahang</title>
<meta http-eguiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="css/main4.css">
    <link rel="stylesheet" type="text/css" href="css/main5.css">
  <link rel="stylesheet" type="text/css" href="css/main3.css">
<style>
 body{
         background-color:  white;
         margin: 0;
     }
        
        .accordion {
    background-color: lightgrey;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: 1.2px solid darkblue;
    outline: none;
    font-size: 15px;
    transition: 0.4s;         
}

.active1, .accordion:hover {
    background-color: white;
    color: black;
}

.active1, .accordion:after {
    background-color: lightgrey;
    font-weight: bold;
    float: right;
    margin-left: 5px;
}

        
.panel {
    padding: 0 18px;
    background-color: #444;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
    color: white;
    text-align: justify;
}
    
/* end accor */
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

 
    
/* The menu -----------------------------------*/    
* {box-sizing: border-box}
body {font-family: Arial, Helvetica, sans-serif;}

#navbar {
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
  display: block;
  transition: top 0.3s;
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

/* --------------------------------------------*/   
    
.date {
    width: 77%;
    margin-top: -16px;
    text-align: right;
}

.date1 {
    width: 87%;
    margin-top: -16px;
    text-align: right;
}
    
.stat {
    float: right;
    width: 20%;
    margin-top: -16px;
    text-align: center;
    margin-left: 60%;
}

.valid {
    margin-right: 100%;
    width: 700%;
    text-align: center;
}
    
.until {
    width: 80%;
    text-align: right;
    margin-top: -16px;
}

.no {
    width: 20%;
    float: left;
    text-align: center;
}

.no1 {
    width: 20%;
    float: left;
    text-align: center;
}
/*button dalam*/
.buttonup {
    background-color: darkblue;
    color: white;
    padding: 7px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 15px;
    float: right;
    margin-right: 40px;
    text-decoration: none;
    }
 
.buttonup:hover {
    background-color: blue;
    text-decoration: none;
    color: white;
}
  
.buttonv {
    background-color: darkblue;
    color: white;
    padding: 7px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 15px;
    float: right;
    margin-right: 40px;
    text-decoration: none;
    }
 
.buttonv:hover {
    background-color: blue;
    text-decoration: none;
    color: white;
}    
    
.buttondel {
    background-color: darkred;
    color: white;
    padding: 7px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 15px;
    float: right;
    margin-right: 30px;
    text-decoration: none;
    }
 
.buttondel:hover {
    background-color: red;
    text-decoration: none;
    color: white;
}

/*button search*/
body {
    font-family: Arial;
}

* {
    box-sizing: border-box;
}
       

form.example input[type=text] {
    margin-left: 1%;
    padding: 10px;
    font-size: 17px;
    border: 2px solid blue;
    float: left;
    width: 91%;
    background-color: floralwhite;
}

form.example button {
    float: left;
    width: 7%;
    padding: 11.9px;
    background: darkblue;
    color: white;
    font-size: 17px;
    border: 0px solid blue;
    border-left: none;
    cursor: pointer;
}

form.example button:hover {
    background: #0b7dda;
}

form.example:after {
    content: "";
    clear: both;
    display: table;
}

/*button top*/    
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: darkblue;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: blue;
} 
    
#dropbtn {
    background-color: #333;
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
</style>
    
</head>
    
<body>    
    
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
    
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>

    <button onclick="topFunction()" id="myBtn" title="Go to top">^</button>

<div id="navbar">
  <a href="senaraikontrak.php">Debriefing Contract Form</a>
  <a href="displaypage.php">Debriefing Contract List</a>
  <a class="active" href="displaypagem.php">Maintenance Contract List</a>
  <div class="dropdown">
    <button href="statistic.php" id="dropbtn">Debriefing Statistic 
      <i class="down"></i>
    </button>
    <div class="dropdown-content">
      <a href="statistic.php">PC</a>
      <a href="statprint.php">Printer</a>
      <a href="statnote.php">Notebook</a>
      <a href="statpro.php">Projector</a>
      <a href="statscan.php">Scanner</a>
      <a href="statcam.php">Camera</a>
      <a href="statser.php">Server</a>
    </div>
  </div>
    <div class="dropdown1">
    <button href="statistic.php" id="dropbtn">Maintenance Statistic 
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
    <br><br><br><br>

 <form class="example" action= displaypagem.php><p align=center><input type=text name=search placeholder="Search by Contract Number..." size=50>
<button class="search" type="submit">Search</button></form>
<br>   

<table id="customers">
  <tr>
    <th style="background-color:darkblue; color:white;">Maintenance Contract Number</th>
    <th style="background-color:darkblue; color:white;">Debriefing Contract Number(Referal)</th>
    <th style="background-color:darkblue; color:white;">Date Period</th>
    <th style="background-color:darkblue; color:white;">Contract Status</th>    
  </tr>
    </table>
    
<?php
include("database.php");
    
if( isset($_GET['search']))
{
    $search = $_GET['search'];   
    $query = "SELECT * FROM selenggara,senaraikontrak WHERE nokontrakm LIKE '$search' ORDER BY nokontrakm";
    }
else
	$query="SELECT * FROM selenggara,senaraikontrak ORDER BY nokontrakm ";
    $result = mysqli_query($conn,$query);


    
if (mysqli_num_rows($result) > 0){
    // output data each row
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
		$idm = $row['idm'];
        $nokontrakm = $row['nokontrakm'];
        $nokontrak = $row['nokontrak'];
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
         
    <button class="accordion">
<table >
  <tr>
      <td style="width:10%; text-align:center;"><div><?php echo $nokontrakm; ?></div></td>
      <td style="width:10%; text-align:center;"><div><a href="viewpage.php?id=<?php echo $id; ?>"><?php echo $nokontrak; ?></a></div></td>
      <td style="width:10%; text-align:center;"><div>valid <?php echo $tarikhkontrakm; ?> until <?php echo $tarikhkontrakendm; ?></div></td>
      <td style="width:10%; text-align:center;"><font color="<?php echo $clr; ?>"><div><b><?php echo $statusm; ?></b></div></font></td>
  </tr>   
</table>
    
    </button>
<div class="panel"><br>

<table id="customers">
   <tr>
  <th style="border-color:darkblue">Contract Name</th>  
  </tr>
  <tr>
  <td style="background-color:ghosttwhite"><?php echo $namakontrakm; ?></td>
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
    <a  class="buttondel" onclick="myFunction()">Delete</a><a class="buttonup" href="updatepagem.php?idm=<?php echo $idm; ?>">Edit</a><a  class="buttonv" href="viewpagem.php?idm=<?php echo $idm; ?>">View</a>
<br><br></div>
         
<?php
      }
} else {
    echo "Sorry!!!Searching Not Found...Please enter other Contract Number...";

}
?>

    <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active1");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>


    <script>
function myFunction() {
    if (confirm("Are you confirm to delete this data?")) {
        window.location='deletepagem.php?idm=<?php echo $idm; ?>'
        alert('Data has been deleted.');     
    }
    
}
</script>
    
    
</body>
</html>

<?php
}else{ echo"<script>alert('Please login first.');</script>";
       echo "<script type='text/javascript'> window.location='login.php' </script>";
     }
?>