<?php

namespace ipoz\yii2\examplewidget;

use yii\web\AssetBundle;

class ExampleAsset extends AssetBundle
{
    public $css = [
        'css/example.css'
    ];

    public $js = [
        'js/example.js'
    ];

    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets';
        parent::init();
    }

}