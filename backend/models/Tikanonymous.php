<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tikanonymous".
 *
 * @property int $id
 * @property string $customer
 * @property int $row
 * @property int $place
 * @property int $price
 * @property string $time
 * @property string $movie
 */
class Tikanonymous extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tikanonymous';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['customer', 'row', 'place', 'price', 'time', 'movie'], 'required'],
            [['row', 'place', 'price'], 'integer'],
            [['customer', 'time', 'movie'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'customer' => 'Customer',
            'row' => 'Row',
            'place' => 'Place',
            'price' => 'Price',
            'time' => 'Time',
            'movie' => 'Movie',
        ];
    }
}
