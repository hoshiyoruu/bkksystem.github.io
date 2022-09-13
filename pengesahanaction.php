<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("connection.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer\6.2\src\Exception.php';
require 'phpmailer\6.2\src\PHPMailer.php';
require 'phpmailer\6.2\src\SMTP.php';
include("phpmailer/config/email_config.php");


//$id = $_POST['noAhli'];
$id = $_POST['token'];
$name = $_POST['memberName'];

$statusReg = $_POST["idStatusReg"];

function getNoAhli($conn)
{
  $sql = "SELECT MAX(noAhli) AS noAhli FROM membersdetail";
  $qry = mysqli_query($conn, $sql);
  $row = mysqli_num_rows($qry);

  if($row > 0)
  {
    $r = mysqli_fetch_assoc($qry);

    return $r['noAhli'] + 1;
  }
}

$idMember = "";
$sqlID = "SELECT idMember from membersdetail WHERE tokenID='".$id."'";
$result = $conn->query($sqlID);
if($result->num_rows> 0)
{
    while($w=$result->fetch_assoc())
    {
        $idMember = $w['idMember'];
    }
}

if(isset($_POST['submit']))
{
    $sql = "UPDATE membersdetail SET idStatusReg = '$statusReg', noAhli = ".getNoAhli($conn)." WHERE tokenID = '$id'";
    //echo $sql;
    if(mysqli_query($conn, $sql))
    {
        echo '<script>alert("Pendaftaran Berjaya ");window.location="dashboardAJK.php";</script>';
    }
    else
    {
        echo "Error: Pendaftaran tidak berjaya $sql. ".
        mysqli_error($conn);
    }

    $sqlPass = "INSERT INTO systemuser (userName, userPassword, typeID, idMember) VALUES ('$name', ".getNoAhli($conn).", 1, '$idMember')";
    $res = $conn-> query($sqlPass);
    if(mysqli_query($conn, $sql))
    {
        echo '<script>alert("Pendaftaran Berjaya ");window.location="dashboardAJK.php";</script>';
    }
    else
    {
        echo "Error: Pendaftaran tidak berjaya $sql. ".
        mysqli_error($conn);
    }

    $mail = new PHPMailer(true);            
    $mail->isSMTP();                 
    $mail->Host = HOST; 
    $mail->SMTPAuth = SMTP_AUTH;
    $mail->Port = PORT;        
    //$mail->SMTPDebug  = SMTP_DEBUG;  
    $mail->setFrom('eizan@uitm.edu.my', 'MADRASAH HIDAYAH');
    $mail->Subject = 'MAKLUMAN PENGESAHAN MENJADI AHLI BKK';
    $mail->isHTML(true);
    
    $sqlEmail = "SELECT * FROM membersdetail WHERE tokenID = '".$id."'";
    $res = mysqli_query($conn, $sqlEmail) or mysqli_error($conn);
    $row = mysqli_num_rows($res);

    if($row > 0)
    {
        $x = mysqli_fetch_assoc($res);

        $mail->addAddress($x['email'], $x['memberName']);
        $mail->Subject = 'Subject: Makluman tentang pengesahan menjadi Ahli BKK Madrasah Hidayah Seksyen 11';
        $body = '<p>No Ahli: '.$x['noAhli'].'<br>
        Yuran Pendaftaran: RM170.00</p>
        <p>*Sila buat pembayaran yuran pendaftaran segera kepada:<br>
            &emsp; Atiqah Basirah (AJK BKK)<br>
            &emsp; Bank Islam <br>
            &emsp; 14014023617655<br>
        </p>
        <p>*Daftar masuk ke akaun anda menggunakan nombor kad pengenalan untuk ID dan Kata Laluan menggunakan nombor ahli.</p>';
        $mail->msgHTML($body);
        $mail->send();
        header("Location: dashboardAJK.php");
        //echo "send email";
    }
    /*else
    {
        echo "No data found";
    }*/
}

/*if(isset($_POST['submit']))
{
    //send email
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require 'phpmailer/vendor/autoload.php';
    
    $mail = new PHPMailer(true);

    $sqlEmail = "SELECT * FROM membersdetail WHERE tokenID = '$id'";
    $res = mysqli_query($conn, $sqlEmail);
    
    try {
        $mail->SMTPDebug = 2;                                       
        $mail->isSMTP();                                            
        $mail->Host       = 'smtp.gmail.com';                    
        $mail->SMTPAuth   = true;                             
        $mail->Username   = 'atiqbasirah20023007@gmail.com';                 
        $mail->Password   = 'tgznlhaxifjzspip';                        
        $mail->SMTPSecure = 'tls';                             
        $mail->Port       = 587;  //bile dh masuk server uitm pakai 25
    
        $mail->setFrom('atiqbasir12@gmail.com', 'pengerusi');  
        
        if(mysqli_num_rows($res) > 0)
        {
            while($x = mysqli_fetch_assoc($res))
            {
                $mail->addAddress($x['email'], $x['memberName']);
            }
            $mail->isHTML(true);
            $mail->Subject = 'Makluman pengesahan menjadi Ahli BKK Madrasah Hidayah Seksyen 11';
            $mail->Body    = '<p>No Ahli: '.$x['noAhli'].'<br>
            Yuran Pendaftaran: RM170.00</p>
            <p>*Sila buat pembayaran yuran pendaftaran segera kepada:<br>
                &emsp; Atiqah Basirah (AJK BKK)<br>
                &emsp; Bank Islam <br>
                &emsp; 14014023617655<br>
            </p>
            <p>*Daftar masuk ke akaun anda menggunakan nombor kad pengenalan untuk ID dan Kata Laluan menggunakan nombor ahli.</p>';
            $mail->AltBody = 'Body in plain text for non-HTML mail clients';
            $mail->send();
            echo "Mail has been sent successfully!";
        }
        else
        {
            echo "No data found";
        }
    } 
    catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}*/

mysqli_close($conn);
?>