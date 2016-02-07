<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tmp_request".
 *
 * @property integer $id
 * @property string $originator_name
 * @property string $nature_job
 * @property string $date
 * @property string $description
 */
class TmpRequest extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tmp_request';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['originator_name', 'nature_job', 'date', 'description'], 'required'],
            [['date'], 'safe'],
            [['originator_name', 'nature_job', 'description'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'originator_name' => Yii::t('app', 'Originator Name'),
            'nature_job' => Yii::t('app', 'Nature Job'),
            'date' => Yii::t('app', 'Date'),
            'description' => Yii::t('app', 'Description'),
        ];
    }
}
