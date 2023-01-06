<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tickets".
 *
 * @property int $id
 * @property int $row
 * @property int $place
 * @property int $price
 * @property string $customer
 * @property string $time
 * @property string $movie
 */
class Tickets extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tickets';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['row', 'place', 'price', 'customer', 'time', 'movie'], 'required'],
            [['row', 'place', 'price'], 'integer'],
            [['customer', 'movie'], 'string', 'max' => 255],
            [['time'], 'string', 'max' => 11],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'row' => 'Row',
            'place' => 'Place',
            'price' => 'Price',
            'customer' => 'Customer',
            'time' => 'Time',
            'movie' => 'Movie',
        ];
    }
}
