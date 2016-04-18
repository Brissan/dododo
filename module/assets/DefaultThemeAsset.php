<?php

namespace app\web\theme\module\assets;

use yii\web\AssetBundle;

/**
 * Default DotPlant2 asset bundle for default theme based on Bootstrap 3.
 * You can use your own, but don't forget to include CMS js and css files.
 *
 * @package app\web\theme\module\assets
 */
class DefaultThemeAsset extends AssetBundle
{

    public $sourcePath = '@app/web/theme/module/assets/theme';
    public $css = [
        //'css/default-theme.css'
    ];
    public $js = [

    ];
    public $depends = [
        'app\assets\AppAsset',
        'app\web\theme\module\assets\BootstrapHoverDropdown',
    ];
}
