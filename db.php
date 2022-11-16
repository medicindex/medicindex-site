<?php
//Database connection.
$con = MySQLi_connect(
   "sql110.epizy.com", //Server host name.
   "epiz_32980507", //Database username.
   "Fs5b4qusZH", //Database password.
   "epiz_32980507_meddata" //Database name or anything you would like to call it.
);
//Check connection
if (MySQLi_connect_errno()) {
   echo "Failed to connect to MySQL: " . MySQLi_connect_error();
}
?>