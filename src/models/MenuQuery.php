<?php

namespace cornernote\menu\models;

use creocoder\nestedsets\NestedSetsQueryBehavior;
use Yii;
use yii\db\ActiveQuery;

/**
 * This is the model class for table "menu".
 *
 * @mixin NestedSetsQueryBehavior
 */
class MenuQuery extends ActiveQuery
{
    public function behaviors()
    {
        return [
            NestedSetsQueryBehavior::className(),
        ];
    }
}
