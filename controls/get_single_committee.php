<?php
include(__DIR__ . '/../lib/database.php');
$db = new Database();

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = "SELECT * FROM committees WHERE committees_id = $id";
    $result = $db->select($query);

    if ($result && $result->num_rows > 0) {
        $member = $result->fetch_assoc();
        echo json_encode(['status' => 'success', 'data' => $member]);
    } else {
        echo json_encode(['status' => 'danger', 'message' => 'Member not found.']);
    }
}