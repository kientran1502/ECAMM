<?php
include(__DIR__ . '/../lib/database.php');
$db = new Database();


$query = "SELECT * FROM pages ORDER BY pages_id = 1";
$result = $db->select($query);

if ($result) {
    $row = $result->fetch_assoc();
}


ob_start();
?>
<img src="../../admin/<?php echo $row['overview_img']; ?>"   alt="Overview Image"  style="width:100%; height:auto;object-fit: contain;">
   

<?php
echo ob_get_clean();
?>