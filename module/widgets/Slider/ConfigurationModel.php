<?php

namespace app\web\theme\widgets\Slider;

use app\web\theme\models\WidgetConfigurationModel;

class ConfigurationModel extends WidgetConfigurationModel
{
    public $sliderId = 1;
    public $inContainer = true;

    /**
     * @inheritdoc
     */
    public function thisRules()
    {
        return [
            [
                [
                    'sliderId',
                ],
                'integer',
            ],
            [
                [
                    'inContainer',
                ],
                'boolean',
            ],
            [
                [
                    'inContainer',
                ],
                'filter',
                'filter' => 'boolval',
            ],
            [
                [
                    'sliderId',
                ],
                'filter',
                'filter' => 'intval',
            ],
        ];
    }
}