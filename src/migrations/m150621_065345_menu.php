<?php

use yii\db\Schema;
use yii\db\Migration;

class m150621_065345_menu extends Migration
{
    public function up()
    {
        $this->createTable('{{%menu}}', [
            'id' => Schema::TYPE_PK,
            'tree' => Schema::TYPE_INTEGER,
            'lft' => Schema::TYPE_INTEGER . ' NOT NULL',
            'rgt' => Schema::TYPE_INTEGER . ' NOT NULL',
            'depth' => Schema::TYPE_INTEGER . ' NOT NULL',
            'label' => Schema::TYPE_STRING . ' NOT NULL',
            'icon' => Schema::TYPE_STRING,
            'url' => Schema::TYPE_STRING,
            'url_params' => Schema::TYPE_STRING,
            'target' => Schema::TYPE_STRING,
            'access_role' => Schema::TYPE_STRING,
            'enabled' => Schema::TYPE_STRING . ' NOT NULL',
        ]);

        /**
         * TODO keys
         * KEY `menu_item_root` (`root`),
         * KEY `menu_item_lft` (`lft`),
         * KEY `menu_item_rgt` (`rgt`),
         * KEY `menu_item_level` (`level`)
         */
    }

    public function down()
    {
        $this->dropTable('{{%menu}}');
    }
}
