<?php

namespace app\web\theme;

use app\web\theme\ThemeModule;

/**
 * Default Theme module
 * @package app\web\theme
 */
class Module extends ThemeModule
{
    public $primary_color = '#2980b9';
    public $secondary_color = '#27ae60';
    public $action_color = '#d1404a';
    public $logotypePath = 'http://st-3.dotplant.ru/img/sample-logo.png';
    public $siteName = 'My Awesome DotPlant2 Shop';
    public $primaryEmail = 'noreply@dotplant.ru';

    public $controllerMap = [
        'backend-configuration' => 'app\web\theme\backend\ConfigurationController',
    ];

    /**
     * @return string Returns class name for theme component that should extend app\components\Theme
     */
    public function themeClassName()
    {
        return 'app\web\theme\components\Theme';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'configurableModule' => [
                'class' => 'app\modules\config\behaviors\ConfigurableModuleBehavior',
                'configurationView' => '@app/web/theme/views/configurable/_config',
                'configurableModel' => 'app\web\theme\models\ConfigurationModel',
            ]
        ];
    }
}