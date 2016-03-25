<?php

use yii\db\Schema;
use yii\db\Migration;

class m160309_132705_create_user extends Migration
{
    public function up()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'username' => Schema::TYPE_STRING . '(255) NOT NULL',
            'password' => Schema::TYPE_STRING . '(32) NOT NULL',
        ]);
    }

    public function down()
    {
        $this->dropTable('user');
    }
}
