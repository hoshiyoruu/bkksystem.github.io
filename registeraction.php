<?php

include("connection.php");

function generateToken($length) 
{ 
    $token = ""; 
    $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ"; 
    $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz"; 
    $codeAlphabet.= "0123456789"; 
    $codeAlphabet.= "-_.~";  // Special characters allowed in url 
    $max = strlen($codeAlphabet); 
 
    for ($i=0; $i < $length; $i++)  
    { 
        $token .= $codeAlphabet[random_int(0, $max-1)]; //random_int() - php7, rand() - php5 
    } 
 
    return $token; 
}

//$idmember = $_POST["idMember"];
$memberIC = $_POST["memberIC"];
$memberName = $_POST["memberName"];
$phoneNum = $_POST["phoneNum"];
$homeNum = $_POST["homeNum"];
$email = $_POST["email"];
$address1 = $_POST["address1"];
$address2 = $_POST["address2"];
$city = $_POST["city"];
$state = $_POST["state"];
$postcode = $_POST["postcode"];
$pattern = '/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/';
$tokenID = generateToken(256);

if(isset ($_POST["submit"]))
{
    //Check data existence
    $sqli = "SELECT memberIC FROM membersdetail WHERE memberIC = '$memberIC'";
    $check = mysqli_query($conn, $sqli);
    $count = mysqli_num_rows($check);

    //$memberName = $_POST["memberName"];
    if($count > 0)
    {
        echo "<script language='javascript'>alert('Maklumat ahli sudah ada. Sila masukkan maklumat ahli baru.');window.location='registrationForm.php';</script>";
    }
    else if(!preg_match('/^[ A-Za-z@.-]*$/', $memberName) ) //name is only characters @ special character
    {
        echo "<script language='javascript'>alert('Sila masukkan nama dengan betul.');window.location='registrationForm.php';</script>";
    }
    /**else if(preg_match("/^[0-9]+$/", $city))
    {
        echo "<script language='javascript'>alert('Sila masukkan nama daerah dengan betul.');window.location='updateMaklumatForm.php';</script>";
    }
    else if(preg_match($pattern, $city))
    {
        echo "<script language='javascript'>alert('Sila masukkan nama daerah dengan betul.');window.location='updateMaklumatForm.php';</script>";

    }
    else if(preg_match("/^[0-9]+$/", $state))
    {
        echo "<script language='javascript'>alert('Sila masukkan nama negeri dengan betul.');window.location='updateMaklumatForm.php';</script>";
    }
    else if(preg_match($pattern, $state))
    {
        echo "<script language='javascript'>alert('Sila masukkan nama negeri dengan betul.');window.location='updateMaklumatForm.php';</script>";

    }*/
    else if(!preg_match("/^[0-9]+$/", $postcode))
    {
        echo "<script language='javascript'>alert('Sila masukkan nombor poskod dengan betul.');window.location='registrationForm.php';</script>";

    }
    else
    {
        $sql = "INSERT INTO membersdetail( tokenID, memberIC, memberName, phoneNum, homeNum, email, address1, address2, city, state, postcode, registeredDate, idStatusReg ) VALUES('$tokenID', '$memberIC', '$memberName', '$phoneNum', '$homeNum', '$email', '$address1', '$address2', '$city', '$state', '$postcode', now(), 'P')";

        if($conn->query($sql) == TRUE)
        {
            echo "<script language='javascript'>alert('Pendaftaran telah berjaya. Sila tunggu pengesahan daripada pihak AJK Madrasah untuk daftar masuk.');window.location='loginAhli.php';</script>";
        }
        else
        {
            echo "Error: Pendaftaran tidak berjaya $sql. ". "<br>".$conn->error;
            //mysqli_error($conn);
        }

        //mysqli_close($conn);
    }
}

$conn->close();

//$sql = "INSERT INTO membersdetail(idMember, memberIC, memberName, phoneNum, homeNum, email, address1, address2, city, state, postcode, registeredDate) VALUES('$idmember', '$memberIC', '$memberName', '$phoneNum', '$homeNum', '$email', '$address1', '$address2', '$city', '$state', '$postcode', now())";

/**if(mysqli_query($conn, $sql))
{
    echo "<script language='javascript'>alert('Pendaftaran telah berjaya. Sila tunggu pengesahan daripada pihak AJK Madrasah untuk daftar masuk.');window.location='registrationForm.php';</script>";
}
else
{
    echo "Error: Pendaftaran tidak berjaya $sql. ".
    mysqli_error($conn);
}

mysqli_close($conn);*/
?>