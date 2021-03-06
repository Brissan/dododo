<?php
/** @var null|\yii\base\Model $configurationModel */
/** @var \app\web\theme\module\models\ThemeWidgets $widget */
/** @var boolean $isAjax */
/** @var \yii\web\View $this */
/** @var \app\web\theme\module\models\ThemeActiveWidgets $model */
/** @var \kartik\widgets\ActiveForm $form */

?>
<?= $form->field($configurationModel, 'rootNavigationId') ?>
<?= $form->field($configurationModel, 'depth') ?>
<?= $form->field($configurationModel, 'linkTemplate') ?>
<?= $form->field($configurationModel, 'submenuTemplate') ?>
<?= $form->field($configurationModel, 'viewFile') ?>
<?= $form->field($configurationModel, 'options')->widget(\devgroup\jsoneditor\Jsoneditor::className()) ?>
