<?php
/** @var null|\yii\base\Model $configurationModel */
/** @var \app\web\theme\module\models\ThemeWidgets $widget */
/** @var boolean $isAjax */
/** @var \yii\web\View $this */
/** @var \app\web\theme\module\models\ThemeActiveWidgets $model */
/** @var \kartik\widgets\ActiveForm $form */

?>
<?= $form->field(
    $configurationModel,
    'rootCategoryId'
) ?>
<?= $form->field(
    $configurationModel,
    'categoryGroupId'
) ?>

<?= $form->field(
    $configurationModel,
    'type'
)->dropDownList(
    [
        'plain' => Yii::t('app', 'Plain'),
        'tree' => Yii::t('app', 'Tree')
    ]
) ?>
<?= $form->field(
    $configurationModel,
    'activeClass'
) ?>
<?= $form->field(
    $configurationModel,
    'activateParents'
)->checkbox() ?>
