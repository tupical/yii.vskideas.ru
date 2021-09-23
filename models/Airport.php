<?php

namespace app\models;
use yii\db\ActiveRecord;
use yii\db\ActiveQuery;

class Airport extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'airport';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'city_id', 'iata', 'icao'], 'required'],
            [['city_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['iata'], 'string', 'max' => 3],
            [['icao'], 'string', 'max' => 4],
            [['icao'], 'unique'],
            [['iata'], 'unique'],
            [['city_id'], 'exist', 'skipOnError' => true, 'targetClass' => City::class, 'targetAttribute' => ['city_id' => 'id']],
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
            'city_id' => 'City ID',
            'iata' => 'Iata',
            'icao' => 'Icao',
        ];
    }

    /**
     * Gets query for [[City]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCity()
    {
        return $this->hasOne(City::class, ['id' => 'city_id']);
    }

    /**
     * Gets query for [[Planes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPlanes()
    {
        return $this->hasMany(Plane::class, ['airport_id' => 'id']);
    }
}
 