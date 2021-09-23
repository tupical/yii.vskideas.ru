<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aircraft".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 *
 * @property Plane[] $planes
 */
class Aircraft extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aircraft';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description'], 'required'],
            [['description'], 'string'],
            [['name'], 'string', 'max' => 255],
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
            'description' => 'Description',
        ];
    }

    /**
     * Gets query for [[Planes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPlanes()
    {
        return $this->hasMany(Plane::class, ['aircraft_id' => 'id']);
    }
}
