<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "plane".
 *
 * @property int $id
 * @property string $name
 * @property int $age
 * @property int $serial
 * @property int $aircraft_id
 * @property int $airport_id
 * @property int $airline_id
 *
 * @property Aircraft $aircraft
 * @property Airline $airline
 * @property Airport $airport
 */
class Plane extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'plane';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'age', 'serial', 'aircraft_id', 'airport_id', 'airline_id'], 'required'],
            [['aircraft_id', 'airport_id', 'airline_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['age'], 'safe'],
            [['aircraft_id'], 'exist', 'skipOnError' => true, 'targetClass' => Aircraft::className(), 'targetAttribute' => ['aircraft_id' => 'id']],
            [['airline_id'], 'exist', 'skipOnError' => true, 'targetClass' => Airline::className(), 'targetAttribute' => ['airline_id' => 'id']],
            [['airport_id'], 'exist', 'skipOnError' => true, 'targetClass' => Airport::className(), 'targetAttribute' => ['airport_id' => 'id']],
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
            'age' => 'Age',
            'serial' => 'Serial',
            'aircraft_id' => 'Aircraft ID',
            'airport_id' => 'Airport ID',
            'airline_id' => 'Airline ID',
        ];
    }

    /**
     * Gets query for [[Aircraft]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAircraft()
    {
        return $this->hasOne(Aircraft::className(), ['id' => 'aircraft_id']);
    }

    /**
     * Gets query for [[Airline]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAirline()
    {
        return $this->hasOne(Airline::className(), ['id' => 'airline_id']);
    }

    /**
     * Gets query for [[Airport]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAirport()
    {
        return $this->hasOne(Airport::className(), ['id' => 'airport_id']);
    }
}
