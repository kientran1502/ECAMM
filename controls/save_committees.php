<?php

include(__DIR__ . '/../lib/database.php');
$db = new Database();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = mysqli_real_escape_string($db->link, $_POST['name']);
    $position = mysqli_real_escape_string($db->link, $_POST['position']);
    $committees_group = mysqli_real_escape_string($db->link, $_POST['committees_group']);
    $typeMember = mysqli_real_escape_string($db->link, $_POST['typeMember']);

    $avatarPath = '';
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {

        $year = date('Y');
        $month = date('m');

        $targetDir = "../wp-content/uploads/committees/$year/$month/";

        if(!is_dir($targetDir)){
            mkdir($targetDir, 0777, true);
        }
        $basename = basename($_FILES["image"]["name"]);
        $filename = time(). '_' .$typeMember . '_' . $basename;
        $targetFile = $targetDir . $filename;

        // Nếu file đã tồn tại thì xóa để ghi đè
        if (file_exists($targetFile)) {
            unlink($targetFile);
        }

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            $avatarPath = "wp-content/uploads/committees/$year/$month/" . $filename;
        } else {
            echo json_encode([
                'status' => 'danger',
                'message' => 'Upload image failed!'
            ]);
            exit;
        }
    }

    $query = "INSERT INTO committees (image, name, position, committees_group, typeMember, created_at) VALUES ('$avatarPath', '$name', '$position', '$committees_group', '$typeMember', NOW())";
             
    $insert = $db->insert($query);

    if ($insert) {
        
        echo json_encode([
            'status' => 'success', 
            'message' => 'Save image successful!'
        ]);
        die;
    } else {
        echo json_encode([
            'status' => 'danger', 
            'message' => 'Failed to save image.'
        ]);
        die;
    }
}

?>