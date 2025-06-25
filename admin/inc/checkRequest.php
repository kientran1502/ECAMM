<?php
$db = new Database();

$query = "SELECT * FROM register WHERE status = '0' ORDER BY register_id ASC";
$result = $db->select($query);

$queryCheck = "SELECT * FROM tbl_admin WHERE status = 0";
$resultCheck = $db->select($queryCheck);

?>


<div class="tab-pane fade" id="check-request-tab-pane" role="tabpanel" aria-labelledby="check-request-tab" tabindex="0">
    <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills h-100vh me-1 bg-dark col-lg-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <button class="nav-link mt-3 text-white active" id="v-pills-participation-requirements-tab" data-bs-toggle="pill" data-bs-target="#v-pills-participation-requirements" type="button" role="tab" aria-controls="v-pills-participation-requirements" aria-selected="true">Participation requirements</button>
            <button class="nav-link mt-3 text-white" id="v-pills-add-account-tab" data-bs-toggle="pill" data-bs-target="#v-pills-add-account" type="button" role="tab" aria-controls="v-pills-add-account" aria-selected="true">Admin Account Creation Requirements</button>
        </div>
        <div class=" col-lg-10 m-3 tab-content" id="v-pills-tabContent">

            <div class="tab-pane fade show active" id="v-pills-participation-requirements" role="tabpanel" aria-labelledby="v-pills-participation-requirements-tab" tabindex="0">
                <div class="container-fluid text-center pb-2">
                    <h3>Participation requirements</h3>
                </div>
                <table class="table table-bordered p-2">
                    <thead class="table-light">
                        <tr>
                            <th>STT</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Affiliation</th>
                            <th>Address</th>
                            <th>Zip Code</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="check-request-body">
                        <?php $i = 1;
                        if ($result) {
                            while ($row = $result->fetch_assoc()) { ?>
                                <tr data-id="<?= $row['register_id'] ?>">
                                    <td><?= $i++ ?></td>
                                    <td><?= $row['fname'] ?></td>
                                    <td><?= $row['email'] ?></td>
                                    <td><?= $row['cell'] ?></td>
                                    <td><?= $row['affiliation'] ?></td>
                                    <td><?= $row['address'] ?></td>
                                    <td><?= $row['zip'] ?></td>
                                    <td>
                                        <button class="btn btn-success btn-sm accept-btn">Accept</button>
                                        <button class="btn btn-danger btn-sm delete-btn">Delete</button>
                                    </td>
                                </tr>
                            <?php }
                        } else {
                            ?>
                            <tr>
                                <td colspan="8" class="text-center">Chưa có đăng ký nào cần duyệt.</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <div class="modal fade" id="modalCheckRegister" tabindex="-1" aria-labelledby="modalCheckRegisterLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content p-4 text-center">
                            <div class="modal-body fw-bold text-white">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="v-pills-add-account" role="tabpanel" aria-labelledby="v-pills-add-account-tab" tabindex="0">
                <div class="container-fluid text-center pb-2">
                    <h3>Admin Account Creation Requirements</h3>
                </div>
                <div class="container-fluid">
                    <div class="swiper mySwiper border-top border-1">
                        <div class="swiper-wrapper mt-2 " id="pending-accounts">
                            <?php if ($resultCheck) {
                                while ($rowAdmin = $resultCheck->fetch_assoc()) { ?>
                                    <div class="swiper-slide col-md-3 mx-2" id="card-<?= $rowAdmin['admin_id'] ?>">
                                        <div class="card p-1">
                                            <img src="<?= $rowAdmin['adminAvatar'] ?>" class="card-img-top" alt="Avatar" height="200">
                                            <div class="card-body p-2">
                                                <p><strong>Admin Name:</strong> <?= $rowAdmin['adminName'] ?></p>
                                                <p><strong>Username:</strong> <?= $rowAdmin['adminUser'] ?></p>
                                                <p><strong>Email Admin:</strong> <?= $rowAdmin['adminEmail'] ?></p>
                                            </div>
                                            <div class="text-center border-top p-2 border-1">
                                                <button class="btn btn-success btn-sm accept-admin" data-id="<?= $rowAdmin['admin_id'] ?>">Accept</button>
                                                <button class="btn btn-danger btn-sm delete-request-admin" data-id="<?= $rowAdmin['admin_id'] ?>">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                            <?php }
                            } ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>