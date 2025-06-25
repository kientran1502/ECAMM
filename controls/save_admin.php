<?php
include("../lib/database.php");
$db = new Database();

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $query = "UPDATE tbl_admin SET status = 1 WHERE admin_id = '$id'";
    $update = $db->update($query);

    if ($update) {
        echo json_encode([
            'status' => 'success',
            'message' => 'Admin approved successfully!'
        ]);
    } else {
        echo json_encode([
            'status' => 'danger',
            'message' => 'Failed to approve admin.'
        ]);
    }
}
?>