<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Airport */

$this->title = 'Update Airport: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Airports', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="airport-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'cityList' => $cityList,
    ]) ?>

</div>
