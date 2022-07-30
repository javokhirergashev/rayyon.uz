<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "plugins/libs/spectrum-colorpicker2/spectrum.min.css",
        "plugins/libs/flatpickr/flatpickr.min.css",
        "plugins/libs/clockpicker/bootstrap-clockpicker.min.css",
        "assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css",
        "assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css",
        "plugins/assets/images/favicon.ico",
        "plugins/libs/dropzone/min/dropzone.min.css",
        "plugins/libs/dropify/css/dropify.min.css",
        "plugins/css/app.min.css",
        "plugins/css/icons.min.css",
        "plugins/libs/mohithg-switchery/switchery.min.css",
        "plugins/libs/multiselect/css/multi-select.css",
        "plugins/libs/select2/css/select2.min.css",
        "plugins/libs/selectize/css/selectize.bootstrap3.css",
        "plugins/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css",
		"plugins/css/icons.min.css",

    ];
    public $js = [

//        "plugins/libs/jquery/jquery.min.js",
//        "plugins/libs/bootstrap/js/bootstrap.bundle.min.js",

        "plugins/libs/jquery/jquery.min.js",
        "plugins/libs/bootstrap/js/bootstrap.bundle.min.js",
        "plugins/libs/flatpickr/flatpickr.min.js",
        "plugins/libs/spectrum-colorpicker2/spectrum.min.js",
        "plugins/libs/clockpicker/bootstrap-clockpicker.min.js",
        "plugins/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js",
        "plugins/js/pages/form-pickers.init.js",
        "plugins/libs/simplebar/simplebar.min.js",
        "plugins/libs/node-waves/waves.min.js",
        "plugins/libs/waypoints/lib/jquery.waypoints.min.js",
        "plugins/libs/jquery.counterup/jquery.counterup.min.js",
        "plugins/libs/feather-icons/feather.min.js",
        "plugins/libs/dropzone/min/dropzone.min.js",
        "plugins/libs/dropify/js/dropify.min.js",
        "plugins/js/pages/form-fileuploads.init.js",
        "plugins/libs/jquery-knob/jquery.knob.min.js",
        "plugins/libs/morris.js06/morris.min.js",
        "plugins/libs/raphael/raphael.min.js",
        "plugins/js/pages/dashboard.init.js",
        "plugins/libs/selectize/js/standalone/selectize.min.js",
        "plugins/libs/mohithg-switchery/switchery.min.js",
        "plugins/libs/multiselect/js/jquery.multi-select.js",
        "plugins/libs/select2/js/select2.min.js",
        "plugins/libs/jquery-mockjax/jquery.mockjax.min.js",

        "plugins/libs/devbridge-autocomplete/jquery.autocomplete.min.js",
        "plugins/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js",
        "plugins/libs/bootstrap-maxlength/bootstrap-maxlength.min.js",
        "plugins/js/app.min.js",
        "plugins/ckeditor/ckeditor.js",

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
