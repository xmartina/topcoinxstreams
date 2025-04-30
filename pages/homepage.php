<?php
$pageName = 'Home';
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/config.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/layout/header.php'; ?>

<!--==================================================-->
<!-- Start itpro slider Area -->
<!--==================================================-->
<div class="slider-area d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 col-md-12">
                <div class="slider-content text-center">
                    <h3 class="slider-sub-title">CRYPTO INVESTMENT PLATFORM</h3>
                    <h1>Grow Your Wealth With</h1>
                    <h1><span>Topcoin Xstreams</span></h1>
                    <div class="slider-button">
                        <a href="<?=$accountLink?>/?a=signup">Get Started<i class="flaticon flaticon-right-arrow"></i></a>
                        <a class="slider-btn-two" href="<?=$accountLink?>/?a=login">Login Dashboard<i class="flaticon flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-shape">
            <div class="shape1 rotateme">
                <img src="<?=$siteLink?>/assets/images/slider/slider-shape1.png" alt="shape">
            </div>
            <div class="shape2 bounce-animate2">
                <img src="<?=$siteLink?>/assets/images/slider/slider-shape2.png" alt="shape">
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!--End itpro slider Area  -->
<!--==================================================-->




<!--==================================================-->
<!-- End itpro about Area -->
<!--==================================================-->
<div class="about-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-12">
                <div class="itpro-section-title wow fadeInUp pb-10">
                    <h4 class="section-sub-title style1">ABOUT <?= $siteName ?></h4>
                    <div class="itpro-section-main-title">
                        <h1> Empowering Your Future</h1>
                        <h1> with <span style="color: #ff3c00;"> Smart Crypto Investments </span></h1>
                    </div>
                    <p><?= $siteName ?> is a secure and innovative platform that enables users to invest in top cryptocurrencies with confidence.
                        We combine blockchain technology with strategic financial tools to help you grow your digital assets effortlessly.</p>
                </div>

                <div class="dreamit-about-item wow fadeInUp">
                    <ul class="about-list">
                        <li><span> Real-time profit tracking and automated returns</span></li>
                        <li><span> Transparent investment plans with secure wallets</span></li>
                        <li><span> 24/7 access to your crypto portfolio and earnings</span></li>
                    </ul>
                    <div class="about-img">
                        <img src="<?= $siteLink ?>/assets/images/about/about-img-2.png" alt="Crypto Investment">
                    </div>
                </div>
                <div class="about-button wow fadeInUp pt-40">
                    <a href="<?= $siteLink ?>/investment-plans">Get Started Now <i class="flaticon flaticon-right-arrow"></i></a>
                </div>
            </div>

            <div class="col-lg-5 col-md-12">
                <div class="dreamit-about-thumb wow fadeInUp">
                    <img src="<?= $siteLink ?>/assets/images/about/about-thumb.png" alt="Crypto About">
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End itpro about Area -->
<!--==================================================-->



<!--==================================================-->
<!-- Start itpro Service Area -->
<!--==================================================-->
<div class="service-area">
    <div class="container">
        <div class="row align-items-center mb-55">
            <div class="col-lg-12 col-md-12">
                <div class="itpro-section-title wow fadeInUp text-center">
                    <h4 class="section-sub-title">WHAT WE OFFER</h4>
                    <div class="itpro-section-main-title">
                        <h1> Empowering You With the Best <span style="color: #ff3c00;">Crypto Services</span></h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Service 1 -->
            <div class="col-lg-3 col-md-6 pl-0">
                <div class="dreamit-service-box wow fadeInUp">
                    <div class="em-service-icon">
                        <img src="<?= $siteLink ?>/assets/images/service/service-icon1.png" alt="Secure Wallet">
                    </div>
                    <div class="em-service-title">
                        <h3> Secure Wallet System </h3>
                    </div>
                    <div class="em-service-text">
                        <p>Multi-layer wallet security to keep your crypto assets protected at all times with industry best practices.</p>
                    </div>
                    <div class="service-button">
                        <a href="<?= $siteLink ?>/about">Read More <i class="flaticon flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="col-lg-3 col-md-6 pl-0">
                <div class="dreamit-service-box wow fadeInUp">
                    <div class="em-service-icon">
                        <img src="<?= $siteLink ?>/assets/images/service/service-icon2.png" alt="User Dashboard">
                    </div>
                    <div class="em-service-title">
                        <h3> Intuitive User Dashboard </h3>
                    </div>
                    <div class="em-service-text">
                        <p>Access your portfolio, track returns, and manage investments with a clean and responsive interface.</p>
                    </div>
                    <div class="service-button">
                        <a href="<?= $siteLink ?>/about">Read More <i class="flaticon flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="col-lg-3 col-md-6 pl-0">
                <div class="dreamit-service-box wow fadeInUp">
                    <div class="em-service-icon">
                        <img src="<?= $siteLink ?>/assets/images/service/service-icon3.png" alt="Analytics">
                    </div>
                    <div class="em-service-title">
                        <h3> Real-Time Data & Reports </h3>
                    </div>
                    <div class="em-service-text">
                        <p>Track your investment growth and performance with real-time analytics and profit calculations.</p>
                    </div>
                    <div class="service-button">
                        <a href="<?= $siteLink ?>/analytics">Read More <i class="flaticon flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="col-lg-3 col-md-6 pl-0">
                <div class="dreamit-service-box wow fadeInUp">
                    <div class="em-service-icon">
                        <img src="<?= $siteLink ?>/assets/images/service/service-icon4.png" alt="Support">
                    </div>
                    <div class="em-service-title">
                        <h3> 24/7 Customer Support </h3>
                    </div>
                    <div class="em-service-text">
                        <p>We’re here to help you anytime — from investment guidance to technical support across all platforms.</p>
                    </div>
                    <div class="service-button">
                        <a href="<?= $siteLink ?>/support">Read More <i class="flaticon flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End itpro Service Area -->
