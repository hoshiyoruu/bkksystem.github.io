<?php

include("connection.php");

session_start();
$id = $_SESSION['userID'];

$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$ic = mysqli_real_escape_string($conn, $_REQUEST['Ic']);
$idrel = mysqli_real_escape_string($conn, $_REQUEST['idRelationship']);
$idMember = ''; 

$sqlID = "SELECT m.idMember from membersdetail m LEFT JOIN familydetails f ON f.idMember = m.idMember  WHERE m.memberIC ='$id'"; 
    $result = $conn->query($sqlID); 
     
    if($result !== false && $result-> num_rows > 0) 
    { 
        while($row=$result->fetch_assoc()) 
        { 
            $idMember = $row['idMember']; 
        }
        
    }

$tmp_day = substr($ic,4,2);
$tmp_month = substr($ic,2,2);
$tmp_year = substr($ic,0,2);

if($tmp_year >= 00 && $tmp_year <= 30) {
 $tmp_year = 2000 + $tmp_year;
}

if($tmp_year >= 31 && $tmp_year <= 99) {
 $tmp_year = 1900 + $tmp_year;
}

$birthdate = $tmp_day."/".$tmp_month."/".$tmp_year;

$tmp_birthdate = $tmp_year."-".$tmp_month."-".$tmp_day;;
$age = date_create($tmp_birthdate)->diff(date_create('today'))->y;

//echo "birth date = " . $birthdate . " <br /> age = " . $age;

if(isset ($_POST["simpan"]))
{
    $sqli = "SELECT Ic FROM familydetails WHERE Ic = '$ic'";
    $check = mysqli_query($conn, $sqli);
    $count = mysqli_num_rows($check);

    if($count > 0)
    {
        echo "<script language='javascript'>alert('Maklumat tanggungan sudah ada.');window.location='tanggungan.php';</script>";
    }
    else if(preg_match("/^[0-9]+$/", $name)) //name is only characters @ special character
    {
        echo "<script language='javascript'>alert('Sila masukkan nama dengan betul.');window.location='tanggungan.php';</script>";
    }
    else
    {
        $sql = "INSERT INTO familydetails(name, Ic, birthdate, idMember, idRelationship) VALUES('$name', '$ic', '$tmp_birthdate', '$idMember', '$idrel')";

        if(mysqli_query($conn, $sql))
        {
            echo"<script language='javascript'>alert('Maklumat berjaya disimpan.');window.location='tanggungan.php';</script>";
        }
        else
        {
            echo "Error: Could not able to execute $sql. " .
            mysqli_error($conn);
        }
    }

}

//$sql = "INSERT INTO familydetails(name, Ic, birthdate, idMember, idRelationship) VALUES('$name', '$ic', '$tmp_birthdate', '$idMember', '$idrel')";

/*if(mysqli_query($conn, $sql))
{
    echo"<script language='javascript'>alert('Maklumat berjaya disimpan.');window.location='tanggungan.php';</script>";
}
else
{
    echo "Error: Could not able to execute $sql. " .
    mysqli_error($conn);
}*/

// Close connection
mysqli_close($conn);
?>