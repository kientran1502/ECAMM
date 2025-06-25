<?php
include(__DIR__ . '/../lib/database.php');
$db = new Database();

$query = "SELECT logoImg FROM logo_page WHERE is_selected_logo = 1 LIMIT 1";
$result = $db->select($query);

if ($result && $result->num_rows > 0) {
    $data = $result->fetch_assoc();
    echo '<img id="logo" class="rounded-circle me-2" height="45px" src="../../' . htmlspecialchars($data['logoImg']) . '" alt="Logo">';
    
}