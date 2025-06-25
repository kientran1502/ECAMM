<?php
include(__DIR__ . '/../lib/database.php');
include(__DIR__ . '/../Helpers/format.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['admin_id'])) {
    $db = new Database();
    $fm = new Format();
    // Lấy dữ liệu từ form và bảo vệ khỏi SQL injection
    $id = intval($_POST['admin_id']);
    $adminName = mysqli_real_escape_string($db->link, $_POST['adminName']);
    $adminUser = mysqli_real_escape_string($db->link, $_POST['adminUser']);

    $checkQuery = "SELECT * FROM tbl_admin WHERE adminUser = '$adminUser' AND admin_id != $id";
    $checkResult = $db->select($checkQuery);
    
    if ($checkResult) {
        echo json_encode([
            'status' => 'danger',
            'message' => 'Tên tài khoản đã được sử dụng!'
        ]);
        exit;
    }

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

    $query = " UPDATE tbl_admin SET adminName = '$adminName', adminUser = '$adminUser' ";

    if ($avatarPath !== '') {
        $query .= ", adminAvatar = '$avatarPath' ";
    }
    $query .= " WHERE admin_id = '$id' ";

    $result = $db->update($query);

    if ($result) {
        echo json_encode(['status' => 'success', 'message' => 'Cập nhật thành công!']);
        exit;
    } else {
        echo json_encode(['status' => 'danger', 'message' => 'Cập nhật thất bại!']);
        exit;
    }
}
