<?php
include(__DIR__ . '/../lib/database.php');
include(__DIR__ . '/../Helpers/format.php');
if(isset($_POST['is_register'])){
    $db = new Database();
    $fm = new Format();
    // Lấy dữ liệu từ form và bảo vệ khỏi SQL injection
    $fname = mysqli_real_escape_string($db->link, $_POST['fname']);
    $email = mysqli_real_escape_string($db->link, $_POST['email']);
    $cell = mysqli_real_escape_string($db->link, $_POST['cell']);
    $affiliation = mysqli_real_escape_string($db->link, $_POST['affiliation']);
    $address = mysqli_real_escape_string($db->link, $_POST['address']);
    $zip = mysqli_real_escape_string($db->link, $_POST['zip']);

    $checkEmail = "SELECT * FROM register WHERE email = '$email'";
    $checkEmailResult = $db->select($checkEmail);

    $checkCell = "SELECT * FROM register WHERE cell = '$cell'";
    $checkCellResult = $db->select($checkCell);

    if ($checkCellResult && $checkCellResult->num_rows > 0) {
        echo json_encode(['status' => 'danger', 'message' => 'Phone number already registered.']);
        exit;
    }

    if ($checkEmailResult && $checkEmailResult->num_rows > 0) {
        echo json_encode(['status' => 'danger', 'message' => 'Email already registered.']);
        exit;
    }

    $query = "INSERT INTO register (fname, email, cell, affiliation, address, zip, created_at, status) 
              VALUES ('$fname', '$email', '$cell', '$affiliation', '$address', '$zip', NOW(), 0)";

    $insert = $db->insert($query);

    if ($insert) {
        echo json_encode(['status' => 'success', 'message' => 'Registration successful!']);
    } else {
        echo json_encode(['status' => 'danger', 'message' => 'Failed to save data.']);
    }
}

?>