<?php

include(__DIR__ . '/../lib/database.php');

$db = new Database();
$query = "SELECT overview_content FROM pages WHERE pages_id = 1";
$result = $db->select($query);

if ($result && $row = $result->fetch_assoc()) {
    echo $row['overview_content'];
}
