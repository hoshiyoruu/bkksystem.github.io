<?php
include ("connection.php");
  
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
  
require 'phpmailer/vendor/autoload.php';
  
$mail = new PHPMailer(true);
  
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
    $id = $_GET['id'];
    $sql = "SELECT * FROM membersdetail WHERE tokenID = '$id'";
    $res = $conn->query($sql);
    
    if($res-> num_rows > 0)
    {
        while($x = $res -> fetch_assoc())
        {
            $mail->addAddress($x['email'], $x['memberName']);
        }
        $mail->isHTML(true);
        $mail->Subject = 'Subject: Makluman tentang pengesahan menjadi Ahli BKK Madrasah Hidayah Seksyen 11';
        $mail->Body    = 'No Ahli: ';
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
  
?>