<!--==================================================-->


<!--==================================================-->
<!-- Start itpro About Area Style-Tow-->
<!--==================================================-->
<div class="about_area style-two">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Image -->
            <div class="col-lg-6">
                <div class="about_thumb wow fadeInUp">
                    <img src="<?= $siteLink ?>/assets/images/about/about2.png" alt="Topcoin Xstreams About Image">
                </div>
            </div>

            <!-- Right Content -->
            <div class="col-lg-6">
                <div class="about-right wow fadeInUp">
                    <div class="itpro-section-title pb-10">
                        <h4 class="section-sub-title style1 style2">HOW <?= $siteName ?> WORKS</h4>
                        <div class="itpro-section-main-title pb-20">
                            <h1 style="color:white;"> We Deliver Powerful Crypto</h1>
                            <h1 style="color:white;"> Solutions <span style="color: #ff3c00;">That Work. </span></h1>
                        </div>
                        <p>At <?= $siteName ?>, our mission is to simplify crypto investing. We leverage secure blockchain tech, real-time analytics, and an intuitive dashboard to help you grow your assets with confidence.</p>
                    </div>

                    <div class="row">
                        <!-- Feature 1 -->
                        <div class="col-lg-6 col-md-6">
                            <div class="about-signle-item">
                                <div class="about-icon">
                                    <img src="<?= $siteLink ?>/assets/images/about/about-icon1.png" alt="Secure Platform">
                                </div>
                                <div class="about-contetn">
                                    <h3 class="about-title">Trusted & Secure</h3>
                                    <p class="about-description">Your data and investments are protected with multi-layer encryption and blockchain technology.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Feature 2 -->
                        <div class="col-lg-6 col-md-6">
                            <div class="about-signle-item">
                                <div class="about-icon">
                                    <img src="<?= $siteLink ?>/assets/images/about/about-icon3.png" alt="Fast Withdrawals">
                                </div>
                                <div class="about-contetn">
                                    <h3 class="about-title">Instant Withdrawals</h3>
                                    <p class="about-description">Withdraw your profits quickly, anytime – no delays, no hidden conditions.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Author/Founder Signature -->
                    <div class="about_author">
                        <div class="author-text">
                            <h3 class="author-title">Tozi Elanda</h3>
                            <p>Project Lead – <?= $siteName ?></p>
                        </div>
                        <div class="author-signature">
                            <img src="<?= $siteLink ?>/assets/images/about/about-signature.png" alt="Founder Signature">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End itpro  About Area Style-Tow -->
<!--==================================================-->

