<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Post */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Posts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => (string)$model->_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => (string)$model->_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            '_id',
            'name',
            'content',
            [
                'class'=>'yii\grid\DataColumn',
                'attribute'=>'createTime',
                'value'=>strftime('%Y-%m-%d %H:%I:%S', $model->createTime->sec)
            ],
            [
                'class'=>'yii\grid\DataColumn',
                'attribute'=>'updateTime',
                'value'=>strftime('%Y-%m-%d %H:%I:%S', $model->updateTime->sec)
            ]
        ],
    ]) ?>

</div>
