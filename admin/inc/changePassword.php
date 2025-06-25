<?php
$db = new Database();
$adminId = Session::get('admin_id');
$query = "SELECT * FROM tbl_admin where admin_id = '$adminId' LIMIT 1";
$result = $db->select($query);

if ($result) {
    $adminss = $result->fetch_assoc();
}
?>


<div class="tab-pane fade" id="change-pass-tab-pane" role="tabpanel" aria-labelledby="change-pass-tab" tabindex="0">
    <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills h-100vh me-1 bg-dark col-lg-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <button class="nav-link mt-3 active" id="v-pills-admin<?= $adminss['admin_id'] ?>-tab" data-bs-toggle="pill" data-bs-target="#v-pills-admin<?= $adminss['admin_id'] ?>" type="button" role="tab" aria-controls="v-pills-admin<?= $adminss['admin_id'] ?>" aria-selected="true">Change Password</button>
        </div>
        <div class=" col-lg-10 m-3" id="v-pills-tabContent">
            <?php if ($adminss): ?>
                <div class="tab-pane fade show active" id="v-pills-admin<?= $adminss['admin_id'] ?>" role="tabpanel" aria-labelledby="v-pills-admin<?= $adminss['admin_id'] ?>-tab" tabindex="0">
                    <div class="card p-3">
                        <div class="container-fluid">
                            <form method="POST" id="change_pass_form" class="d-flex" action="">

                                <div class="col-md-4">

                                    <input type="hidden" name="admin_id" id="admin_id" value="<?= $adminss['admin_id'] ?>">

                                    <div class="mb-3">
                                        <label for="adminPass" class="form-label">Current Password:</label>
                                        <input type="password" class="form-control toggle-password" name="adminPass" id="adminPass" aria-describedby="emailHelp">
                                        <div id="checkPass" class="form-text " style="display: none;">We'll never share your password with anyone else.</div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="new_password" class="form-label">New Password:</label>
                                        <input type="password" class="form-control toggle-password" name="new_password" id="new_password">
                                    </div>

                                    <div class="mb-3">
                                        <label for="confirm_new_password" class="form-label">Confirm New Password</label>
                                        <input type="password" class="form-control toggle-password" name="confirm_new_password" id="confirm_new_password">
                                    </div>

                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="displayPass">
                                        <label class="form-check-label" for="displayPass">Show Password.</label>
                                    </div>

                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>

                                </div>

                                <div class="ms-2 col-md-5">
                                    <div class="" id="alert-noitification" style="display:none;">
                                        <div class="alert custom-alert" role="alert">

                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>