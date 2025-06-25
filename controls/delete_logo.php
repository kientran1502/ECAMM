<?php
include(__DIR__ . '/../lib/database.php');
$db = new Database();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['id']);

    $query ="SELECT is_selected_logo, logoImg FROM logo_page WHERE logo_id = $id";
    $check = $db->select($query);

    if ($check && $check->num_rows > 0) {
        $row = $check->fetch_assoc();

        if ($row['is_selected_logo'] == 1) {
            echo json_encode([
                'status' => 'danger',
                'message' => 'This logo is currently selected. You cannot delete it.'
            ]);
            exit;
        }

        $filePath = '../' . $row['logoImg'];
        if (file_exists($filePath)) {
            unlink($filePath);
        }
        $queryDelete = "DELETE FROM logo_page WHERE logo_id = $id";
        $delete = $db->delete($queryDelete);

        if ($delete) {
            echo json_encode([
                'status' => 'success',
                'message' => 'logo deleted successfully!'
            ]);
        } else {
            echo json_encode([
                'status' => 'danger',
                'message' => 'Failed to delete logo.'
            ]);
        }
    } else {
        echo json_encode([
            'status' => 'danger',
            'message' => 'logo not found.'
        ]);
    }
}
