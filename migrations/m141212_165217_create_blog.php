<?php

use yii\db\Schema;
use yii\db\Migration;

class m141212_165217_create_blog extends Migration
{
    public function up()
    {
        $this->createTable('blog', array(
            'id'=>'pk',
            'title'=>Schema::TYPE_STRING . ' NOT NULL',
            'content'=>Schema::TYPE_TEXT,
        ));
    }

    public function down()
    {
        $this->dropTable('blog');

        return true;
    }
}
