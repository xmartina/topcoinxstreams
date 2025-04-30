<style>
    .pricing-item-text span {
        font-size: 32px;
    }
    .pricing-section {
        padding: 105px 0 10px;
    }
    .testimonial-area.style {
        padding: 75px 0 104px;
    }
</style>
<?php
$sql_back = "SELECT * FROM hm2_plans ORDER BY percent ASC ";
$get_plan = $conn->query($sql_back);

if ($get_plan && $get_plan->num_rows > 0) {
    echo '<div class="row align-items-center justify-content-center">';
    while ($row = $get_plan->fetch_assoc()) {
        // Format deposit range
        $deposit_range = '$' . number_format($row['min_deposit'], 2);
        if ($row['max_deposit'] > $row['min_deposit']) {
            $deposit_range .= ' - $' . number_format($row['max_deposit'], 2);
        }

        // Split description into list items
        $description_items = explode("\n", $row['description']);
        ?>
        <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="pricing-single-items wow fadeInUp">
                <div class="pricing-thumb pt-25">
                    <img src="<?=$siteLink?>/assets/images/resource/basic.png" alt="<?= htmlspecialchars($row['name']) ?>">
                </div>
                <div class="pricing-title">
                    <h3><?= htmlspecialchars($row['name']) ?></h3>
                </div>
                <div class="pricing-item-text mb-15">
                    <span class="tk"><?= $deposit_range ?></span>
                    <?php if ($row['percent']) : ?>
                        <span class="month" style="color: #FF3C00;"><?= $row['percent'] ?>% daily</span>
                    <?php endif; ?>
                </div>
                <div class="pricing-body">
                    <div class="pricing-feature mb-40">
                        <ul>
                            <?php foreach ($description_items as $item) : ?>
                                <li><?= htmlspecialchars(trim($item)) ?></li>
                            <?php endforeach; ?>
                            <?php if ($row['bonus_percent'] > 0) : ?>
                                <li><b>Special bonus: <?= $row['bonus_percent'] ?>%</b></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <div class="pricing-btn">
                    <div class="btn-common pc-btn mb-60">
                        <a href="<?=$accountLink?>/?a=login">Select Plan</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    echo '</div>'; // Close row div
} else {
    echo '<p>No investment plans available at the moment.</p>';
}
?>