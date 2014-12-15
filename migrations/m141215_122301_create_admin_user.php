<?php

use yii\db\Schema;
use yii\db\Migration;

class m141215_122301_create_admin_user extends Migration
{
    public function up()
    {
        $this->createTable('admin_user', array(
            'id'=>'pk',
            'username'=>Schema::TYPE_STRING . ' NOT NULL',
            'password'=>Schema::TYPE_STRING . ' NOT NULL',
        ));
    }

    public function down()
    {
        $this->dropTable('admin_user');

        return true;
    }
}
