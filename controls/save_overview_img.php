<?php
include(__DIR__ . '/../lib/database.php');
$db = new Database();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pages_id = 1; 
    $overview_img_path = '';
    $width = isset($_POST['width']) ? intval($_POST['width']) : null;
    $height = isset($_POST['height']) ? intval($_POST['height']) : null;

    if (isset($_FILES['overview_img']) && $_FILES['overview_img']['error'] === 0) {
        $uploadDir = '../admin/img/overview/';
        $basename = basename($_FILES["overview_img"]["name"]);
        $filename = $pages_id . '_' . $basename;
        $targetFile = $uploadDir . $filename;

        // xóa file cũ nếu import nhầm 2 file giống nhau
        if (file_exists($targetFile)) {
            unlink($targetFile);
        }

        if (move_uploaded_file($_FILES['overview_img']['tmp_name'], $targetFile)) {
            $overview_img_path = "img/overview/" . $filename;
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Upload failed']);
            exit;
        }
    }

    $query = "UPDATE pages SET overview_img = '$overview_img_path', overview_width = '$width', overview_height = '$height', updated_at = NOW() WHERE pages_id = $pages_id";

    $result = $db->update($query);

    if ($result) {
        echo json_encode(['status' => 'success', 'message' => 'Overview image uploaded successfully!']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Database update failed']);
    }
}
