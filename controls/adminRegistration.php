<?php
include("../lib/database.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $db = new Database();

    $adminUser = mysqli_real_escape_string($db->link, $_POST['adminUser']);
    $adminName = mysqli_real_escape_string($db->link, $_POST['adminName']);
    $adminEmail = mysqli_real_escape_string($db->link, $_POST['adminEmail']);
    $adminPass = mysqli_real_escape_string($db->link, $_POST['adminPass']);
    $confirmPass = mysqli_real_escape_string($db->link, $_POST['confirmPass']);


    $checkUserQuery = "SELECT * FROM tbl_admin WHERE adminUser = '$adminUser'";
    $checkUserResult = $db->select($checkUserQuery);

    if ($checkUserResult && $checkUserResult->num_rows > 0) {
        echo json_encode([
            'status' => 'danger',
            'message' => 'Account User already exists, please choose another username!'
        ]);
        exit;
    }

    $checkEmailAdminQuery = "SELECT * FROM tbl_admin WHERE adminEmail = '$adminEmail'";
    $checkEmailAdminResult = $db->select($checkEmailAdminQuery);
    if ($checkEmailAdminResult && $checkEmailAdminResult->num_rows > 0) {
        echo json_encode(['status' => 'danger', 'message' => 'Email already exists in admin accounts!']);
        exit;
    }

    // 2. Kiểm tra email có tồn tại trong bảng register không
    $checkEmailQuery = "SELECT * FROM register WHERE email = '$adminEmail'";
    $checkEmailResult = $db->select($checkEmailQuery);

    if (!$checkEmailResult || $checkEmailResult->num_rows == 0) {
        echo json_encode([
            'status' => 'danger',
            'message' => 'Email does not exist, please choose another email!!'
        ]);
        exit;
    }

    // 3. Kiểm tra confirm password
    if ($adminPass !== $confirmPass) {
        echo json_encode([
            'status' => 'danger',
            'message' => 'Password is not match!' 
        ]);
        exit;
    }

    // 4. Xử lý ảnh avatar nếu có
    $avatarPath = '';
    if (isset($_FILES['adminAvatar']) && $_FILES['adminAvatar']['error'] === UPLOAD_ERR_OK) {
        $targetDir = "../admin/img/adminAvatar/";

        // Tạo tên file dựa trên adminUser để tránh trùng và dễ quản lý
        $extension = pathinfo($_FILES["adminAvatar"]["name"], PATHINFO_EXTENSION);
        $filename = $adminUser . '.' . $extension;
        $targetFile = $targetDir . $filename;

        // Nếu file đã tồn tại thì xóa để ghi đè
        if (file_exists($targetFile)) {
            unlink($targetFile);
        }

        if (move_uploaded_file($_FILES["adminAvatar"]["tmp_name"], $targetFile)) {
            $avatarPath = "img/adminAvatar/" . $filename; 
        } else {
            echo json_encode([
                'status' => 'danger',
                'message' => 'Avatar upload failed!'
            ]);
            exit;
        }
    }
    // 4. Mã hoá mật khẩu và gán level 1
    $hashedPass = password_hash($adminPass, PASSWORD_DEFAULT);//MD5($adminPass);
    $level = 1;

    // 5. Insert vào bảng tbl_admin
    $insertQuery = "INSERT INTO tbl_admin (adminName, adminUser, adminEmail, adminPass, adminAvatar, level, created_at, status) 
                        VALUES ('$adminName', '$adminUser', '$adminEmail', '$hashedPass', '$avatarPath', '$level', NOW(), 0)";

    $insertResult = $db->insert($insertQuery);

    if ($insertResult) {
        echo json_encode([
            'status' => 'success',
            'message' => 'Your registration request is being reviewed! Please wait!'
        ]);
    } else {
        echo json_encode([
            'status' => 'danger',
            'message' => 'Registration failed. Please try again.'
        ]);
    }
}