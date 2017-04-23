<?php

namespace ipoz\yii2\examplewidget;

use yii\base\Widget;

class ExampleWidget extends Widget
{
    public function init()
    {
        parent::init();
        ExampleAsset::register($this->getView());
    }

    public function run()
    {
        return $this->render('example');
    }
}