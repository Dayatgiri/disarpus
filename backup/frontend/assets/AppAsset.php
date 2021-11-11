<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/frontend/assets';
    public $css = [
        'css/site.css',
        'css/tab.css',
        'css/carousel.css',
        'css/bootstrap.min.css',
        'css/login.css',
        'css/AdminLTE.css',
        'css/font-awesome.css',
        'css/style.css'
    
        
    ];
    public $js = [
        'js/bootstrap.bundle.min.js',
        'js/main.js'

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
