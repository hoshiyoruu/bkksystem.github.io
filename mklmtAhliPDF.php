<?php
session_start();
include ("connection.php");

require_once __DIR__ . '/vendor/autoload.php';

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
    $age = date_create($tmp_birthdate)->diff(date_create('today'))->y;

    return $age;
}

$id = $_GET['id'];
$sql = "SELECT * FROM membersdetail m LEFT JOIN fee f ON f.idMember = m.idMember LEFT JOIN paymentstatus ps ON ps.statusID = f.statusID WHERE m.tokenID = '$id'";
$result = $conn->query($sql);
$d = $result->fetch_assoc();

$sqlFam = "SELECT * FROM familydetails fd LEFT JOIN relationship r ON fd.idRelationship = r.idRelationship LEFT JOIN membersdetail m ON m.idMember = fd.idMember WHERE tokenID = '$id'";
$resultFam = $conn->query($sqlFam);
//$d = $result->fetch_assoc();

$sqlYear = "SELECT YEAR(registeredDate) AS YEAR FROM membersdetail";
$resultYear = $conn->query($sqlYear);
$y = $resultYear->fetch_assoc();

//utk no telefon rumah
if($d['homeNum'] == null)
{
    $output = "Tiada";
}
else
{
    $output = $d['homeNum'];
}

$mpdf = new \Mpdf\Mpdf();

$data = '<div style="margin: 25px 50px 75px 50px">
<div style="text-align: center; font-weight: bold;"> Biro Khairat Kematian (BKK) </div>
<img src="unnamed.png" width=100 height=100 style="float:left;">
<div style="text-align: center; font-weight: bold;"><h1> Maklumat Ahli BKK Madrasah Hidayah Seksyen 11 </h1></div>
<div style="text-align:center"><h1>TAHUN '.$y['YEAR'].'</h1></div>
<div style="text-align: right; font-weight: bold;"><h3> No. Ahli: '.$d['noAhli'].'</h3></div>
<div style="text-align: left; text-font: 12px">No. Kad Pengenalan: '.$d['memberIC'].'</div><br>
<div style="text-align: left; text-font: 12px">Nama Penuh: '.$d['memberName'].'</div><br>
<div style="text-align: left; text-font: 12px">Alamat Kediaman: '.$d['address1'] .", ". $d['address2'] .", ". $d['postcode'] .", ". $d['city'] .", ". $d['state'].'</div><br>
<div style="text-align: left; text-font: 12px">No. HP: '.$d['phoneNum'].'</div><br>
<div style="text-align: left; text-font: 12px">No. Telefon Rumah (jika ada): '.$output.'</div><br>';

$data = $data .'<div style="text-align: left; text-font: 12px">Senarai Tanggungan Semasa:
<table style="border-color:black; width:100%; border-collapse:collapse" border="1">
<tr>
    <th>Bil.</th>
    <th style="width:40%">Nama</th>
    <th style="width:25%">Pertalian</th>
    <th>Umur</th>
    <th>No KP</th>
</tr>';

//loop for senarai tanggungan 
$i=1;
if($resultFam-> num_rows > 0)
{
    while($f = $resultFam-> fetch_assoc())
    {
        $data = $data . '<tr>
        <td>'.$i.'</td>
        <td>'.$f['name'].'</td>
        <td>'.$f['relType'].'</td>
        <td>'.calculateAge($f['Ic']).'</td>
        <td>'.$f['Ic'].'</td>
        </tr>';
        $i++;
    }
}

$data = $data .'</table></div><br>';
//$data = $data .$family;

$data = $data .'<div style="text-align: left; text-font: 12px">Bayaran:</div><br>
<div style="margin: 0px 80px 0px 80px; text-font: 12px;">Nama Bayaran: '.$d['feeName'].'</div>
<div style="margin: 0px 80px 0px 80px; text-font: 12px;">Jumlah: RM'.$d['amount'].'</div>
<div style="margin: 0px 80px 0px 80px; text-font: 12px;">Status Pembayaran: '.$d['statusName'].'</div>
</div>';

$mpdf->WriteHTML($data);

$mpdf->Output();

?>