<?php
include(__DIR__ . '/../lib/database.php');
$db = new Database();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['id']);

    $data = "UPDATE logo_page SET is_selected_logo = 0";
    $db->update($data);

    // Set selected one
    $query = "UPDATE logo_page SET is_selected_logo = 1 WHERE logo_id = $id";
    $result = $db->update($query);

    if ($result) {
        echo json_encode([
            'status' => 'success',
            'message' => 'logo selected successfully!'
        ]);
    } else {
        echo json_encode([
            'status' => 'danger',
            'message' => 'Failed to select logo.'
        ]);
    }
}