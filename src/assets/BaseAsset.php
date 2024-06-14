<?php

namespace kenjebaev\adminlte4\assets;

use yii\web\AssetBundle;

class BaseAsset extends AssetBundle
{
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
        'yii\bootstrap4\BootstrapPluginAsset'
    ];
}
