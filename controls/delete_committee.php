<?php
include(__DIR__ . '/../lib/database.php');
$db = new Database();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['committees_id']);

    $query = "DELETE FROM committees WHERE committees_id = $id";
    $delete = $db->delete($query);

    echo json_encode([
        'status' => $delete ? 'success' : 'danger',
        'message' => $delete ? 'Member deleted successfully.' : 'Failed to delete member.'
    ]);
}
