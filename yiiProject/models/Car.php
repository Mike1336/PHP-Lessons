<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "car".
 *
 * @property int $id
 * @property int $provider_id
 * @property string $name
 * @property int $power
 * @property int $max_speed
 *
 * @property Provider $provider
 */
class Car extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'car';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['provider_id', 'power', 'max_speed'], 'required'],
            [['provider_id', 'power', 'max_speed'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['provider_id'], 'exist', 'skipOnError' => true, 'targetClass' => Provider::className(), 'targetAttribute' => ['provider_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'provider_id' => 'Provider ID',
            'name' => 'Name',
            'power' => 'Power',
            'max_speed' => 'Max Speed',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProvider()
    {
        return $this->hasOne(Provider::className(), ['id' => 'provider_id']);
    }
}
