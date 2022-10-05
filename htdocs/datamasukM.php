<?php

include("database.php");

extract ($_POST);

$query = "INSERT INTO selenggara (nokontrak, nokontrakm,namakontrakm,tarikhkontrakm,tarikhkontrakendm,statusm,pcnamem,pcvaluem,pcspecm,printnamem,printvaluem,printspecm,notenamem,notevaluem,notespecm,pronamem,provaluem,prospecm,scanamem,scavaluem,scaspecm,camnamem,camvaluem,camspecm,sernamem,servaluem,serspecm) VALUES('$nokontrak', '$nokontrakm','$namakontrakm','$tarikhkontrakm','$tarikhkontrakendm','$statusm','$pcnamem','$pcvaluem','$pcspecm','$printnamem','$printvaluem','$printspecm','$notenamem','$notevaluem','$notespecm','$pronamem','$provaluem','$prospecm','$scanamem','$scavaluem','$scaspecm','$camnamem','$camvaluem','$camspecm','$sernamem','$servaluem','$serspecm')";



if (mysqli_query($conn, $query)) {

    echo "<script type='text/javascript'> window.location='displaypagem.php' </script>";

} else {
     
     echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

?>