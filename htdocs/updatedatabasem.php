|<!--kemaskini.php-->
<!--To update data of ubah. into database-->
<?php
include("database.php");

extract ($_POST);


$query = "UPDATE selenggara SET nokontrakm = '$nokontrakm' ,namakontrakm = '$namakontrakm' ,tarikhkontrakm = '$tarikhkontrakm' ,tarikhkontrakendm = '$tarikhkontrakendm', statusm = '$statusm',pcnamem = '$pcnamem',pcvaluem = '$pcvaluem',pcspecm = '$pcspecm',printnamem = '$printnamem',printvaluem = '$printvaluem',printspecm = '$printspecm',notenamem = '$notenamem',notevaluem = '$notevaluem',notespecm = '$notespecm',pronamem = '$pronamem',provaluem = '$provaluem',prospecm = '$prospecm',scanamem = '$scanamem',scavaluem = '$scavaluem',scaspecm = '$scaspecm',camnamem = '$camnamem',camvaluem = '$camvaluem',camspecm = '$camspecm',sernamem = '$sernamem',servaluem = '$servaluem',serspecm = '$serspecm' WHERE idm = '$idm'";

$result = mysqli_query($conn,$query) or die ("Could not execute query in updatepagem.php");
if($result){
echo "<script type = 'text/javascript'> window.location='displaypagem.php' </script>";
}

?>