<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "assets/css/plugins.css",
        "assets/css/bootstrap.min.css",
        "assets/css/style.css",
        "assets/css/style-responsive.css",
        "assets/rs-plugin/css/settings.css",
        "http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,400italic,600italic,700italic|Oswald:400,300,700",
    ];
    public $js = [
        "assets/js/scripts-top.js",
        "assets/js/scripts-bottom.js",
        "assets/js/bootstrap.min.js",
        "assets/js/jquery.isotope.min.js",
        "assets/js/jquery.sticky.js",
        "assets/js/jquery.nicescroll.min.js",
        "assets/js/jquery.flexslider.min.js",
        "assets/js/jquery.validate.min.js",
        "http://maps.googleapis.com/maps/api/js?sensor=false",
        "assets/js/gmap-settings.js",
        "assets/rs-plugin/js/jquery.themepunch.tools.min.js",
        "assets/rs-plugin/js/jquery.themepunch.revolution.min.js",
        "assets/js/script.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
