<?php

namespace app\web\theme\module\widgets\ContentBlock;

use app\web\theme\module\models\WidgetConfigurationModel;

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