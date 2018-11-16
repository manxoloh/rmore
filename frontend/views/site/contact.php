<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- Start of Contact Section -->
<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div id="map_location" class="map-location">
                    <div id="map">
                        <div id="gmap-wrap">
                            <div id="gmap">
                            </div>
                        </div>
                    </div> <!-- end of #map -->
                </div> <!-- end of #map_location -->
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="contact-form-wrapper">
                    <div class="section-title left-aligned">
                        <h2>get In Touch</h2>
                    </div>
                    <form id="contact-form" action="https://d29u17ylf1ylz9.cloudfront.net/pebona-v1/pebona/sendemail.php" method="post">
                        <div class="form-row">
                            <div class="form-group col-12 col-sm-12 col-md-6">
                                <input type="text" name="name" class="form-control" id="com-name" placeholder="Your Name *" required>
                            </div>
                            <div class="form-group col-12 col-sm-12 col-md-6">
                                <input type="email" name="email" class="form-control" id="com-email" placeholder="Your Email *" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12 col-sm-12 col-md-12">
                                <input type="text" name="subject" class="form-control" id="subject" placeholder="Your Subject">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12 col-sm-12 col-md-12">
                                <textarea id="comment" placeholder="Type Your Message....." name="message" class="form-control" required></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12 col-sm-12 col-md-12">
                                <button name="send_message" type="submit" class="btn btn-secondary">Send Your Message</button>
                            </div>
                        </div>
                    </form>
                </div> <!-- end of contact-form-wrapper -->
            </div>
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</section>
<!-- End of Contact Section -->

<!-- Start of Info Section -->
<section class="info-section pt-full pb-half bgc-offset">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                <div class="info-box">
                    <div class="info-icon">
                        <i class="ion ion-md-locate"></i>
                    </div>
                    <div class="info-content">
                        <h4>Our Location</h4>
                        <p>123 North Avenue, Santa Rosa</p>
                        <p>California</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                <div class="info-box">
                    <div class="info-icon">
                        <i class="ion ion-ios-call"></i>
                    </div>
                    <div class="info-content">
                        <h4>Contact Us Anytime</h4>
                        <p>Mobile: <a href="#">(+1) 800 555 888</a></p>
                        <p>Fax: (+1) 800 666 999</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                <div class="info-box">
                    <div class="info-icon">
                        <i class="ion ion-md-mail-open"></i>
                    </div>
                    <div class="info-content">
                        <h4>Write Some Words</h4>
                        <p><a href="#">support24/7@example.com</a></p>
                        <p><a href="#">contact@example.com</a></p>
                    </div>
                </div>
            </div>
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</section>
<!-- End of Info Section -->

<!-- Start of Client Section -->
<div class="client-section mb-full">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
                <div class="clients element-carousel" data-visible-slide="5" data-visible-xl-slide="5" data-visible-lg-slide="5" data-visible-md-slide="4" data-visible-sm-slide="3" data-visible-xs-slide="2" data-loop="true" data-autoplay-delay="3000" data-space-between="0" data-effect="slide">

                    <!-- Slides -->
                    <div class="swiper-wrapper">
                        <div class="item-brand swiper-slide">
                            <img src="<?= Yii::$app->request->baseUrl?>/theme/images/brand/client-logo-1.jpg" alt="Client Logo">
                        </div>
                        <div class="item-brand swiper-slide">
                            <img src="<?= Yii::$app->request->baseUrl?>/theme/images/brand/client-logo-2.jpg" alt="Client Logo">
                        </div>
                        <div class="item-brand swiper-slide">
                            <img src="<?= Yii::$app->request->baseUrl?>/theme/images/brand/client-logo-3.jpg" alt="Client Logo">
                        </div>
                        <div class="item-brand swiper-slide">
                            <img src="<?= Yii::$app->request->baseUrl?>/theme/images/brand/client-logo-4.jpg" alt="Client Logo">
                        </div>
                        <div class="item-brand swiper-slide">
                            <img src="<?= Yii::$app->request->baseUrl?>/theme/images/brand/client-logo-5.jpg" alt="Client Logo">
                        </div>
                        <div class="item-brand swiper-slide">
                            <img src="<?= Yii::$app->request->baseUrl?>/theme/images/brand/client-logo-6.jpg" alt="Client Logo">
                        </div>
                        <div class="item-brand swiper-slide">
                            <img src="<?= Yii::$app->request->baseUrl?>/theme/images/brand/client-logo-7.jpg" alt="Client Logo">
                        </div>
                        <div class="item-brand swiper-slide">
                            <img src="<?= Yii::$app->request->baseUrl?>/theme/images/brand/client-logo-8.jpg" alt="Client Logo">
                        </div>
                    </div>
                </div> <!-- end of element-carousel -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div>
<!-- End of Client Section -->

<!-- Start of Newsletter Section -->
<section class="newsletter-section vpadding bgc-offset mb0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                <div class="newsletter-title d-lg-flex justify-content-lg-start">
                    <h6>Subscribe to our Newsletter</h6>
                    <h3>Subscribe to our newsletter and know first about all the promotions and discounts. Be always trendy.</h3>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                <div class="newsletter-form-wrapper">
                    <form class="mc-subscribe-form">
                        <input type="email" autocomplete="off" placeholder="Enter you email address here..." required> 
                        <input type="submit" class="default-btn" value="Subscribe">
                    </form>

                    <div class="mailchimp-alerts">
                        <div class="mailchimp-submitting"></div>
                        <div class="mailchimp-success"></div>
                        <div class="mailchimp-error"></div>
                    </div><!-- end of mailchimp-alerts -->
                </div>
            </div>
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</section>
<!-- End of Newsletter Section -->
