<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Freelancers".
 *
 * @property integer $id
 * @property string $name
 * @property string $lastname
 * @property string $spec
 * @property string $login
 * @property string $date
 * @property string $status
 */
class Freelancers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Freelancers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'lastname', 'spec', 'status'], 'required'],
            [['date'], 'safe'],
            [['name', 'lastname', 'spec',  'status'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'lastname' => 'Фамилия',
            'spec' => 'Специализация',
            'login' => 'Login',
            'date' => 'Date',
            'status' => 'Status',
        ];
    }
}
