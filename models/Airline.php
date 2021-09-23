<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "airline".
 *
 * @property int $id
 * @property string $name
 * @property string $country_code
 * @property string $full_name
 *
 * @property Country $countryCode
 * @property Plane[] $planes
 */
class Airline extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'airline';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'country_code', 'full_name'], 'required'],
            [['name', 'full_name'], 'string', 'max' => 255],
            [['country_code'], 'string', 'max' => 2],
            [['country_code'], 'exist', 'skipOnError' => true, 'targetClass' => Country::class, 'targetAttribute' => ['country_code' => 'code']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'country_code' => Yii::t('app', 'Country Code'),
            'full_name' => Yii::t('app', 'Full Name'),
            'planes_cnt' => Yii::t('app', 'Planes count'),
        ];
    }

    

    /**
     * Gets query for [[CountryCode]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCountryCode()
    {
        return $this->hasOne(Country::class, ['code' => 'country_code']);
    }

    /**
     * Gets query for [[Planes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPlanes()
    {
        return $this->hasMany(Plane::class, ['airline_id' => 'id']);
    }

    public function getPlanesCount() 
    {
        return $this->getPlanes()->count();

    }
}
