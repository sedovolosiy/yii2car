<?php

use yii\db\Schema;
use yii\db\Migration;

class m160302_083047_create_articles_table extends Migration
{
    public function up()
    {
        $this->createTable('articles_table', [
            'id' => $this->primaryKey(),
            'articles_title' => Schema::TYPE_STRING . '(255) NOT NULL',
            'articles_date' => Schema::TYPE_DATE,
            'articles_img' => Schema::TYPE_STRING . '(255) NOT NULL',
            'articles_short_description' => Schema::TYPE_TEXT,
            'articles_description' => Schema::TYPE_TEXT,
            'articles_category_id' => Schema::TYPE_INTEGER,
        ]);
    }

    public function down()
    {
        $this->dropTable('articles_table');
    }
}
