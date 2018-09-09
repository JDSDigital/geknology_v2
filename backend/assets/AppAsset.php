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
        'https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900',
        'css/icons/icomoon/styles.css',
        'css/bootstrap.min.css',
        'css/core.min.css',
        'css/components.min.css',
        'css/colors.min.css',
        'css/master.css',
        'css/site.css',
    ];
    public $js = [
        'js/plugins/loaders/pace.min.js',
        // 'js/core/libraries/jquery.min.js',
        'js/core/libraries/bootstrap.min.js',
        'js/plugins/loaders/blockui.min.js',
        'js/plugins/ui/prism.min.js',
        'js/plugins/ui/ripple.min.js',
        'js/app.js',
    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
