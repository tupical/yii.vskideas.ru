<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "airlines".
 *
 * @property int $id
 * @property string $name
 * @property int $country
 * @property string $full_name
 */
class Airline extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'airlines';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'country', 'full_name'], 'required'],
            [['country'], 'integer'],
            [['name', 'full_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'country' => 'Country',
            'full_name' => 'Full Name',
        ];
    }
}
