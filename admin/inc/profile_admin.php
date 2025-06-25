<?php
include("../lib/database.php");
Session::checkSession();

$level = Session::get('level');
$admin_id = Session::get('admin_id');

$db = new Database();
$query = "SELECT * FROM tbl_admin WHERE admin_id = $admin_id AND status = '1' LIMIT 1";
$result = $db->select($query);

if ($result) {
    $admin = $result->fetch_assoc();
}
?>

<div class="tab-pane fade" id="profile-user-tab-pane" role="tabpanel" aria-labelledby="profile-user-tab" tabindex="0">
    <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills h-100vh me-1 bg-dark col-lg-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <button class="nav-link mt-3 text-white active" id="v-pills-admin<?= $admin['admin_id'] ?>-tab" data-bs-toggle="pill" data-bs-target="#v-pills-admin<?= $admin['admin_id'] ?>" type="button" role="tab" aria-controls="v-pills-admin<?= $admin['admin_id'] ?>" aria-selected="false">
                <?= htmlspecialchars($admin['adminName']) ?>
            </button>
        </div>
        <div class="tab-content col-lg-10 m-3" id="v-pills-tabContent">
            <?php if ($admin): ?>
                <div class="tab-pane fade active show" id="v-pills-admin<?= $admin['admin_id'] ?>" role="tabpanel" aria-labelledby="v-pills-admin<?= $admin['admin_id'] ?>-tab" tabindex="0">

                    <div class="card shadow p-3 me-5">
                        <div class="container-fluid d-flex">

                            <div class="col-md-11 p-2">
                                <img src="<?= htmlspecialchars($admin['adminAvatar']) ?>" class="img-fluid rounded-circle border mb-3 ms-2" style="max-height: 150px; object-fit: cover;" alt="Avatar">
                                <h4><strong>Admin Name:</strong> <?= htmlspecialchars($admin['adminName']) ?></h4>
                                <p><strong>User Name:</strong> <?= htmlspecialchars($admin['adminUser']) ?></p>
                                <p><strong>Email:</strong> <?= htmlspecialchars($admin['adminEmail']) ?></p>
                                <p><strong>Level:</strong>
                                    <span class="badge bg-<?= $admin['level'] == 1 ? 'primary' : 'success' ?>">
                                        <?= $admin['level'] == 1 ? 'Admin' : 'Super Admin' ?>
                                    </span>
                                </p>
                            </div>

                            <div class="col-md-1 text-end">
                                <button class="btn btn-sm btn-warning ms-2 edit-admin" data-id="<?= $admin['admin_id'] ?>">
                                    EDIT
                                    <i class="ms-1 bi bi-pencil-square"></i>
                                </button>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">EDIT PROFILE</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>

                                        <div class="modal-body">
                                            <form action="profile_admin.php" method="POST" id="edit-form" enctype="multipart/form-data">

                                                <div class="col-md-12" id="alert-admin" style="display:none;">
                                                    <div class="alert"></div>
                                                </div>

                                                <input type="hidden" name="admin_id" id="edit-admin-id">

                                                <div class="mb-3">
                                                    <label for="adminAvatar" class="form-label fw-bold">Enter Avatar:</label>
                                                    <input type="file" name="adminAvatar" id="edit-avatar-admin" accept="adminAvatar/*" class="form-control shadow-none text-center">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="adminName" class="form-label fw-bold">Admin Name:</label>
                                                    <input type="text" name="adminName" id="edit-name-admin" placeholder="Admin Name" class="form-control shadow-none text-center">
                                                </div>

                                                <div class="mb-5">
                                                    <label for="adminUser" class="form-label fw-bold">User Name:</label>
                                                    <input type="text" name="adminUser" id="edit-user-admin" placeholder="User name" class="form-control shadow-none text-center">
                                                </div>


                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CLOSE</button>
                                                    <button type="submit" name="submit" class="btn btn-primary">SAVE</button>
                                                </div>

                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            <?php endif; ?>
        </div>
    </div>
</div>