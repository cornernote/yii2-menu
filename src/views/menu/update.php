<?php

/**
 * @var yii\web\View $this
 * @var cornernote\menu\models\Menu $model
 */

$this->title = Yii::t('app', 'Update') . ' ' . Yii::t('app', 'Menu') . ' ' . $model->label;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Menus'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->label, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="menu-update">

    <?= $this->render('_menu', compact('model')); ?>

    <?php echo $this->render('_form', [
        'model' => $model,
    ]); ?>

</div>
