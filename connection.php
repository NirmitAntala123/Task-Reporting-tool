<?php
   $host        = "host = localhost";
   $port        = "port = 4050";
   $dbname      = "dbname = reportingtool";
   $credentials = "user = postgres password=1234";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
?>