<?php

use yii\helpers\Html;
use yii\helpers\Url;
use kartik\icons\Icon;
/** @var app\components\WebView $this */
/** @var bool $useFontAwesome */
/** @var \app\web\theme\module\Module $theme */
/** @var integer $rootNavigationId */
?>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 footer">
                <?=
                    \app\widgets\navigation\NavigationWidget::widget([
                        'rootId' => $rootNavigationId,
                    ])
                ?>
            </div>
        </div>
    </div>
</footer>