<!--==================================================-->
<!-- Start itpro Team Area-->
<!--==================================================-->
<div class="team-area">
    <div class="container">
        <div class="row mb-55">
            <div class="col-lg-12 col-md-12">
                <div class="itpro-section-title text-center wow fadeInUp">
                    <h4 class="section-sub-title style4">OUR TEAM</h4>
                    <div class="itpro-section-main-title">
                        <h1> Meet Our <span style="color: #ff3c00;">Executive Team</span></h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- CEO -->
            <div class="col-lg-3 col-md-6">
                <div class="team-single_box wow fadeInUp">
                    <div class="team_content">
                        <h3 class="team_title">John Smith</h3>
                        <p class="team_text">Chief Executive Officer (CEO)</p>
                    </div>
                    <div class="team_thumb">
                        <img src="<?= $siteLink ?>/assets/images/team/team1.png" alt="CEO - John Smith">
                        <div class="team_icon">
                            <ul>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTO -->
            <div class="col-lg-3 col-md-6">
                <div class="team-single_box wow fadeInUp">
                    <div class="team_content">
                        <h3 class="team_title">Emma Johnson</h3>
                        <p class="team_text">Chief Technology Officer (CTO)</p>
                    </div>
                    <div class="team_thumb">
                        <img src="<?= $siteLink ?>/assets/images/team/team2.png" alt="CTO - Emma Johnson">
                        <div class="team_icon">
                            <ul>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CFO -->
            <div class="col-lg-3 col-md-6">
                <div class="team-single_box wow fadeInUp">
                    <div class="team_content">
                        <h3 class="team_title">Michael Brown</h3>
                        <p class="team_text">Chief Financial Officer (CFO)</p>
                    </div>
                    <div class="team_thumb">
                        <img src="<?= $siteLink ?>/assets/images/team/team3.png" alt="CFO - Michael Brown">
                        <div class="team_icon">
                            <ul>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CMO -->
            <div class="col-lg-3 col-md-6">
                <div class="team-single_box wow fadeInUp">
                    <div class="team_content">
                        <h3 class="team_title">Sophia Davis</h3>
                        <p class="team_text">Chief Marketing Officer (CMO)</p>
                    </div>
                    <div class="team_thumb">
                        <img src="<?= $siteLink ?>/assets/images/team/team4.png" alt="CMO - Sophia Davis">
                        <div class="team_icon">
                            <ul>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--==================================================-->
<!-- End itpro Tesm Area-->
<!--==================================================-->








<!--==================================================-->
<!-- Start itpro case study Area -->
<!--==================================================-->
<div class="case-study-area">
    <div class="container">
        <div class="row pb-50">
            <div class="col-lg-12">
                <div class="itpro-section-title wow fadeInUp pb-10">
                    <h4 class="section-sub-title style1">ABOUT OUR COMPANY</h4>
                    <div class="itpro-section-main-title">
                        <h1> Achieving New Horizons</h1>
                        <h1> for Your <span style="color: #ff3c00;"> Crypto Investments. </span></h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="case-study owl-carousel">
                <!-- Case Study 1: Crypto Portfolio Management -->
                <div class="col-lg-12">
                    <div class="case-study-single-boxs wow fadeInUp">
                        <div class="case-study-thumbs">
                            <img src="<?=$siteLink?>/assets/images/project/case1.png" alt="Crypto Portfolio">
                            <div class="case-study-contents">
                                <div class="case-study-title">
                                    <h6> CRYPTO INVESTMENT </h6>
                                    <h3> <a href="<?=$siteLink?>/about">Crypto Portfolio Management</a></h3>
                                </div>
                                <div class="case-button">
                                    <a href="<?=$siteLink?>/about">Read More <i class="flaticon flaticon-right-arrow"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Case Study 2: Bitcoin Investment Strategy -->
                <div class="col-lg-12">
                    <div class="case-study-single-boxs wow fadeInUp">
                        <div class="case-study-thumbs">
                            <img src="<?=$siteLink?>/assets/images/project/case2.png" alt="Bitcoin Investment">
                            <div class="case-study-contents">
                                <div class="case-study-title">
                                    <h6> BITCOIN STRATEGY </h6>
                                    <h3> <a href="<?=$siteLink?>/about">Bitcoin Investment Strategy</a></h3>
                                </div>
                                <div class="case-button">
                                    <a href="<?=$siteLink?>/about">Read More <i class="flaticon flaticon-right-arrow"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Case Study 3: Altcoin Market Analysis -->
                <div class="col-lg-12">
                    <div class="case-study-single-boxs wow fadeInUp">
                        <div class="case-study-thumbs">
                            <img src="<?=$siteLink?>/assets/images/project/case3.png" alt="Altcoin Market">
                            <div class="case-study-contents">
                                <div class="case-study-title">
                                    <h6> ALTCOIN MARKET </h6>
                                    <h3> <a href="<?=$siteLink?>/about">Altcoin Market Analysis</a></h3>
                                </div>
                                <div class="case-button">
                                    <a href="<?=$siteLink?>/about">Read More <i class="flaticon flaticon-right-arrow"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Case Study 4: DeFi Investment Opportunities -->
                <div class="col-lg-12">
                    <div class="case-study-single-boxs wow fadeInUp">
                        <div class="case-study-thumbs">
                            <img src="<?=$siteLink?>/assets/images/project/case2.png" alt="DeFi Investments">
                            <div class="case-study-contents">
                                <div class="case-study-title">
                                    <h6> DECENTRALIZED FINANCE </h6>
                                    <h3> <a href="<?=$siteLink?>/about">DeFi Investment Opportunities</a></h3>
                                </div>
                                <div class="case-button">
                                    <a href="<?=$siteLink?>/about">Read More <i class="flaticon flaticon-right-arrow"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End itpro case study Area -->
