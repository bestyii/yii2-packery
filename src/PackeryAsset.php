<?php

namespace bestyii\packery;

use Yii;
use yii\web\AssetBundle;

class PackeryAsset extends AssetBundle
{
    public $sourcePath = '@bower/packery/dist';
    public $css = [
    ];

    public $js = [
        YII_ENV_DEV ? 'packery.pkgd.js' : 'packery.pkgd.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'bestyii\packery\DraggabillyAsset'
    ];

}
