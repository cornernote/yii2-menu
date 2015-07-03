<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use cornernote\returnurl\ReturnUrl;

/**
 * @var yii\web\View $this
 * @var cornernote\menu\models\Menu $model
 * @var yii\bootstrap\ActiveForm $form
 */

?>

<div class="menu-form">

    <?php $form = ActiveForm::begin([
        'id' => 'Menu',
        'enableClientValidation' => false,
        'layout' => 'horizontal',
    ]); ?>

    <?= Html::hiddenInput('ru', ReturnUrl::getRequestToken()); ?>

    <?= $form->errorSummary($model); ?>
    <?= $form->field($model, 'label')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'icon')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'options')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'url_options')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'link_options')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'access_role')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'enabled')->checkbox() ?>

    <div class="form-group">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <?= Html::submitButton('<span class="fa fa-check"></span> ' . ($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Save')), [
                'id' => 'save-' . $model->formName(),
                'class' => 'btn btn-success'
            ]); ?>
        </div>

    </div>

    <?php ActiveForm::end(); ?>

</div>
