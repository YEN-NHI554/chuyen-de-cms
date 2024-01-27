<!DOCTYPE html>
<html>
<head>
    <title>Tính diện tích hình chữ nhật</title>
</head>
<body>
    <h2>Tính diện tích hình chữ nhật</h2>
    <form action="" method="post">
        Chiều dài: <input type="text" name="length" value="<?php echo isset($_POST['length']) ? $_POST['length'] : ''; ?>">
        <br>
        Chiều rộng: <input type="text" name="width" value="<?php echo isset($_POST['width']) ? $_POST['width'] : ''; ?>">
        <br>
        <input type="submit" name="submit" value="Diện tích">
        <input type="text" name="width" value="<?php echo isset($_POST['width']) ? $_POST['width'] : ''; ?>">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $length = $_POST['length'];
        $width = $_POST['width'];
        $error = '';

        // Kiểm tra nhập liệu
        if (empty($length) || empty($width)) {
            $error = "Vui lòng nhập dữ liệu hợp lệ";
        } elseif (!is_numeric($length) || !is_numeric($width)) {
            $error = "Vui lòng nhập giá trị số hợp lệ";
        } else {
            $area = $length * $width;
            echo "Diện tích hình chữ nhật: " . $area;
        }

        // Hiển thị lỗi nếu có
        if (!empty($error)) {
            echo $error;
        }
    }
    ?>
</body>
</html>
