<?php

include("connection.php");

//$idmember = $_POST["idMember"];
$memberIC = $_POST["memberIC"];
$memberName = addslashes($_POST["memberName"]);
$phoneNum = $_POST["phoneNum"];
$homeNum = $_POST["homeNum"];
$email = $_POST["email"];
$address1 = $_POST["address1"];
$address2 = $_POST["address2"];
$city = $_POST["city"];
$state = $_POST["state"];
$postcode = $_POST["postcode"];
$pattern = '/[\'\/~`\!#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/';

if(isset ($_POST["s"]))
{
    //Check data existence
    $sqli = "SELECT memberIC FROM membersdetail WHERE memberIC = '$memberIC'";
    $check = mysqli_query($conn, $sqli);
    $count = mysqli_num_rows($check);
    //$memberName = $_POST["memberName"];
    if($count > 0)
    {
        echo "<script language='javascript'>alert('Nombor kad pengenalan sudah ada. Sila masukkan nombor kad pengenalan dengan betul.');window.location='updateMaklumatForm.php';</script>";
    }
    else if(!preg_match("/^[\'a-zA-Z\s@.-]+$/", $memberName)) //name is only characters @ special character
    {
        echo "<script language='javascript'>alert('Sila masukkan nama dengan betul.');window.location='updateMaklumatForm.php';</script>";
    }
    else if(!preg_match("/^[a-zA-Z\s]+$/", $city))
    {
        echo "<script language='javascript'>alert('Sila masukkan nama daerah dengan betul.');window.location='updateMaklumatForm.php';</script>";
    }
    /*else if(preg_match($pattern, $city))
    {
        echo "<script language='javascript'>alert('Sila masukkan nama daerah dengan betul.');window.location='updateMaklumatForm.php';</script>";

    }*/
    else if(!preg_match("/^[a-zA-Z\s]+$/", $state))
    {
        echo "<script language='javascript'>alert('Sila masukkan nama negeri dengan betul.');window.location='updateMaklumatForm.php';</script>";
    }
    /*else if(preg_match($pattern, $state))
    {
        echo "<script language='javascript'>alert('Sila masukkan nama negeri dengan betul.');window.location='updateMaklumatForm.php';</script>";

    }*/
    else if(!preg_match("/^[0-9]+$/", $postcode))
    {
        echo "<script language='javascript'>alert('Sila masukkan nombor poskod dengan betul.');window.location='updateMaklumatForm.php';</script>";

    }
    /*else if(preg_match($pattern, $postcode))
    {
        echo "<script language='javascript'>alert('Sila masukkan nombor poskod dengan betul.');window.location='updateMaklumatForm.php';</script>";

    }*/
    else
    {
        $sql = "UPDATE membersdetail SET memberIC='$memberIC', memberName='$memberName', phoneNum='$phoneNum', homeNum='$homeNum', email='$email', address1='$address1', address2='$address2', city='$city', state='$state', postcode='$postcode' WHERE memberIC='$memberIC'";

        if($conn->query($sql) == TRUE)
        {
            echo"<script language='javascript'>alert('Kemaskini maklumat telah berjaya.');window.location='updateMaklumatForm.php';</script>";
        }
        else
        {
            echo "Error: ".$sql. "<br>".$conn->error;
        }
    }

}
//$sql = "UPDATE membersdetail SET memberIC='$memberIC', memberName='$memberName', phoneNum='$phoneNum', homeNum='$homeNum', email='$email', address1='$address1', address2='$address2', city='$city', state='$state', postcode='$postcode' WHERE memberIC='$memberIC'";

/**if($conn->query($sql) == TRUE)
{
    echo"<script language='javascript'>alert('Kemaskini maklumat telah berjaya.');window.location='updateMaklumatForm.php';</script>";
}
else
{
    echo "Error: ".$sql. "<br>".$conn->error;
}*/

$conn->close();
?>