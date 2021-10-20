<?php

namespace bestyii\packery;

use Yii;
use yii\web\AssetBundle;

class DraggabillyAsset extends AssetBundle
{
    public $sourcePath = '@bower/draggabilly/dist';
    public $css = [
    ];

    public $js = [
        YII_ENV_DEV ? 'draggabilly.pkgd.js' : 'draggabilly.pkgd.min.js',
    ];

    public $depends = [
    ];

}
