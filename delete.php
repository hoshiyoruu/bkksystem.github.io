<?php

include ("connection.php");

$ic = $_GET["Ic"];

$sql = "DELETE FROM familydetails WHERE Ic = '$ic'";

if($conn->query($sql) == TRUE)
{
    echo"<script language='javascript'>alert('Maklumat berjaya dipadam.');window.location='tanggungan.php';</script>";

}
else
{
    echo "Error: ".$sql. "<br>".$conn->error;
}

$conn->close();
?>