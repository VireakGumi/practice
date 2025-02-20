<?php
    // don't forget to run cmd "composer require phpmailer/phpmailer"
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require 'vendor/autoload.php';
    
    $mail = new PHPMailer(true);
    try {
        // SMTP configuration 
        // pls set up this configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Username = 'your_mailtrap_username';
        $mail->Password = 'your_mailtrap_password';
        $mail->Port = 2525;

        // get the email from form login
        $email = 'email@example.com';
        // set the message and subject
        $subject = 'Welcome to our website';
        $message = "Dear {$email},\n\nThank you for signing up. We're excited to have you on board!";
        // notice: you can change the content to whatever you want
    
        // Email content
        $mail->setFrom('practice@gmail', 'admin practice');
        $mail->addAddress($to);
        $mail->Subject = $subject;
        $mail->Body = $message;
    
        $mail->send();
        echo "Email has been sent!";
    } catch (Exception $e) {
        echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
?>