<?php

namespace app\web\theme\widgets\OneRowHeaderWithCart;

use app\web\theme\models\WidgetConfigurationModel;

class ConfigurationModel extends WidgetConfigurationModel
{
    public $collapseOnSmallScreen = true;

    /**
     * @inheritdoc
     */
    public function thisRules()
    {
        return [
            [
                [
                    'collapseOnSmallScreen',
                ],
                'boolean',
            ],
            [
                [
                    'collapseOnSmallScreen',
                ],
                'filter',
                'filter' => 'boolval',
            ],
        ];
    }
}