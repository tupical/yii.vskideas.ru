<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Airports';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="airport-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Airport', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

<?php
print_r(\Yii::$app->user->can('update'));
?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name:text:Название',
            [
                'label' => 'Город',
                'format' => 'raw',
                'value' => function($data){
                    return Html::a(
                        $data->city->name,
                        'city/'.$data->city->id,
                        [
                            'title' => 'Смелей вперед!',
                            'target' => '_blank'
                        ]
                    );
                }
            ],
            'iata',
            'icao',

            [
                'class' => 'yii\grid\ActionColumn',
                'visibleButtons' => [
                    'update' => \Yii::$app->user->can('update'),
                    'delete' => \Yii::$app->user->can('delete'),
                ]
            ],
        ],
        
    ]); ?>


</div>