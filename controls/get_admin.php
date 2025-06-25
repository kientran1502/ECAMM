<?php
include(__DIR__ . '/../lib/database.php');
include(__DIR__ . '/../Helpers/format.php');
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['admin_id'])) {
    $db = new Database();
    $fm = new Format();
    // Lấy dữ liệu từ form và bảo vệ khỏi SQL injection
    $id = intval($_GET['admin_id']);

    $query = "SELECT admin_id, adminName, adminUser FROM tbl_admin WHERE admin_id = $id";
    $result = $db->select($query);

    if ($result && $row = $result->fetch_assoc()) {
        echo json_encode([
            'status' => 'success',
            'data' => $row,
        ]);
    } else {
        echo json_encode(['status' => 'danger', 'message' => 'Không tìm thấy admin']);
    }

}
