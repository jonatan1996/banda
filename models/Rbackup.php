<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rbackup".
 *
 * @property int $id
 * @property string $tec
 * @property string $responsable
 * @property string $instructor
 */
class Rbackup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rbackup';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'default', 'value' => null],
            [['id'], 'integer'],
            [['tec', 'responsable', 'instructor'], 'string'],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'tec' => Yii::t('app', 'Tec'),
            'responsable' => Yii::t('app', 'Responsable'),
            'instructor' => Yii::t('app', 'Instructor'),
        ];
    }
}
