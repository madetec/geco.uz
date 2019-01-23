<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/font-awesome.min.css',
        'css/bootstrap.css',
        'css/screen.css',
        'css/geco.css',
        'rs-plugin/css/settings.css',
        'rs-plugin/css/layers.css',
        'rs-plugin/css/navigation.css',
    ];
    public $js = [
//        "js/jquery.js",
        "js/modernizr.js",
        "js/nouislider.js",
        "rs-plugin/js/jquery.themepunch.tools.min.js",
        "rs-plugin/js/jquery.themepunch.revolution.min.js",

        "rs-plugin/js/extensions/revolution.extension.video.min.js",
        "rs-plugin/js/extensions/revolution.extension.slideanims.min.js",
        "rs-plugin/js/extensions/revolution.extension.actions.min.js",
        "rs-plugin/js/extensions/revolution.extension.layeranimation.min.js",
        "rs-plugin/js/extensions/revolution.extension.kenburn.min.js",
        "rs-plugin/js/extensions/revolution.extension.navigation.min.js",
        "rs-plugin/js/extensions/revolution.extension.migration.min.js",
        "rs-plugin/js/extensions/revolution.extension.parallax.min.js",

        "js/imagesloaded.pkgd.min.js",
        "js/jquery.magnific-popup.min.js",
        "js/isotope.js",
        "js/slick.js",
        "js/options.js",
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
