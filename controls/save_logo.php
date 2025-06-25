<?php

include(__DIR__ . '/../lib/database.php');
$db = new Database();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $logoName = mysqli_real_escape_string($db->link, $_POST['logoName']);

    $avatarPath = '';
    if (isset($_FILES['logoImg']) && $_FILES['logoImg']['error'] === UPLOAD_ERR_OK) {

        $year = date('Y');
        $month = date('m');

        $targetDir = "../wp-content/uploads/logos/$year/$month/";

        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        $basename = basename($_FILES["logoImg"]["name"]);
        $filename = time() . '_' . $basename;
        $targetFile = $targetDir . $filename;

        if (file_exists($targetFile)) {
            unlink($targetFile);
        }

        if (move_uploaded_file($_FILES["logoImg"]["tmp_name"], $targetFile)) {
            $avatarPath = "wp-content/uploads/logos/$year/$month/" . $filename;
        } else {
            echo json_encode([
                'status' => 'danger',
                'message' => 'Upload image failed!'
            ]);
            exit;
        }
    }

    $query = "INSERT INTO logo_page (logoImg, logoName, created_at) VALUES ('$avatarPath', '$logoName', NOW())";

    $insert = $db->insert($query);

    if ($insert) {
        echo json_encode([
            'status' => 'success',
            'message' => 'Save background successful!'
        ]);

    } else {
        echo json_encode([
            'status' => 'danger',
            'message' => 'Failed to Save background.'
        ]);

    }
}
