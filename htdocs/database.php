<!-- dbase.php -->
<!-- To connect between php scripting and database. -->
<?php

define("DATABASE_HOST", "localhost");
define("DATABASE_USER", "root");


// To establish a connection to a databse and save in $conn
$conn =mysqli_connect(DATABASE_HOST, DATABASE_USER);

// If connection failed then display mysql error 
if (mysqli_connect_error())
  {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// To select one particular database to be used 
mysqli_select_db($conn,"ipk") or die( "Could not open products database");
?>