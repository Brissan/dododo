<?php

namespace app\web\theme\widgets\LastViewedProducts;

use app\web\theme\models\WidgetConfigurationModel;

class ConfigurationModel extends WidgetConfigurationModel
{
    public $elementNumber = 3;
    public $title = "Recently Viewed Products";
    public $viewFileWidget = 'lastviewedproducts\main-view';
    public $widgetClass = '';


    /**
     * @inheritdoc
     */
    public function thisRules()
    {
        return [
            [
                [
                    'elementNumber',
                ],
                'integer',
            ],
            [
                [
                    'title',
                    'viewFileWidget',
                    'widgetClass'
                ],
                'safe'
            ]
        ];
    }
}