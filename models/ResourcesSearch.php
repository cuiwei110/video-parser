<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Resources;

/**
 * ResourcesSearch represents the model behind the search form about `app\models\Resources`.
 */
class ResourcesSearch extends Resources
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name', 'title_selector', 'description_selector', 'embedded_url', 'example_url'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Resources::find();

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
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'title_selector', $this->title_selector])
            ->andFilterWhere(['like', 'description_selector', $this->description_selector])
            ->andFilterWhere(['like', 'embedded_url', $this->embedded_url])
            ->andFilterWhere(['like', 'example_url', $this->example_url]);

        return $dataProvider;
    }
}
