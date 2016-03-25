<?php

namespace app\modules\admin\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\ArticlesTable;

/**
 * ArticlesTableSearch represents the model behind the search form about `app\modules\admin\models\ArticlesTable`.
 */
class ArticlesTableSearch extends ArticlesTable
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'articles_category_id'], 'integer'],
            [['articles_title', 'articles_date', 'articles_img', 'articles_short_description', 'articles_description'], 'safe'],
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
        $query = ArticlesTable::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'articles_date' => $this->articles_date,
            'articles_category_id' => $this->articles_category_id,
        ]);

        $query->andFilterWhere(['like', 'articles_title', $this->articles_title])
            ->andFilterWhere(['like', 'articles_img', $this->articles_img])
            ->andFilterWhere(['like', 'articles_short_description', $this->articles_short_description])
            ->andFilterWhere(['like', 'articles_description', $this->articles_description]);

        return $dataProvider;
    }
}
