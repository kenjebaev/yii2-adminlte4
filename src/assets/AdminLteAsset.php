<?php
namespace kenjebaev\adminlte4\assets;

use yii\web\AssetBundle;

class AdminLteAsset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/dist';

    public $css = [
        'css/adminlte.min.css'
    ];

    public $js = [
        'js/adminlte.min.js'
    ];

    public $depends = [
        'kenjebaev\adminlte4\assets\BaseAsset',
        'kenjebaev\adminlte4\assets\PluginAsset'
    ];
}
