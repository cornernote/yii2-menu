<?php

namespace cornernote\menu;

/**
 * Menu Module
 * @package cornernote\menu
 */
class Module extends \kartik\tree\Module
{

    /**
     * @inheritdoc
     */
    public $layout = 'main';

    /**
     * @var array
     */
    public $tableMap = [
        'menu' => 'menu_tree',
    ];

    /**
     * @var string
     */
    public $controllerNamespace = 'cornernote\menu\controllers';


    public function init()
    {
        parent::init();
        \Yii::setAlias('@kvtree', '@vendor/kartik-v/yii2-tree-manager');
//        $this->modules = [
//            'treemanager' => [
//                'class' => '\kartik\tree\Module',
//            ],
//        ];
    }

}
