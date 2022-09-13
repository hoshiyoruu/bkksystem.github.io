<?php
include("connection.php");

/*function checkID($conn, $noAhli)
{
    $found=false;
    $sql = "SELECT s.idMember, m.idMember FROM systemuser s LEFT JOIN membersdetail m ON s.idMember=m.idMember WHERE noAhli='".$noAhli."'";
    $qry=mysqli_query($conn, $sql);
    $row=mysqli_num_rows($qry);

    if($row > 0)
    {
        $found = true;
    }
    return $found;
}*/

$noAhli = $_POST['noAhli'];
$userName = $_POST['userName'];
$userPassword = $_POST['userPassword1'];
$typeID = 4; //1-AHLI, 2-PENGERUSI, 3-BENDAHARI, 4-AJK
$idMember = '';

if(isset($_POST['submit']))
{
    if(preg_match("/^[0-9]+$/", $userName) ) //name is only characters @ special character
    {
        echo "<script language='javascript'>alert('Sila masukkan nama dengan betul.');window.location='registerAJK.php';</script>";
    }
    else
    {
        $sqlID = "SELECT idMember from membersdetail WHERE noAhli='".$noAhli."'";
        $result = $conn->query($sqlID);
            
        if($result-> num_rows > 0)
        {
            while($w=$result->fetch_assoc())
            {
                $idMember = $w['idMember'];
            }
        }

        /*if(checkID($conn, $noAhli) == true)
        {
            echo "<script language='javascript'>alert('ID is already exist.');window.location='registerAJK.php';</script>";
        }
        else
        {*/
            $sql = "INSERT INTO systemuser (userName, userPassword, typeID, idMember) VALUES ('".$userName."','".$userPassword."', '".$typeID."', '".$idMember."')";
            //.md5 for basic encryption
            //echo $sql;
            mysqli_query($conn, $sql);
            echo "<script language='javascript'>alert('Registration is success.');window.location='registerAJK.php';</script>";
        //}
    }
}
?>