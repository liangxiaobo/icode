<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "code_content".
 *
 * @property integer $id
 * @property integer $code_type
 * @property string $title
 * @property string $content
 * @property integer $user_id
 * @property string $create_time
 * @property string $modify_time
 */
class CodeContent extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'code_content';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code_type', 'user_id'], 'integer'],
            [['content'], 'string'],
            [['create_time', 'modify_time'], 'safe'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code_type' => 'Code Type',
            'title' => 'Title',
            'content' => 'Content',
            'user_id' => 'User ID',
            'create_time' => 'Create Time',
            'modify_time' => 'Modify Time',
        ];
    }
}