<!--==================================================-->








<!--==================================================-->
<!-- Start itpro  Faq Area -->
<!--==================================================-->
<div class="faq_area style">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 ">
                <div class="itpro-section-title  wow fadeInUp  pb-40">
                    <h4 class="section-sub-title style1 style5">FREQUENTLY ASKED QUESTIONS</h4>
                    <div class="itpro-section-main-title">
                        <h1 style="color: white;">We Focus on Security</h1>
                        <h1 style="color: white;"> & <span style="color: #ff3c00;">Transparency.</span></h1>
                    </div>
                </div>
                <!-- Start Accordion -->
                <div class="tab_container  wow fadeInUp ">
                    <div id="tab1" class="tab_content">
                        <ul class="accordion">
                            <li>
                                <a><span>Is <?php echo $siteName; ?> secure for crypto investments?</span></a>
                                <p>Yes. We use bank-grade encryption, two-factor authentication (2FA), and cold storage for 98% of user funds. Regular third-party audits ensure platform integrity.</p>
                            </li>
                            <li>
                                <a><span>How do I start investing?</span></a>
                                <p>1. Sign up at <?php echo $siteName; ?>.<br>2. Complete KYC verification.<br>3. Deposit funds via your dashboard (<?php echo $accountLink; ?>).<br>4. Choose your investment plan.</p>
                            </li>
                            <li>
                                <a><span>What cryptocurrencies are supported?</span></a>
                                <p>We support Bitcoin (BTC), Ethereum (ETH), USDT, and 50+ altcoins. Visit <?php echo $siteName; ?> for the full list.</p>
                            </li>
                            <li>
                                <a><span>How long do withdrawals take?</span></a>
                                <p>Withdrawals are processed within 2-4 hours for verified accounts. Delays may occur during network congestion or security reviews.</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End Accordion -->
            </div>
            <div class="col-lg-6"></div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End itpro Faq Area -->
<!--==================================================-->

<!--==================================================-->
<!-- Start itpro Counter Area Css -->
<!--==================================================-->
<div class="counter-area">
    <div class="container">
        <div class="row counter_bg">
            <div class="col-lg-3 col-md-6">
                <div class="counter-single-item wow fadeInUp">
                    <div class="counter-content">
                        <div class="counter-title">
                            <h1>250K</h1>
                            <span>+</span>
                            <h5>ACTIVE INVESTMENTS</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="counter-single-item wow fadeInUp">
                    <div class="counter-content">
                        <div class="counter-title">
                            <h1>150K</h1>
                            <span>+</span>
                            <h5>SUCCESSFUL TRADES</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="counter-single-item wow fadeInUp">
                    <div class="counter-content">
                        <div class="counter-title">
                            <h1>120K</h1>
                            <span>+</span>
                            <h5>ACTIVE TRADERS</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="counter-single-item style wow fadeInUp">
                    <div class="counter-content">
                        <div class="counter-title">
                            <h1>8</h1>
                            <span>+</span>
                            <h5>YEARS OF EXPERIENCE</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End itpro Counter Area Css -->
<!--==================================================-->


