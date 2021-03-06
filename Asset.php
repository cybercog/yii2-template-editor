<?php

namespace mrssoft\template;

use yii\web\AssetBundle;

class Asset extends AssetBundle
{
    //public $basePath = '@vendor/mrssoft/yii2-template-editor/assets';
    public $sourcePath = '@app/extensions/yii2-template-editor/assets';

    public $css = [
        'flaticon.css',
        'style.css',
    ];
    public $js = [
        //'history.js',
        'noty/packaged/jquery.noty.packaged.min.js',
        'functions.js',
        'serialize.js',
        'main.js',
    ];
    public $depends = [
        'yii\jui\JuiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
