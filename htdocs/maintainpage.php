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

?>

<html>
<head>
<title>E-Contract IPK Pahang</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style>

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}
    
    input[type=date], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: darkblue;
    color: white;
    padding: 7px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
    margin-left: 6px;
    
}

input[type=submit]:hover {
    background-color: blue;
}

.container1 {
    background-color: lightgray;
    padding: 20px;
    border: 2px solid darkblue;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}
    
.col-85 {
    float: left;
    width: 33%;
    margin-top: 6px;
}
    
.col-35 {
    float: left;
    width: 9%;
    margin-top: 6px;
    text-align: center;
}

    
#cancel a {
    background-color: darkred;
    color: white;
    padding: 7px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
    margin-left: 6px;
    font-size: 14px;
    text-decoration: none;
}

#cancel a:hover {
    background-color: red;
}
    
/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
/* The menu -----------------------------------*/    
* {box-sizing: border-box}
body {font-family: Arial, Helvetica, sans-serif;}

 body {
  margin: 0;
  background-color: #f1f1f1;
  font-family: Arial, Helvetica, sans-serif;
}

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
/* The container -----------------------------------*/
.cont {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 17px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default radio button */
.cont input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
    position: absolute;
    top: 5;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: grey;
    border-radius: 0%;
}

/* On mouse-over, add a grey background color */
.cont:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.cont input:checked ~ .checkmark {
    background-color: darkblue;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the indicator (dot/circle) when checked */
.cont input:checked ~ .checkmark:after {
    display: block;
}

/* Style the indicator (dot/circle) */
.cont .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
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
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" type="text/css" href="css/main3.css">

<div id="navbar">
  <a href="senaraikontrak.php">Debriefing Contract Form</a>
  <a class="active" href="displaypage.php">Debriefing Contract List</a>
  <a href="displaypagem.php">Maintenance Contract List</a>
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
    <br><br><br>
<div class="container1">
  <form method="post" action="datamasukM.php">
      <div class="row">
      <div class="col-25" style="background-color:darkblue; width:100%; color:white;">
          <h3><label for="fname"><b>&nbsp;Debriefing Contract(Referal)</b></label></h3>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname"><b>Contract Number:</b></label>
      </div>
      <div class="col-75">
        <input type="text" value="<?php echo $nokontrak; ?>" pattern=".{4,}" title="Must contain 4 or more characters and numeric." name="nokontrak" placeholder="Please fill out this field..."   /required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname"><b>Contract Name:</b></label>
      </div>
      <div class="col-75">
        <input type="text" value="<?php echo $namakontrak; ?>" pattern=".{4,}" title="Must contain 4 or more characters and numeric." name="namakontrak" placeholder="Please fill out this field..."   /required>
      </div>
    </div>
      
      <div class="row"><hr>
      <div class="col-25" style="background-color:darkblue; width:100%; color:white;">
          <h3><label for="fname"><b>&nbsp;Maintenance Contract</b></label></h3>
      </div>
    </div>
       <div class="row">
      <div class="col-25">
        <label for="fname"><b>Contract Number:</b></label>
      </div>
      <div class="col-75">
        <input type="text" pattern=".{4,}" title="Must contain 4 or more characters and numeric." name="nokontrakm" placeholder="Please fill out this field..."   /required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname"><b>Contract Name:</b></label>
      </div>
      <div class="col-75">
        <input type="text" pattern=".{4,}" title="Must contain 4 or more characters and numeric." name="namakontrakm" placeholder="Please fill out this field..."   /required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
          <label for="lname"><b>Date Period:</b></label>
      </div>
      <div class="col-85">
              <input type="date" name="tarikhkontrakm" /required>
      </div>
        <div class="col-35"><br>until</div>
      <div class="col-85">
              <input type="date" name="tarikhkontrakendm" /required>
      </div>
    </div>
      <div class="row">
      <div class="col-25">
          <label for="lname"><b>Contract Status:</b></label>
      </div>
          <div class="col-25">
      <label class="cont">Active
      <input type="radio" value="ACTIVE" name="statusm" /required>
      <span class="checkmark"></span>
      </label>
              </div>
          <div class="col-25">
      <label class="cont">Not Active
      <input type="radio" value="NOT ACTIVE" name="statusm" /required>
      <span class="checkmark"></span>
      </label>
              </div>
    </div>
            <div class="row">
      <div class="col-25">
          <label for="lname"><b>Assets Type:</b></label>
      </div>

    </div>
      <div class="row">
      <div class="col-25" style="background-color:darkblue; width:100%; color:white;">
          <h4><label for="lname"><b>&nbsp;PC</b></label></h4>
      </div>
      </div>
      <hr>
      <div class="row">
      <div class="col-25">
        <label for="lname">Name</label>
      </div>
      <div class="col-75">
        <input type="text" pattern=".{2,}" title="Must contain 2 or more characters and numeric." name="pcnamem" placeholder="Please fill out this field..."  /required>
      </div>
      </div>
      <div class="row">
       <div class="col-25">
        <label for="lname">Value</label>
      </div>
      <div class="col-75">
        <input type="text" pattern="[0-9]{0,}" title="Must contain numeric only." name="pcvaluem" placeholder="Please fill out this field..." /required>
      </div>
    </div>
    <div class="row">
       <div class="col-25">
        <label for="lname">Specifications</label>
      </div>
      <div class="col-75">
        <input type="text" pattern=".{2,}" title="Must contain 2 or more characters and numeric." name="pcspecm" placeholder="Please fill out this field..." /required>
      </div>
    </div>
    <hr>
      <div class="row">
      <div class="col-25" style="background-color:darkblue; width:100%; color:white;">
          <h4><label for="lname"><b>&nbsp;Printer</b></label></h4>
      </div>
      </div>
      <hr>
      <div class="row">
      <div class="col-25">
        <label for="lname">Name</label>
      </div>
      <div class="col-75">
        <input type="text" pattern=".{2,}" title="Must contain 2 or more characters and numeric." name="printnamem" placeholder="Please fill out this field..." /required>
      </div>
      </div>
      <div class="row">
       <div class="col-25">
        <label for="lname">Value</label>
      </div>
      <div class="col-75">
        <input type="text" pattern="[0-9]{0,}" title="Must contain numeric only." name="printvaluem" placeholder="Please fill out this field..." /required>
      </div>
    </div>
    <div class="row">
       <div class="col-25">
        <label for="lname">Specifications</label>
      </div>
      <div class="col-75">
          <input type="text" pattern=".{2,}" title="Must contain 2 or more characters and numeric." name="printspecm" placeholder="Please fill out this field..." /required>
      </div>
    </div>
    <hr>
      <div class="row">
      <div class="col-25" style="background-color:darkblue; width:100%; color:white;">
          <h4><label for="lname"><b>&nbsp;Notebook</b></label></h4>
      </div>
      </div>
      <hr>
      <div class="row">
      <div class="col-25">
        <label for="lname">Name</label>
      </div>
      <div class="col-75">
        <input type="text" pattern=".{2,}" title="Must contain 2 or more characters and numeric." name="notenamem" placeholder="Please fill out this field..." /required>
      </div>
      </div>
      <div class="row">
       <div class="col-25">
        <label for="lname">Value</label>
      </div>
      <div class="col-75">
        <input type="text" pattern="[0-9]{0,}" title="Must contain numeric only." name="notevaluem" placeholder="Please fill out this field..." /required>
      </div>
    </div>
    <div class="row">
       <div class="col-25">
        <label for="lname">Specifications</label>
      </div>
      <div class="col-75">
        <input type="text" pattern=".{2,}" title="Must contain 2 or more characters and numeric." name="notespecm" placeholder="Please fill out this field..." /required>
      </div>
    </div>
     <hr>
      <div class="row">
      <div class="col-25" style="background-color:darkblue; width:100%; color:white;">
          <h4><label for="lname"><b>&nbsp;Projector</b></label></h4>
      </div>
      </div>
      <hr>
      <div class="row">
      <div class="col-25">
        <label for="lname">Name</label>
      </div>
      <div class="col-75">
        <input type="text" pattern=".{2,}" title="Must contain 2 or more characters and numeric." name="pronamem" placeholder="Please fill out this field..." /required>
      </div>
      </div>
      <div class="row">
       <div class="col-25">
        <label for="lname">Value</label>
      </div>
      <div class="col-75">
        <input type="text" pattern="[0-9]{0,}" title="Must contain numeric only." name="provaluem" placeholder="Please fill out this field..." /required>
      </div>
    </div>
    <div class="row">
       <div class="col-25">
        <label for="lname">Specifications</label>
      </div>
      <div class="col-75">
        <input type="text" pattern=".{2,}" title="Must contain 2 or more characters and numeric." name="prospecm" placeholder="Please fill out this field..." /required>
      </div>
    </div>
    <hr>
      <div class="row">
      <div class="col-25" style="background-color:darkblue; width:100%; color:white;">
          <h4><label for="lname"><b>&nbsp;Scanner</b></label></h4>
      </div>
      </div>
      <hr>
      <div class="row">
      <div class="col-25">
        <label for="lname">Name</label>
      </div>
      <div class="col-75">
        <input type="text" pattern=".{2,}" title="Must contain 2 or more characters and numeric." name="scanamem" placeholder="Please fill out this field..." /required>
      </div>
      </div>
      <div class="row">
       <div class="col-25">
        <label for="lname">Value</label>
      </div>
      <div class="col-75">
        <input type="text" pattern="[0-9]{0,}" title="Must contain numeric only." name="scavaluem" placeholder="Please fill out this field..." /required>
      </div>
    </div>
    <div class="row">
       <div class="col-25">
        <label for="lname">Specifications</label>
      </div>
      <div class="col-75">
        <input type="text" pattern=".{2,}" title="Must contain 2 or more characters and numeric." name="scaspecm" placeholder="Please fill out this field..." /required>
      </div>
    </div>
  <hr>
      <div class="row">
      <div class="col-25" style="background-color:darkblue; width:100%; color:white;">
          <h4><label for="lname"><b>&nbsp;Camera</b></label></h4>
      </div>
      </div>
      <hr>
      <div class="row">
      <div class="col-25">
        <label for="lname">Name</label>
      </div>
      <div class="col-75">
        <input type="text" pattern=".{2,}" title="Must contain 2 or more characters and numeric." name="camnamem" placeholder="Please fill out this field..." /required>
      </div>
      </div>
      <div class="row">
       <div class="col-25">
        <label for="lname">Value</label>
      </div>
      <div class="col-75">
        <input type="text" pattern="[0-9]{0,}" title="Must contain numeric only." name="camvaluem" placeholder="Please fill out this field..." /required>
      </div>
    </div>
    <div class="row">
       <div class="col-25">
        <label for="lname">Specifications</label>
      </div>
      <div class="col-75">
        <input type="text" pattern=".{2,}" title="Must contain 2 or more characters and numeric." name="camspecm" placeholder="Please fill out this field..." /required>
      </div>
    </div>
  <hr>
      <div class="row">
      <div class="col-25" style="background-color:darkblue; width:100%; color:white;">
          <h4><label for="lname"><b>&nbsp;Server</b></label></h4>
      </div>
      </div>
      <hr>
      <div class="row">
      <div class="col-25">
        <label for="lname">Name</label>
      </div>
      <div class="col-75">
        <input type="text" pattern=".{2,}" title="Must contain 2 or more characters and numeric." name="sernamem" placeholder="Please fill out this field..." /required>
      </div>
      </div>
      <div class="row">
       <div class="col-25">
        <label for="lname">Value</label>
      </div>
      <div class="col-75">
        <input type="text" pattern="[0-9]{0,}" title="Must contain numeric only." name="servaluem" placeholder="Please fill out this field..." /required>
      </div>
    </div>
    <div class="row">
       <div class="col-25">
        <label for="lname">Specifications</label>
      </div>
      <div class="col-75">
        <input type="text" pattern=".{2,}" title="Must contain 2 or more characters and numeric." name="serspecm" placeholder="Please fill out this field..." /required>
      </div>
    </div>
    <hr>
    <div class="row">
        <div id="cancel"><a href="displaypage.php">Cancel</a></div><input type="submit" value="Save">
    </div>
  </form>
</div>
   
    
</body>
</html>

<?php
}else{ echo"<script>alert('Please login first.');</script>";
       echo "<script type='text/javascript'> window.location='login.php' </script>";
     }
?>