<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VideosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Videos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="videos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Videos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'title',
            'description',
            [
                'attribute' => 'image',
                'format' => 'raw',
                'value' => function ($model) {
                    return "<a href=" . Url::to(['/videos/view', "id" => $model->id]) .
                        "><img width='300px' src=\"{$model->image}\"></img></a>";
                },
            ],
            // 'video_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
