<?php

namespace app\web\theme\widgets\Footer;

use app\web\theme\models\WidgetConfigurationModel;

class ConfigurationModel extends WidgetConfigurationModel
{
    public $rootNavigationId = 1;


    /**
     * @inheritdoc
     */
    public function thisRules()
    {
        return [
            [
                [
                    'rootNavigationId',
                ],
                'integer',
            ],
            [
                [
                    'rootNavigationId',
                ],
                'filter',
                'filter' => 'intval',
            ],
        ];
    }
}