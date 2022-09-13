<?php

include("connection.php");

function calculateAge($icno)
{
    $tmp_day = substr($icno,4,2);
    $tmp_month = substr($icno,2,2);
    $tmp_year = substr($icno,0,2);

    //to add 20 to the front to make year 2000 until 2030
    if($tmp_year >= 00 && $tmp_year <= 30) {
    $tmp_year = 2000 + $tmp_year;
    }

    //to add 19 to the front to make year 1931 until 1999
    if($tmp_year >= 31 && $tmp_year <= 99) {
    $tmp_year = 1900 + $tmp_year;
    }

    //to arrange birthdate in terms of dd/mm/yyyy
    $birthdate = $tmp_day."/".$tmp_month."/".$tmp_year;

    //to arrange birthdate in terms of yyyy-mm-dd
    $tmp_birthdate = $tmp_year."-".$tmp_month."-".$tmp_day;;
    //$age = date_create($tmp_birthdate)->diff(date_create('today'))->y;

    return $tmp_birthdate;
    //return $age;
}

$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$ic = mysqli_real_escape_string($conn, $_REQUEST['ic']);
$birth = mysqli_real_escape_string($conn, $_REQUEST[calculateAge($ic)]);
$idrel = mysqli_real_escape_string($conn, $_REQUEST['idRelationship']);
$id = mysqli_real_escape_string($conn, $_REQUEST['idMember']);

$sql = "INSERT INTO familydetails(name, ic, birthdate, idRelationship, idMember) VALUES('$name', '$ic', '$birth', '$idrel', '$id')";

if(mysqli_query($conn, $sql))
{
    echo "Maklumat berjaya disimpan.";
}
else
{
    echo "Error: Could not able to execute $sql. " .
    mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>