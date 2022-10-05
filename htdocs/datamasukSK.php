<?php

include("database.php");

extract ($_POST);

$query = "INSERT INTO senaraikontrak (nokontrak,namakontrak,tarikhkontrak,tarikhkontrakend,status,pcname,pcvalue,pcspec,printname,printvalue,printspec,notename,notevalue,notespec,proname,provalue,prospec,scaname,scavalue,scaspec,camname,camvalue,camspec,sername,servalue,serspec) VALUES('$nokontrak','$namakontrak','$tarikhkontrak','$tarikhkontrakend','$status','$pcname','$pcvalue','$pcspec','$printname','$printvalue','$printspec','$notename','$notevalue','$notespec','$proname','$provalue','$prospec','$scaname','$scavalue','$scaspec','$camname','$camvalue','$camspec','$sername','$servalue','$serspec')";



if (mysqli_query($conn, $query)) {

    echo "<script type='text/javascript'> window.location='senaraikontrak.php' </script>";

} else {
     
     echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

?>