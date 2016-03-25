<?php

use yii\db\Migration;

class m160324_181503_drop_user_table extends Migration
{
    public function up()
    {
        $this->dropTable('user');
    }

    public function down()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey()
        ]);
    }
}
