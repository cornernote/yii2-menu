<?php

use cornernote\menu\models\Menu;
use slatiusa\nestable\Nestable;
use yii\helpers\Html;
use cornernote\returnurl\ReturnUrl;

/**
 * @var yii\web\View $this
 */

$this->title = Yii::t('app', 'Menus');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="menu-index">

    <div class="clearfix">

        <p class="pull-left">
            <?= Html::a('<span class="fa fa-plus"></span> ' . Yii::t('app', 'Create') . ' ' . Yii::t('app', 'Menu'), ['create', 'ru' => ReturnUrl::getToken()], ['class' => 'btn btn-success modal-remote']) ?>
        </p>

    </div>

    <div class="menu-default-index">
        <?= Nestable::widget([
            'query' => Menu::find()->where(['depth' => 0]),
            'modelOptions' => [
                'name' => 'nameAndLinks'
            ],
            'pluginEvents' => [
                'change' => 'function(e) {}',
            ],
            'pluginOptions' => [
                'maxDepth' => 7,
            ],
        ]); ?>
    </div>


</div>