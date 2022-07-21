<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pendaftaran".
 *
 * @property string $id_pdf
 * @property int $nik
 * @property string $tgl_pdf
 * @property int $total
 * @property string $ket
 */
class Pendaftaran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pendaftaran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pdf', 'nik', 'total', 'ket'], 'required'],
            [['nik', 'total'], 'integer'],
            [['tgl_pdf'], 'safe'],
            [['id_pdf', 'ket'], 'string', 'max' => 10],
            [['id_pdf'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pdf' => 'Id Pdf',
            'nik' => 'Nik',
            'tgl_pdf' => 'Tgl Pdf',
            'total' => 'Total',
            'ket' => 'Ket',
        ];
    }
}
