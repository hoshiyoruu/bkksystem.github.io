<!DOCTYPE html>
<html>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <style>
    table {
        border: 3px solid black;
    }
    </style>
</style>
</html>
<?php
include ("connection.php");

$sql = "SELECT m.noAhli, m.memberName, YEAR(f.paymentDate) AS YEAR, ps.statusName FROM membersdetail m LEFT JOIN fee f ON m.idMember=f.idMember LEFT JOIN paymentstatus ps ON ps.statusID=f.statusID WHERE YEAR(f.paymentDate)= '".$_GET['q']."' ORDER BY noAhli ASC";
$result = $conn->query($sql);

/*$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id, $membername, $year, $status);
$stmt->fetch();
$stmt->close();*/


echo "<br><table style='width:100%; outline-width: thick'>";
echo "<thead style='text-align:center'>";
echo "<tr>";
echo "<th>No Ahli</th>";
echo "<th>Nama Ahli</th>";
echo "<th>Tahun</th>";
echo "<th>Status Bayaran</th>";
echo "<th>Tindakan</th>";
echo "</tr>";
echo "</thead>";

//echo "<tfoot>";
if($result-> num_rows > 0)
{
    while($d = $result->fetch_assoc())
    {
        echo "<tr>";
        echo "<td>" . $d['noAhli'] . "</td>";
        echo "<td>" . $d['memberName'] . "</td>";
        echo "<td>" . $d['YEAR'] . "</td>";
        echo "<td>" . $d['statusName'] . "</td>";
        echo "<td style='text-align:center'><button type='button' name='btn_view' class='btn btn-success'><i class='bi bi-me-1'></i><a href='mklmtByrnPDF.php?id=".md5($d['noAhli'])."' target='_blank' style='color:white'>Lihat</a></button></td>";
        echo "</tr>";
    }
}

//echo "</tfoot>";
echo "</table>"; 
?>