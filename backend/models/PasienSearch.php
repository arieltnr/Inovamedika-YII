<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Pasien;

/**
 * PasienSearch represents the model behind the search form of `backend\models\Pasien`.
 */
class PasienSearch extends Pasien
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_psn', 'nik', 'usia'], 'integer'],
            [['nama_psn', 'gender_psn', 'alamat_psn', 'no_hp'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Pasien::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_psn' => $this->id_psn,
            'nik' => $this->nik,
            'usia' => $this->usia,
        ]);

        $query->andFilterWhere(['like', 'nama_psn', $this->nama_psn])
            ->andFilterWhere(['like', 'gender_psn', $this->gender_psn])
            ->andFilterWhere(['like', 'alamat_psn', $this->alamat_psn])
            ->andFilterWhere(['like', 'no_hp', $this->no_hp]);

        return $dataProvider;
    }
}
