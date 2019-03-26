<?php

namespace app\assets;

use yii\web\AssetBundle;
use yii\web\View;

class MyAsset extends AssetBundle
{
    public $basePath = '@app/themes/forCarTable';
    public $baseUrl = '@web/themes/forCarTable';
    public $css = [
        'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600',
        'https://fonts.googleapis.com/css?family=Nunito:200,300,400',
        'css/animate.css',
        'css/icomoon.css',
        'css/bootstrap.css',
        'css/magnific-popup.css',
        'css/owl.carousel.min.css',
        'css/owl.theme.default.min.css',
        'css/style.css',
    ];
    public $js = [
        'js/jquery.min.js',
        'js/jquery.easing.1.3.js',
        'js/bootstrap.min.js',
        'js/jquery.waypoints.min.js',
        'js/jquery.stellar.min.js',
        'js/jquery.mb.YTPlayer.min.js',
        'js/owl.carousel.min.js',
        'js/jquery.magnific-popup.min.js',
        'js/magnific-popup-options.js',
        'js/jquery.countTo.js',
        'js/main.js',
    ];
}
