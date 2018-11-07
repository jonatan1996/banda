<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "registro".
 *
 * @property int $id
 * @property string $tec
 * @property string $responsable
 * @property string $instructor
 */
class Registro extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'registro';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tec', 'responsable', 'instructor'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'tec' => Yii::t('app', 'Tecnologico'),
            'responsable' => Yii::t('app', 'Responsable'),
            'instructor' => Yii::t('app', 'Instructor'),
        ];
    }

}
