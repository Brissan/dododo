<?php

namespace app\web\theme\widgets\ContentBlock;

use app\web\theme\models\WidgetConfigurationModel;

class ConfigurationModel extends WidgetConfigurationModel
{
    public $key = '';


    /**
     * @inheritdoc
     */
    public function thisRules()
    {
        return [
            [
                [
                    'key',
                ],
                'required',
            ],
        ];
    }
}