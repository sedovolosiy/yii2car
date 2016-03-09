<?php

use yii\db\Schema;
use yii\db\Migration;

class m160302_080930_create_categories_table extends Migration
{
    public function up()
    {
        $this->createTable('categories_table', [
            'id' => $this->primaryKey(),
            'category_name' => Schema::TYPE_STRING . '(255) NOT NULL',
        ]);
    }

    public function down()
    {
        $this->dropTable('categories_table');
    }
}
