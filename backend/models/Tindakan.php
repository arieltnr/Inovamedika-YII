<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tindakan".
 *
 * @property string $id_tdk
 * @property string $nama_tdk
 * @property int $biaya
 */
class Tindakan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tindakan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_tdk', 'nama_tdk', 'biaya'], 'required'],
            [['biaya'], 'integer'],
            [['id_tdk'], 'string', 'max' => 10],
            [['nama_tdk'], 'string', 'max' => 30],
            [['id_tdk'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tdk' => 'Id Tdk',
            'nama_tdk' => 'Nama Tdk',
            'biaya' => 'Biaya',
        ];
    }
}
