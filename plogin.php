<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("connection.php");

if(isset($_POST['login']))
{
    $userID = mysqli_real_escape_string($conn,$_POST['userID']);
    $userPassword = mysqli_real_escape_string($conn,$_POST['userPassword']);
    echo "test";
    $sql = "SELECT * FROM systemuser s
            JOIN accesstype a ON a.typeID = s.typeID
            JOIN membersdetail m ON m.idMember = s.idMember
            WHERE m.memberIC = '".$userID."'
            AND s.userPassword = '".$userPassword."'";
    echo $sql;
    $qry = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($qry);

    if($row > 0)
    {
        $r = mysqli_fetch_assoc($qry);
        session_start();
        $_SESSION['userlogged'] = 1;
        $_SESSION['userID'] = $r['memberIC'];
        $_SESSION['userName'] = $r['userName'];
        $_SESSION['typeID'] = $r['typeID'];

        if($r['typeID'] == 2 || $r['typeID'] == 3 || $r['typeID'] == 4)
        {
            $_SESSION['typeID'] = $r['typeID'];
            header("Location: dashboardAJK.php");

            
        }
        else if($r['typeID'] == 1)
        {
            $_SESSION['typeID'] == 1;
            header("Location: dashboardAhli.php");
        }
        else
        {
            echo "<script language='javascript'>alert('User does not exist.');window.location='loginAJK.php';</script>";
        }

        $_SESSION['type'] = $r['type'];

    }
    else
    {
        echo "<script language='javascript'>alert('User does not exist.');window.location='loginAJK.php';</script>";
    }
}
?>