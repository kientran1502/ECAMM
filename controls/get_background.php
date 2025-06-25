<?php
include(__DIR__ . '/../lib/database.php');
$db = new Database();

$query = "SELECT backgroundImg FROM background_page WHERE is_selected = 1 LIMIT 1";
$result = $db->select($query);

if ($result && $result->num_rows > 0) {
    $data = $result->fetch_assoc();
    echo '<img src="../../' . htmlspecialchars($data['backgroundImg']) . '"  class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" style="z-index: -1;" alt="Selected Background">';
}