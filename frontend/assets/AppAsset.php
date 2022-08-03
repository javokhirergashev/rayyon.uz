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
        "css/plugins.css",
        "css/bootstrap.min.css",
        "css/style.css",
        "css/style-responsive.css",
        "rs-plugin/css/settings.css",
        "http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,400italic,600italic,700italic|Oswald:400,300,700",
    ];
    public $js = [
        "js/scripts-top.js",
        "js/scripts-bottom.js",
        "js/bootstrap.min.js",
        "js/jquery.isotope.min.js",
        "js/jquery.sticky.js",
        "js/jquery.nicescroll.min.js",
        "js/jquery.flexslider.min.js",
        "js/jquery.validate.min.js",
        "http://maps.googleapis.com/maps/api/js?sensor=false",
        "js/gmap-settings.js",
        "rs-plugin/js/jquery.themepunch.tools.min.js",
        "rs-plugin/js/jquery.themepunch.revolution.min.js",
        "js/script.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
