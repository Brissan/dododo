<?php

namespace app\web\theme\module\widgets\Footer;

use app\web\theme\module\models\WidgetConfigurationModel;

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