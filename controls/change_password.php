<?php
include(__DIR__ . '/../lib/database.php');
header('Content-Type: application/json');

$db = new Database();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $admin_id = isset($_POST['admin_id']) ? intval($_POST['admin_id']) : 0;

    // Trường hợp chỉ kiểm tra mật khẩu hiện tại (khi người dùng gõ)
    if (isset($_POST['adminPass']) && !isset($_POST['new_password'])) {
        
        $adminPass = (mysqli_real_escape_string($db->link, $_POST['adminPass']));
        $query = "SELECT adminPass FROM tbl_admin WHERE admin_id = $admin_id";
        $result = $db->select($query);

    
        if ($result && $row = $result->fetch_assoc()) {
            if (password_verify($adminPass , $row['adminPass'])) {
                echo json_encode(['status' => 'success', 'message' => 'Password is correct!']);
            } else {
                echo json_encode(['status' => 'danger', 'message' => 'Password is incorrect!']);
            }
        } else {
            echo json_encode(['status' => 'danger', 'message' => 'Không tìm thấy tài khoản']);
        }
        exit;
    }

    // Trường hợp đổi mật khẩu
    if (isset($_POST['new_password']) && isset($_POST['confirm_new_password'])) {
        $current_password = mysqli_real_escape_string($db->link, $_POST['adminPass']);
        $new_password = mysqli_real_escape_string($db->link, $_POST['new_password']);
        $confirm_password = mysqli_real_escape_string($db->link, $_POST['confirm_new_password']);

        if (empty($_POST['adminPass']) || empty($_POST['new_password']) || empty($_POST['confirm_new_password'])) {
            echo json_encode(['status' => 'danger', 'message' => 'Please enter all information!']);
            exit;
        }

        if ($current_password == $new_password) {
            echo json_encode(['status' => 'danger', 'message' => 'New password must be different from old password!']);
            exit;
        }

        if ($new_password !== $confirm_password) {
            echo json_encode(['status' => 'danger', 'message' => 'New password and confirm password not match!']);
            exit;
        }
        
        $query = "SELECT adminPass FROM tbl_admin WHERE admin_id = $admin_id";
        $result = $db->select($query);

        if ($result && $row = $result->fetch_assoc()) {
            if (!password_verify($current_password , $row['adminPass'])) {
                echo json_encode(['status' => 'danger', 'message' => 'Current password is incorrect!']);
                exit;
            }
            $hashedPass = password_hash($new_password, PASSWORD_DEFAULT);
            $updateQuery = "UPDATE tbl_admin SET adminPass = '$hashedPass' WHERE admin_id = $admin_id";
            $updateResult = $db->update($updateQuery);

            if ($updateResult) {
                echo json_encode(['status' => 'success', 'message' => 'Password updated successfully!']);
            } else {
                echo json_encode(['status' => 'danger', 'message' => 'Password update failed!']);
            }
        } else {
            echo json_encode(['status' => 'danger', 'message' => 'Không tìm thấy tài khoản admin!']);
        }
    }
}
