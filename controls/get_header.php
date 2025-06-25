<?php

include(__DIR__ . '/../lib/database.php');

$db = new Database();
$queryHeader = "SELECT header FROM pages WHERE pages_id = 1";
$resultHeader = $db->select($queryHeader);

if ($resultHeader && $row = $resultHeader->fetch_assoc()) {
    echo $row['header'];
}
