<?php
include(__DIR__ . '/../lib/database.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['admin_id'])) {
    
    $db = new Database();
    
    $id = intval($_GET['admin_id']);

    $query = "DELETE FROM `tbl_admin` WHERE admin_id = $id LIMIT 1";
    $result = $db->delete($query);

    if ($result) {
        echo json_encode([
            'status' => 'success',
            'message' => 'admin has been deleted',
        ]);
    } else {
        echo json_encode([
            'status' => 'danger', 
            'message' => 'Không tìm thấy admin'
        ]);
    }
}
