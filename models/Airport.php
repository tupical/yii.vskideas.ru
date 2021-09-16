<?php

namespace app\models;
use yii\db\ActiveRecord;

class Airport extends ActiveRecord
{
    public $id;
    public $name;
    public $address;

    public static function tableName(){
        return "{{%airport}}";
    }
}
 