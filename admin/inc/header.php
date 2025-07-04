<?php
$avatar = Session::get('adminAvatar');
$adminName = Session::get('adminName');
$avatarSrc = (!empty($avatar) && file_exists($avatar)) ? $avatar : 'img/default-avatar.png';
?>

<nav class="navbar bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand text-white ms-3 align-items-center" id="logo" href="index.php">
            <img height="50px" class="me-2 rounded-circle" src="<?php echo $avatarSrc; ?>" alt="">
            ADMIN PANEL
        </a>
        <form class="d-flex me-3" role="search">
            <div class="align-items-center d-flex">
                <a class="logo-user" href="">
                    <img height="30px" class="img-logo-user rounded-circle me-2" src="<?php echo $avatarSrc; ?>" alt="">
                </a>
                <a class="text-decoration-none text-white me-4" href="">Admin <?php echo $adminName; ?></a>
            </div>

            <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#logoutModal">
            <i class="bi bi-box-arrow-right me-2"></i>
                LOG OUT
            </button>

            <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="logoutModalLabel">Xác nhận đăng xuất</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Đóng"></button>
                        </div>
                        <div class="modal-body">
                            Bạn có chắc chắn muốn đăng xuất không?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Huỷ</button>
                            <a href="logout.php" class="btn btn-danger">Đăng xuất</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</nav>