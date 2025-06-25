<?php
include(__DIR__ . '/../lib/database.php');
$db = new Database();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $header = mysqli_real_escape_string($db->link, $_POST['header']);

    $query = "UPDATE pages SET header = '$header', updated_at = NOW() WHERE pages_id = 1";
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