<?php

namespace cornernote\menu;

/**
 * Menu Module
 * @package cornernote\menu
 */
class Module extends \yii\base\Module
{

    /**
     * @inheritdoc
     */
    public $layout = 'main';

    /**
     * @var string
     */
    public $tableMap = [
        'menu' => 'menu',
    ];

    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'cornernote\menu\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
