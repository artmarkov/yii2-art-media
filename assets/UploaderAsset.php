<?php

namespace artsoft\media\assets;

use yii\web\AssetBundle;

class UploaderAsset extends AssetBundle
{
    public $sourcePath = '@vendor/artsoft/yii2-art-media/assets/source';
    public $css = [
        'css/uploader.css',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
    ];
}
