<?php

include("connection.php");

session_start();
$ic = $_SESSION['userID'];

if(isset($_POST["curpass"]))
{
    $pass = $_POST["curpass"];
    $newpass = $_POST["newpass"];
    $conpass = $_POST["conpass"];

    if($newpass <> $conpass)
    {
        echo "<script language='javascript'>alert('Kata Laluan Baru tidak sepadan dengan Pengesahan Kata Laluan.');window.location='dashboardAhli.php';</script>";
    }
    else
    {
        $sql = "SELECT * FROM systemuser s LEFT JOIN membersdetail m on m.idMember = s.idMember WHERE m.memberIC = '$ic' AND s.userPassword = '$pass'";

        $result = $conn-> query($sql);

        if(mysqli_num_rows($result) > 0)
        {
            $sql = "UPDATE systemuser s LEFT JOIN membersdetail m ON m.idMember = s.idMember set userPassword = '$newpass' WHERE m.memberIC = '$ic' AND s.userPassword = '$pass'" ;

            if($conn-> query($sql))
            {
                echo"<script language='javascript'>alert('Kata Laluan berjaya disimpan.');window.location='dashboardAhli.php';</script>";
            }
            else
            {
                echo"<script language='javascript'>alert('Kata Laluan tidak sah.');window.location='dashboardAhli.php';</script>";
            }
        }
        else
        {
            echo"Kata Laluan tidak sah. <br>" .$sql. "<br>".$conn->error;
        }
    }
}

?>
