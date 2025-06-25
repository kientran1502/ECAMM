<?php

include('../lib/database.php');
$db = new Database();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = intval($_POST['id']);

    if ($_POST['action'] === 'delete') {
        // Xử lý xóa dữ liệu
        $query = "DELETE FROM register WHERE register_id = $id";
        $result = $db->delete($query);

        if ($result) {
            echo json_encode(['status' => 'success', 'message' => 'Xóa thành công.']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Xóa thất bại.']);
        }
    }
    else if ($_POST['action'] === 'accept') {
        // Cập nhật trạng thái được duyệt
        $query = "UPDATE register SET status = '1' WHERE register_id = $id";
        $result = $db->update($query);

        if ($result) {
            echo json_encode(['status' => 'success', 'message' => 'Đã duyệt.']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Duyệt thất bại.']);
        }
    }
}

?>