<?php
$db = new Database();

$query = "SELECT * FROM tbl_admin WHERE status = '1' ORDER BY admin_id ASC";
$result = $db->select($query);
?>


<div class="tab-pane fade" id="admin-management-tab-pane" role="tabpanel" aria-labelledby="admin-management-tab" tabindex="0">
    <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills h-100vh me-1 bg-dark col-lg-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <?php
            if ($result) {
                $first = true;
                while ($row = $result->fetch_assoc()) {
            ?>
                    <button
                        class="nav-link text-white <?= $first ? 'active' : '' ?> mt-3" id="v-pills-admin-<?= $row['admin_id'] ?>-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-admin-<?= $row['admin_id'] ?>"
                        type="button"
                        role="tab"
                        aria-controls="v-pills-admin-<?= $row['admin_id'] ?>"
                        aria-selected="<?= $first ? 'true' : 'false' ?>">

                        <?= htmlspecialchars($row['adminName']) ?>

                    </button>
            <?php
                    $first = false;
                }
            }
            ?>
        </div>
        <div class="tab-content col-lg-10 m-3" id="v-pills-tabContent">

            <?php
            if ($result) {
                $result->data_seek(0); // Reset lại con trỏ dữ liệu
                $first = true;
                while ($row = $result->fetch_assoc()) {
            ?>

                    <div
                        class="tab-pane fade <?= $first ? 'show active' : '' ?>"
                        id="v-pills-admin-<?= $row['admin_id'] ?>"
                        role="tabpanel"
                        aria-labelledby="v-pills-admin-<?= $row['admin_id'] ?>-tab"
                        tabindex="0">

                        <div class="card shadow p-3 me-5">
                            <div class="container-fluid d-flex">
                                <div class="col-md-10">
                                    <img src="<?= htmlspecialchars($row['adminAvatar']) ?>" class="img-fluid rounded-circle border mb-3" style="max-height: 150px; object-fit: cover;" alt="Avatar">
                                    <p><strong>Admin Name:</strong> <?= htmlspecialchars($row['adminName']) ?></p>
                                    <p><strong>Username:</strong> <?= htmlspecialchars($row['adminUser']) ?></p>
                                    <p><strong>Email Admin:</strong> <?= htmlspecialchars($row['adminEmail']) ?></p>
                                    <p><strong>Level:</strong>
                                        <span class="badge bg-<?= $row['level'] == 1 ? 'primary' : 'success' ?>">
                                            <?= $row['level'] == 1 ? 'Admin' : 'Super Admin' ?>
                                        </span>
                                    </p>
                                </div>

                                <div class="col-md-2 text-end">
                                    <button class="btn btn-sm btn-success ms-3 level-up" data-id="<?= $row['admin_id'] ?>">
                                        Level Up
                                        <i class="bi bi-arrow-up"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger ms-3 delete-admin" data-id="<?= $row['admin_id'] ?>">
                                        DELETE
                                        <i class="ms-1 bi bi-trash3"></i>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>

            <?php
                    $first = false;
                }
            }
            ?>
        </div>
    </div>
</div>

<div class="col-md-12" id="alert-noitification" style="display:none;">
    <div class="alert custom-alert" role="alert">

    </div>
</div>