<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%organizes}}".
 *
 * @property integer $id
 * @property string $organize
 */
class Organizes extends \backend\backbase\BaseActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%organizes}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['organize'], 'string', 'max' => 60]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'organize' => 'Organize',
        ];
    }
}
