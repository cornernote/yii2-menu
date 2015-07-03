<?php

namespace cornernote\menu\models;

use cornernote\menu\Module;
use cornernote\returnurl\ReturnUrl;
use creocoder\nestedsets\NestedSetsBehavior;
use kartik\tree\models\Tree;
use slatiusa\nestable\NestableBehavior;
use Yii;
use yii\helpers\Html;

/**
 * This is the model class for table "menu".
 *
 * @property string $url
 *
 * @mixin NestedSetsBehavior
 */
class Menu extends Tree
{
    public static function tableName()
    {
        return Module::getInstance()->tableMap['menu'];
    }

//    public function behaviors()
//    {
//        return [
//            'tree' => [
//                'class' => NestableBehavior::className(),
//                'treeAttribute' => 'tree',
//            ],
//        ];
//    }

    /**
     * @inheritdoc
     */
//    public function rules()
//    {
//        $rules = parent::rules();
//        $rules[] = [['url'], 'string', 'max' => 255];
//        return $rules;
////        return [
////            [['label'], 'required'],
////            [['label', 'icon', 'url', 'options', 'url_options', 'link_options'], 'string', 'max' => 255],
////            [['enabled'], 'number'],
////        ];
//    }

//    public function transactions()
//    {
//        return [
//            self::SCENARIO_DEFAULT => self::OP_ALL,
//        ];
//    }
//
//    public static function find()
//    {
//        return new MenuQuery(get_called_class());
//    }
//
//    public function getNestableLabel()
//    {
//        return implode(' ', [
//            Html::a('<i class="fa fa-eye"></i>', ['menu/view', 'id' => $this->id, 'ru' => ReturnUrl::getToken()]),
//            Html::a('<i class="fa fa-pencil"></i>', ['menu/update', 'id' => $this->id, 'ru' => ReturnUrl::getToken()], ['class' => 'modal-remote']),
//            Html::a('<i class="fa fa-plus"></i>', ['menu/create', 'top_id' => $this->id, 'ru' => ReturnUrl::getToken()], ['class' => 'modal-remote']),
//            Html::a('<i class="fa fa-trash"></i>', ['menu/delete', 'id' => $this->id, 'ru' => ReturnUrl::getToken()], [
//                'data-confirm' => '' . Yii::t('app', 'Are you sure to delete this menu?') . '',
//                'data-method' => 'post',
//            ]),
//            '<small>[id:' . $this->id . ']</small>',
//            $this->label,
//        ]);
//    }
}
