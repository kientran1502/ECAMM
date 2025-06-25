<?php
include(__DIR__ . '/../lib/database.php');
$db = new Database();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['id']);

    // Reset all to 0
    $db->update("UPDATE background_page SET is_selected = 0");

    // Set selected one
    $query = "UPDATE background_page SET is_selected = 1 WHERE background_id = $id";
    $result = $db->update($query);

    if ($result) {
        echo json_encode([
            'status' => 'success',
            'message' => 'Background selected successfully!'
        ]);
    } else {
        echo json_encode([
            'status' => 'danger',
            'message' => 'Failed to select background.'
        ]);
    }
}