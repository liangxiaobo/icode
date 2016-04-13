<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CcontentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Code Contents';
$this->params['breadcrumbs'][] = $this->title;
// echo time();
?>
<div class="code-content-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            [
                'attribute' => 'code_type',
                'label' => '所属',
                'value' => function ($model){
                    return $model->codeType->name;
                }
            ],
            [
                'attribute' => 'title',
                'label' => '标题',
                // 'type' => 'html',
                'format' => 'raw',
                'value' => function ($model){
                    return Html::a($model->title, Url::toRoute(['/ccontent/view', 'id' => $model->id]));
                }
            ],
            'create_time',
            'modify_time',
            ['class' => 'yii\grid\ActionColumn'],
            //'content:ntext',
        ],
    ]); ?>
</div>
