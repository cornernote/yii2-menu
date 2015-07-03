<?php

/**
 * @var yii\web\View $this
 * @var cornernote\menu\models\Menu $model
 */

$this->title = Yii::t('app', 'Menu') . ' ' . $model->label;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Menus'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-view">

    <?= $this->render('_menu', compact('model')); ?>

</div>
