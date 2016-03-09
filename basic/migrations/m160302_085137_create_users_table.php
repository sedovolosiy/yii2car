<?php

use yii\db\Schema;
use yii\db\Migration;

class m160302_085137_create_users_table extends Migration
{
    public function up()
    {
        $this->createTable('users_table', [
            'id' => $this->primaryKey(),
            'users_login' => Schema::TYPE_STRING . '(255) NOT NULL',
            'users_password' => Schema::TYPE_STRING . '(32) NOT NULL',
        ]);
    }

    public function down()
    {
        $this->dropTable('users_table');
    }
}
