<?php
include(__DIR__ . '/../../lib/database.php');
$db = new Database();

$query = "SELECT * FROM pages WHERE pages_id = 1";
$pageResult = $db->select($query);
if ($pageResult) {
    $row = $pageResult->fetch_assoc();
}

$queryCommittee = "SELECT * FROM committees ORDER BY committees_id ASC";
$resultCommittee = $db->select($queryCommittee);

$scientific = [];
$secretariat = [];

if ($resultCommittee) {
    while ($rows = $resultCommittee->fetch_assoc()) {
        if ($rows['typeMember'] === 'SC') {
            $scientific[] = $rows;
        } elseif ($rows['typeMember'] === 'S') {
            $secretariat[] = $rows;
        }
    }
}


$queryImg = "SELECT overview_img, overview_width, overview_height FROM pages WHERE pages_id = 1";
$imgResult = $db->select($queryImg);
if ($imgResult) {
    $data = $imgResult->fetch_assoc();
}
?>



<div class="tab-pane fade active show" id="dashboard-tab-pane" role="tabpanel" aria-labelledby="dashboard-tab" tabindex="0">
    <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills h-100vh me-1 bg-dark col-lg-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <button class="nav-link active mb-2 text-white" id="v-pills-header-tab" data-bs-toggle="pill" data-bs-target="#v-pills-header" type="button" role="tab" aria-controls="v-pills-header" aria-selected="true">Setting Header</button>
            <button class="nav-link mb-2 text-white" id="v-pills-overview-content-tab" data-bs-toggle="pill" data-bs-target="#v-pills-overview-content" type="button" role="tab" aria-controls="v-pills-overview-content" aria-selected="true">Setting Overview Content</button>
            <button class="nav-link mb-2 text-white" id="v-pills-overview-img-tab" data-bs-toggle="pill" data-bs-target="#v-pills-overview-img" type="button" role="tab" aria-controls="v-pills-overview-img" aria-selected="true">Setting Overview Image</button>
            <button class="nav-link mb-2 text-white" id="v-pills-goal-tab" data-bs-toggle="pill" data-bs-target="#v-pills-goal" type="button" role="tab" aria-controls="v-pills-goal" aria-selected="false">Setting Goal</button>
            <button class="nav-link mb-2 text-white" id="v-pills-speakers-tab" data-bs-toggle="pill" data-bs-target="#v-pills-speakers" type="button" role="tab" aria-controls="v-pills-speakers" aria-selected="false">Setting Speakers</button>
            <button class="nav-link mb-2 text-white" id="v-pills-committees-tab" data-bs-toggle="pill" data-bs-target="#v-pills-committees" type="button" role="tab" aria-controls="v-pills-committees" aria-selected="false">Setting Committees</button>
            <button class="nav-link mb-2 text-white" id="v-pills-schedule-tab" data-bs-toggle="pill" data-bs-target="#v-pills-schedule" type="button" role="tab" aria-controls="v-pills-schedule" aria-selected="false">Setting Schedule</button>
            <button class="nav-link mb-2 text-white" id="v-pills-venue-tab" data-bs-toggle="pill" data-bs-target="#v-pills-venue" type="button" role="tab" aria-controls="v-pills-venue" aria-selected="false">Setting Venue</button>
        </div>
        <div class="tab-content col-lg-10" id="v-pills-tabContent">

            <div class="tab-pane fade show active me-2" id="v-pills-header" role="tabpanel" aria-labelledby="v-pills-header-tab" tabindex="0">
                <div class="container-fluid mt-1">
                    <form id="headerForm" method="POST">

                        <div class="text-center">
                            <label class="form-label fw-bold fs-5">Header Content Editor</label>
                        </div>

                        <textarea class="summernote" id="editHeader" name="header_content">
                            <?= htmlspecialchars($row['header']) ?>
                        </textarea>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary mt-3 mb-2">Save</button>
                            <div class="saveStatus" class="mt-2"></div>
                        </div>

                    </form>

                </div>
            </div>

            <div class="tab-pane fade" id="v-pills-overview-content" role="tabpanel" aria-labelledby="v-pills-overview-content-tab" tabindex="0">
                <div class="container-fluid mt-1">
                    <form id="overviewContentForm" method="POST">

                        <div class="text-center">
                            <label class="form-label fw-bold fs-5">Overview Content Editor</label>
                        </div>

                        <textarea class="summernote" id="editOverviewContent" name="overview_content">
                            <?= htmlspecialchars($row['overview_content']) ?>
                        </textarea>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary mt-3 mb-2">Save</button>
                            <div class="saveStatus" class="mt-2"></div>
                        </div>

                    </form>

                </div>
            </div>

            <div class="tab-pane fade" id="v-pills-overview-img" role="tabpanel" aria-labelledby="v-pills-overview-img-tab" tabindex="0">
                <div class="container-fluid mt-1">
                    <form id="overviewImgForm" method="POST" enctype="multipart/form-data">

                        <div class="d-flex">
                            <div class="col-md-3 px-2">
                                <label for="overview_img" class="form-label fw-bold">Enter Image:</label>
                                <input type="file" name="overview_img" accept="image/*" class="form-control shadow-none text-center" required>
                            </div>

                            <div class="col-md-3 px-2">
                                <label for="width" class="form-label fw-bold">Enter Width:</label>
                                <input type="number" name="width" value="<?= $data['overview_width'] ?>" placeholder="Width..." class="form-control shadow-none text-center" required>
                            </div>

                            <div class="col-md-3 px-2">
                                <label for="height" class="form-label fw-bold">Enter Height:</label>
                                <input type="number" name="height" value="<?= $data['overview_height'] ?>" placeholder="Height..." class="form-control shadow-none text-center" required>
                            </div>

                            <div class="col-md-1 d-flex align-items-end px-2">
                                <button type="submit" name="submit" class="btn btn-secondary">Save</button>
                            </div>
                        </div>

                    </form>

                    <div class="mt-4 text-center border-top border-1" id="previewBox" style="<?= $data['overview_img'] ? '' : 'display: none;' ?>">
                        <p class="fw-bold">Preview:</p>
                        <img
                            id="previewImage"
                            src="<?= $data['overview_img'] ?>"
                            alt="Preview"
                            class="border"
                            style="object-fit: contain; max-width: 100%;  <?= $data['overview_width'] ? 'width: ' . $data['overview_width'] . 'px;' : '' ?> <?= $data['overview_height'] ? 'height: ' . $data['overview_height'] . 'px;' : '' ?>">

                    </div>

                </div>
                <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content p-4 text-center">
                            <div class="modal-body fw-bold text-white">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="v-pills-goal" role="tabpanel" aria-labelledby="v-pills-goal-tab" tabindex="0">
                <div class="container-fluid mt-1">
                    <form id="goalForm" method="POST">

                        <div class="text-center">
                            <label class="form-label fw-bold fs-5">Goal Content Editor</label>
                        </div>

                        <textarea class="summernote" id="editGoal" name="goal">
                            <?= htmlspecialchars($row['goal']) ?>
                        </textarea>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary mt-3 mb-2">Save</button>
                            <div class="saveStatus" class="mt-2"></div>
                        </div>

                    </form>

                </div>
            </div>

            <div class="tab-pane fade" id="v-pills-speakers" role="tabpanel" aria-labelledby="v-pills-speakers-tab" tabindex="0">
                <div class="container-fluid mt-1">
                    <form id="speakersForm" method="POST">

                        <div class="text-center">
                            <label class="form-label fw-bold fs-5">Speakers Content Editor</label>
                        </div>

                        <textarea class="summernote" id="editSpeakers" name="goal">
                            <?= htmlspecialchars($row['speakers']) ?>
                        </textarea>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary mt-3 mb-2">Save</button>
                            <div class="saveStatus" class="mt-2"></div>
                        </div>

                    </form>

                </div>
            </div>

            <div class="tab-pane fade" id="v-pills-committees" role="tabpanel" aria-labelledby="v-pills-committees-tab" tabindex="0">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between m-2">
                        <div>
                            <h4>EDIT COMMITTEES MEMBERS</h4>
                        </div>

                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#committeeModal">
                            Add Committee Member
                        </button>
                    </div>

                    <div class=" border-top border-2 mx-2 pt-3">
                        <div class="mb-3">
                            <h4 class=" text-uppercase">1. Scientific Committee</h4>

                            <div class="d-flex flex-wrap g-2">

                                <?php foreach ($scientific as $rows): ?>

                                    <div class="card border-0 col-md-2 p-1" data-id="<?= $rows['committees_id'] ?>">
                                        <img height=200 alt="" src="../<?= htmlspecialchars($rows['image']) ?>">

                                        <div class="card-body text-center">

                                            <h5><?= htmlspecialchars($rows['name']) ?></h5>

                                            <p class=" text-uppercase"><?= htmlspecialchars($rows['position']) ?></p>

                                            <p class=" text-uppercase"><?= htmlspecialchars($rows['committees_group']) ?></p>

                                            <button class="btn btn-sm btn-danger ms-3 delete-member mb-2" data-id="<?= $rows['committees_id'] ?>">
                                                DELETE
                                            </button>

                                            <button class="btn btn-sm btn-warning ms-2 edit-member mb-2" data-id="<?= $rows['committees_id'] ?>">
                                                EDIT
                                            </button>

                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <div class="mb-3">
                            <h4 class=" text-uppercase">2. Secretariat</h4>

                            <div class="d-flex flex-wrap">

                                <?php foreach ($secretariat as $rows): ?>
                                    <div class="card border-0 col-md-2 p-1" data-id="<?= $rows['committees_id'] ?>">
                                        <img height=200 alt="" class=""
                                            src="../<?= htmlspecialchars($rows['image']) ?>">
                                        <div class="card-body text-center">

                                            <h5><?= htmlspecialchars($rows['name']) ?></h5>

                                            <p class=" text-uppercase"><?= htmlspecialchars($rows['position']) ?></p>

                                            <p class=" text-uppercase"><?= htmlspecialchars($rows['committees_group']) ?></p>

                                            <button class="btn btn-sm btn-danger ms-3 delete-member mb-2" data-id="<?= $rows['committees_id'] ?>">
                                                DELETE
                                            </button>

                                            <button class="btn btn-sm btn-warning ms-2 edit-member mb-2" data-id="<?= $rows['committees_id'] ?>">
                                                EDIT
                                            </button>

                                        </div>
                                    </div>
                                <?php endforeach; ?>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="v-pills-schedule" role="tabpanel" aria-labelledby="v-pills-schedule-tab" tabindex="0">
                <div class="container-fluid mt-1">
                    <form id="scheduleForm" method="POST">

                        <div class="text-center">
                            <label class="form-label fw-bold fs-5">Schedule Content Editor</label>
                        </div>

                        <textarea class="summernote" id="editSchedule" name="schedule">
                            <?= htmlspecialchars($row['schedule']) ?>
                        </textarea>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary mt-3 mb-2">Save</button>
                            <div class="saveStatus" class="mt-2"></div>
                        </div>

                    </form>

                </div>
            </div>

            <div class="tab-pane fade" id="v-pills-venue" role="tabpanel" aria-labelledby="v-pills-venue-tab" tabindex="0">
                <div class="container-fluid mt-1">
                    <form id="venueForm" method="POST">

                        <div class="text-center">
                            <label class="form-label fw-bold fs-5">Venue Content Editor</label>
                        </div>

                        <textarea class="summernote" id="editVenue" name="venue">
                            <?= htmlspecialchars($row['venue']) ?>
                        </textarea>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary mt-3 mb-2">Save</button>
                            <div class="saveStatus" class="mt-2"></div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="committeeModal" tabindex="-1" aria-labelledby="committeeModalLabel" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="committeeModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="committeesForm" method="POST" enctype="multipart/form-data">

                    <div class="col-md-12" id="alert-committee" style="display:none;">
                        <div class="alert"></div>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label fw-bold">Enter Avatar:</label>
                        <input type="file" name="image" accept="image/*" class="form-control shadow-none text-center" required>
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label fw-bold">Enter Name Member:</label>
                        <input type="text" name="name" placeholder="Name Member..." class="form-control shadow-none text-center" required>
                    </div>

                    <div class="mb-3">
                        <label for="position" class="form-label fw-bold">Enter Position:</label>
                        <input type="text" name="position" placeholder="Position..." class="form-control shadow-none text-center">
                    </div>

                    <div class="mb-3">
                        <label for="committees_group" class="form-label fw-bold">Enter Committee Group:</label>
                        <input type="text" name="committees_group" placeholder="Committee Group..." class="form-control shadow-none text-center" required>
                    </div>

                    <div class="mb-3">
                        <label for="typeMember" class="form-label fw-bold">Choose Committee Group:</label>
                        <select name="typeMember" required>
                            <option value="SC">Scientific Committee</option>
                            <option value="S">Secretariat</option>
                        </select>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-secondary">Save</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

<!-- Modal Edit Committee -->
<div class="modal fade" id="editCommitteeModal" tabindex="-1" aria-labelledby="editCommitteeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form id="editCommitteesForm" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Committee Member</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <input type="hidden" name="committees_id" id="edit_committees_id">

                    <div class="col-md-12" id="alert-edit-committee" style="display:none;">
                        <div class="alert"></div>
                    </div>

                    <div class="mb-3">
                        <label for="edit_name" class="form-label">Name</label>
                        <input type="text" name="name" id="edit_name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="edit_position" class="form-label">Position</label>
                        <input type="text" name="position" id="edit_position" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="edit_committees_group" class="form-label">Group</label>
                        <input type="text" name="committees_group" id="edit_committees_group" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="edit_typeMember" class="form-label">Type</label>
                        <select name="typeMember" id="edit_typeMember" class="form-select" required>
                            <option value="SC">Scientific Committee</option>
                            <option value="S">Secretariat</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="edit_image" class="form-label">Image (leave empty to keep old)</label>
                        <input type="file" name="image" id="edit_image" class="form-control">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </form>
    </div>
</div>