<?php

namespace app\web\theme\module\widgets\FilterSets;

use app\web\theme\module\models\WidgetConfigurationModel;

class ConfigurationModel extends WidgetConfigurationModel
{
    public $viewFile = 'filter-sets';
    public $hideEmpty = true;
    public $usePjax = true;
    public $useNewFilter = false;

    /**
     * @inheritdoc
     */
    public function thisRules()
    {
        return [
            ['viewFile', 'string'],
            [['hideEmpty', 'usePjax', 'useNewFilter'], 'filter', 'filter' => 'boolval'],
        ];
    }
}
