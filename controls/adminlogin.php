<?php
include("../lib/session.php");
Session::checkLogin();
include("../lib/database.php");
include("../Helpers/format.php");


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db = new Database();
    $fm = new Format();

    $adminUser = $_POST['adminUser'] ?? '';
    $adminPass = $_POST['adminPass'] ?? '';

    $adminUser = $fm->validation($adminUser);
    $adminPass = $fm->validation($adminPass);

    $adminUser = mysqli_real_escape_string($db->link, $adminUser);
    $adminPass = mysqli_real_escape_string($db->link, $adminPass);

    //$adminPass = md5($adminPass);

    if (empty($adminUser) || empty($adminPass)) {
        echo json_encode([
            'status' => 'danger',
            'message' => 'User or Password are empty!'
        ]);
        exit;
    } else {
        $query = "SELECT * FROM tbl_admin WHERE adminUser = '$adminUser' AND status = '1' limit 1";
        $result = $db->select($query);

        if ($result) {

            $value = $result->fetch_assoc();
            if(password_verify($adminPass, $value['adminPass'])){
                Session::set('adminLogin', true);
                Session::set('admin_id', $value['admin_id']);
                Session::set('adminUser', $value['adminUser']);
                Session::set('adminName', $value['adminName']);
                Session::set('adminAvatar', $value['adminAvatar']); 
                Session::set('level', $value['level']);
                

                echo json_encode([
                    'status' => 'success',
                    'message' => 'Login successful!',
                    'redirect' => 'index.php'
                ]);
            exit;
            }else{
                echo json_encode([
                'status' => 'danger',
                'message' => 'User or Password not match!'
                ]);
                exit;
            }
            

        } else {
            echo json_encode([
                'status' => 'danger',
                'message' => 'User or Password not match!'
            ]);
        }
    }
}
