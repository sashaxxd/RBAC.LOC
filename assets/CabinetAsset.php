<?php
/**
 * User: noutsasha
 * Date: 15.09.2017
 * Time: 23:50
 */

namespace app\assets;

use yii\web\AssetBundle;


class CabinetAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/cabinet.css',
        'css/font-awesome.min.css',
        'css/frilance.css',
        'css/site.css',
    ];
    public $js = [
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}