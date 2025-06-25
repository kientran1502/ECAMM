<?php
include(__DIR__ . '/../lib/database.php');
$db = new Database();

// Lấy danh sách theo typeMember
$query = "SELECT * FROM committees ORDER BY created_at ASC";
$result = $db->select($query);

$scientific = [];
$secretariat = [];

if ($result) {
    while ($row = $result->fetch_assoc()) {
        if ($row['typeMember'] === 'SC') {
            $scientific[] = $row;
        } elseif ($row['typeMember'] === 'S') {
            $secretariat[] = $row;
        }
    }
}

// Gộp hai nhóm lại thành HTML
ob_start();
?>

<!-- Scientific Committee -->
<h4 class="text-uppercase mb-3">1. Scientific Committee</h4>
<div class="d-flex flex-wrap g-2 mb-4">
    <?php foreach ($scientific as $member): ?>
        <div class="card border-0 col-lg-3 col-md-6 col-sm-12 p-4 mb-2" data-id="<?= $member['committees_id'] ?>">
            <img src="../../<?= htmlspecialchars( $member['image']) ?>" height="350" alt="Image">
            <div class="card-body text-center">
                <h5><?= htmlspecialchars($member['name']) ?></h5>
                <p class="text-uppercase"><?= htmlspecialchars($member['position']) ?></p>
                <p class="text-uppercase"><?= htmlspecialchars($member['committees_group']) ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<!-- Secretariat -->
<h4 class="text-uppercase mb-3">2. Secretariat</h4>
<div class="d-flex flex-wrap g-2">
    <?php foreach ($secretariat as $member): ?>
        <div class="card border-0 col-lg-3 col-md-6 col-sm-12 p-4 mb-2" data-id="<?= $member['committees_id'] ?>">
            <img src="../../<?= htmlspecialchars( $member['image']) ?>" height="350" alt="Image">
            <div class="card-body text-center">
                <h5><?= htmlspecialchars($member['name']) ?></h5>
                <p class="text-uppercase"><?= htmlspecialchars($member['position']) ?></p>
                <p class="text-uppercase"><?= htmlspecialchars($member['committees_group']) ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php
echo ob_get_clean();
?>