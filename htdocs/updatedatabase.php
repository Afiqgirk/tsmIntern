|<!--kemaskini.php-->
<!--To update data of ubah. into database-->
<?php
include("database.php");

extract ($_POST);


$query = "UPDATE senaraikontrak SET nokontrak = '$nokontrak' ,namakontrak = '$namakontrak' ,tarikhkontrak = '$tarikhkontrak' ,tarikhkontrakend = '$tarikhkontrakend', status = '$status',pcname = '$pcname',pcvalue = '$pcvalue',pcspec = '$pcspec',printname = '$printname',printvalue = '$printvalue',printspec = '$printspec',notename = '$notename',notevalue = '$notevalue',notespec = '$notespec',proname = '$proname',provalue = '$provalue',prospec = '$prospec',scaname = '$scaname',scavalue = '$scavalue',scaspec = '$scaspec',camname = '$camname',camvalue = '$camvalue',camspec = '$camspec',sername = '$sername',servalue = '$servalue',serspec = '$serspec' WHERE id = '$id'";

$result = mysqli_query($conn,$query) or die ("Could not execute query in updatepage.php");
if($result){
echo "<script type = 'text/javascript'> window.location='displaypage.php' </script>";
}

?>