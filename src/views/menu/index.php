<?php

use cornernote\menu\models\Menu;
use kartik\tree\TreeView;
use yii\helpers\Url;

/**
 * @var yii\web\View $this
 */

$this->title = Yii::t('app', 'Tree');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Menu'), 'url' => ['default/index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="menu-index">
    <div class="menu-default-index">
        <?php
        echo TreeView::widget([
            'query' => Menu::find()->addOrderBy('root, lft'),
            'headingOptions' => ['label' => 'Menus'],
            'fontAwesome' => false,
            'isAdmin' => true,
            'displayValue' => 1,
            'softDelete' => true,
            'cacheSettings' => [
                'enableCache' => true,
            ],
            'nodeActions' => [
                'save' => Url::to(['/treemanager/node/save']),
                'manage' => Url::to(['/treemanager/node/manage']),
                'remove' => Url::to(['/treemanager/node/remove']),
                'move' => Url::to(['/treemanager/node/move']),
            ],
        ]);
        ?>
    </div>
</div>