<?php

namespace app\models;

use Yii;

/**
 * This is the model class for collection "post".
 *
 * @property \MongoId|string $_id
 * @property string $name
 * @property string $content
 * @property Timestamp $createTime
 * @property Timestamp $updateTime
 */
class Post extends \yii\mongodb\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function collectionName()
    {
        return ['post', 'post'];
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
}
