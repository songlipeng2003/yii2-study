<?php

namespace app\models;

use Yii;

use yii\mongodb\ActiveRecord;

/**
 * This is the model class for collection "post".
 *
 * @property \MongoId|string $_id
 * @property string $name
 * @property string $content
 * @property Timestamp $createTime
 * @property Timestamp $updateTime
 */
class Post extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function collectionName()
    {
        return 'post';
    }

    /**
     * @inheritdoc
     */
    public function attributes()
    {
        return [
            '_id',
            'name',
            'content',
            'createTime',
            'updateTime',
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'content', 'createTime', 'updateTime'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            '_id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'content' => Yii::t('app', 'Content'),
            'createTime' => Yii::t('app', 'Create Time'),
            'updateTime' => Yii::t('app', 'Update Time'),
        ];
    }

    public function beforeSave($insert)
    {
        $now = new \MongoDate(time());
        if (parent::beforeSave($insert)) {
            if($insert){
                $this->createTime = $now;
                $this->updateTime = $now;
            }else{
                $this->updateTime = $now;
            }
            return true;
        } else {
            return false;
        }
    }
}
