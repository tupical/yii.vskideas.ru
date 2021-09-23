<?php

namespace app\helpers;

use app\models\Country;
use yii\helpers\ArrayHelper;

class CountryHelper
{
    public static function getAvailableCountries()
    {
        return ArrayHelper::map(Country::find()->all(),'code','name');
    }
}