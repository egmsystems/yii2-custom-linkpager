<?php
namespace frontend\widgets\demopager;

use yii\web\AssetBundle;

class DemoPagerAsset extends AssetBundle
{
    public $js = [
        'js/demopager.js'
    ];

    public $css = [
        /* You can add extra CSS file here if you need */
        // 'css/demopager.css'
    ];

    public $depends = [
        // we will use jQuery
        'yii\web\JqueryAsset'
    ];

    public function init()
    {
        $this->sourcePath = __DIR__ . "/assets";
        parent::init();
    }
}
