<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\db\Expression;

/**
 * This is the model class for table "feedbacks".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $subject
 * @property string $feedback
 * 
 * 
*/


class FeedbacksForm extends \yii\db\ActiveRecord
{  
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'feedbacks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
        	// name, email, subject and body are required
            [['name', 'email', 'subject', 'feedback'], 'required'],
            [['name'], 'string', 'max' => 30],
            [['email'], 'string', 'max' => 40],
            ['email', 'email'],
            [['subject'], 'string', 'max' => 40],
            [['feedback'], 'string', 'max' => 500],
            [['id'], 'unique'],  
        ];
    }




    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'email' => 'Email',
            'subject' => 'Subject',
            'feedback' => 'Feedback',
            
        ];
    }

}
