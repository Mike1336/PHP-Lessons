<?php

namespace app\assets;

use yii\web\AssetBundle;

class TableAsset extends AssetBundle
{
    public $basePath = '@app/themes/tables';
    public $baseUrl = '@web/themes/tables';
    public $css = [
        'css/main.css',
        'css/util.css',
    ];
    public $js = [
        'js/main.js',
    ];
}
