<?php
    require_once ('php-mailer/PHPMailerAutoload.php');
        
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure='ssl';
    $mail->Host='smtp.googlemail.com';
    $mail->Port = '465';
    $mail->isHTML();
    $mail->Username ='yukenautodev@gmail.com';
    $mail->Password ='bestofkings';
    $mail->SetFrom('no-reply@revonline-invest.com');
    $mail->Subject = "PASSOWRD RESET";
    $mail->Body = "Your new password is now 12345";
    $mail->AddAddress("oladapoyuken59@gmail.com");
    
    if(!$mail->Send()) 
    {
        echo "Error occurred";
    } 
    else 
    {

        echo "Message sent successfully";
    }
