<!-- buang.php -->
<!-- To delete one particular data.-->
<?php

include ("database.php");

$idURL = $_GET['idm'];

$query = "DELETE FROM selenggara WHERE idm ='$idURL'";
$result = mysqli_query($conn,$query) or die ("Could not execute query in deletepagem.php");

if($result){
echo "<script type='text/javascript'>window.location='displaypagem.php'</script>";
}
?>