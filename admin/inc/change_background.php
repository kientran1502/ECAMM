<?php
include(__DIR__ . '/../../lib/database.php');
$db = new Database();

$query = "SELECT * FROM background_page ORDER BY background_id ASC";
$result = $db->select($query);

$queryLogo = "SELECT * FROM logo_page ORDER BY logo_id ASC";
$resultLogo = $db->select($queryLogo);

?>

<div class="tab-pane fade" id="change-background-tab-pane" role="tabpanel" aria-labelledby="change-background-tab" tabindex="0">
    <div class="d-flex align-items-start">

        <div class="nav flex-column nav-pills h-100vh me-1 bg-dark col-lg-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <button class="nav-link active mb-2 text-white" id="v-pills-background-tab" data-bs-toggle="pill" data-bs-target="#v-pills-background" type="button" role="tab" aria-controls="v-pills-background" aria-selected="true">Setting Background</button>
            <button class="nav-link mb-2 text-white" id="v-pills-logo-content-tab" data-bs-toggle="pill" data-bs-target="#v-pills-logo-content" type="button" role="tab" aria-controls="v-pills-logo-content" aria-selected="true">Setting Logo</button>
        </div>

        <div class="tab-content col-lg-10" id="v-pills-tabContent">

            <div class="tab-pane fade show active me-2" id="v-pills-background" role="tabpanel" aria-labelledby="v-pills-background-tab" tabindex="0">
                <div class="container-fluid mt-1">
                    <form action="" method="POST" id="changeBackground" enctype="multipart/form-data">

                        <div class="d-flex mb-1">

                            <div class="col-md-3 p-1">
                                <label for="backgroundImg" class="form-label fw-bold">Enter Background:</label>
                                <input type="file" name="backgroundImg" accept="image/*" class="form-control shadow-none text-center" required>
                            </div>

                            <div class="col-md-3 p-1">
                                <label for="backgroundName" class="form-label fw-bold">Enter Name Background:</label>
                                <input type="text" name="backgroundName" placeholder="Name Background..." class="form-control shadow-none text-center" required>
                            </div>

                            <div class="col-md-1 p-1 d-flex align-items-end">
                                <button type="submit" name="submit" class="btn btn-success text-white">SAVE</button>
                            </div>

                        </div>

                    </form>

                    <div class="swiper mySwiper border-top border-1">
                        <div class="swiper-wrapper mt-2">
                            <?php
                            if ($result) {
                                while ($data = $result->fetch_assoc()) {
                                    $isSelected = $data['is_selected'] == 1;
                            ?>
                                    <div class="swiper-slide col-md-3">

                                        <div class="card p-1" data-id="<?= $data['background_id'] ?>">
                                            <img src="../<?= htmlspecialchars($data['backgroundImg']) ?>" class="card-img-top" alt="..." height="200">
                                            <div class="card-body">
                                                <p class="card-title fw-bold">Name background:</p>
                                                <p class="card-text"><?= htmlspecialchars($data['backgroundName']) ?></p>
                                            </div>
                                            <div class="text-center border-top p-2 border-1">
                                                <button class="btn btn-sm btn-danger me-2 delete-background mb-2 " data-id="<?= $data['background_id'] ?>" <?= $isSelected ? 'disabled' : '' ?>>DELETE</button>
                                                <button class="btn btn-sm btn-<?= $isSelected ? 'success' : 'secondary' ?> choose-background mb-2 " <?= $isSelected ? 'disabled' : '' ?> data-id="<?= $data['background_id'] ?>"><?= $isSelected ? '✅ CHOSEN' : 'CHOOSE' ?></button>
                                            </div>
                                        </div>

                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="modal fade" id="successModalBackground" tabindex="-1" aria-labelledby="successModalBackgroundLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content p-4 text-center">
                                <div class="modal-body fw-bold text-white">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="v-pills-logo-content" role="tabpanel" aria-labelledby="v-pills-logo-content-tab" tabindex="0">
                <div class="container-fluid mt-1">
                    <form method="POST" id="changeLogoForm" enctype="multipart/form-data">

                        <div class="d-flex mb-1">

                            <div class="col-md-3 p-1">
                                <label for="logoImg" class="form-label fw-bold">Enter Background:</label>
                                <input type="file" name="logoImg" accept="image/*" class="form-control shadow-none text-center" required>
                            </div>

                            <div class="col-md-3 p-1">
                                <label for="logoName" class="form-label fw-bold">Enter Name Background:</label>
                                <input type="text" name="logoName" placeholder="Name Logo..." class="form-control shadow-none text-center" required>
                            </div>

                            <div class="col-md-1 p-1 d-flex align-items-end">
                                <button type="submit" name="submit" class="btn btn-success text-white">SAVE</button>
                            </div>

                        </div>

                    </form>

                    <div class="swiper mySwiper border-top border-1">
                        <div class="swiper-wrapper mt-2">
                            <?php
                            if ($resultLogo) {
                                while ($dataLogo = $resultLogo->fetch_assoc()) {
                                    $isSelectedLogo = $dataLogo['is_selected_logo'] == 1;
                            ?>
                                    <div class="swiper-slide col-md-3">

                                        <div class="card p-1" data-id="<?= $dataLogo['logo_id'] ?>">
                                            <img src="../<?= htmlspecialchars($dataLogo['logoImg']) ?>" class="card-img-top" alt="..." height="200">
                                            <div class="card-body">
                                                <p class="card-title fw-bold">Name logo:</p>
                                                <p class="card-text"><?= htmlspecialchars($dataLogo['logoName']) ?></p>
                                            </div>
                                            <div class="text-center border-top p-2 border-1">
                                                <button class="btn btn-sm btn-danger me-2 delete-logo mb-2 " data-id="<?= $dataLogo['logo_id'] ?>" <?= $isSelectedLogo ? 'disabled' : '' ?>>DELETE</button>
                                                <button class="btn btn-sm btn-<?= $isSelectedLogo ? 'success' : 'secondary' ?> choose-logo mb-2 " <?= $isSelectedLogo ? 'disabled' : '' ?> data-id="<?= $dataLogo['logo_id'] ?>"><?= $isSelectedLogo ? '✅ CHOSEN' : 'CHOOSE' ?></button>
                                            </div>
                                        </div>

                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="modal fade" id="successModalLogo" tabindex="-1" aria-labelledby="successModalLogoLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content p-4 text-center">
                                <div class="modal-body fw-bold text-white">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>