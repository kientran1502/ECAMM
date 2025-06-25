<?php
include(__DIR__ . '/../lib/database.php');
$db = new Database();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $overview_content = mysqli_real_escape_string($db->link, $_POST['overview_content']);

    $query = "UPDATE pages SET overview_content = '$overview_content', updated_at = NOW() WHERE pages_id = 1";
    $result = $db->update($query);

    if ($result) {
        echo json_encode([
            'message' => 'Save successful !',
            'status' => 'success'
        ]);
        
    } else {
        echo json_encode([
            'message' => 'Save fail !',
            'status' => 'danger !'
        ]);
    }
}
?>