<?php
include(__DIR__ . '/../lib/database.php');
$db = new Database();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['id']);

    $check = $db->select("SELECT is_selected, backgroundImg FROM background_page WHERE background_id = $id");

    if ($check && $check->num_rows > 0) {
        $row = $check->fetch_assoc();

        if ($row['is_selected'] == 1) {
            echo json_encode([
                'status' => 'danger',
                'message' => 'This background is currently selected. You cannot delete it.'
            ]);
            exit;
        }

        $filePath = '../' . $row['backgroundImg'];
        if (file_exists($filePath)) {
            unlink($filePath);
        }

        $delete = $db->delete("DELETE FROM background_page WHERE background_id = $id");

        if ($delete) {
            echo json_encode([
                'status' => 'success',
                'message' => 'Background deleted successfully!'
            ]);
        } else {
            echo json_encode([
                'status' => 'danger',
                'message' => 'Failed to delete background.'
            ]);
        }
    } else {
        echo json_encode([
            'status' => 'danger',
            'message' => 'Background not found.'
        ]);
    }
}
