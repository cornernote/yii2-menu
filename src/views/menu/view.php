<?php

use cornernote\menu\models\Menu;
use slatiusa\nestable\Nestable;


/**
 * @var yii\web\View $this
 */

$this->title = Yii::t('app', 'Menu') . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Menus'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-view">

    <?= $this->render('_menu', compact('model')); ?>

</div>
