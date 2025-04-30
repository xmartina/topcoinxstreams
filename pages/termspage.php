<?php
$pageName = 'Terms';
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/config.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/layout/header.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/layout/breadcrumb.php';
?>

<div class="about-area style-three upper sr-page" id="terms">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-lg-12">
                <div class="itpro-section-title wow fadeInUp pb-20 text-center">
                    <h4 class="section-sub-title style1 style11">Terms & Conditions</h4>
                    <div class="itpro-section-main-title pb-20">
                        <h1><?=$siteName ?> <span style="color:#FF3C00;">Policy</span></h1>
                    </div>
                </div>
                <div class="about-text1 wow fadeInUp">
                    <p><strong>Effective Date:</strong> April 30, 2025</p>

                    <p>Welcome to <strong><?=$siteName ?></strong>. By accessing or using our website
                        <a href="<?=$siteLink ?>"><?=$siteLink ?></a> or dashboard
                        <a href="<?=$accountLink ?>"><?=$accountLink ?></a>, you agree to the following Terms & Conditions.
                        If you disagree with any part of the terms, please refrain from using our services.</p>

                    <h5>1. Use of Our Services</h5>
                    <ul>
                        <li>You must be at least 18 years old to use our platform.</li>
                        <li>You agree to keep your login credentials secure.</li>
                        <li>You are responsible for any activity under your account.</li>
                    </ul>

                    <h5>2. Investment Disclaimer</h5>
                    <p>All investments are subject to market risks. Returns are not guaranteed. You acknowledge that cryptocurrency value is volatile and investment is at your own risk.</p>

                    <h5>3. User Accounts</h5>
                    <ul>
                        <li>All users are provided with a dashboard on registration.</li>
                        <li>Sharing of account credentials is prohibited.</li>
                        <li>We reserve the right to suspend accounts for suspicious activity.</li>
                    </ul>

                    <h5>4. Deposits & Withdrawals</h5>
                    <ul>
                        <li>We support BTC, ETH, and USDT (TRC20/ERC20).</li>
                        <li>Deposits require network confirmations before appearing in your balance.</li>
                        <li>Withdrawals are processed typically within 24–48 hours.</li>
                    </ul>

                    <h5>5. Refund Policy</h5>
                    <p><strong>No refunds will be issued</strong> once investments are made. All deposits are considered final unless otherwise required by law.</p>

                    <h5>6. Prohibited Activities</h5>
                    <ul>
                        <li>Using the platform for any illegal activity.</li>
                        <li>Engaging in hacking, fraud, or spamming.</li>
                        <li>Misrepresenting our brand or impersonating others.</li>
                    </ul>

                    <h5>7. Intellectual Property</h5>
                    <p>All website content and branding is the property of <?=$siteName ?>. Unauthorized use is prohibited.</p>

                    <h5>8. Termination</h5>
                    <p>We reserve the right to terminate your access without notice for violations of these Terms.</p>

                    <h5>9. Limitation of Liability</h5>
                    <p><?=$siteName ?> is not liable for losses due to market volatility, downtime, or user error. Use of our platform is entirely at your own risk.</p>

                    <h5>10. Changes to Terms</h5>
                    <p>We may update these terms at any time. Continued use constitutes acceptance of the revised terms.</p>

                    <h5>11. Governing Law</h5>
                    <p>These Terms are governed by the laws of Nigeria.</p>

                    <h5>12. Contact</h5>
                    <p>For inquiries, email us at <a href="mailto:support@topcoinxstreams.com">support@topcoinxstreams.com</a></p>

                    <div class="about-button mt-4">
                        <a href="<?=$siteLink ?>/contact"><i class="bi bi-gear"></i> Contact Support</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/layout/footer.php'; ?>
