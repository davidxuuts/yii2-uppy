<?php

namespace davidxu\uppy\assets;

use davidxu\base\assets\BaseAppAsset;
use yii\web\AssetBundle;
use Yii;

class UppyAsset extends AssetBundle
{
    public $sourcePath = '@davidxu/uppy';

    public $js = [
        'js/uppy.min.js',
    ];

    public $css = [
        'css/uppy.css',
    ];

    public $depends = [
        BaseAppAsset::class,
    ];
}
