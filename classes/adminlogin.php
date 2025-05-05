<?php 
    include("../lib/session.php");
    Session::checkLogin();
    include("../lib/database.php");
    include("../Helpers/format.php");
?>

<?php  ?>



<?php
class adminlogin
{
    private $db;
    private $fm;

    public function __construct() {
        $this->db = new Database();
        $this->fm = new Format();
    }

    public function login_admin($adminUser, $adminPass) {
        $adminUser = $this->fm->validation($adminUser);
        $adminPass = $this->fm->validation($adminPass);

        $adminUser = mysqli_real_escape_string($this->db->link, $adminUser);
        $adminPass = mysqli_real_escape_string($this->db->link, $adminPass);

        if(empty($adminUser) || empty($adminPass)){
            $this->fm->alert('error', 'User or Password are empty');
        }
        else{
            $query = "SELECT * FROM tbl_admin WHERE adminUser = '$adminUser' and adminPass = '$adminPass' limit 1";
            $result = $this->db->select($query);
            
            if($result != false) {
                $value = $result->fetch_assoc();
                Session::set('adminLogin', true);
                Session::set('admin_id', $value['admin_id']);
                Session::set('adminUser', $value['adminUser']);
                Session::set('adminName', $value['adminName']);

                header('Location: index.php');
            }
            else{
                $this->fm->alert('error', 'User or Password not match');
            }
        }
    }
}