<!--==================================================-->
<!-- Start itpro Testimonial Area -->
<!--==================================================-->
<div class="testimonial-area style">
    <div class="container">
        <div class="row pb-60">
            <div class="col-lg-12">
                <div class="itpro-section-title text-center  wow fadeInUp ">
                    <h4 class="section-sub-title style6">CRYPTO INVESTOR REVIEWS</h4>
                    <div class="itpro-section-main-title">
                        <h1>50k+ Verified Investors Trust <span style="color: #ff3c00;"><?php echo $siteName; ?></span></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="testimonial_list owl-carousel">
                <!-- Testimonial 1: Security Focus -->
                <div class="col-lg-12">
                    <div class="testimonial-item  wow fadeInUp ">
                        <div class="author_thumb">
                            <div class="author">
                                <img src="<?=$siteLink?>/assets/images/resource/investor1.jpg" alt="Crypto Investor">
                            </div>
                        </div>
                        <div class="testi-author">
                            <h4 class="name">Sarah Chen</h4>
                            <h5 class="designation">Singapore · BTC Investor</h5>
                        </div>
                        <div class="reviews_rating">
                            <div class="testi-star">
                                <i class="fa fa-star active"></i>
                                <i class="star fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p class="quote">"The cold storage security and instant withdrawals at <?php echo $siteName; ?> convinced me to switch from my old exchange. My portfolio grew 65% in 6 months!"</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2: Dashboard Experience -->
                <div class="col-lg-12">
                    <div class="testimonial-item  wow fadeInUp ">
                        <div class="author_thumb">
                            <div class="author">
                                <img src="<?=$siteLink?>/assets/images/resource/investor2.jpg" alt="Crypto Trader">
                            </div>
                        </div>
                        <div class="testi-author">
                            <h4 class="name">Raj Patel</h4>
                            <h5 class="designation">India · Altcoin Trader</h5>
                        </div>
                        <div class="reviews_rating">
                            <div class="testi-star">
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p class="quote">"The <?php echo $accountLink; ?> dashboard is a game-changer! Real-time charts, staking rewards tracking, and 24/7 support make managing my crypto effortless."</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3: New User Experience -->
                <div class="col-lg-12">
                    <div class="testimonial-item  wow fadeInUp ">
                        <div class="author_thumb">
                            <div class="author">
                                <img src="<?=$siteLink?>/assets/images/resource/investor3.jpg" alt="Crypto Beginner">
                            </div>
                        </div>
                        <div class="testi-author">
                            <h4 class="name">Emily Torres</h4>
                            <h5 class="designation">USA · First-Time Investor</h5>
                        </div>
                        <div class="reviews_rating">
                            <div class="testi-star">
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p class="quote">"<?php echo $siteName; ?>’s tutorials and low minimum deposits helped me start investing in Bitcoin confidently. Withdrawals took just 3 hours during my test!"</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End itpro Testimonial Area -->
<!--==================================================-->




<!--==================================================-->
<!-- Start itpro Blog Area -->
<!--==================================================-->
<div class="blog-area style1">
    <div class="container">
        <div class="row pb-60">
            <div class="col-lg-12">
                <div class="itpro-section-title text-center wow fadeInUp">
                    <h4 class="section-sub-title style7">LATEST BLOG</h4>
                    <div class="itpro-section-main-title">
                        <h1>Latest News and Insights</h1>
                        <h1>in Crypto Investments</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-box wow fadeInUp">
                    <div class="single-blog-thumb">
                        <img src="<?=$siteLink?>/assets/images/resource/blog1.jpg" alt="">
                    </div>
                    <div class="single-blog-content">
                        <div class="meta-blog">
                            <p><i class="bi bi-calendar2-check"></i>April 01, 2023</p>
                        </div>
                        <a href="javascript:void(0);">Understanding Crypto Market Trends</a>
                        <a class="blog-button" href="javascript:void(0);">Read More<i class="bi bi-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-box wow fadeInUp">
                    <div class="single-blog-thumb">
                        <img src="<?=$siteLink?>/assets/images/resource/blog2.jpg" alt="">
                    </div>
                    <div class="single-blog-content">
                        <div class="meta-blog">
                            <p><i class="bi bi-calendar2-check"></i>April 01, 2023</p>
                        </div>
                        <a href="javascript:void(0);">How to Start Your Crypto Investment Journey</a>
                        <a class="blog-button" href="javascript:void(0);">Read More<i class="bi bi-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-box wow fadeInUp">
                    <div class="single-blog-thumb">
                        <img src="<?=$siteLink?>/assets/images/resource/blog3.jpg" alt="">
                    </div>
                    <div class="single-blog-content">
                        <div class="meta-blog">
                            <p><i class="bi bi-calendar2-check"></i>April 01, 2023</p>
                        </div>
                        <a href="javascript:void(0);">Top Strategies for Crypto Portfolio Growth</a>
                        <a class="blog-button" href="javascript:void(0);">Read More<i class="bi bi-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- Start itpro Blog Area -->
<!--==================================================-->



<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/layout/footer.php'; ?>
