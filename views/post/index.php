<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Posts');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Post',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            '_id',
            'name',
            'content',
            [
                'class'=>'yii\grid\DataColumn',
                'attribute'=>'createTime',
                'value'=>function($model){
                    return strftime('%Y-%m-%d %H:%I:%S', $model->createTime->sec);
                }
            ],
            [
                'class'=>'yii\grid\DataColumn',
                'attribute'=>'updateTime',
                'value'=>function($model){
                    return strftime('%Y-%m-%d %H:%I:%S', $model->updateTime->sec);
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
