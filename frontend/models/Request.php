<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "request".
 *
 * @property integer $id
 * @property string $nature
 * @property string $date
 * @property string $description
 */
class Request extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'request';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nature', 'date', 'description'], 'required'],
            [['date'], 'safe'],
            [['nature', 'description'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nature' => Yii::t('app', 'Nature'),
            'date' => Yii::t('app', 'Date'),
            'description' => Yii::t('app', 'Description'),
        ];
    }
}
