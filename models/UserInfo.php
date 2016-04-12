<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_info".
 *
 * @property integer $id
 * @property string $name
 * @property string $phone
 * @property string $password
 * @property string $source
 * @property string $open_id
 * @property string $create_time
 * @property string $modity_time
 */
class UserInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['create_time', 'modity_time'], 'safe'],
            [['name'], 'string', 'max' => 50],
            [['phone'], 'string', 'max' => 15],
            [['password', 'source'], 'string', 'max' => 20],
            [['open_id'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'phone' => 'Phone',
            'password' => 'Password',
            'source' => 'Source',
            'open_id' => 'Open ID',
            'create_time' => 'Create Time',
            'modity_time' => 'Modity Time',
        ];
    }
}
