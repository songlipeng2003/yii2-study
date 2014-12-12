<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%blog}}".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 */
class Blog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%blog}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['content'], 'string'],
            [['title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', '编号'),
            'title' => Yii::t('app', '标题'),
            'content' => Yii::t('app', '内容'),
        ];
    }
}
