<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "provider".
 *
 * @property int $id
 * @property string $name
 * @property string $site
 * @property double $rating
 *
 * @property Car[] $cars
 */
class Provider extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'provider';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['rating'], 'required'],
            [['rating'], 'number'],
            [['name', 'site'], 'string', 'max' => 255],
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
            'site' => 'Site',
            'rating' => 'Rating',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCars()
    {
        return $this->hasMany(Car::className(), ['provider_id' => 'id']);
    }
}
