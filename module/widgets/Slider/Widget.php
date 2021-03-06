<?php

namespace app\web\theme\module\widgets\Slider;


use app\web\theme\module\components\BaseWidget;
use app\slider\SliderWidget;
use yii\helpers\Html;

class Widget extends BaseWidget
{
    public $sliderId = 1;
    public $inContainer = true;
    /**
     * Actual run function for all widget classes extending BaseWidget
     *
     * @return mixed
     */
    public function widgetRun()
    {
        $slider = SliderWidget::widget([
            'slider_id' => $this->sliderId,
        ]);

     
        if ($this->inContainer) {
            $slider = $slider;
        }

        return $slider;
    }
}