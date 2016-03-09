<?php

use yii\db\Schema;
use yii\db\Migration;

class m160302_081857_create_menu_table extends Migration
{
    public function up()
    {
        $this->createTable('menu_table', [
            'id' => $this->primaryKey(),
            'menu_name' => Schema::TYPE_STRING . '(255) NOT NULL',
            'menu_text' => Schema::TYPE_TEXT,
        ]);
    }

    public function down()
    {
        $this->dropTable('menu_table');
    }
}
