<?php
//database connection file
//save this file as connection.php inside the newly created folder

//$ is to declare variable and put in front of the variable name
//"" or '' for string/char/varchar/text/lob/clob/blob/date/time/datetime
//in php does not need datatype in front of the variable name
$dbuser = "root";
$dbpass = "";
$dbhost = "localhost"; //bole replace dgn database server ip address
$dbname = "bkksystemdb";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
/*if(!isset($conn))
    echo "connection is not ok";
else    
    print "hahaha connection is ok";*/
?>