<?php

namespace app\helpers;

use app\models\City;
use yii\helpers\ArrayHelper;

class CityHelper
{
    public static function getAvailableCity()
    {
        return ArrayHelper::map(City::find()->all(),'id','name');
    }
}