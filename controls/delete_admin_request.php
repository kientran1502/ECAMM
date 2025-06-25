<?php
include("../lib/database.php");
$db = new Database();

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $query = "DELETE FROM tbl_admin WHERE admin_id = '$id'";
    $del = $db->delete($query);

    if ($del) {
        echo json_encode([
            'status' => 'success',
            'message' => 'Admin request deleted.'
        ]);
    } else {
        echo json_encode([
            'status' => 'danger',
            'message' => 'Failed to delete admin.'
        ]);
    }
}
?>
