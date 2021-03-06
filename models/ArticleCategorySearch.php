<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ArticleCategory;

/**
 * ArticleCategorySearch represents the model behind the search form about `app\models\ArticleCategory`.
 */
class ArticleCategorySearch extends ArticleCategory
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'parentid'], 'integer'],
            [['categoryname'], 'safe'],
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
        $query = ArticleCategory::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'parentid' => $this->parentid,
        ]);

        $query->andFilterWhere(['like', 'categoryname', $this->categoryname]);

        return $dataProvider;
    }
}
