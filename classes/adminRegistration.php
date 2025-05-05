<?php
include("../lib/database.php");
include("../Helpers/format.php");
?>


<?php  

class register {

    private $db;
    private $fm;

    public function __construct() {
        $this->db = new Database();
        $this->fm = new Format();
    }

    public function insert_admins($data){
        $adminUser = mysqli_real_escape_string($this->db->link, $data['adminUser']);
        $adminName = mysqli_real_escape_string($this->db->link, $data['adminName']);
        $adminEmail = mysqli_real_escape_string($this->db->link, $data['adminEmail']);
        $adminPass = mysqli_real_escape_string($this->db->link, $data['adminPass']);
        $confirmPass = mysqli_real_escape_string($this->db->link, $data['confirmPass']);
        
        
        $checkUserQuery = "SELECT * FROM tbl_admin WHERE adminUser = '$adminUser'";
        $checkUserResult = $this->db->select($checkUserQuery);

        if ($checkUserResult && $checkUserResult->num_rows > 0) {
            return $this->fm->alert("error", "Account User already exists, please choose another username!");
        }

        // // 2. Kiểm tra email có tồn tại trong bảng registration không
        // $checkEmailQuery = "SELECT * FROM registration WHERE email = '$adminEmail'";
        // $checkEmailResult = $this->db->select($checkEmailQuery);

        // if (!$checkEmailResult || $checkEmailResult->num_rows == 0) {
        //     return $this->fm->alert("error", "You are not eligible to register for an admin account!");
        // }

        // 3. Kiểm tra confirm password
        if ($adminPass !== $confirmPass) {
            return $this->fm->alert("error", "Passwords do not match!");
        }

        // 4. Mã hoá mật khẩu và gán level 1
        $hashedPass = MD5($adminPass);
        $level = 1;

        // 5. Insert vào bảng tbl_admin
        $insertQuery = "INSERT INTO tbl_admin (adminName, adminUser, adminEmail, adminPass, level) 
                        VALUES ('$adminName', '$adminUser', '$adminEmail', '$hashedPass', '$level')";

        $insertResult = $this->db->insert($insertQuery);

        if ($insertResult) {
            return $this->fm->alert("success", "Admin account has been created successfully.");
        } else {
            return $this->fm->alert("error", "Failed to create admin account. Please try again.");
        }


    }
}

?>