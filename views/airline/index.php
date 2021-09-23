<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Airlines');
$this->params['breadcrumbs'][] = $this->title;


?>
<div class="airline-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Airline'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'country_code',
            'full_name',
            'planes_cnt', // TODO
            [
                'label' => 'Как вывести из запроса хз',
                'value' => function ($model) {
                    return count($model->planes);
                }
              ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
