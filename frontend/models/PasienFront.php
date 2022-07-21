<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pasien".
 *
 * @property int $id_psn
 * @property int $nik
 * @property string $nama_psn
 * @property string $gender_psn
 * @property string $alamat_psn
 * @property int $usia
 * @property string $no_hp
 */
class PasienFront extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nik', 'nama_psn', 'gender_psn', 'alamat_psn', 'usia', 'no_hp'], 'required'],
            [['nik', 'usia'], 'integer'],
            [['gender_psn', 'alamat_psn'], 'string'],
            [['nama_psn'], 'string', 'max' => 50],
            [['no_hp'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_psn' => 'Id Psn',
            'nik' => 'Nik',
            'nama_psn' => 'Nama Psn',
            'gender_psn' => 'Gender Psn',
            'alamat_psn' => 'Alamat Psn',
            'usia' => 'Usia',
            'no_hp' => 'No Hp',
        ];
    }
}
