<!-- buang.php -->
<!-- To delete one particular data.-->
<?php

include ("database.php");

$idURL = $_GET['id'];

$query = "DELETE FROM senaraikontrak WHERE id ='$idURL'";
$result = mysqli_query($conn,$query) or die ("Could not execute query in deletepage.php");

if($result){
echo "<script type='text/javascript'>window.location='displaypage.php'</script>";
}
?>