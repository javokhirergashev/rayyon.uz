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
        "css/bundle.css",
        "css/hody-icons.css",
        "css/style.css",
        "https://fonts.googleapis.com/css?family=Montserrat:400,700",
        "https://fonts.googleapis.com/css?family=Raleway:300,400,500",
        "https://fonts.googleapis.com/css?family=Quattrocento:400,700",
        "https://fonts.googleapis.com/css?family=Tangerine:400",
    ];
    public $js = [
        "js/jquery.js",
        "js/bundle.js",
        "js/SmoothScroll.js",
        "https://maps.googleapis.com/maps/api/js?key=AIzaSyCNGOsBBZo9vf0Tw4w6aJiilSTFVfQ5GPI",
        "js/main.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
