<?php

namespace Bakkaya1997\kullanici\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class UserAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

