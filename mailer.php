<?php
// Import các file cần thiết của PHPMailer
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    // Bật SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';            // Server SMTP Gmail
    $mail->SMTPAuth = true;
    $mail->Username = 'quyenduc26@gmail.com'; // Email của bạn
    $mail->Password = 'rxon xbtc pmwi syur';    // App password (16 ký tự)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
    $mail->Port = 587;                         // Port tiêu chuẩn của Gmail

    // Người gửi
    $mail->setFrom('quyenduc26@gmail.com', 'quyen');

    // Người nhận
    $mail->addAddress('quyen.nguyen25@student.passerellesnumeriques.org', 'quyenPNV25');

    // Nội dung email
    $mail->isHTML(true);
    $mail->Subject = 'Test gửi email (PHPMailer)';
    $mail->Body    = '<h3>Xin chào!</h3><p>Email này được gửi bằng <b>PHPMailer</b>.</p>';
    $mail->AltBody = "Xin chào!\nEmail này được gửi bằng PHPMailer.";

    // (Không bắt buộc) – đính kèm file
    // $mail->addAttachment('uploads/myfile.pdf');

    // Gửi email
    $mail->send();
    echo 'Gửi mail thành công!';
} catch (Exception $e) {
    echo "Gửi email thất bại. Lỗi: {$mail->ErrorInfo}";
}
