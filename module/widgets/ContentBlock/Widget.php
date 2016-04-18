<?php


namespace app\web\theme\widgets\ContentBlock;

use app\web\theme\components\BaseWidget;
use app\modules\core\helpers\ContentBlockHelper;

class Widget extends BaseWidget
{
    public $key = '';
    /**
     * Actual run function for all widget classes extending BaseWidget
     *
     * @return mixed
     */
    public function widgetRun()
    {
        $contentBlock = ContentBlockHelper::getChunk($this->key);
        if ($contentBlock === null) {
            return '';
        }

        return $this->render(
            'content-block',
            [
                'content' => $contentBlock,
            ]
        );
    }
}