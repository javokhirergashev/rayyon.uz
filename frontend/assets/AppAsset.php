<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */

namespace app\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "img/favicon.png",
        "https://unicons.iconscout.com/release/v4.0.0/css/line.css",
        "https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500&amp;family=Poppins:wght@300;400;500;600;700&amp;display=swap",
        "css/plugins.css",
        "css/plugins.css",
        "css/style.css",
    ];
    public $js = [
        "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/js/all.min.js",
        "https://www.googletagmanager.com/gtag/js?id=UA-144098545-1",
        "js/jquery-3.6.0.min.js",
        "js/jquery-migrate-3.0.0.min.js",
        "js/modernizr-2.6.2.min.js",
        "js/imagesloaded.pkgd.min.js",
        "js/jquery.isotope.v3.0.2.js",
        "js/pace.js",
        "js/popper.min.js",
        "js/bootstrap.min.js",
        "js/scrollIt.min.js",
        "js/jquery.waypoints.min.js",
        "js/owl.carousel.min.js",
        "js/jquery.stellar.min.js",
        "js/jquery.magnific-popup.js",
        "js/YouTubePopUp.js",
        "js/select2.js",
        "js/datepicker.js",
        "js/jquery.counterup.min.js",
        "js/smooth-scroll.min.js",
        "js/custom.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
