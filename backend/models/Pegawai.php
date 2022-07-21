<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pegawai".
 *
 * @property int $id_krywn
 * @property int $nip
 * @property string $nama_krywn
 * @property string $gender_krywn
 * @property string $alamat_krywn
 */
class Pegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'nama_krywn', 'gender_krywn', 'alamat_krywn'], 'required'],
            [['nip'], 'integer'],
            [['gender_krywn', 'alamat_krywn'], 'string'],
            [['nama_krywn'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_krywn' => 'Id Krywn',
            'nip' => 'Nip',
            'nama_krywn' => 'Nama Krywn',
            'gender_krywn' => 'Gender Krywn',
            'alamat_krywn' => 'Alamat Krywn',
        ];
    }
}
