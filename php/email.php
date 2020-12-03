<?php

if (isset($_POST['sendInjuratura'])) {
    $fromEmail = "";
    $toEmail = $_POST['email'];
    $subjectName = "Confirmare injuratura";
    $message = $_POST['message'];
    if (!filter_var($toEmail, FILTER_VALIDATE_EMAIL)) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);     
    }
    else
    {
        $to = $toEmail;
        $subject = $subjectName;
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: '.$fromEmail.'<'.$fromEmail.'>' . "\r\n".'Reply-To: '.$fromEmail."\r\n" . 'X-Mailer: PHP/' . phpversion();
        $message = '<!doctype html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport"
                          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                    <meta http-equiv="X-UA-Compatible" content="ie=edge">
                    <title>Mail de confirmare</title>
                </head>
                <body>
                    <p>'.$message.'</p>
                </body>
                </html>';
        mail($to, $subject, $message, $headers);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
?>