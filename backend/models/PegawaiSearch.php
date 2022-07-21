<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Pegawai;

/**
 * PegawaiSearch represents the model behind the search form of `backend\models\Pegawai`.
 */
class PegawaiSearch extends Pegawai
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_krywn', 'nip'], 'integer'],
            [['nama_krywn', 'gender_krywn', 'alamat_krywn'], 'safe'],
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
        $query = Pegawai::find();

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
            'id_krywn' => $this->id_krywn,
            'nip' => $this->nip,
        ]);

        $query->andFilterWhere(['like', 'nama_krywn', $this->nama_krywn])
            ->andFilterWhere(['like', 'gender_krywn', $this->gender_krywn])
            ->andFilterWhere(['like', 'alamat_krywn', $this->alamat_krywn]);

        return $dataProvider;
    }
}
