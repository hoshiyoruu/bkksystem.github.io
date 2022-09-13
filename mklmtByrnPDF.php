<?php
session_start();
include ("connection.php");

require_once __DIR__ . '/vendor/autoload.php';
$id = $_GET['id'];
$sql = "SELECT * FROM fee f LEFT JOIN membersdetail m ON m.idmember = f.idMember LEFT JOIN paymentstatus ps ON ps.statusID = f.statusID LEFT JOIN paymenttype pt ON pt.paymentID = f.paymentID WHERE m.tokenID = '$id'";
//echo $sql;
$result = $conn->query($sql);
$d = $result->fetch_assoc();

$sqlYear = "SELECT YEAR(registeredDate) AS YEAR FROM membersdetail";
$resultYear = $conn->query($sqlYear);
$y = $resultYear->fetch_assoc();

//utk jenis bayaran
if($d['paymentName'] == null)
{
    $d['paymentName'] = "Tiada";
}
else
{
    $d['paymentName'] = $d['receiptNo'];
}

//utk no receipt
if($d['receiptNo'] == null)
{
    $receipt = "Tiada";
}
else
{
    $receipt = $d['receiptNo'];
}

//utk no transaksi
if($d['transactionNo'] == null)
{
    $trans = "Tiada";
}
else
{
    $trans = $d['transactionNo'];
}

$mpdf = new \Mpdf\Mpdf();

$mpdf->WriteHTML(
'<div style="margin: 25px 50px 75px 50px">
<div style="text-align: center; font-weight: bold;"> Biro Khairat Kematian (BKK) </div>
<img src="unnamed.png" width=100 height=100 style="float:left;">
<div style="text-align: center; font-weight: bold;"><h1> Maklumat Bayaran Ahli BKK </h1></div>
<div style="text-align:center"><h1>TAHUN '.$y['YEAR'].'</h1></div>
<div style="text-align: right; font-weight: bold;"><h3> No. Ahli: '.$d['noAhli'].'</h3></div>
<div style="text-align: left; text-font: 12px">Nama Penuh: '.$d['memberName'].'</div><br>

<div style="text-align: left; text-font: 12px">Bayaran:</div><br>
<div style="margin: 0px 80px 0px 80px; text-font: 12px;">Nama Bayaran: '.$d['feeName'].'</div>
<div style="margin: 0px 80px 0px 80px; text-font: 12px;">Jenis Bayaran: '.$d['paymentName'].'</div>
<div style="margin: 0px 80px 0px 80px; text-font: 12px;">Jumlah: RM'.$d['amount'].'</div>
<div style="margin: 0px 80px 0px 80px; text-font: 12px;">No. Transaksi: '.$trans.'</div>
<div style="margin: 0px 80px 0px 80px; text-font: 12px;">No. Resit: '.$receipt.'</div>
<div style="margin: 0px 80px 0px 80px; text-font: 12px;">Status Pembayaran: '.$d['statusName'].'</div>
</div>'
);

$mpdf->Output();

?>