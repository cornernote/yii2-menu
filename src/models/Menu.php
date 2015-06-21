<?php

namespace cornernote\menu\models;

use cornernote\menu\Module;
use cornernote\returnurl\ReturnUrl;
use creocoder\nestedsets\NestedSetsBehavior;
use slatiusa\nestable\NestableBehavior;
use Yii;
use yii\db\ActiveRecord;
use yii\helpers\Html;

/**
 * This is the model class for table "menu".
 *
 * @property integer $id
 * @property integer $tree
 * @property integer $lft
 * @property integer $rgt
 * @property integer $depth
 * @property string $name
 *
 * @mixin NestedSetsBehavior
 */
class Menu extends ActiveRecord
{
    public static function tableName()
    {
        /** @var Module $module */
        $module = Yii::$app->getModule('menu');
        return $module->tableMap['menu'];
    }

    public function behaviors()
    {
        return [
            'tree' => [
                'class' => NestableBehavior::className(),
                'treeAttribute' => 'tree',
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255]
        ];
    }

    public function transactions()
    {
        return [
            self::SCENARIO_DEFAULT => self::OP_ALL,
        ];
    }

    public static function find()
    {
        return new MenuQuery(get_called_class());
    }

    public function getNameAndLinks()
    {
        $links = [
            Html::a('<i class="fa fa-eye"></i>', ['menu/view', 'id' => $this->id, 'ru' => ReturnUrl::getToken()]),
            Html::a('<i class="fa fa-plus"></i>', ['menu/create', 'top_id' => $this->id, 'ru' => ReturnUrl::getToken()], ['class' => 'modal-remote']),
            Html::a('<i class="fa fa-trash"></i>', ['menu/delete', 'id' => $this->id, 'ru' => ReturnUrl::getToken()], [
                'data-confirm' => '' . Yii::t('app', 'Are you sure to delete this menu?') . '',
                'data-method' => 'post',
            ]),
        ];
        return implode(' ', $links) . ' | ' . $this->name;
    }
}
