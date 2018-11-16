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
        'theme/css/bootstrap.min.css',
        'theme/css/ionicons.min.css',
        'theme/css/font-awesome.min.css',
        'theme/css/pe-icon-7-stroke.css',
        'theme/css/plugins.css',
        'theme/css/style.css',
        'theme/css/responsive.css',
    ];
    public $js = [        
        'theme/js/modernizr-2.8.3.min.js',
        'theme/js/jquery.1.12.4.min.js',
        'theme/js/popper.min.js',
        'theme/js/bootstrap.min.js',
        'theme/js/plugins.js',
        'theme/js/main.js',
        'https://maps.googleapis.com/maps/api/js?key=AIzaSyCzcEM8z2_imGO8TMRmJEpDEahvZ7KYY_U',
        'theme/js/gmaps.min.js',
        'theme/js/custom-map.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
