<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;// Enable verbose debug output
    $mail->isSMTP();// gửi mail SMTP
    $mail->Host = 'smtp.gmail.com';// Set the SMTP server to send through
    $mail->SMTPAuth = true;// Enable SMTP authentication
    $mail->Username = 'tuanmanucian2001.com';// SMTP username
    $mail->Password = 'cepebicwecqmfepr'; // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;// Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port = 587; // TCP port to connect to
    $mail->CharSet = 'UTF-8';
    //Recipients
    $mail->setFrom('tuanmanucian2001@gmail.com', 'Văn phòng Khoa CNTT - Trường ĐH Thủy lợi');

    $mail->addReplyTo('tuanmanucian2001@gmail.com', 'Văn phòng Khoa CNTT - Trường ĐH Thủy lợi');
      
    $mail->addAddress('tuanmanucian2001@gmail.com'); // Add a recipient
    
    // Attachments
    // $mail->addAttachment('pdf/XTT/'.$data[11].'.pdf', $data[11].'_1.pdf'); // Add attachments
    // Content
    $mail->isHTML(true);   // Set email format to HTML
    $tieude = '[Kích hoạt tài khoản] Cảm ơn bạn đã đăng ký vui lòng kích hoạt tài khoản';
    $mail->Subject = $tieude;
    
    // Mail body content 
    $bodyContent = '<p>Để kích hoạt tài khoản vui lòng ấn vào đây <a href = "http://localhost/MyProject/admin/activation.php?email=tuanmanucian2001@gmail.com"></a>  </p>'; 
    
    $mail->Body = $bodyContent;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    if($mail->send()){
        echo 'Thư đã được gửi đi';
    }else{
        echo 'Lỗi. Thư chưa gửi được';
    }  

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
