<?php

include("connection.php");

$feeName = mysqli_real_escape_string($conn, $_POST['feeName']);
$amount = mysqli_real_escape_string($conn, $_POST['amount']);
$noTransaksi = mysqli_real_escape_string($conn, $_POST['transactionNo']);
$paymentID = mysqli_real_escape_string($conn, $_POST['paymentID']);
$statusID = mysqli_real_escape_string($conn, $_POST['statusID']);
$id = mysqli_real_escape_string($conn, $_POST['noAhli']);
$idMember = '';

$sqlID = "SELECT idMember from membersdetail WHERE noAhli='".$id."'";
$result = $conn->query($sqlID);
    
if($result-> num_rows > 0)
{
    while($row=$result->fetch_assoc())
    {
        $idMember = $row['idMember'];
    }
}

if($statusID == 1)
{
    if($paymentID == 10)
    {
        $paymentDate = mysqli_real_escape_string($conn, $_POST['paymentDate1']);
        $noResit = mysqli_real_escape_string($conn, $_POST['receiptNo1']);
        $noTransaksi = "null";
    }
    else 
    {
        $paymentDate = mysqli_real_escape_string($conn, $_POST['paymentDate2']);
        $noResit = mysqli_real_escape_string($conn, $_POST['receiptNo2']);
    }
}
else
{
    if($paymentID == 10)
    {
        $paymentDate = null;
        $noResit = "null";
        $noTransaksi = "null";
    }
    else 
    {
        $paymentDate = null;
        $noResit = "null";
    }
}


    $sql = "INSERT INTO fee(feeName, paymentDate, amount, transactionNo, receiptNo, idMember, paymentID, statusID) VALUES('$feeName', '$paymentDate', '$amount', '$noTransaksi', '$noResit', '$idMember', '$paymentID', '$statusID')";

    if(mysqli_query($conn, $sql))
    {
        echo "<script language='javascript'>alert('Maklumat berjaya disimpan.');window.location='statusByrn.php';</script>";
    }

    else
    {
        echo "Error: Could not able to execute $sql. " .mysqli_error($conn);
    }



// Close connection
mysqli_close($conn);
?>