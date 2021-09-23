<?php

use app\helpers\CityHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Airport */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="airport-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city_id')->label('Город')->dropDownList(CityHelper::getAvailableCity()) ?>

    <?= $form->field($model, 'iata')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'icao')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
