<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DokumenPks;

/**
 * DokumenPksSearch represents the model behind the search form of `app\models\DokumenPks`.
 */
class DokumenPksSearch extends DokumenPks
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['no_pks', 'nama_pks', 'jenis_pks', 'judul_pks', 'tgl_buat_pks', 'tgl_berakhir_pks', 'status_pks', 'tahun_pks', 'nama_file', 'bagian_pks', 'create_at', 'create_by'], 'safe'],
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
        $query = DokumenPks::find();

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
            'id' => $this->id,
            'tgl_buat_pks' => $this->tgl_buat_pks,
            'tgl_berakhir_pks' => $this->tgl_berakhir_pks,
            'create_at' => $this->create_at,
            'create_by' => $this->create_by,
        ]);

        $query->andFilterWhere(['like', 'no_pks', $this->no_pks])
            ->andFilterWhere(['like', 'nama_pks', $this->nama_pks])
            ->andFilterWhere(['like', 'jenis_pks', $this->jenis_pks])
            ->andFilterWhere(['like', 'judul_pks', $this->judul_pks])
            ->andFilterWhere(['like', 'status_pks', $this->status_pks])
            ->andFilterWhere(['like', 'tahun_pks', $this->tahun_pks])
            ->andFilterWhere(['like', 'nama_file', $this->nama_file])
            ->andFilterWhere(['like', 'bagian_pks', $this->bagian_pks]);

        return $dataProvider;
    }
}
