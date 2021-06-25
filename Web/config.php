<?php
$conn_string = "ec2-54-91-188-254.compute-1.amazonaws.com"
        . " port=5432 dbname=daepclu8e7kfuk"
        . " user=owksetzrdvlxcl"
        . " password=b84953c9d2495fd42b3edf708d6d0a3334cdcec8e3b1b44c57a2032aeba1e491";
$db = pg_connect($conn_string);
//connect to a database named "test" on the host "sheep" with a username and password
   if(!$db) {
      echo "Error : Unable to open database phuc\n";
   } else {
      echo "Opened database successfully phuc\n";
   }
?>