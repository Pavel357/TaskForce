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
        'css/autoComplete.css',
        'css/dropzone.css',
        'css/style.css',
        'css/normalize.css',
    ];
    public $js = [
        'js/messenger.js',
        'js/vue.js',
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
