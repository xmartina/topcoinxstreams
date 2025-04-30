<?php
$sql_back = "SELECT * FROM hm2_plans";
$get_plan = $conn->query($sql_back);
if ($get_plan && $get_plan->num_rows > 0){
    while ($plan = $get_plan->fetch_assoc()) {
        ?>
        <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="pricing-single-items wow fadeInUp">
                <div class="pricing-thumb pt-25">
                    <img src="<?=$siteLink?>/assets/images/resource/basic.png" alt="Pricing Img">
                </div>
                <div class="pricing-title">
                    <h3><?= htmlspecialchars($plan['name']) ?></h3>
                </div>
                <div class="pricing-item-text mb-15">
                    <span class="currency">$</span>
                    <span class="tk"><?= number_format($plan['min_deposit'], 2) ?> - <?= number_format($plan['max_deposit'], 2) ?></span>
                    <span class="month"> | <?= number_format($plan['percent'], 2) ?>% ROI </span>
                </div>
                <div class="pricing-body">
                    <div class="pricing-feature mb-40">
                        <ul>
                            <li><b>Description:</b></li>
                            <li><?= nl2br(htmlspecialchars($plan['description'])) ?></li>
                            <li><b>Bonus:</b> <?= number_format($plan['bonus_percent'], 2) ?>%</li>
                        </ul>
                    </div>
                </div>
                <div class="pricing-btn">
                    <div class="btn-common pc-btn mb-60">
                        <a href="#">Select Plan</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
} else {
    echo '<p>No active plans found.</p>';
}
?>
