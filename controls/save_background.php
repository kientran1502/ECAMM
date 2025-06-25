<?php
ini_set('display_errors', 0);
error_reporting(0);
header('Content-Type: application/json');

include(__DIR__ . '/../lib/database.php');
$db = new Database();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = intval($_POST['id']);
    $backgroundName = mysqli_real_escape_string($db->link, $_POST['backgroundName']);

    $avatarPath = '';
    if (isset($_FILES['backgroundImg']) && $_FILES['backgroundImg']['error'] === UPLOAD_ERR_OK) {

        $imageInfo = getimagesize($_FILES['backgroundImg']['tmp_name']);

        if (!$imageInfo) {
            echo json_encode([
                'status' => 'danger',
                'message' => 'File is not a valid image!'
            ]);
            exit;
        }

        $width = $imageInfo[0];
        $height = $imageInfo[1];

        if ($width < 1200 || $height < 700) {
            echo json_encode([
                'status' => 'danger',
                'message' => 'Image must be at least 1200x700 pixels!'
            ]);
            exit;
        }

        $year = date('Y');
        $month = date('m');

        $targetDir = "../wp-content/uploads/background/$year/$month/";

        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        $basename = basename($_FILES["backgroundImg"]["name"]);
        $filename = $id . '_' . $basename;
        $targetFile = $targetDir . $filename;

        if (file_exists($targetFile)) {
            unlink($targetFile);
        }

        if (move_uploaded_file($_FILES["backgroundImg"]["tmp_name"], $targetFile)) {
            $avatarPath = "wp-content/uploads/background/$year/$month/" . $filename;
        } else {
            echo json_encode([
                'status' => 'danger',
                'message' => 'Upload image failed!'
            ]);
            exit;
        }
    }

    $query = "INSERT INTO background_page (backgroundImg, backgroundName, created_at) VALUES ('$avatarPath', '$backgroundName', NOW())";

    $insert = $db->insert($query);

    if ($insert) {
        echo json_encode([
            'status' => 'success',
            'message' => 'Save background successful!'
        ]);
        exit;
    } else {
        echo json_encode([
            'status' => 'danger',
            'message' => 'Failed to Save background.'
        ]);
        exit;
    }
}
