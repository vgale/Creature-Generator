<?php
    // Harvesting the variables
    if (isset($_POST['inname']) && !empty($_POST['full_name'])) {
        $fullName = $_POST['full_name'];
        $fullName = strip_tags($fullName);
        $fullName = htmlspecialchars($fullName);
        $fullName = ucwords(strtolower($fullName));
    } else {
        $fullName = '';
    }

    $userEmail = '';
    if (isset($_POST['user_email'])) {
        $userEmail = $_POST['user_email'];
        $userEmail = strtolower(strip_tags($userEmail));
    }
    $userMessage = '';
    if (isset($_POST['user_message'])) {
        $userMessage = $_POST['user_message'];
        $userMessage = htmlspecialchars(strip_tags($userMessage));
    }
    
//    echo $fullName.' '.$userEmail.' '.$userMessage;
    $emailBody = "<p><strong>Customer Name:</strong> {$fullName}</p><p><strong>Email:</strong> {$userEmail}</p> <p><strong>Message:</strong></p> <div>{$userMessage}</div>"

    //PHPMailer
    require 'vendor/PHPMailerAutoload.php';
    $mail = new PHPMailer; // creating a new object

    //$mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp1.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'user@gmail.com';                 // SMTP username
    $mail->Password = 'secret';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    $mail->setFrom('user@gmail.com', 'Inquiry from yoursite.com');
//    $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
//    $mail->addAddress('ellen@example.com');               // Name is optional
//    $mail->addReplyTo('info@example.com', 'Information');
//    $mail->addCC('cc@example.com');
//    $mail->addBCC('bcc@example.com'); <-- optional

//    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Inquiry from your site';
    $mail->Body    = $emailBody;
//    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }

?>