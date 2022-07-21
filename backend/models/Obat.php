<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "obat".
 *
 * @property string $id_obt
 * @property string $nama_obt
 * @property string $jenis_obt
 * @property int $harga
 */
class Obat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'obat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_obt', 'nama_obt', 'jenis_obt', 'harga'], 'required'],
            [['harga'], 'integer'],
            [['id_obt'], 'string', 'max' => 11],
            [['nama_obt'], 'string', 'max' => 30],
            [['jenis_obt'], 'string', 'max' => 20],
            [['id_obt'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_obt' => 'Id Obt',
            'nama_obt' => 'Nama Obt',
            'jenis_obt' => 'Jenis Obt',
            'harga' => 'Harga',
        ];
    }
}
