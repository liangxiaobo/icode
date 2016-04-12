<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "code_type".
 *
 * @property integer $id
 * @property string $name
 */
class CodeType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'code_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '代码类型',
        ];
    }
}
