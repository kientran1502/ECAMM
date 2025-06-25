<?php
include(__DIR__ . '/../lib/database.php');
$db = new Database();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['committees_id']);
    $name = mysqli_real_escape_string($db->link, $_POST['name']);
    $position = mysqli_real_escape_string($db->link, $_POST['position']);
    $committees_group = mysqli_real_escape_string($db->link, $_POST['committees_group']);
    $typeMember = mysqli_real_escape_string($db->link, $_POST['typeMember']);

    $updateImage = '';
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $year = date('Y');
        $month = date('m');
        $targetDir = "../wp-content/uploads/committees/$year/$month/";

        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        $base = basename($_FILES["image"]["name"]);
        $filename = $id . '_' . $typeMember . '_' . $base;
        $targetFile = $targetDir . $filename;

        if (file_exists($targetFile)) {
            unlink($targetFile);
        }

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            $avatarPath = "wp-content/uploads/committees/$year/$month/" . $filename;
            $updateImage = ", image = '$avatarPath'";
        }
    }

    $query = "UPDATE committees 
              SET name = '$name', position = '$position', committees_group = '$committees_group', typeMember = '$typeMember' 
              $updateImage 
              WHERE committees_id = $id";

    $update = $db->update($query);

    echo json_encode([
        'status' => $update ? 'success' : 'danger',
        'message' => $update ? 'Member updated successfully.' : 'Failed to update.'
    ]);
}
