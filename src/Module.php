<?php

namespace cornernote\menu;

/**
 * Menu Module
 * @package cornernote\menu
 */
class Module extends \yii\base\Module
{
    /**
     * @var array
     */
    public $tableMap = [
        'menu' => 'menu',
    ];

    /**
     * @var string
     */
    public $controllerNamespace = 'cornernote\menu\controllers';

    /**
     *
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
