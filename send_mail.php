<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$title = "New request";
$body = "
<h2>UKIE_WEB | TEST</h2>
<b>First name:</b> {$_POST['firstName']}<br>
<b>Last name:</b> {$_POST['lastName']}<br>
<b>Email:</b> {$_POST['email']}<br>
<b>Phone:</b> {$_POST['phone']}<br><br>
<b>About:</b><br> 
{$_POST['about']}";

echo $body;

$mail = new PHPMailer();
try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    // $mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    $mail->Host       = 'smtp.gmail.com';
    $mail->Username   = 'denys.vinegod@gmail.com';
    $mail->Password   = 'secret';
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;
    $mail->setFrom('denys.vinegod@gmail.com', 'UKIE_WEB');
    $mail->addAddress('denys.vinegod@ukr.net', "Denys");

if (!empty($file['name'][0])) {
    for ($ct = 0; $ct < count($file['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($file['name'][$ct]));
        $filename = $file['name'][$ct];
        if (move_uploaded_file($file['tmp_name'][$ct], $uploadfile)) {
            $mail->addAttachment($uploadfile, $filename);
            $rfile[] = "File $filename attached";
        } else {
            $rfile[] = "Can not attach file $filename";
        }
    }   
}

$mail->isHTML(true);
$mail->Subject = $title;
$mail->Body = $body;    
if ($mail->send()) {$result = "success";} 
else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "Message was not sent because of: {$mail->ErrorInfo}";
}

echo json_encode(["result" => $result, "resultfile" => $rfile, "status" => $status]);

?>