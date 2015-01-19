<?php

class m150119_072949_create_post extends \yii\mongodb\Migration
{
    public function up()
    {
        $this->createCollection('post', array(
            'name'=>'String',
            'content'=>'String',
            'createTime'=>'Timestamp',
            'updateTime'=>'Timestamp'
        ));

    }

    public function down()
    {
        $this->dropCollection('post');

        return true;
    }
}
