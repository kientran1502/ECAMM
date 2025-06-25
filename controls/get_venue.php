<?php

include(__DIR__ . '/../lib/database.php');

$db = new Database();
$query = "SELECT venue FROM pages WHERE pages_id = 1";
$result = $db->select($query);

if ($result && $row = $result->fetch_assoc()) {
    echo $row['venue'];
}
